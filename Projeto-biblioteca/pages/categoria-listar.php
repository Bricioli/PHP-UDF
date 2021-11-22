<h1 class="display-6"><i class="fas fa-stream"></i> Listar categoria</h1>
<?php 
    $sql = "SELECT * FROM categoria";

    $res = $conn->query($sql) or die ($conn->error);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p> Retornou <strong>$qtd</strong> resultado(s)</p>";
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Categoria</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_categoria."</td>";
            print "<td>".$row->nome_categoria."</td>";
            print "<td>
                <button class='btn btn-primary' onclick=\"location.href='?page=categoria-editar&id_categoria=".$row->id_categoria."'\"><i class='fas fa-user-edit'></i></button> 

                <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=categoria-salvar&acao=excluir&id_categoria=".$row->id_categoria."';}else{false;}\"><i class='fas fa-user-times'></i></button>   
                    </td>";
            print "</tr>";
        } 
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não encontrou resultados. </div>";
    }
?>