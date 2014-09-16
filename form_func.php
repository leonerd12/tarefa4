<?php include "permissao_incluir.php";?>
<?php include "top.php"; ?>
<script type="text/javascript">

function valPHONE(e,campo){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 47 && tecla < 58 )){
    	   mascara(campo, '(##)####-####');
    	   return true;
    	 }
    else{
    if (tecla != 8 ) return false;
    else return true;
    }
}

function mascara(src, mask){
   var i = src.value.length;
   var saida = mask.substring(1,2);
   var texto = mask.substring(i);
   if (texto.substring(0,1) != saida)
   {
      src.value += texto.substring(0,1);
   }
}
</script>

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
        <label for="exampleInputEmail1">Telefone</label>
        <input class="form-control" type="text" 
                             name="telefone" 
                             onkeypress="return valPHONE(event,this); return false;" 
                             maxlength="13" />
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Enviar Dados</button>
        </div>
    </div>
</form>  
</body>
</html>