<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<center><h1>Alterar dados Profissionais</h1></center>
<form action="?c=p&a=up" class="form-horizontal" method=POST>
<fieldset>

<div class="control-group">
  <center><p>Cod:</p></center>
  <center>
    <input name="cod" class="input-xlarge" id="cod" required="" type="text" value="<?=$arrayprofissionais['id']?>">
    
    </center>
</div>
<div class="control-group">
  <center> <p>Nome completo:</p></center>
  <center>
    <input name="name" class="input-xlarge" id="nome" required="" type="text" value="<?=$arrayprofissionais['nome']?>">
    </center> 
</div>


<div class="control-group">
  <center><p>Telefone:</p></center>
  <center>
    <input name="tel" class="input-xlarge" id="telefone" required="" type="text" value="<?=$arrayprofissionais['telefone']?>" placeholder="Ex.: (99) 9999-9999">
    </center>
  </div>
</div>
<div class="control-group">
<center><p>Serviço:</p></center>
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
  <center><p>Serviço:</p></center>
                <center><select name="servico2" id="servico2">
                
                <option>Selecione o Serviço</option>
               
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
                </select><center>
  </div>

<div class="control-group">
<center><button type="submit" class="btn btn-danger">alterar</button></center>
</div>

</fieldset>
</form>
