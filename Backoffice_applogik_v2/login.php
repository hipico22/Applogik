<?php
	$Email = $_POST["email"];	
	$Password = $_POST["password"];
	//liga e escolhe base dados
	include("ligacaobd.php");
	$sql = "SELECT * From `utilizador` Where email ='".$Email."' and password = '".$Password."'";	
	//3 passo faz pergunta a tabela 'msqli_query server pa fazer pergunta'
		echo $sql;
		$existe = mysqli_query($ligaBD,$sql);
		$nregistos=mysqli_num_rows($existe);
		$registos=mysqli_fetch_array($existe);
		if ($nregistos==1){
			session_start();
			$_SESSION['Email'] = $Email;
			header('Location: main.php');
		}else{
			header('Location: index.php');
			echo 'Erro ao registar utilizador!';
		}	
?>	