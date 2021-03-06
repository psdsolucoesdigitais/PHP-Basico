<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
  $acao = "Cadastro";
  if (isset($_GET["id"])) {
    $acao = "Edição";
    require "Conexao.php";
    $conexao = new Conexao;

    $pesquisa = "select * from contato where id = ".$_GET["id"];
    $contato  = $conexao->query($pesquisa)->fetchObject();
  }
?>

<form class="form-horizontal" action="contato_add.php" method="post">

  <input type="hidden" name="id" value="<?php echo $contato->id ?>">

<fieldset>

<!-- Form Name -->
<legend><?php echo $acao ?> de Contato</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome_contato">Nome</label>  
  <div class="col-md-4">
  <input id="nome_contato" name="nome_contato" type="text" 
  placeholder="Digite o nome" class="form-control input-md"
  value="<?php echo $contato->nome ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone_contato">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone_contato" name="telefone_contato" 
  type="text" placeholder="Digite o telefone" class="form-control input-md"
  value="<?php echo $contato->telefone ?>">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>
