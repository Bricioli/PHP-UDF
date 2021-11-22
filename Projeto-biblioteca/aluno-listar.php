<h1 class="display-6"><i class="fas fa-users"></i> Listar aluno</h1>
<?php 
    $sql = "SELECT * FROM aluno";

    $res = $conn->query($sql) or die ($conn->error);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p> Retornou <strong>$qtd</strong> resultado(s)</p>";
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Endereço</th>";
        print "<th>E-mail</th>";
        print "<th>Telefone</th>";
        print "<th>Data de nascimento</th>";
        print "<th>Genero</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_aluno."</td>";
            print "<td>".$row->nome_aluno."</td>";
            print "<td>".$row->end_aluno."</td>";
            print "<td>".$row->email_aluno."</td>";
            print "<td>".$row->fone_aluno."</td>";
            print "<td>".$row->nasc_aluno."</td>";
            print "<td>".$row->genero_aluno."</td>";
            print "<td>
                    <button class='btn btn-primary' onclick=\"location.href='?page=aluno-editar&id_aluno=".$row->id_aluno."'\"><i class='fas fa-user-edit'></i></button> 
                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=aluno-salvar&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\"><i class='fas fa-user-times'></i></button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<div class='alert alert-danger'>Não encontrou resultados. </div>";
    }
?>