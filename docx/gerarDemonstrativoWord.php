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

//Dados Sacado
$apresentante = $_POST['apresentante'];
$cnpjApresentante = $_POST['cnpjApresentante'];

//Geração da duplicata em .docx
include 'docxtemplate.class.php';
$docx = new DOCXTemplate('modeloDemonstrativoWord.docx');
$docx -> set(array('especie' => $especie, 
			'numTitulo' => $numTitulo, 
			'dataEmissao' => $dataEmissao, 
			'dataVencimento' => $dataVencimento, 
			'devedor' => $devedor, 
			'cnpjDevedor' => $cnpjDevedor, 
			'credor' => $credor, 
			'cnpjCredor' => $cnpjCredor, 
			'valorOrigTitulo' => $valorOrigTitulo, 
			'parcelasAtraso' => $parcelasAtraso, 
			'valorPago' => $valorPago, 
			'multa' => $multa,
			'juros' => $juros, 
			'valorOutAcrescimo' => $valorOutAcrescimo, 
			'outAcrescimo' => $outAcrescimo, 
			'valorProtestar' => $valorProtestar, 
			'apresentante' => $apresentante, 
			'cnpjApresentante' => $cnpjApresentante
			));

//Usando o método de Download da classe docxtemplate para baixar o demonstrativo pronto em arquivo Word
$docx -> downloadAs('Demonstrativo.docx');
?>




