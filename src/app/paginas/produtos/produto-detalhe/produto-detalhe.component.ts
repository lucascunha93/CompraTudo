import { Produto } from './../produto/produto.model';
import { Component, OnInit } from '@angular/core';
import { ProdutosService } from '../../../services/produtos/produtos.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'ct-produto-detalhe',
  templateUrl: './produto-detalhe.component.html',
  styleUrls: ['./produto-detalhe.component.css']
})
export class ProdutoDetalheComponent implements OnInit {

  produto: Produto

  constructor( 
    private produtoService: ProdutosService,
    private route: ActivatedRoute
    ) { }

  ngOnInit() {

    this.produtoService.getProdutoById( this.route.snapshot.params['id'] )
      .subscribe( produto => this.produto = produto )
  }

}
