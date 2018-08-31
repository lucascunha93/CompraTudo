import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'ct-ofertas',
  templateUrl: './ofertas.component.html',
  styleUrls: ['./ofertas.component.css']
})
export class OfertasComponent implements OnInit {

  produtos = [
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: "R$4589,90" },
    { img:"assets/img/iphonex.jpg", nome: "Apple Iphone X", valor: "R$3999,90" },
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: "R$4589,90" },
    { img:"assets/img/mac.jpg", nome: "MacBook Air 2018", valor: "R$4589,90" }
  ]

  constructor() { }

  ngOnInit() {
  }

}
