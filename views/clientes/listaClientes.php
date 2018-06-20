<center><h1>Lista de Clientes</h1></center>
<table class='table table-striped table-bordered table-dark table-hover'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
    </tr>
    <?php
        foreach ($arrayClients as $client){
         ?>   
            <tr>
                <td><?=$client["id"]?></td>
                <td><?=$client["nome"]?></td>
                <td><?=$client["telefone"]?></td>
            </tr>


    <?php
        }
    ?>
</table>
