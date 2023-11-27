 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <form action="" method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="text" name="CPF">
    <input type="submit" name="enviar">
    </form>
    <?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$cpf = $_POST["CPF"];

     if (empty($nome) and isset($email) and isset($cpf)) {
        echo "Voce deve preencher o campo nome!";}
	elseif (empty($nome) and empty($email) and isset($cpf)) {
		echo "Preencher o nome e email";}
	elseif (empty($nome) and isset($email) and empty($cpf) ){
		echo "Preencher o nome e o CPF.";}
	 elseif(isset($nome) and empty($email) and isset($cpf)) {
		 echo "preencher o campo email!";}		
	elseif (isset($nome) and empty($email) and empty($cpf)){
		echo "Preencher o email e o CPF";}
	elseif (isset($nome) and isset($email) and empty($cpf)) {
			echo "colocar o CPF.";}
	elseif (empty($nome) and empty($email) and empty($cpf)){
		echo "Preencher os campos acima.";	}	
	elseif (isset($nome) and isset($email) and isset($cpf)){
		echo "dados enviados com sucesso!";
	}
        exit;
    ?>
</body>
</html>