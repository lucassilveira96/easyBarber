
<center><h1>Agenda</h1></center>
<table class='table table-striped table-bordered table-dark table-hover'>
    <tr>
        <th>Código</th>
        <th>Cliente</th>
        <th>Serviço</th>
        <th>Profissional</th>
        <th>Data</th>
        <th>Hora</th>
        <th colspan='2'>ações</th>
    </tr>
    <?php
        foreach ($arrayagenda as $agenda){
         ?>   
            <tr>
                <td><?=$agenda["id"]?></td>
                <td><?=$agenda["cliente"]?></td>
                <td><?=$agenda["servico"]?></td>
                <td><?=$agenda["profissional"]?></td>
                <td><?php echo date('d/m/Y', strtotime($agenda['datas']));?></td>
                <td><?=$agenda["hora"]?></td>
                <td><a class="btn btn-warning" href="?c=c&a=alc&id=<?=$agenda["id"]?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?c=g&a=dg&id=<?=$agenda["id"]?>">Deletar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
