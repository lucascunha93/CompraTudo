import { Produto } from './produto/produto.model';
import { ProdutosService } from './../../services/produtos/produtos.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'ct-produtos',
  templateUrl: './produtos.component.html',
  styleUrls: ['./produtos.component.css']
})
export class ProdutosComponent implements OnInit {

  produto: Produto[]

  constructor( private produtosService: ProdutosService) { }

  ngOnInit() {
    this.produtosService.getProdutos()
      .subscribe( produtos => this.produto = produtos )
  }

}
