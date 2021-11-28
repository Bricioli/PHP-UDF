<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$atendente = $_POST["atendente_id_atendente"];
            $aluno     = $_POST["aluno_id_aluno"];
            $livro     = $_POST["livro_id_livro"];
			$data      = $_POST["data_reserva"];
            $entrega   = $_POST["data_entrega"];

			$sql = "INSERT INTO reserva (aluno_id_aluno, livro_id_livro, atendente_id_atendente, data_reserva, data_entrega) VALUES ('{$aluno}','{$livro}','{$atendente}','{$data}','{$entrega}')";

			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;
		
		case 'editar':
			$atendente = $_POST["atendente_id_atendente"];
            $aluno     = $_POST["aluno_id_aluno"];
            $livro     = $_POST["livro_id_livro"];
			$data      = $_POST["data_reserva"];
            $entrega   = $_POST["data_entrega"];

			$sql = "UPDATE reserva SET atendente_id_atendente='{$atendente}', aluno_id_aluno='{$aluno}', livro_id_livro='{$livro}', data_reserva='{$data}', data_entrega='{$entrega}' WHERE id_reserva=".$_POST["id_reserva"];

			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM reserva WHERE id_reserva=".$_REQUEST["id_reserva"];
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;
	}