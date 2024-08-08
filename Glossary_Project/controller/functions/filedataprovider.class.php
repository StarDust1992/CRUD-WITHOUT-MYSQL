<?php


class FileDataProvider extends DataProvider{

   private function get_data() {
       
        $json = (!file_exists($this->source)) ?
         file_put_contents($this->source, "") :
          file_get_contents($this->source);
    
        return $json;
    }
    
    private function set_data($value) {
        $json = json_encode($value); // Encode the data
        file_put_contents($this->source, $json); // Write the data to the file
    }
    
    
    public function get_terms() {
        $json = $this->get_data();
        $array = json_decode($json, true); // Decode the file content as an associative array
    
        return $array;
    }
    
    public function get_term($term) {
        $array =  $this->get_terms();
        foreach ($array as $item) {
            if (isset($item["term"]) && $item["term"] === $term) {
                return (object)$item;
            }
        }
        return false;
    }
   public function get_def($def) {
        $array =  $this->get_terms();
        foreach ($array as $item) {
            if (isset($item["definition"]) && $item["definition"] === $def) {
                return (object)$item;
            }
        }
        return false;
    }
    
   public function search_terms($search) {
        $array =  $this->get_terms();
        $result = array_filter($array, function ($item) use ($search) {
            if (isset($item['term']) &&
             strpos($item['term'], $search) !== false) {
                return $item;
            } elseif (isset($item['definition']) &&
             strpos($item['definition'], $search) !== false) {
                return $item;
            }
        });
        return $result;
    }
    
    public function add_term($term, $definition) {
        $items =  $this->get_terms();
        $items[] = new GlossaryTerm($term, $definition);
        $this->set_data($items);
    }
    
    
   public function update_term($original_term, $term, $definition) {
        $terms =  $this->get_terms();
        foreach ($terms as $key => $item) {
            if ($item['term'] === $original_term) {
                $terms[$key]['term'] = $term;
                $terms[$key]['definition'] = $definition;
                break;
            }
        }
        $this->set_data($terms);
    }
    
    
   public function delete_term($term){
        $terms =  $this->get_terms();
        
        for($i=0; $i<count($terms); $i++){
            if($terms[$i]['term'] === $term){
                unset($terms[$i]);
                break ; 
            }
        }
        $new_terms = array_values($terms); 
        $this->set_data($new_terms);
    }
    
    
  
   
}