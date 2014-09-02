<?php include "permissao_incluir.php";?>
<?php include "top.php"; ?>

<form class="form-group" role="form" method="post" action="cadastro_func.php">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Endereço</label>
        <input type="text" class="form-control" name="endereco" placeholder="Endereço">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1">Email</label>
        <input type="Email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">Telefone</label>
        <input type="text" class="form-control" name="telefone" placeholder="Telefone">
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>