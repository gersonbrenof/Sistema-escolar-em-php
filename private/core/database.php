<?php 
class Database{
    private function connect(){
        $string = DBDRIVER. ":host=" .DBHOST. ";dbname=".DBNAME;
       if(!$con = new PDO($string, DBUSER, DBPASS)) {
        die("Falha ai cinectar com banco de dados: "); 
       }
       return $con;
    }
    public function query($query, $data = array(), $data_type = "object"){
        $con = $this->connect();
        $stm = $con->prepare($query);
        if($stm){
            $checar = $stm->execute($data);
            if($checar){
            if($data_type == "object"){
               $data = $stm->fetchall(PDO::FETCH_OBJ);

            }else{
                $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            }
            if(is_array($data)&& count($data)>0){
                return $data;
            }
        }
        
    }
    return false;
}
    // public function query(){  

    // }

}
;?>