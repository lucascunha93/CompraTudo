<!-- Conteúdo -->

<div class="container col-md-6 col-md-offset-3 conteudo">
        <div class="col-md-12 table-responsive">
                <h1 class="titulo_tabela">Administradores(s) cadastrados!</h1>
                <table class="table custab">
                        <thead>
                                <tr>
                                        <th>ID </th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Senha</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                        <th class="text-center col-md-3">Acão</th>
                                </tr>
                        </thead>
                <?php foreach ($arrayUsuarios as $usuario){?>
                        <tr>
                                <td><?= $usuario['id'];?></td>
                                <td><?= $usuario['nome'];?></td>
                                <td><?= $usuario['email'];?></td>
                                <td><?= $usuario['senha'];?></td>
                                <td><?= $usuario['endereco'];?></td>
                                <td><?= $usuario['telefone'];?></td>
                                <td class="btn-edit">
                                        <a class="btn btn-danger edit" href="?c=a&a=du&id=<?=$usuario["id"]?>" aria-label="Settings">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-warning edit" href="?c=a&a=lu&id=<?=$usuario["id"]?>" aria-label="Settings">
                                                <i class="far fa-edit" aria-hidden="true"></i>
                                        </a> 
                                </td>
                        </tr>
                <?php } ?>
                </table>
        </div>
</div>

    <!-- Fim conteúdo -->
