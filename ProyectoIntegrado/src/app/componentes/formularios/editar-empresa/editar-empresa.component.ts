import { Component, OnInit, NgZone } from '@angular/core';
import { EmpresaService, Empresa } from 'src/app/servicios/empresa.service';
import { Router } from '@angular/router';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { CategoriasService } from 'src/app/servicios/categorias.service';
import { FormGroup, FormBuilder } from "@angular/forms";
import { JsonPipe } from '@angular/common';

@Component({
  selector: 'app-editar-empresa',
  templateUrl: './editar-empresa.component.html',
  styleUrls: ['./editar-empresa.component.css']
})
export class EditarEmpresaComponent implements OnInit {

  updateForm!: FormGroup;
  empresa!: any;
  user: any;
  eId: any;
  categorias: any;
  subcategorias: any;

  constructor(
    public formBuilder: FormBuilder,
    private empresaService: EmpresaService,
    private usuarioService: UsuarioService,
    private categoriasService: CategoriasService,
    private ngZone: NgZone,
    private router: Router,
  ) {

    this.user = this.usuarioService.userValue;
    this.empresaService.GetCategorias().subscribe(res => { console.log('::'); console.log(res); this.categorias = res; });
    this.categoriasService.GetSubCategorias(this.eId).subscribe(res => { console.log('::'); console.log(res); this.subcategorias = res; });

    this.empresaService.GetEmpresaByUserId(this.user.id).subscribe(res => {
      console.log('.....................................');
      console.log(res);
      this.eId = res['id'];
      this.updateForm.setValue({
        id: res['id'],
        subcategoria: res['subcategoria'],
        categoria: ['categoria'],
        localidad: res['localidad'],
        codigo_postal: res['codigoPostal'],
        descripcion: res['descripcion'],
        idUsuario: res['idUsuario']
      });
    });

    this.updateForm = this.formBuilder.group({
      id: [''],
      categoria: [''],
      subcategoria: [''],
      localidad: [''],
      codigo_postal: [''],
      descripcion: [''],
      idUsuario: ['']
    });
  }

  ngOnInit(): void {
    const subC = document.getElementById('subC');
    subC?.setAttribute('style', 'display:none');
  }
  onUpdate(): any {
    console.log(this.updateForm.value);
    this.empresaService.updateEmpresa(this.eId, this.updateForm.value)
      .subscribe(() => {
        console.log('Data updated successfully!')
      }, (err) => {
        console.log(err);
      });
      this.ngZone.run(() => this.router.navigateByUrl('/editarPerfil'));
  }

  onSelected() {
    const cat = this.updateForm.value['categoria'];
    this.categoriasService.GetSubCategorias(cat).subscribe(res => { console.log('::'); console.log(res); this.subcategorias = res; });
    const subC = document.getElementById('subC');
    subC?.setAttribute('style', 'display:block');
  }

}