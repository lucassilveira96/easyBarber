<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<center><h1>Agendar Horarios</h1></center>
<form action="?c=g&a=lhg" id="form" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
    <center><p>Selecione a data para o serviço:</p></center>
    <center><input type="date" id="date" name="date"></center>
  </div>
  <div class="control-group">
      <center><p>Selecione o serviço:</p></center>
                <center><select name="servico" id="servico" required="">
               
                <?php 
                  $Servicos = new servicosModel();
                  $Servicos -> listServicos();
                  $result = $Servicos -> getConsult();
                  
                  $arrayServicos = array();
      
                  while($line = $result->fetch_assoc()){
                      array_push($arrayServicos,$line);
                  }
                
                foreach($arrayServicos as $servico) { ?>

                    <option value="<?=$servico['id'];?>" name="servico"> <?= $servico['nome'];?> </option>

                <?php } ?>
                ?>
                </select></center>
  </div>
  <div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <center><button type="submit" class="btn btn-success">Enviar</button>
  </div>
</div>
</fieldset>
</form>
