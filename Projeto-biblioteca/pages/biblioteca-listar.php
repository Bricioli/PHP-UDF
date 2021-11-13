<h1>Listar bibliotecas </h1>
<?php 
    $sql = "SELECT * FROM biblioteca";

    $res = $conn->query($sql) or die ($conn->error);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p> Retornou <strong>$qtd</strong> resultado(s)</p>";
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Endereço</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_biblioteca."</td>";
            print "<td>".$row->nome_biblioteca."</td>";
            print "<td>".$row->end_biblioteca."</td>";
            print "<td>
                    <button class='btn btn-primary' onclick=\"location.href='?page=biblioteca-editar&id_biblioteca=".$row->id_biblioteca."'\">Editar</button> 
                    <button class='btn btn-danger'>Excluir</button>    
                  </td>";
            print "</tr>";
        } 
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não encontrou resultados. </div>";
    }
?>