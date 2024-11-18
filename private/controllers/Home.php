<?php
class Home extends Controller{
    
    function  index(){
        // $db = new Database();
        $usuario =  new Usuario();

        $arr['nome'] = 'maria teste';
        $arr['sobrenome'] = 'teste silva';
        $arr['data'] = '2024-11-14 20:56:23';
        $arr['usuario_id'] = '123';
        $arr['sexo'] = 'update femenino';
        $arr['escola_id'] = 'estdfvad';
        $arr['nivel'] = 'escolar teste';
        //  $usuario->insert($arr);  

         $data = $usuario->findAll();

         $usuario->upadate(3,$arr);  
    //    $data = $usuario->where('nome', 'laura'); 

       $this->view('home', ['rows' => $data]);
    }
}
;?>
