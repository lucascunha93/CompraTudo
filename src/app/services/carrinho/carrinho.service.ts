import { Injectable } from "@angular/core";

import { CarrinhoModel } from "./carrinho.model";
import { Produto } from "./../../paginas/produtos/produto/produto.model";

@Injectable({
  providedIn: "root"
})
export class CarrinhoService {

  itens: CarrinhoModel[] = [];

  constructor() {}

  limpar() {
    this.itens = [];
  }

  addProduto(produto: Produto) {
    let verificaProduto = this.itens.find( ( vProd ) => vProd.produto.id === produto.id )
    if (verificaProduto) {
      verificaProduto.quantidade = verificaProduto.quantidade + 1;
      verificaProduto.valorTotal =  verificaProduto.valorTotal + verificaProduto.valor;
    } 
    else {
      this.itens.push( new CarrinhoModel( produto ) )
      
    }
  }

  removeProduto(produto: any) {
    this.itens.splice( this.itens.indexOf( produto), 1 )
  }

  total() {
    return this.itens
      .map( produto => produto.valor() )
      .reduce( ( prev, valor ) => prev + valor, 0 );
  }
}
