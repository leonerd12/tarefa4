<?php include "topo2.php"; ?>

<form class="form-group" role="form" method="post" action="cadastro.php">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1">Email</label>
        <input type="Email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Login</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Login">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="editar" type="checkbox">
            Editar Dados
        </label>
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="excluir" type="checkbox">
            Excluir Dados
        </label>
    </div>
    <div class="form-group col-md-8 checkbox">
        <label>
            <input name="incluir" type="checkbox">
            Incluir Dados
        </label>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>