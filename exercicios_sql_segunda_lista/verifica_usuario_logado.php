<?php 

require_once("verifica_sessao.php");

if (!isset($_SESSION["usuario_logado"]))
{  
    header("Location: index.php");
}