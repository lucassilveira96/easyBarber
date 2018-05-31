<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            
            <thead>
                <tr>
                    <th class="letraTabela">ID</th>
                    <th class="letraTabela">Nome</th>
                    <th class="letraTabela">Email</th>
                    <th class="letraTabela">Endereco</th>
                    <th class="letraTabela">Telefone</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($arrayClientes as $cliente){?>
                <tr>
                    <td class="letraTabela"><?= $cliente['idCliente'];?></td>
                    <td class="letraTabela"><?= $cliente['nome'];?></td>
                    <td class="letraTabela"><?= $cliente['email'];?></td>
                    <td class="letraTabela"><?= $cliente['endereco'];?></td>
                    <td class="letraTabela"><?= $cliente['telefone'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>