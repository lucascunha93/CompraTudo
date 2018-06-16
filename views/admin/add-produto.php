<!-- Conteudo -->
<div class="addproduto-area">
    <div class="add-produto">
        <h1>Adicionar Produto</h1>
        <div class="col-md-6 col-md-offset-3 form-addproduto">
            <form action="?c=a&a=add" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-12">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDesc">Descricão:</label>
                    <input type="text" class="form-control" name="descricao" placeholder="ex. produto top de linha">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputQtd">Quantidade:</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="ex. 10">
                </div>
                <div class="form-group col-md-12">
                    <label for="imagem">Imagem:</label>
                    <input type="file" name="imagem"/>
                    <br>
                    <input type="submit" value="Enviar"/>
                </div>
            </form>
        </div>
    </div>
</div>
