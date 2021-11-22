<h1 class="display-6"><i class="fas fa-book-open"></i> Cadastrar nova biblioteca</h1>
<form action="?page=biblioteca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da Biblioteca</label>
        <input type="text" name="nome_biblioteca" class="form-control">
    </div>
    <div class="mb-3"> 
        <label>Endereço</label>
        <input type="text" name="end_biblioteca" class="form-control">
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>