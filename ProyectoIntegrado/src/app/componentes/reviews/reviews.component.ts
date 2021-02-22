import { Component, OnInit } from '@angular/core';
import { ResenasService } from 'src/app/servicios/resenas.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-reviews',
  templateUrl: './reviews.component.html',
  styleUrls: ['./reviews.component.css']
})
export class ReviewsComponent implements OnInit {

  reviews!: any;
  getId: any;

  constructor(private categoriaService: ResenasService, private activatedRoute: ActivatedRoute) {
    this.getId = this.activatedRoute.snapshot.paramMap.get('id');
    this.categoriaService.GetResenasByVendedor(this.getId).subscribe(res => { console.log('::'); console.log(res); this.reviews = res; });
    console.log(this.reviews);
  }

  ngOnInit(): void {
  }

}
