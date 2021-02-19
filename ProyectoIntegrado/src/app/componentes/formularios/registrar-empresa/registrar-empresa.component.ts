import { Component, OnInit, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { EmpresaService } from './../../../servicios/empresa.service';
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

  constructor(
    public formBuilder: FormBuilder,
    private router: Router,
    private empresaService: EmpresaService,
    private ngZone: NgZone,
    private usuarioService: UsuarioService

  ) {
    this.user = this.usuarioService.userValue;
    const aux = new User();
    aux.apellidos = this.user.apellidos;
    aux.email = this.user.email;
    aux.id = this.user.id;
    aux.nombre = this.user.nombre;
    aux.password = this.user.password;
    aux.roles = this.user.roles;
    aux.telefono = this.user.telefono;
    console.log("------------------------");
    console.log(this.user);
    this.empForm = this.formBuilder.group({
      nombre: [''],
      categoria: [''],
      localidad: [''],
      codigoPostal: [''],
      descripcion: [''],
      idUsuario: [this.user.id]
    });
  }

  ngOnInit() { }

  onSubmit(): any {
    console.log(this.empForm.value);
    this.empresaService.AddEmpresa(this.empForm.value)
      .subscribe(() => {
        console.log('Data added successfully!')
        this.ngZone.run(() => this.router.navigateByUrl('/perfil'))
      });
  }

}
