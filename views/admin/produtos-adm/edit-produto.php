<div class="container">
    <form action="?c=a&a=ep&id=<?= $arrayProduto['id'] ?>" method="POST">  
        <div class="col-md-10 col-md-offset-1 form-group">
            <h3>Alterar Produto</h3>
            <div class="col-md-5 img-lista-produto">
                <div>
                    <img src="assets\img\produtos/<?= $arrayProduto['imagem'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 lista-produto"> 
                <div>
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" value="<?= $arrayProduto['id'] ?>"readonly="readonly">
                </div>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?= $arrayProduto['nome'] ?>">
                </div>
                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="descricao" value="<?= $arrayProduto['descricao'] ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="valor_venda" value="<?= $arrayProduto['valor_venda'] ?>">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" name="custo" value="<?= $arrayProduto['custo'] ?>">
                </div>
                <div>
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="quantidade" value="<?= $arrayProduto['quantidade'] ?>">
                </div>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary ">Alterar cadastro</button>
        </div>
    </form>
</div>