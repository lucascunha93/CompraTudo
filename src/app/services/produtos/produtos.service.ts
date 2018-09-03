import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";

import { Produto } from "./../../paginas/produtos/produto/produto.model";
import { Util } from "./../../../Util";

@Injectable({
  providedIn: "root"
})
export class ProdutosService {
  constructor(private http: HttpClient) {}

  prod: Produto[] = [
    { img: "assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 },
    { img: "assets/img/iphonex.jpg", nome: "Apple Iphone X", valor: 3999.99 },
    {  img: "assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 },
    {  img: "assets/img/mac.jpg", nome: "MacBook Air 2018", valor: 4589.99 }
  ]


  getOfertas(): Observable<Produto[]> {
    return this.http.get<Produto[]>(`${Util.url}/produtos`);
  }
}
