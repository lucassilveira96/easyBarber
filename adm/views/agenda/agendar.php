<center><h1>Agendar Horarios</h1></center>
<form action="?c=g&a=lhg" id="form" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
    <center><p>Selecione a data para o serviço:</p></center>
    <center><input type="date" id="date" name="date" required=""></center>
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
      <center><p>Selecione o Profissional:</p></center>
                <center><select name="profissionais" id="profissionais" required="">
               
                <?php 
                  $profissionais = new profissionaisModel();
                  $profissionais -> listprofissionais();
                  $result = $profissionais -> getConsult();
                  
                  $arrayprofissionais = array();
      
                  while($line = $result->fetch_assoc()){
                      array_push($arrayprofissionais,$line);
                  }
                
                foreach($arrayprofissionais as $profissionais) { ?>

                    <option value="<?=$profissionais['id'];?>" name="profissionais"> <?= $profissionais['nome'];?> </option>

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
