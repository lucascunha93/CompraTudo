import { Routes } from '@angular/router';

import { HomeComponent } from './paginas/home/home.component';
import { ProdutosComponent } from './paginas/produtos/produtos.component';
import { CarrinhoComponent } from './paginas/carrinho/carrinho/carrinho.component';
import { SobreComponent } from './paginas/sobre/sobre/sobre.component';
import { ContatoComponent } from './paginas/contato/contato/contato.component';

export const ROUTES: Routes = [
    { path: 'home', component: HomeComponent },
    { path: 'produtos', component: ProdutosComponent },
    { path: 'carrinho', component: CarrinhoComponent },
    { path: 'sobre', component: SobreComponent },
    { path: 'contato', component: ContatoComponent }
]