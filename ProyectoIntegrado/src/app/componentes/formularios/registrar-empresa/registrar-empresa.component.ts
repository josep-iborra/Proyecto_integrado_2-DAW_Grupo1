import { Component, OnInit, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { EmpresaService } from './../../../servicios/empresa.service';
import { CategoriasService } from './../../../servicios/categorias.service';
import { FormGroup, FormBuilder, ReactiveFormsModule } from "@angular/forms";
import { User } from 'src/app/servicios/usuario.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';

@Component({
  selector: 'app-registrar-empresa',
  templateUrl: './registrar-empresa.component.html',
  styleUrls: ['./registrar-empresa.component.css']
})
export class RegistrarEmpresaComponent implements OnInit {

  empForm: FormGroup;
  user: User;
  categorias: any;
  subcategorias: any;

  constructor(
    public formBuilder: FormBuilder,
    private router: Router,
    private empresaService: EmpresaService,
    private ngZone: NgZone,
    private usuarioService: UsuarioService,
    private categoriasService: CategoriasService

  ) {

    this.user = this.usuarioService.userValue;
    this.empresaService.GetCategorias().subscribe(res => { console.log('::'); console.log(res); this.categorias = res; });

    console.log(this.user);
    this.empForm = this.formBuilder.group({
      nombre: [''],
      categoria: [''],
      localidad: [''],
      codigoPostal: [''],
      descripcion: [''],
      subcategoria: [''],
      idUsuario: [this.user.id]
    });
    if (localStorage.getItem('user') == undefined) {
      this.ngZone.run(() => this.router.navigateByUrl('/aviso'));
    }
  }

  ngOnInit() {
    const subC = document.getElementById('subC');
    subC?.setAttribute('style', 'display:none');
  }

  onSubmit(): any {
    console.log('........................');
    console.log(this.empForm.value);
    this.empresaService.AddEmpresa(this.empForm.value)
      .subscribe(() => {
        console.log('Data added successfully!')
        this.ngZone.run(() => this.router.navigateByUrl('/index'))
      });
      this.ngZone.run(() => this.router.navigateByUrl('/index'));
  }

  onSelected() {
    const cat = this.empForm.value['categoria'];
    this.categoriasService.GetSubCategorias(cat).subscribe(res => { console.log('::'); console.log(res); this.subcategorias = res; });
    const subC = document.getElementById('subC');
    subC?.setAttribute('style', 'display:flex');
  }

}
