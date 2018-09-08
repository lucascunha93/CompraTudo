import { Produto } from './../../paginas/produtos/produto/produto.model';

export class CarrinhoModel {

    constructor(
        public produto: Produto,
        public quantidade: number = 1 
    ){ }

    valor(): number {
        return this.produto.valor * this.quantidade;
    }


}