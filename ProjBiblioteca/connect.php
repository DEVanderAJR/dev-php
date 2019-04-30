<?php
//Conexão com o banco de dados

 
	$conexao=mysql_connect('localhost','root','');
	mysql_select_db('php');
	$query='select * from livros';
	$result=mysql_query($query);
	ECHO "<LINK REL='STYLESHEET' HREF='TWO.CSS'>";
		
				echo "<form name='busca' method='POST' action='lista.php'>
				<h1 id='pesquise'>Pesquise:</h1>
				<div id='formulario'>
				<p/>
				Nome Do Livro:<input id='borda'type='text' name='nome' size='20'><P/>
				Que contenha :<input id='borda'type='text' name='descricao' size='20'/>
				<input type='submit' value=' 'id='imagem'>
				</form>
				</div>";
	echo "<table id='exibi' align='center' bordercolor='#096' border='2px' cellpadding='2' cellspacing='2'>
	<th>CODIGO</TH> <TH>LIVRO</TH> <TH>AUTOR</TH><th>DESCRIÇÃO</TH><TH>IMAGEM</th>";
	while($exibe=mysql_fetch_array($result,MYSQL_NUM)){
			
		echo"<tr>";
		echo"<td>$exibe[0] </td>";
		echo"<td>$exibe[1] </td>";
		echo"<td>$exibe[2] </td>";
		echo"<td>$exibe[4] </td>";
		echo"<td><a ID='MUDE' href='lista.php'>ACERVO</a> </td>";
		echo"</tr>";

}
	
			?> 
	