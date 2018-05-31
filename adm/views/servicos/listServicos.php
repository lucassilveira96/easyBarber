<center><h1>Lista de Serviços</h1></center>
<a class="btn btn-danger" href="?c=s&a=as">adicionar</a>
<table class='table'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Valor</th>
        <th cowspan='2'>ações</th>
    </tr>
    <?php
        foreach ($arrayServicos as $Servicos){
         ?>   
            <tr>
                <td><?=$Servicos["id"]?></td>
                <td><?=$Servicos["nome"]?></td>
                <td><?=$Servicos["valor"]?></td>
                <td><a class="btn btn-warning" href="?c=s&a=als&id=<?=$Servicos["id"]?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?c=s&a=ds&id=<?=$Servicos["id"]?>">Deletar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
