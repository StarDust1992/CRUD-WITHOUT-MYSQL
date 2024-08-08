<?php 

class DataProvider{
public $source ; 
     function __construct($source){
        $this->source = $source ; // make the property accessable troughout the class
    }
 

    public function get_terms() {
    }
    
    public function get_term($term) {
    }
   public function get_def($def) {
 
    }
    
   public function search_terms($search) {

    }
    
    public function add_term($term, $definition) {
     
    }
    
    
   public function update_term($original_term, $term, $definition) {
    }
    
    
   public function delete_term($term){
   
    }
    
}