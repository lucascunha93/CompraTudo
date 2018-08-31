import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'ct-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.css']
})
export class CarouselComponent implements OnInit {


  carousel = [
    { img: 'assets/img/mac.jpg', css: 'active' },
    { img: 'assets/img/iphonex.jpg' },
    { img: 'assets/img/iphonex.jpg' }
  ]

  constructor() { }

  ngOnInit() {
  }

}
