<center><h1>Lista de Clientes</h1></center>
<a class="btn btn-danger" href="?c=c&a=ac">adicionar</a>
<table class='table table-striped table-bordered table-dark table-hover'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th colspan='2'>ações</th>
    </tr>
    <?php
        foreach ($arrayClients as $client){
         ?>   
            <tr>
                <td><?=$client["id"]?></td>
                <td><?=$client["nome"]?></td>
                <td><?=$client["telefone"]?></td>
                <td><a class="btn btn-warning" href="?c=c&a=alc&id=<?=$client["id"]?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?c=c&a=dc&id=<?=$client["id"]?>">Deletar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
