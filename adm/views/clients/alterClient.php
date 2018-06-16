
<center><h1>Alterar dados de clientes</h1></center>

<form action="?c=c&a=uc" class="form-horizontal" method=POST>
<fieldset>

<div class="control-group">
  <center><p>Cod:</p></center>
  <center><input name="cod" class="input-xlarge" id="cod" required="" type="text" value="<?=$arrayClient['id']?>"></center>
</div>
<div class="control-group">
  <center><p>Nome Completo:</p></center>
  <center><input name="name" class="input-xlarge" id="nome" required="" type="text" value="<?=$arrayClient['nome']?>"></center>
</div>


<div class="control-group">
  <center><p>Telefone:</p></center>
  <center><input name="tel" class="input-xlarge" id="telefone" required="" type="text" value="<?=$arrayClient['telefone']?>"></center>
</div>

<div class="control-group">
    <center><button type="submit" class="btn btn-success">Enviar</button></center>
  </div>
</div>

</fieldset>
</form>
