<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<center><h1>Cadastro de Serviços</h1></center>
<form action="?c=s&a=is" id="form-horizontal" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
  <center><p>Serviço:</p></center>
    <center><input name="name" class="input-xlarge" id="nome" required="" type="text" placeholder="Ex: barba"></center>
</div>


<div class="control-group">
  <center><p>Valor:</p>
   <center><input name="valor" class="input-xlarge" id="valor" required="" type="text" placeholder="Ex.: 25"></center>
</div>
<div class="control-group">
    <center><button type="submit" class="btn btn-success">Enviar</button></center>
  </div>
</div>

</fieldset>
</form>
