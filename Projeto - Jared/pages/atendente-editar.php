<h1 class="display-6"><i class="far fa-id-badge"></i> Editar Atendente</h1>
<?php
	$sql_1 = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST["id_atendente"];

	$res_1 = $conn->query($sql_1) or die($conn->error);

	$row_1 = $res_1->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row_1->id_atendente; ?>">
	<div class="row g-2">
			<div class="col-md">
				<div class="form-floating">
					<input type="text" name="nome_atendente"  value="<?php print $row_1->nome_atendente; ?>" class="form-control" id="floatingNomeAtendente" placeholder="Nome do Atendente">
					<label for="floatingNomeAtendente">Nome do Atendente</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<select name="biblioteca_id_biblioteca" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
						<option selected>Selecione a Biblioteca</option>
						<?php
							$sql = "SELECT * FROM biblioteca";
							$res = $conn->query($sql) or die($conn->error);
							if($res->num_rows > 0){
								while($row = $res->fetch_object()){
									if($row->id_biblioteca == $row_1->biblioteca_id_biblioteca){
										print "<option value='".$row->id_biblioteca."' selected>";
										print $row->nome_biblioteca."</option>";
									}else{
										print "<option value='".$row->id_biblioteca."'>";
										print $row->nome_biblioteca."</option>";
									}
								}
							}else{
								print "<option>Não há bibliotecas cadastradas</option>";
							}
						?>
					</select>
					<label for="floatingSelectGrid">Biblioteca</label>
				</div>
			</div>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger mt-3">Enviar</button>
	</div>
</form>