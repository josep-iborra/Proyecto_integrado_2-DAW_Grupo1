import { Component, OnInit } from '@angular/core';
import { from } from 'rxjs';
import { User } from 'src/app/servicios/usuario.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'ProyectoIntegrado';
  user: User;

  constructor(private usuarioService: UsuarioService) {
    this.user = this.usuarioService.userValue;
    console.log(this.user);
  }

  checkLogin = () => {
    this.user = this.usuarioService.userValue;
    if (this.user.id == undefined) {
      return true;
    }
    else {
      return false;
    }
  }

  navbarOpen = false;

  toggleNavbar() {
    this.navbarOpen = !this.navbarOpen;
  }
}
