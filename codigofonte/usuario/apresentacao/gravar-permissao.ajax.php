<?php
include("../../comum/comum.php");  
include("../negocio-grupo-acesso.php");


$loDados = $_REQUEST["dados"];

$loGrupo = new grupoAcessoBO();

$loRetrono = $loGrupo->GravarPermissao($loDados);

//echo json_encode($loRetrono);

?>