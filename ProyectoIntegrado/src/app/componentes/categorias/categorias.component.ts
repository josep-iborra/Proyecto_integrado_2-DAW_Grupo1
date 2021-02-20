import { Component, OnInit } from '@angular/core';
import { CategoriasService } from 'src/app/servicios/categorias.service'

@Component({
  selector: 'app-categorias',
  templateUrl: './categorias.component.html',
  styleUrls: ['./categorias.component.css']
})
export class CategoriasComponent implements OnInit {

  categorias!: any;

  constructor(private categoriaService: CategoriasService) { 
    this.categoriaService.GetCategorias().subscribe(res =>{ console.log('::'); console.log(res); this.categorias = res;});
    console.log(this.categorias);
  }

  ngOnInit(): void {
  }

}
