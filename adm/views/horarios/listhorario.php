<center><h1>Lista de Horarios</h1></center>
<a class="btn btn-danger" href="?c=h&a=ah">adicionar</a>
<table class='table'>
    <tr>
        <th>Código</th>
        <th>Horario</th>
        
    </tr>
    <?php
        foreach ($arrayhorario as $horario){
         ?>   
            <tr>
                <td><?=$horario["id"]?></td>
                <td><?=$horario["hora"]?></td>
                <td><a class="btn btn-danger" href="?c=h&a=dh&id=<?=$horario["id"]?>">Deletar</a></td>
            </tr>


    <?php
        }
    ?>
</table>
