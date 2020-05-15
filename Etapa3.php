<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="../js/jquery.maskMoney.min.js"></script>
		<script type="text/javascript" src="../js/validacao.js"></script>
		<script type="text/javascript" src="../js/verificar.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.10.4.custom.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.10.4.custom.min.css" />
		<link rel="stylesheet" type="text/css" href="../fonts/stylesheet.css" />
	</head>
	<body>
		<div id="divContent">
			<div id="divHeader">
				<label class="labelTitulo">Terceira Etapa - Dados do Apresentante</label>
			</div>
			<div id="divMain3">
				<form action="../docx/gerarDemonstrativoWord.php" method="post" enctype="multipart/form-data">
					<!--Dados da Etapa 1-->
					<input type="hidden" name="especie" value="<?php echo $especie ?>" />
					<input type="hidden" name="numTitulo" value="<?php echo $numTitulo ?>" />
					<input type="hidden" name="dataEmissao" value="<?php echo $dataEmissao ?>" />
					<input type="hidden" name="dataVencimento" value="<?php echo $dataVencimento ?>" />
					<input type="hidden" name="devedor" value="<?php echo $devedor ?>" />
					<input type="hidden" name="cnpjDevedor" value="<?php echo $cnpjDevedor ?>" />
					<input type="hidden" name="credor" value="<?php echo $credor ?>" />
					<input type="hidden" name="cnpjCredor" value="<?php echo $cnpjCredor ?>" />
					<!--Dados da Etapa 2-->
					<input type="hidden" name="valorOrigTitulo" value="<?php echo $valorOrigTitulo ?>" />
					<input type="hidden" name="parcelasAtraso" value="<?php echo $parcelasAtraso ?>" />
					<input type="hidden" name="valorPago" value="<?php echo $valorPago ?>" />
					<input type="hidden" name="multa" value="<?php echo $multa ?>" />
					<input type="hidden" name="juros" value="<?php echo $juros ?>" />
					<input type="hidden" name="valorOutAcrescimo" value="<?php echo $valorOutAcrescimo ?>" />
					<input type="hidden" name="outAcrescimo" value="<?php echo $outAcrescimo ?>" />
					<input type="hidden" name="valorProtestar" value="<?php echo $valorProtestar ?>" />
					
					<div id="divTbl3">
						<table>
							<tr>
								<td><label for="apresentante">Nome do Apresentante: </label></td>
								<td>
								<input type="text" name="apresentante" id="apresentante" placeholder="Ex.: João da Silva" />
								</td>
							</tr>
							<tr>
								<td><label for="cnpjApresentante">CNPJ do Apresentante: </label></td>
								<td>
								<input type="text" name="cnpjApresentante" id="cnpjApresentante" placeholder="Ex.: " />
								</td>
							</tr>
						</table>
					</div>
					<input type="button" class="volta" value="Voltar(2/3)" id="btnVolta3" />
					<input type="submit" id="btnEtapa3" value="Baixar Demonstrativo" name="btnConcluir" title="Para Visualizar o arquivo é necessário o Microsoft Word ou Libre Office" />
				</form>
			</div>
			</div>
		</div>
	</body>
</html>