import { Component, OnInit, Input } from '@angular/core';

import { Produto } from './produto.model';

@Component({
  selector: 'ct-produto',
  templateUrl: './produto.component.html',
  styleUrls: ['./produto.component.css']
})
export class ProdutoComponent implements OnInit {

  @Input() produtos: Produto[] = [
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 },
    { img:"assets/img/iphonex.jpg", nome: "Apple Iphone X", valor: 3999.99 },
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 },
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 }
  ]
 

  constructor() { }

  ngOnInit() {
  }

}
