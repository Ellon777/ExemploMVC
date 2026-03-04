<?php
    //incluindo a classe inicioController que está na pasta Controllers
    require_once "Controllers/inicioController.class.php";

    //criando um objeto usando o modelo (classe) inicioController na memória
    $obj = new inicioController();
    $obj->inicio();
?>