<h2>Lista de Usuários</h2>
<?php // Conecta ao banco de dados retornando todas na tabela 'usuarios'.
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data de Nacimento</th>";
        print "<th>Acões</th>";
        print "</tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td><button onclick=\"location.href='?page=editar&id=".$row->id."';\" type='submit'>Editar</button></td>";
            print "<td><button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" type='submit'>Excluir    </button></td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p>Não encontrou resultados!</p>";
    }