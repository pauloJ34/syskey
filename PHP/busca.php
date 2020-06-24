<?php 

    // incluir a conexão
    include_once("conexao.php");

     //retornar valor de "de algo"
    //$chave = "SELECT * FROM dados";
    $chave = "SELECT * FROM chaves";
    $resultado = mysqli_query($conexao, $chave);
    echo "<tr>";
    echo "    <th>N° das Chaves</th>";
    echo "    <th>Estado</th>";
    echo "    <th>Usando</th>";
    echo "    <th>Horários</th>";
    echo"</tr>";
    while($dados = $resultado->fetch_array()){  
        echo "<tr>";
        echo "  <td>".$dados["numero"]."</td>";
        echo "  <td>".$dados["estado"]."</td>";
        echo "  <td>".$dados["usuario"]."</td>";
        echo "  <td>".$dados["horario"]."</td>";
        echo "</tr>";
    }

?>