import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Observable } from 'rxjs';

import { ProdutosService } from '../../../../services/produtos/produtos.service';
import { Produto } from '../../produto/produto.model';

@Component({
  selector: 'ct-descricao',
  templateUrl: './descricao.component.html',
  styleUrls: ['./descricao.component.css']
})
export class DescricaoComponent implements OnInit {

  produto: Produto

  constructor( 
    private produtoService: ProdutosService,
    private route: ActivatedRoute     
    ) { }

  ngOnInit() {

    this.produtoService.getProdutoById( this.route.parent.snapshot.params['id'] )
     .subscribe( produto => this.produto = produto )

  }
}
