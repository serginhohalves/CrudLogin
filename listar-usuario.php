    <h1>Lista de Usuarios</h1>
    <?php
    $sql = "SELECT * FROM login";
    $res = $conn->query($sql) or die($conn->error);
    $qtd = $res->num_rows;
    if ($qtd > 0) {
        print "<table class='table table-hover 
        table-striped table-bordered'
        '>";

        print "<tr>";
        print "<th>ID</th>";
        print "<th>Email</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>
                <button onclick=\" location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-warning btn-sm'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "'} \" class='btn btn-danger btn-sm'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p>Não encontrou resultados</p>";
    }

    ?>