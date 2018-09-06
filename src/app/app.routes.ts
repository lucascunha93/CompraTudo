import { Routes } from '@angular/router';

import { HomeComponent } from './paginas/home/home.component';
import { ProdutosComponent } from './paginas/produtos/produtos.component';
import { CarrinhoComponent } from './paginas/carrinho/carrinho.component';
import { SobreComponent } from './paginas/sobre/sobre/sobre.component';
import { ContatoComponent } from './paginas/contato/contato.component';
import { ProdutoDetalheComponent } from './paginas/produtos/produto-detalhe/produto-detalhe.component';

export const ROUTES: Routes = [
    { path: 'home', component: HomeComponent },
    { path: 'produtos', component: ProdutosComponent },
    { path: 'produtos/:id', component: ProdutoDetalheComponent },
    { path: 'carrinho', component: CarrinhoComponent },
    { path: 'sobre', component: SobreComponent },
    { path: 'contato', component: ContatoComponent }
]