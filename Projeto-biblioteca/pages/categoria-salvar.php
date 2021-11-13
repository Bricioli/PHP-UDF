<h1>Salvar categoria</h1>
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$nome = $_POST["nome_categoria"];
			$sql = "INSERT INTO categoria (nome_categoria)
					VALUES ('{$nome}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=categoria-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=categoria-listar';</script>";
			}
			break;
		
		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
	}