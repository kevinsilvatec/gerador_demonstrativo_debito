<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskMoney.min.js"></script>
		<script type="text/javascript" src="js/validacao.js"></script>
		<script type="text/javascript" src="js/verificar.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.custom.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css" />
	</head>
	<body>
		<div id="divContent">
			<div id="divHeader">
				<label class="labelTitulo">Primeira Etapa - Informações do Título</label>
			</div>
			<div id="divMain">
				<form id="formPrimeiraEtapa" action="app/dadosEtapa2.php" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td><label for="especie">Espécie:</label></td>
							<td>
							<input type="text" name="especie" id="especie" placeholder="Ex.: Cheque" />
							</td>
						</tr>
						<tr>
							<td><label for="numTitulo">Número do Título:</label></td>
							<td>
							<input type="text" name="numTitulo" id="numTitulo" placeholder="12345678" />
							</td>
						</tr>
						<tr>
							<td><label for="dataEmissao">Data de Emissão:</label></td>
							<td>
							<input type="text" name="dataEmissao" id="dataEmissao" placeholder="Ex.: 12/12/2000" />
							</td>
						</tr>
						<tr>
							<td><label for="dataVencimento">Data do Vencimento:</label></td>
							<td>
							<input type="text" name="dataVencimento" id="dataVencimento" placeholder="Ex.: 12/12/2000" />
							</td>
						</tr>
						<tr>
							<td><label for="devedor">Devedor:</label></td>
							<td>
							<input type="text" name="devedor" id="devedor" placeholder="Ex.: João da Silva" />
							</td>
						</tr>
						<tr>
							<td><label for="cnpjDevedor">CNPJ do Devedor:</label></td>
							<td>
							<input type="text" name="cnpjDevedor" id="cnpjDevedor" placeholder="Ex.: " />
							</td>
						</tr>
						<tr>
							<td><label for="credor">Credor: </label></td>
							<td>
							<input type="text" name="credor" id="credor" placeholder="Ex.: João da Silva" />
							</td>
						</tr>
						<tr>
							<td><label for="cnpjCredor">CNPJ do Credor: </label></td>
							<td>
							<input type="text" name="cnpjCredor" id="cnpjCredor" placeholder="Ex.: " />
							</td>
						</tr>
					</table>
					<input type="submit" id="btnEtapa" value="Próxima Etapa (2/3)" name="btnEnviar" />
				</form>
			</div>
		</div>
	</body>
</html>