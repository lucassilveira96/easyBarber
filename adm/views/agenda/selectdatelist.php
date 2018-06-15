
<center><h1>Agendar Horarios</h1></center>
<form action="?c=g&a=lga" id="form" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
    <center><p>Lista horários agendados:</p></center>
    <center><input type="date" id="date" name="date" required=""></center>
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
