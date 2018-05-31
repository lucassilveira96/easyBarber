<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<center><h1>Alterar dados dos Serviços</h1></center>

<form action="?c=s&a=us" class="form-horizontal" method=POST>
<fieldset>

<div class="control-group">
  <center><p>Cod:</p></center>
  <center><input name="cod" class="input-xlarge" id="cod" required="" type="text" value="<?=$arrayServicos['id']?>"></center>
</div>
<div class="control-group">
  <center><p>Nome do Serviço:</p></center>
  <center><input name="name" class="input-xlarge" id="nome" required="" type="text" value="<?=$arrayServicos['nome']?>"></center>
</div>


<div class="control-group">
  <center><p>Valor:</p></center>
  <center><input name="val" class="input-xlarge" id="valor" required="" type="text" value="<?=$arrayServicos['valor']?>"></center>
</div>

<div class="control-group">
    <center><button type="submit" class="btn btn-success">Enviar</button></center>
  </div>
</div>

</fieldset>
</form>
