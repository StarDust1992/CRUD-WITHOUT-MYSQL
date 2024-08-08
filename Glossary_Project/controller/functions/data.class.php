<?php 
require('dataprovider.class.php');

class Data{
   public static $db ;

    static public function initialize(DataProvider $data_provider){
        return self::$db = $data_provider ;
    }

   static public function get_terms(){
    return self::$db->get_terms();
   }


static public function get_term($term){
    return self::$db->get_term($term);
}

static public function get_def($def){
    return self::$db->get_def($def);
}


static public function search_terms($search){
    return self::$db->search_terms($search);
}

static public function add_term($term,$definition){
    return self::$db->add_term($term,$definition);
}


static public function update_term($original_term,$term,$definition){
    return self::$db->update_term($original_term,$term,$definition);
}

static public function delete_term($term){
    return self::$db->delete_term($term);
}




}

