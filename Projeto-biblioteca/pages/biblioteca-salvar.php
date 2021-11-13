<h1>Salvar biblioteca </h1>
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$nome = $_POST["nome_biblioteca"];
			$end  = $_POST["end_biblioteca"];

			$sql = "INSERT INTO biblioteca (nome_biblioteca, end_biblioteca)
					VALUES ('{$nome}','{$end}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=biblioteca-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=biblioteca-listar';</script>";
			}
			break;
		
		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
	}
