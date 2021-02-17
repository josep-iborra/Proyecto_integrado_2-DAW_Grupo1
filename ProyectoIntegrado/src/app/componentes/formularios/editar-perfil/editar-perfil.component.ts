import { Component, OnInit } from '@angular/core'
import { UsuarioService } from 'src/app/servicios/usuario.service'
import { FormGroup, FormBuilder } from "@angular/forms";

@Component({
  selector: 'app-editar-perfil',
  templateUrl: './editar-perfil.component.html',
  styleUrls: ['./editar-perfil.component.css']
})
export class EditarPerfilComponent implements OnInit {

  updateForm: FormGroup;
  user: any;

  constructor(
    public formBuilder: FormBuilder,
    private usuarioService: UsuarioService,
  ) {
    this.user = this.usuarioService.userValue;
    this.usuarioService.GetUser(this.user.id).subscribe(res => {
      this.updateForm.setValue({
        nombre: this.user.nombre,
        apellidos: this.user.apellidos,
        email: this.user.username,
        password: this.user.password,
        telefono: this.user.telefono
      });
    });

    this.updateForm = this.formBuilder.group({
      nombre: [''],
      apellidos: [''],
      email: [''],
      password: [''],
      telefono: ['']
    });
  }

  ngOnInit(): void {
  }
  onUpdate(): any {
    console.log(this.updateForm.value);
    this.usuarioService.updateUser(this.user.id, this.updateForm.value)
      .subscribe(() => {
        this.user = this.usuarioService.userValue;
        console.log(this.user);
        console.log(this.usuarioService.userValue);
        console.log('Data updated successfully!')
      }, (err) => {
        console.log(err);
      });
  }

}
