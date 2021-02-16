import { Component, OnInit, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { UsuarioService } from './../../../servicios/usuario.service';
import { FormGroup, FormBuilder, ReactiveFormsModule } from "@angular/forms";

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  userForm: FormGroup;

  constructor(
    public formBuilder: FormBuilder,
    private router: Router,
    private usuariosService: UsuarioService,
    private ngZone: NgZone
  ) {
    this.userForm = this.formBuilder.group({
      nombre: [''],
      apellidos: [''],
      telefono: [''],
      email: [''],
      password: ['']
    })
  }

  ngOnInit() { }

  onSubmit(): any {
    console.log(this.userForm.value);
    this.usuariosService.AddUser(this.userForm.value)
      .subscribe(() => {
        console.log('Data added successfully!')
        this.ngZone.run(() => this.router.navigateByUrl('/index'))
      }, (err) => {
        console.log(err);
      });
  }

}
