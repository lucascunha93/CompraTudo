import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AngularFontAwesomeModule } from 'angular-font-awesome';

import { RouterModule } from '@angular/router';
import { ROUTES } from './app.routes';

import { AppComponent } from './app.component';
import { HeaderComponent } from './paginas/header/header.component';
import { NavComponent } from './paginas/nav/nav.component';
import { FooterComponent } from './paginas/footer/footer.component';
import { HomeComponent } from './paginas/home/home.component';
import { CarouselComponent } from './paginas/home/carousel/carousel.component';
import { OfertasComponent } from './paginas/home/ofertas/ofertas.component';
import { ContatoComponent } from './paginas/contato/contato.component';
import { ProdutosComponent } from './paginas/produtos/produtos.component';
import { CarrinhoComponent } from './paginas/carrinho/carrinho/carrinho.component';
import { SobreComponent } from './paginas/sobre/sobre/sobre.component';
import { ProdutoComponent } from './paginas/produtos/produto/produto.component';

import { ProdutosService } from './services/produtos/produtos.service';
import { HttpClientModule } from '@angular/common/http';

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
    ProdutoComponent,
    FooterComponent,
  ],
  imports: [
    BrowserModule,
    AngularFontAwesomeModule,
    HttpClientModule,
    RouterModule.forRoot(ROUTES)
  ],
  providers: [ ProdutosService ],
  bootstrap: [AppComponent]
})
export class AppModule { }
