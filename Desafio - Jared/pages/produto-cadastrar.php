<h1 class="display-5">Cadastrar Produto</h1>
<form action="?page=produto-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
        <div class="form-floating mb-3">
            <input type="text" name="nome_produto" class="form-control" id="floatingNome" placeholder="Nome do Produto">
            <label for="floatingNome">Nome do produto</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="marca_produto" class="form-control" id="floatingMarca" placeholder="Marca">
            <label for="floatingMarca">Marca</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="venergetico_produto" class="form-control" id="floatingValorenergetico" placeholder="Valor Energético">
            <label for="floatingValorenergetico">Valor Energético</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="carbo_produto" class="form-control" id="floatingCarboidrato" placeholder="Carboidrato">
            <label for="floatingCarboidrato">Carboidrato</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="proteina_produto" class="form-control" id="floatingProteinas" placeholder="Proteinas">
            <label for="floatingProteinas">Proteinas</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gtotais_produto" class="form-control" id="floatingGordurastotais" placeholder="Gorduras totais">
            <label for="floatingGordurastotais">Gorduras totais</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gsaturadas_produto" class="form-control" id="floatingGordurassaturadas" placeholder="Gorduras saturadas">
            <label for="floatingGordurassaturadas">Gorduras saturadas</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gtrans_produto" class="form-control" id="floatingFibras" placeholder="Gorduras trans">
            <label for="floatingGordurastrans">Gorduras trans</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="fibra_produto" class="form-control" id="floatingFibras" placeholder="Fibras">
            <label for="floatingFibras">Fibras</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="sodio_produto" class="form-control" id="floatingSódio" placeholder="Sódio">
            <label for="floatingSódio">Sódio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="peso_produto" class="form-control" id="floatingPesototal" placeholder="Peso total">
            <label for="floatingPesototal">Peso total</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="lote_produto" class="form-control" id="floatingLote" placeholder="Lote de fabricação">
            <label for="floatingLote">Lote de fabricação</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="validade_produto" class="form-control" id="floatingValidade" placeholder="Data de Validade">
            <label for="floatingValidade">Data de Validade</label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Enviar</button>
        </div>
</form>