<html>
	<head>
		<title>Principal</title>
	</head>
	<body>
		<div align="center">
			<div style="width: 1000px;height:25px; border-color: black;background-color:yellow;border-style: solid;border-width: 1pt;" >
				<b style="font-family:monospace;font-size:14pt;">Eureka</b>
			</div>
			<div style="width: 1000px;height:25px; border-color: black;background-color:yellow;border-style: solid;border-width: 1pt;" >
				<b style="font-family:monospace;font-size:14pt;">Pesquisar Livros</b>
			</div>
			<div style="width: 1000px;border-style: solid;border-width:1pt;height: 130px;">
				<div align="left" > 
					<form action="index.php" method='POST' style="margin-left: 4px;margin-top: 8px;">
						 <table>
						 	<tr>
						 		<td><b style="font-family:monospace;font-size:12pt;margin-top: 10px;">Título:</b></td>
						 		<td><input type="text"  name="buscaTexto" size="80"/></td>
						 	</tr>
						 	<tr>
						 		<td><b style="font-family:monospace;font-size:12pt;margin-top: 10px;">Categoria:</b></td>
						 		<td><select name="categoria" id="categoria">
						 			<option value="1">Desenvolvimento de Sistemas</option>
						 			<option value="2">Programação</option>
						 		</select></td>
						 	</tr>
						 	<tr>
						 		<td><input type="submit" value="Buscar" style="border-width: 1pt;border-style: solid;background-color: yellow;"/></td>
						 	</tr>
						 </table>
						 <br>
						 <?php
						 
						   include("resultados.php");
						 ?>
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>

