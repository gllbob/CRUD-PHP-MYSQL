<h2>Editar Usuário</h2>
<?php // Conectar ao banco de dados retornando todas as colunas do 'id' escolhido na tabela 'usuarios'.  
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST"><!-- Formulário de Edição -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>">
    </div>
    <div>
        <label for="">E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>">
    </div>
    <div>
        <label for="">Senha</label>
        <input type="password" name="senha" required>
    </div>
    <div>
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form> <!-- Formulário de Edição -->