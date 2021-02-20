import { Component, OnInit } from '@angular/core';
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
  date:any;
  login_date:any;
  constructor(private usuarioService: UsuarioService) {
    
    this.login_date = localStorage.getItem('date');
    this.date = new Date().getTime();
    if(this.date - this.login_date >= 3600000){
      localStorage.removeItem('user');
    }
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
