import { Component, OnInit } from '@angular/core';

import { Produto } from './../../produtos/produto/produto.model';
import { ProdutosService } from '../../../services/produtos/produtos.service';

@Component({
  selector: 'ct-ofertas',
  templateUrl: './ofertas.component.html',
  styleUrls: ['./ofertas.component.css']
})
export class OfertasComponent implements OnInit {

  ofertas: Produto[]
   
  constructor( private produtosService: ProdutosService ) { }

  ngOnInit() {
    this.produtosService.getOfertas()
      .subscribe( ofertas => this.ofertas = ofertas );
  }

}
