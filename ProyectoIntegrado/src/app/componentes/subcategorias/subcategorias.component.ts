import { Component, OnInit } from '@angular/core';
import { CategoriasService } from 'src/app/servicios/categorias.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-subcategorias',
  templateUrl: './subcategorias.component.html',
  styleUrls: ['./subcategorias.component.css']
})
export class SubcategoriasComponent implements OnInit {

  getId: any;
  subcategorias!: any;

  constructor(private categoriaService: CategoriasService, private activatedRoute: ActivatedRoute) { 
    this.getId = this.activatedRoute.snapshot.paramMap.get('id');
    this.categoriaService.GetSubCategorias(this.getId).subscribe(res =>{ console.log('::'); console.log(res); this.subcategorias = res;});
    console.log(this.subcategorias);
  }

  ngOnInit(): void {
  }

}
