import { Produto } from './../../produtos/produto/produto.model';
import { Component, OnInit } from '@angular/core';
import { ProdutosService } from '../../../services/produtos/produtos.service';

@Component({
  selector: 'ct-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.css']
})
export class CarouselComponent implements OnInit {


  carousel: Produto[]

  constructor( private produtoService: ProdutosService ) { }

  ngOnInit() {
    this.produtoService.getSlider()
      .subscribe( carousel => this.carousel = carousel);
  }

}
