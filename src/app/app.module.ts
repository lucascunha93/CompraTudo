import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AngularFontAwesomeModule } from 'angular-font-awesome';

import { RouterModule } from '@angular/router';
import { ROUTES } from './app.routes';

import { AppComponent } from './app.component';
import { HeaderComponent } from './paginas/header/header.component';
import { NavComponent } from './paginas/nav/nav.component';
import { CarouselComponent } from './paginas/home/carousel/carousel.component';
import { OfertasComponent } from './paginas/home/ofertas/ofertas.component';
import { ContatoComponent } from './paginas/contato/contato/contato.component';
import { ProdutosComponent } from './paginas/produtos/produtos/produtos.component';
import { CarrinhoComponent } from './paginas/carrinho/carrinho/carrinho.component';
import { SobreComponent } from './paginas/sobre/sobre/sobre.component';
import { HomeComponent } from './paginas/home/home.component';
import { ProdutoComponent } from './produtos/produto/produto/produto.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    NavComponent,
    CarouselComponent,
    OfertasComponent,
    ContatoComponent,
    ProdutosComponent,
    CarrinhoComponent,
    SobreComponent,
    HomeComponent,
    ProdutoComponent
  ],
  imports: [
    BrowserModule,
    AngularFontAwesomeModule,
    RouterModule.forRoot(ROUTES)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
