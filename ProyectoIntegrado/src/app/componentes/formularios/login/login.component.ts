import { Component, OnInit, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { UsuarioService } from './../../../servicios/usuario.service';
import { FormGroup, FormBuilder, ReactiveFormsModule } from "@angular/forms";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  userForm: FormGroup;

  constructor(
    public formBuilder: FormBuilder,
    private router: Router,
    private usuariosService: UsuarioService,
    private ngZone: NgZone
  ) {
    this.userForm = this.formBuilder.group({
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
