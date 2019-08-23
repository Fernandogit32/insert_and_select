<?php
require ("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Funcionários</title>
    <link rel="stylesheet" text="text/css" href="estilo.css">
    <link rel="stylesheet" text="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<div id="cadastro">
    	<form name="signup" method="post" action="cadastro.php">
    		<table id="tab_cadastro">
            	<tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="nome" id="nome" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Telefone</td>
                    <td><input type="number" name="telefone" required placeholder="telefone" class="txt" /></td>
                </tr>
                <tr>    
                    <td>Cpf</td>
                    <td><input type="text" name="cpf" required placeholder="cpf"  class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail</td>
                    <td><input type="text" name="email" required placeholder="email"  class="txt" /></td>
                </tr>
                <tr>    
                    <td colspan="2"><input class="btn btn-primary" type="submit" value="Cadastrar" name="go" ></td>
                </tr>
                </table>
        </form>
    </div>
</body>
</html>