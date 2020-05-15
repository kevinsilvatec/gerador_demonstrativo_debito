<?php

//Dados do Titulo
$especie = $_POST['especie'];
$numTitulo = $_POST['numTitulo'];
$dataEmissao = $_POST['dataEmissao'];
$dataVencimento = $_POST['dataVencimento'];
$devedor = $_POST['devedor'];
$cnpjDevedor = $_POST['cnpjDevedor'];
$credor = $_POST['credor'];
$cnpjCredor = $_POST['cnpjCredor'];

//Dados do Débito
$valorOrigTitulo = $_POST['valorOrigTitulo'];
$parcelasAtraso = $_POST['parcelasAtraso'];
$valorPago = $_POST['valorPago'];
$multa = $_POST['multa'];
$juros = $_POST['juros'];
$valorOutAcrescimo = $_POST['valorOutAcrescimo'];
$outAcrescimo = $_POST['outAcrescimo'];
$valorProtestar = $_POST['valorProtestar'];

include "../Etapa3.php";
?>