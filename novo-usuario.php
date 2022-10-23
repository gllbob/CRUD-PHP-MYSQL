<h2>Novo Usuário</h2>
<form action="?page=salvar" method="POST"><!-- Formulário de Cadastro -->
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label for="">E-mail</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">Senha</label>
        <input type="password" name="senha">
    </div>
    <div>
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form><!-- Formulário de Cadastro -->