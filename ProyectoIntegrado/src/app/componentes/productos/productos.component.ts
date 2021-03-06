import { Component, OnInit } from '@angular/core';
import { EmpresaService } from 'src/app/servicios/empresa.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-productos',
  templateUrl: './productos.component.html',
  styleUrls: ['./productos.component.css']
})
export class ProductosComponent implements OnInit {

  getId: any;
  productos!: any;

  constructor(private empresaService: EmpresaService, private activatedRoute: ActivatedRoute) {
    this.getId = this.activatedRoute.snapshot.paramMap.get('id');
    this.empresaService.GetEmpresaBySubCategoria(this.getId).subscribe(res => {
      console.log('::');
      console.log(res);
      this.productos = []; this.productos.push(res);

    });
    console.log(this.productos);
  }

  ngOnInit(): void {
  }

}
