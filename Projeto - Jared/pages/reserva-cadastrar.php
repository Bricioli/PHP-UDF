<h1 class="display-6"><i class="far fa-calendar"></i> Cadastrar reserva</h1>
<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="row g-3">
		<div class="col-md">
			<div class="form-floating">
				<select name="atendente_id_atendente" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
					<option selected>Selecione o Atendente</option>
					<?php
						$sql = "SELECT * FROM atendente";
						$res = $conn->query($sql) or die($conn->error);
						if($res->num_rows > 0){
							while($row = $res->fetch_object()){
								print "<option value='".$row->id_atendente."'>";
								print $row->nome_atendente."</option>";
							}
						}else{
							print "<option>Não há Atendentes cadastradas</option>";
						}
					?>
				</select>
					<label for="floatingSelectGrid">Atendente</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<select name="aluno_id_aluno" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
						<option selected>Selecione o Aluno</option>
						<?php
							$sql = "SELECT * FROM aluno";
							$res = $conn->query($sql) or die($conn->error);
							if($res->num_rows > 0){
								while($row = $res->fetch_object()){
									print "<option value='".$row->id_aluno."'>";
									print $row->nome_aluno."</option>";
								}
							}else{
								print "<option>Não há alunos cadastradas</option>";
							}
						?>
					</select>
					<label for="floatingSelectGrid">Aluno</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<select name="livro_id_livro" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
						<option selected>Selecione o Livro</option>
						<?php
							$sql = "SELECT * FROM livro";
							$res = $conn->query($sql) or die($conn->error);
							if($res->num_rows > 0){
								while($row = $res->fetch_object()){
									print "<option value='".$row->id_livro."'>";
									print $row->titulo_livro."</option>";
								}
							}else{
								print "<option>Não há livros cadastradas</option>";
							}
						?>
					</select>
					<label for="floatingSelectGrid">Livro</label>
				</div>
			</div>

	<div class="row g-2">
			<div class="col-md">
				<div class="form-floating">
					<input type="date" name="data_reserva" class="form-control" id="floatingDataReserva" placeholder="DataReserva">
					<label for="floatingDataReserva">Data da Reserva</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="date" name="data_entrega" class="form-control" id="floatingDataEntrega" placeholder="DataEntrega">
					<label for="floatingDataEntrega">Data da Entrega</label>
				</div>
			</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-outline-danger">Enviar</button>
	</div>
</form>
