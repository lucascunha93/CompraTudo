<!-- Banner lista de produtos-->
<div class=" banner-produto ">
    <div class="banner-letreiro">
        <h1>Produtos</h1>
    </div>
</div>

<!--Lista de produtos-->

<div class="col-md-10 col-md-offset-1 ofertas-dia">
    <?php foreach ($arrayProdutos as $produto){?>
        <div class="col-md-2 col-md-offset-1 produto-promo">
            <div class="img-produto">
                <img src="assets/img/produtos/<?=$produto['imagem'];?>" alt="">
            </div>
            <h2><a href="single-product.html"><?=$produto['nome'];?></a></h2> 
            <div class="product-carousel-price">
                <p><?=$produto['valor_venda'];?></p>
            </div>
            <a href="?c=s&a=add&id=<?=$produto['id'];?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Adicionar</a>
            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Mais detalhes</a>   
        </div>
    <?php } ?>
</div>
 