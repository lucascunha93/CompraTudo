import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { ProdutosService } from '../../../services/produtos/produtos.service';
import { CarrinhoService } from './../../../services/carrinho/carrinho.service';

import { Produto } from './../produto/produto.model';

@Component({
  selector: 'ct-produto-detalhe',
  templateUrl: './produto-detalhe.component.html',
  styleUrls: ['./produto-detalhe.component.css']
})
export class ProdutoDetalheComponent implements OnInit {

  produto: Produto

  constructor( 
    private produtoService: ProdutosService,
    private carrinho: CarrinhoService,
    private route: ActivatedRoute
    ) { }

  ngOnInit() {

    this.produtoService.getProdutoById( this.route.snapshot.params['id'] )
      .subscribe( produto => this.produto = produto )
  }

  comprarProduto( produto ) {
    this.carrinho.addProduto( produto );
  }

}
