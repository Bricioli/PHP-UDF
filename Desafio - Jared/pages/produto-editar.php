<h1 class="display-5">Editar Produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id_produtos=".$_REQUEST["id_produtos"];

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();
?>
<form action="?page=produto-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_produtos" value="<?php print $row->id_produtos;?>">
        <div class="form-floating mb-3">
            <input type="text" name="nome_produto" value="<?php print $row->nome_produto;?>" class="form-control" id="floatingNome" placeholder="Nome do Produto">
            <label for="floatingNome">Nome do produto</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="marca_produto" value="<?php print $row->marca_produto;?>" class="form-control" id="floatingMarca" placeholder="Marca">
            <label for="floatingMarca">Marca</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="venergetico_produto" value="<?php print $row->venergetico_produto;?>" class="form-control" id="floatingValorenergetico" placeholder="Valor Energético">
            <label for="floatingValorenergetico">Valor Energético</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="carbo_produto" value="<?php print $row->carbo_produto;?>" class="form-control" id="floatingCarboidrato" placeholder="Carboidrato">
            <label for="floatingCarboidrato">Carboidrato</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="proteina_produto" value="<?php print $row->proteina_produto;?>" class="form-control" id="floatingProteinas" placeholder="Proteinas">
            <label for="floatingProteinas">Proteinas</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gtotais_produto" value="<?php print $row->gtotais_produto;?>" class="form-control" id="floatingGordurastotais" placeholder="Gorduras totais">
            <label for="floatingGordurastotais">Gorduras totais</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gsaturadas_produto" value="<?php print $row->gsaturadas_produto;?>" class="form-control" id="floatingGordurassaturadas" placeholder="Gorduras saturadas">
            <label for="floatingGordurassaturadas">Gorduras saturadas</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="gtrans_produto" value="<?php print $row->gtrans_produto;?>"class="form-control" id="floatingFibras" placeholder="Gorduras trans">
            <label for="floatingGordurastrans">Gorduras trans</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="fibra_produto" value="<?php print $row->fibra_produto;?>"class="form-control" id="floatingFibras" placeholder="Fibras">
            <label for="floatingFibras">Fibras</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="sodio_produto" value="<?php print $row->sodio_produto;?>" class="form-control" id="floatingSódio" placeholder="Sódio">
            <label for="floatingSódio">Sódio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="peso_produto" value="<?php print $row->peso_produto;?>" class="form-control" id="floatingPesototal" placeholder="Peso total">
            <label for="floatingPesototal">Peso total</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="lote_produto" value="<?php print $row->lote_produto;?>"class="form-control" id="floatingLote" placeholder="Lote de fabricação">
            <label for="floatingLote">Lote de fabricação</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="validade_produto" value="<?php print $row->validade_produto;?>" class="form-control" id="floatingValidade" placeholder="Data de Validade">
            <label for="floatingValidade">Data de Validade</label>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Enviar</button>
        </div>
</form>
