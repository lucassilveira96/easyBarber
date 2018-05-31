<center><h1>Horários disponíveis</h1></center>
<table class='table'>
    <tr>
        <th>Data</th>
        <th>Horário</th>
        <th>Serviço</th>
        <th>Profissional</th>
        <th colspan='1'>ação</th>
    </tr>
    <?php
        foreach ($arrayagenda as $agenda){
         ?>   
            <tr>
                <td><?=date('d/m/Y', strtotime($date));?></td>
                <td><?=$agenda["hora"]?></td>
                <td><?=$agenda["servico"]?></td>
                <td><?=$agenda["profissional"]?></td>
                <td><a class="btn btn-success" href="?c=c&a=alc&id=<?=$agenda["id"]?>">Agendar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
