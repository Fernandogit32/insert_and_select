<html>
      
<head>
    <meta charset="utf-8">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
    <style>
      table{
            border: 1px solid black;
            text-align: center;
            margin: auto;

      }
      .sucesso{
            color:green;
      }

    
    </style>
</head>

<body>
<?php
require ("config.php");

?>
<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];


$sql = "INSERT INTO pessoa (nome, telefone, cpf, email) VALUES ('$nome', '$telefone', '$cpf', '$email')";
if (mysqli_query($conexao, $sql)) {
      echo "<p class='sucesso'>New record created successfully</p><br/>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}


$sql = "SELECT * FROM pessoa";
$result = $conexao->query($sql);
if ($result->num_rows > 0) {
      // output data of each row3
  echo "<table class='table'>";
  echo"<thead>
    <tr>      
      <th scope='col'>Nome</th>
      <th scope='col'>Last</th>
      <th scope='col'>Handle</th>
    </tr>
  </thead>";
      while($row = $result->fetch_assoc()) {
           // echo " <strong>id : </strong>" . $row["id"] ." | "."<strong> nome:</strong> ". $row["nome"] ." | ". " telefone: ". $row["telefone"] ." | ". " email: ". $row["email"]."<br>";
          
           echo "
           
           <tbody>
             <tr>              
               <td>$row[nome]</td>
               <td>$row[telefone]</td>
               <td>$row[cpf]</td>
               <td>$row[email]</td>
             </tr>
           </tbody>
        
         ";
      }
  } else {
      echo "0 results";
  }



mysqli_close($conexao);

?>
</body>
</html>