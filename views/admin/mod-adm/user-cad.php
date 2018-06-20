<div class="container">
    <h3>Alterar Cliente</h3>
    <form action="?c=a&a=ec&id=<?= $arrayUsuario['id'] ?>" method="POST">  
        <div class="form-group">
            <div>
                <label for="id">Id</label>
                <input type="text" class="form-control" name="id" value="<?= $arrayUsuario['id'] ?>"readonly="readonly">
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $arrayUsuario['nome'] ?>">
            </div>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?= $arrayUsuario['endereco'] ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $arrayUsuario['email'] ?>">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="text" class="form-control" name="senha" value="<?= $arrayUsuario['senha'] ?>">
            </div>
            <div>
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?= $arrayUsuario['telefone'] ?>">
            </div>
        </div>
        <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary ">Alterar cadastro</button>
        </div>
    </form>
</div>