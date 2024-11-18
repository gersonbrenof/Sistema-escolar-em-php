<?php  $this->view('includes/header');?>

            
<div class="container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px;   width:100% ; max-width: 310px;">
    <h3 class="text-center">Curso PHP</h3>
    <img src="https://logospng.org/download/php/logo-php-512.png" alt="" class="border border-success d-block mx-auto rounded-circle" style="width: 100px;">
        <h3 >Cadastrar Usuarios</h3>
        <input class="my-2 form-control" type="nome" name = "nome" placeholder="Digite seu Nome" autofocus>
        <input class="my-2 form-control" type="sobrenome" name = "sobrenome" placeholder="Digite seu  Sobre Nome" autofocus>
        <input class="my-2 form-control" type="email" name = "email" placeholder="Digite seu email" autofocus>
        <select class="my-2 form-control">
            <option>Selecione o Sexo--</option>
            <option >Masculino</option>
            <option >Ferminino</option>
        </select>
        <select class="my-2 form-control">
            <option>--Selecione classificação--</option>
            <option value="estudante" >Estudante</option>
            <option value="recepcionista" >Recepcionista</option>
            <option value="conferencista" >Conferencista</option>
            <option value="aaministrador" >Administrador</option>
            <option value="Super_administrado">Super Administrador</option>
        </select>
        <input class="my-2 form-control" type="password" name = "password" placeholder="Digite sua senha" >
        <input class="my-2 form-control" type="text" name = "password2" placeholder="confirme sua senha" >
        <br>
        <button class="my-2 btn btn-success">Cadastrar</button>
        <button class="my-2 btn btn-warning">Cancelar</button>
    </div>
</div>
      
<?php  $this->view('includes/footer');?>   