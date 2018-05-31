<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<center><h1>Cadastro de Horários</h1></center>
<form action="?c=h&a=ih" id="form-horizontal" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
  <label class="control-label" for="nome">Horário</label>
  <div class="controls">
    <input name="hora" class="input-xlarge" id="hora" required="" type="time" placeholder="Ex:12:00">
    
  </div>
</div>



<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <button type="submit" class="btn btn-default">Enviar</button>
  </div>
</div>

</fieldset>
</form>
