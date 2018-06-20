<center><h1>Horários disponíveis</h1></center>
<table class='table table-striped table-bordered table-hover'>
    <tr>
        <th>Horário</th>
        <th>Cliente</th>
        <th colspan='1'>ação</th>
    </tr>
    <?php
        foreach ($arrayagenda as $agenda){
         ?>   
            <tr>
                <td><?=$agenda["hora"]?></td>
                <th><select name="clients" id="clients" required="">
               
               <?php 
                 $client = new clientsModel();
                 $client -> listClients();
                 $result = $client -> getConsult();
                 
                 $arrayClients = array();
     
                 while($line = $result->fetch_assoc()){
                     array_push($arrayClients,$line);
                 }
               foreach($arrayClients as $clients) { ?>

                   <option value="<?=$clients['id'];?>" name="clients"> <?= $clients['nome'];?> </option>

               <?php } ?>
               ?>
               </select></th>
                <td><a class="btn btn-success" href="?c=g&a=aca&id=<?=$agenda["id"]?>&cliente=<?=$clients['id']?>">Agendar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
