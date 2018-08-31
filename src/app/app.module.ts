import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AngularFontAwesomeModule } from 'angular-font-awesome';

import { AppComponent } from './app.component';
import { HeaderComponent } from './paginas/header/header.component';
import { NavComponent } from './paginas/nav/nav.component';
import { CarouselComponent } from './paginas/carousel/carousel/carousel.component';
import { OfertasComponent } from './paginas/ofertas/ofertas/ofertas.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    NavComponent,
    CarouselComponent,
    OfertasComponent
  ],
  imports: [
    BrowserModule,
    AngularFontAwesomeModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
