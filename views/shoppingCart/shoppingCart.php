<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th class="text-center">Preço</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (!isset($arrayCart)) {?>
                </tbody>
            </table>         
                <div class="shopping-table">
                    <h2>Sem produtos no carrinho</h2>
                </div>  
                <?php } ?>
                <?php 
                if( isset($arrayCart)) {
                    foreach ($arrayCart as $cart){?>  
                
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" 
                                src="assets\img\produtos\<?=$cart['imagem'];?>"></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?=$cart['nome'];?></a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$cart['qtd'];?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=$cart['valor_venda'];?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=$cart['subtotal'];?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="?c=s&a=alt&id=<?=$cart['id'];?>">
                            <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remover</button></td>
                        </a>
                    </tr> 
                    <?php } ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?=$cart['total'];?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                <?php } ?>   
                </tbody>
            </table>
        </div>
    </div>
</div>