<h1>Salvar aluno</h1>
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$nome = $_POST["nome_aluno"];
			$end  = $_POST["end_aluno"];
            $email = $_POST["email_aluno"];
            $fone = $_POST["fone_aluno"];
            $nasc = $_POST["nasc_aluno"];
            $gen = $_POST["genero_aluno"];

			$sql = "INSERT INTO aluno (nome_aluno, end_aluno, email_aluno, fone_aluno, nasc_aluno, genero_aluno) VALUES ('{$nome}','{$end}','{$email}','{$fone}','{$nasc}','{$gen}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;
		
		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
	}