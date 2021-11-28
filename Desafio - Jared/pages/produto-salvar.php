<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome        = $_POST["nome_produto"];
			$marca       = $_POST["marca_produto"];
			$vene        = $_POST["venergetico_produto"];
			$carbo       = $_POST["carbo_produto"];
			$proteina    = $_POST["proteina_produto"];	
            $gtotais     = $_POST["gtotais_produto"];	
            $gsaturadas  = $_POST["gsaturadas_produto"];	
            $gtrans      = $_POST["gtrans_produto"];	
            $fibra       = $_POST["fibra_produto"];	
            $sodio       = $_POST["sodio_produto"];	
            $peso        = $_POST["peso_produto"];	
            $lote        = $_POST["lote_produto"];	
            $validade    = $_POST["validade_produto"];	

			$sql = "INSERT INTO produtos (nome_produto, marca_produto, venergetico_produto, carbo_produto, proteina_produto,	gtotais_produto, gsaturadas_produto, gtrans_produto, fibra_produto, sodio_produto,	peso_produto, lote_produto, validade_produto) VALUES ('{$nome}', '{$marca}', '{$vene}', '{$carbo}', '{$proteina}', '{$gtotais}','{$gsaturadas}','{$gtrans}','{$fibra}','{$sodio}','{$peso}','{$lote}','{$validade}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}
			break;
		
		case 'editar':
			$nome        = $_POST["nome_produto"];
			$marca       = $_POST["marca_produto"];
			$vene        = $_POST["venergetico_produto"];
			$carbo       = $_POST["carbo_produto"];
			$proteina    = $_POST["proteina_produto"];	
            $gtotais     = $_POST["gtotais_produto"];	
            $gsaturadas  = $_POST["gsaturadas_produto"];	
            $gtrans      = $_POST["gtrans_produto"];	
            $fibra       = $_POST["fibra_produto"];	
            $sodio       = $_POST["sodio_produto"];	
            $peso        = $_POST["peso_produto"];	
            $lote        = $_POST["lote_produto"];	
            $validade    = $_POST["validade_produto"];	

			$sql = "UPDATE produtos SET nome_produto='{$nome}', marca_produto='{$marca}', venergetico_produto='{$vene}', carbo_produto='{$carbo}', proteina_produto='{$proteina}', gtotais_produto='{$gtotais}', gsaturadas_produto='{$gsaturadas}', gtrans_produto='{$gtrans}', fibra_produto='{$fibra}', sodio_produto='{$sodio}', peso_produto='{$peso}', lote_produto='{$lote}', validade_produto='{$validade}' WHERE id_produtos=".$_POST["id_produtos"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM produtos WHERE id_produtos=".$_REQUEST["id_produtos"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}
			break;
	}
