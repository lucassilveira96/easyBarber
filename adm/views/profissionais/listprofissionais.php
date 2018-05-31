<center><h1>Lista de Profissionais</h1></center>
<a class="btn btn-danger" href="?c=p&a=ap">adicionar</a>
<table class='table'>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th colspan='2'>ações</th>
    </tr>
    <?php
        foreach ($arrayprofissionais as $profissionais){
         ?>   
            <tr>
                <td><?=$profissionais["id"]?></td>
                <td><?=$profissionais["nome"]?></td>
                <td><?=$profissionais["telefone"]?></td>
                <td><a class="btn btn-warning" href="?c=p&a=alp&id=<?=$profissionais["id"]?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?c=p&a=dp&id=<?=$profissionais["id"]?>">Deletar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
