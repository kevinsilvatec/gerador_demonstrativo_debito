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
				<label class="labelTitulo">Segunda Etapa - Informações do Débito</label>
			</div>
			<div id="divMain2">
				<form action="dadosEtapa3.php" method="post" enctype="multipart/form-data">
					<!--Dados da Etapa 1-->
					<input type="hidden" name="especie" value="<?php echo $especie ?>" />
					<input type="hidden" name="numTitulo" value="<?php echo $numTitulo ?>" />
					<input type="hidden" name="dataEmissao" value="<?php echo $dataEmissao ?>" />
					<input type="hidden" name="dataVencimento" value="<?php echo $dataVencimento ?>" />
					<input type="hidden" name="devedor" value="<?php echo $devedor ?>" />
					<input type="hidden" name="cnpjDevedor" value="<?php echo $cnpjDevedor ?>" />
					<input type="hidden" name="credor" value="<?php echo $credor ?>" />
					<input type="hidden" name="cnpjCredor" value="<?php echo $cnpjCredor ?>" />
					<table>
						<tr>
							<td><label for="valorOrigTitulo">Valor Original do Título: </label></td>
							<td>
							<input type="text" name="valorOrigTitulo" id="valorOrigTitulo" placeholder="Ex.: 999,99" />
							</td>
						</tr>
						<tr>
							<td><label for="parcelasAtraso">Parcelas em Atraso: </label></td>
							<td>
							<input type="text" name="parcelasAtraso" id="parcelasAtraso" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="valorPago">Valor já pago: </label></td>
							<td>
							<input type="text" name="valorPago" id="valorPago" placeholder="Ex.: 999,99" />
							</td>
						</tr>
						<tr>
							<td><label for="multa">Multa:</label></td>
							<td>
							<input type="text" name="multa" id="multa" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="juros">Juros: </label></td>
							<td>
							<input type="text" name="juros" id="juros" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="outAcrescimo">Outros Acréscimos: </label></td>
							<td>
							<input type="text" name="outAcrescimo" id="outAcrescimo" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="valorOutAcrescimo">Valor de Outros Acréscimos: </label></td>
							<td>
							<input type="text" name="valorOutAcrescimo" id="valorOutAcrescimo" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="valorProtestar">Valor a Protestar:</label></td>
							<td>
								<input type="text" name="valorProtestar" id="valorProtestar" placeholder="Ex.: " />
							</td>
						</tr>
					</table>
					<input type="button" class="volta" value="Voltar(1/3)" id="btnVolta2" />
					<input type="submit" id="btnEtapa2" value="Próxima Etapa(3/3)" name="btnEnviar2" />
				</form>
			</div>
		</div>
	</body>
</html>