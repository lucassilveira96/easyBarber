<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<form action="?c=p&a=up" class="form-horizontal" method=POST>
<fieldset>

<div class="control-group">
  <label class="control-label" for="nome">cod</label>
  <div class="controls">
    <input name="cod" class="input-xlarge" id="cod" required="" type="text" value="<?=$arrayprofissionais['id']?>">
    
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="nome">Nome Completo</label>
  <div class="controls">
    <input name="name" class="input-xlarge" id="nome" required="" type="text" value="<?=$arrayprofissionais['nome']?>">
    
  </div>
</div>


<div class="control-group">
  <label class="control-label" for="telefone">Telefone</label>
  <div class="controls">
    <input name="tel" class="input-xlarge" id="telefone" required="" type="text" placeholder="Ex.: (99) 9999-9999">
    
  </div>
</div>
<div class="control-group">
<label class="control-label">Serviço</label>
                <select name="servico" id="servico" required="">
               
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
                </select>
  </div>
  <div class="control-group">
<label class="control-label">Serviço</label>
                <select name="servico2" id="servico2">
                
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
                </select>
  </div>

<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <button type="submit" class="btn btn-default">Enviar</button>
  </div>
</div>

</fieldset>
</form>
