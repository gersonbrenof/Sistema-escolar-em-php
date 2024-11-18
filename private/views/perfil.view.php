<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>            
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1100px;">
    <?php $this->view('includes/separado'); ?>  
    <h1>Página Perfil</h1>
    <div class="row">
        <div class="col-sm-4 col-md-3 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/10438/10438143.png" class="border border-success mx-auto d-block rounded-circle" style="width: 150px;" alt="Imagem do perfil">
            <h3 class="mt-3">Laura</h3> <!-- Adicionando margem superior para espaçamento -->
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-bordered">
                <tr><th>Nome:</th><td>Laura</td></tr>
                <tr><th>Sobrenome:</th><td>Silva</td></tr>
                <tr><th>Sexo:</th><td>Feminino</td></tr>
                <tr><th>Cadastrado em:</th><td>14/11/2024</td></tr>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Informações Básicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Testes</a>
            </li>
        </ul>
    </div>
    <nav class="navbar navbar-light bg-light">
    <form class="container-fluid">
        <div class="input-group" style="max-width: 200px;"> <!-- Define largura máxima -->
            <span class="input-group-text p-1" id="basic-addon1"><i class="fa fa-search" style="font-size: 0.8em;"></i></span>
            <input type="text" class="form-control form-control-sm" placeholder="Pesquisa" aria-label="Pesquisa" aria-describedby="basic-addon1" style="font-size: 0.8em;">
        </div>
    </form>
</nav>
</div>
<?php $this->view('includes/footer'); ?>
