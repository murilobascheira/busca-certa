<?php
  if (!$buscadousuario) {

    echo "<article>";
    echo "Faz a pesquisa ai Jao...";
    echo "<article>";
    
  } else {

    switch ($buscadousuario) {
      case 'sorry':
        echo "<article>";
        echo "<p>Você pesquisou sorry</p> ";   
        echo "</article>";
        break;

      case 'metralhadora':
        echo "<article>";
        echo "<p>Você pesquisou metralhadora</p>";
        echo "</article>";
        break;

      case 'to com fome quero leite':
        echo "<article>";
        echo "Você pesquisou to com fome quero leite";
        echo "</article>";
        break;

      case 'trryjyryr':
        echo "<article>";
        echo "<p>Você pesquisou trryjyryr</p>";
        echo " </article>";
        break;

      case 'uptown fuck ':
        echo "<article>";
        echo "<p>Você pesquisou uptown fuck</p>";
        echo "</article>";
        break;
    
      default:
        echo "Nada encontrado joao pé de feijoao"; 
        break;   
    }

  }

?>