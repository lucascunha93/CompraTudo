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

  getOfertas(): Observable<Produto[]> {
    return this.http.get<Produto[]>(`${Util.url}/ofertas`);
  }

  getSlider(): Observable<Produto[]> {
    return this.http.get<Produto[]>(`${Util.url}/slider`);
  }

  getProdutos(): Observable<Produto[]> {
    return this.http.get<Produto[]>(`${Util.url}/produtos`);
  }

}
