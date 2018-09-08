import { CarrinhoService } from './../../services/carrinho/carrinho.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'ct-carrinho',
  templateUrl: './carrinho.component.html',
  styleUrls: ['./carrinho.component.css']
})
export class CarrinhoComponent implements OnInit {

  constructor(
    private carrinho: CarrinhoService 
  ) { }

  ngOnInit() {
  }

  itens(): any[] {
    return this.carrinho.itens;
  }

  addProduto( item: any){
    this.carrinho.addProduto( item );
  }

  removeProduto( item: any ){
    this.carrinho.removeProduto( item );
  }

  apagarProduto(){
    this.carrinho.limpar();
  }

  total(): number {
    return this.carrinho.total();
  }

}
