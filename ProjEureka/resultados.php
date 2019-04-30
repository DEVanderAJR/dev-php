<HTML>
<HEAD>
 <TITLE>.:EUREKA-Resultados:.</TITLE>
</HEAD>
<BODY>
<?php

include("conecta.php");


if (isset($_POST['buscaTexto']) And (isset($_POST['categoria']))){
   $titulo = $_POST['buscaTexto'];
   $categoria= $_POST['categoria'];
}else{
   $titulo = "";
   $categoria= "";
}

  $resultado = mysql_query("Select Titulo, Descricao, Autor, Caminho
                           From livro
                           Titulo Like '%$titulo%' And Categoria.Codigo = '$categoria'");
  
  $numregs = mysql_num_rows($resultado);
  
  if($numregs==0){
    echo "<b>Acervo não encontrado!</b>";
  }else{

        echo "<table style='border-style: solid;border-width: 1pt;width:1000px;'>";
        
        for($i=0;$i<$numregs;$i++){
          $reg=mysql_fetch_row($resultado);
          echo "<tr><tr><td colspan='1' rowspan='3'><img src='$reg[3]' width='90' height='70'/>".
               "<td><b>Título:</b>".$reg[0]."<tr><td>".
               "<b>Descrição:</b>".$reg[1]."<tr><td>".
               "<b>Autor:</b>".$reg[2]."<tr><tr>";
          
        }

        echo "</table>";

  }

?>
</BODY>
</HTML>
