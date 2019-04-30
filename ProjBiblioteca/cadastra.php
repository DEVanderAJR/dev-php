<?php
	
//Recebendo as variáveis
 $Nome= $_POST["nome"];
 $Autor=$_POST["autor"];
 $Descricao=$_POST["descricao"];
$Categoria=$_POST['categoria'];

 
 
if(($Nome=="")  || ($Autor=='') || ($Descricao==''))
	{
				echo "
				<p><table border='1px' bordercolor='#fff' align='center'>
				<tr>
				<td>
				<font color='#900' size='3px' align='center' decoration='italic'>
				DIGITE AS INFORMACOES NECESSARIAS, POR FAVOR!</font></td>
				</tr>
				</table></p>";
				
				include ('formulario.html');
				
				}
	else{
			$conexao=mysql_connect("localhost","root","") or die (mysql_error());
		
		
			mysql_select_db("php");
			
			$Diretorio= 'c:/wamp/www/atPS-SITE/IMAGES/BIBLIOTECA/ACERVO';
				
							if(isset($_FILES['imagem'])){

							$file = $_FILES['imagem'];

							$pasta_dir = "IMAGES/BIBLIOTECA/ACERVO/";//diretorio dos arquivos//se não existir a pasta ele cria uma
					
							
							if(!file_exists($pasta_dir)){
							mkdir($pasta_dir);
							}

							$arquivo_nome = $pasta_dir . $file['name'];

							// Faz o upload da imagem
							move_uploaded_file($file["tmp_name"], $arquivo_nome);
}
							//conecta no banco
																		
											
					$query="INSERT into livros values(null,'$Nome','$Autor','$Categoria','$Descricao','$arquivo_nome')";
					mysql_query($query) or die ('Error!'.mysql_errno().mysql_error());
					mysql_close($conexao); 
						
					
			echo "<p><table border='1px' bordercolor='#fff' align='center'>
				<tr>
				<td>
				<font color='#096' size='3px' align='center'>
				O LIVRO FOI CADASTRADO COM SUCESSO!</font></td>
				</tr>
				</table></p>";
				include ('connect.php');
				
				}
				

				?>