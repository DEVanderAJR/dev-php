<?php

			$nome=$_POST['nome'];
			$descricao=$_POST['descricao'];
		
			
		//Conexao com o banco
		
		$conexao=mysql_connect('localhost','root','') or die('Error com a  conexão com o banco de dados!'.mysql_errno().mysql_error());
		$database=mysql_select_db('php');
		$query="select * from livros where Nome like '%$nome%'and Descricao like '%$descricao%'";
		
		$result = mysql_query($query);		
		//MySQL_num  count automático
		
		echo "	<LINK REL='STYLESHEET' HREF='TWO.CSS'><p><table  bordercolor='#fff' border='1px' align='center'>
				<tr>
				<td>
				<font color='#096' size='3px' align='center'>
				LIVROS CADASTRADOS</font></td>
				</tr>
				</table></p>
				";
	
		echo" <a href='connect.php'><img src='IMAGES/GIF/SETA0.gif'></A>";
		echo "<table id='exibi' border='1px' bordercolor='white' cellpadding='2px' cellspacing='2xp' align='center'>
		<p><th>CODIGO</TH><TH>LIVRO</TH><TH>AUTOR</TH><th>DESCRIÇÃO</TH><TH>IMAGEM</th></p>";
	    while ($exibe = mysql_fetch_array($result, MYSQL_NUM)) {
				echo "<tr>";
				
				echo "<td>$exibe[0] </td>";
		        echo "<td>$exibe[1] </td>";
				echo "<td>$exibe[2] </td>";
				echo "<td>$exibe[4] </td>";		
				echo "<td><img src='$exibe[5]' WIDTH='130' HEIGHT='125'/></td>";
				
				echo"</tr>";	
					
        }
		
		
		
					
		
		mysql_close($conexao);
		
		?>
		
		
		
		
		
		
		
		
		