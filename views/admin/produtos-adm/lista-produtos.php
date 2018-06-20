<!-- Conteúdo -->

<div class="container col-md-6 col-md-offset-3 conteudo">
        <div class="col-md-12 table-responsive">
                <h1 class="titulo_tabela">Produtos(s) cadastrados!</h1>
                <table class="table custab">
                        <thead>
                                <tr>
                                        <th>ID </th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Valor de venda</th>
                                        <th>Valor Custo</th>
                                        <th>Quantidade em estoque</th>
                                        <th class="text-center col-md-3">Acão</th>
                                </tr>
                        </thead>
                <?php foreach ($arrayProdutos as $produto){?>
                        <tr>
                                <td><?= $produto['id'];?></td>
                                <td><?= $produto['nome'];?></td>
                                <td><?= $produto['descricao'];?></td>
                                <td><?= $produto['valor_venda'];?></td>
                                <td><?= $produto['custo'];?></td>
                                <td><?= $produto['quantidade'];?></td>
                                <td class="btn-edit">
                                        <a class="btn btn-danger edit" href="?c=a&a=dp&id=<?=$produto["id"]?>" aria-label="Settings">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-warning edit" href="?c=a&a=lp&id=<?=$produto["id"]?>" aria-label="Settings">
                                                <i class="far fa-edit" aria-hidden="true"></i>
                                        </a> 
                                </td>
                        </tr>
                <?php } ?>
                </table>
        </div>
</div>

    <!-- Fim conteúdo -->
