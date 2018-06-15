<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<center><h1>Cadastro de Profissionais</h1></center>
<form action="?c=p&a=ip" id="form" class="form-horizontal" method=POST enctype='multipart/form-data'>
<fieldset>


<div class="control-group">
  <center> Nome Completo</label></center>
    <center><input name="name" class="input-xlarge" id="nome" required="" type="text" placeholder="Seu Nome"></center>
</div>


<div class="control-group">
  <center><p>Telefone:</p></center>
    <center><input name="tel" class="input-xlarge" id="telefone" required="" type="text" placeholder="Ex.: (99) 9999-9999"></center>
</div>
<div class="control-group">
<center> Serviço</center>
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
            <center><p>Serviço</p></center>
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
                </select></center>  
  </div>
<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <center><button type="submit" class="btn btn-success">Cadastrar</button></center>
  </div>
</div>

</fieldset>
</form>
