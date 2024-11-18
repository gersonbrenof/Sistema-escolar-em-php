<?php  $this->view('includes/header');?>

            
<div class="container-fluid">
    <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px;   width:100% ; max-width: 310px;">
    <h3 class="text-center">Curso PHP</h3>
    <img src="https://logospng.org/download/php/logo-php-512.png" alt="" class="border border-success d-block mx-auto rounded-circle" style="width: 100px;">
        <h3 >Login</h3>
        <input class="form-control" type="email" name = "email" placeholder="Digite seu email" autofocus>
        <br>
        <input class="form-control" type="password" name = "password" placeholder="Digite sua senha" >
        <br>
        <button class="btn btn-success">Login</button>
    </div>
</div>
      
<?php  $this->view('includes/footer');?>   