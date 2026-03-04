<?php

    class clienteController 
    {
        function inserirCliente() 
        {

        }

        function alterarCliente()
        {

        }

        function listarCliente()
        {
            require_once "Models/cliente.class.php";
            $cliente = new Cliente();
            $retorno = $cliente->clientes;
            require_once "Views/listarclientes.php";
        }
        
        function excluirCliente()
        {

        }

    }

?>