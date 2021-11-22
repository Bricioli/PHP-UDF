<h1>Editar aluno</h1>
<?php 
    $sql = "SELECT * FROM Aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

    $res = $conn->query($sql) or die ($conn->error);

    $row = $res->fetch_object();
?>

<form action="?page=aluno-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_aluno" value="<?php print $row->id_aluno; ?>">
    <div class="mb-3">
        <label>Nome do aluno</label>
        <input type="text" name="nome_aluno" class="form-control" value="<?php print $row->nome_aluno; ?>">
    </div>
    <div class="mb-3"> 
        <label>Endereço</label>
        <input type="text" name="end_aluno" class="form-control" value="<?php print $row->end_aluno; ?>">
    </div>
    <div class="mb-3"> 
        <label>E-mail</label>
        <input type="email" name="email_aluno" class="form-control"value="<?php print $row->email_aluno; ?>">
    </div>
    <div class="mb-3"> 
        <label>Telefone</label>
        <input type="text" name="fone_aluno" class="form-control"value="<?php print $row->fone_aluno; ?>">
    </div>
    <div class="mb-3"> 
        <label>Data de nascimento</label>
        <input type="date" name="nasc_aluno" class="form-control" value="<?php print $row->nasc_aluno; ?>">
    </div>
    <div class="mb-3"> 
        <label>Genero: </label>
        <label><input type="radio" name="genero_aluno" value="Masculino"> Masculino </label>
        <label><input type="radio" name="genero_aluno" value="Feminino"> Feminino </label>
        <label><input type="radio" name="genero_aluno" value="Outros"> Outros </label>
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>