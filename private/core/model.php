<?php
class Model extends Database{
    protected $table = "usuarios"; 
    function __construct()
    {
        if(!property_exists($this, 'table')){
            $this->table = strtolower(get_class($this)). "s";
        }
    
    }

    public function where($collumn, $value){
        $collumn = addslashes($collumn);
        $quey = "select * from $this->table where  $collumn =:value";
        return $this->query($quey, [
            'value' => $value
        ]);
    }
    public function findAll(){
        $quey = "select * from $this->table";
        return $this->query($quey);
      
    }
   
    public function insert($data){
        $keys = array_keys($data);
        $collumns = implode(',', $keys);
        $values = implode(',:', $keys);
        $query = "insert  into $this->table ($collumns) values (:$values)";
        
        
        
        return $this->query($query, $data);
    }


    public function upadate($id, $data){
        $str = "";
        foreach($data as $key => $value){
            $str .=$key. "=:".$key.",";
        }
        $str = trim($str, ",");

        $data['id']= $id;

         $query = "update  $this->table set $str where id = :id";
        
        
        return $this->query($query, $data);
    }
    // public function delete($id){
    //     $collumn = addslashes($collumn);
    //     $quey = "select * from $this->table where  $collumn =:value";
    //     return $this->query($quey, [
    //         'value' => $value
    //     ]);
    // }
}

;?>