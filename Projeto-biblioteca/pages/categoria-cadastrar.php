<h1 class="display-6"><i class="fas fa-stream"></i> Cadastrar nova categoria</h1>
<form action="?page=categoria-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome da Categoria</label>
        <input type="text" name="nome_categoria" class="form-control">
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>