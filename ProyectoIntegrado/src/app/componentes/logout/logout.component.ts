import { Component, OnInit, NgZone } from '@angular/core';
import { UsuarioService } from './../../servicios/usuario.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-logout',
  templateUrl: './logout.component.html',
  styleUrls: ['./logout.component.css']
})
export class LogoutComponent implements OnInit {

  reloaded: any;

  constructor(
    private usuariosService: UsuarioService,
    private ngZone: NgZone,
    private router: Router
  ) {
    usuariosService.logout();
    this.ngZone.run(() => this.router.navigateByUrl('/login'));
  }

  ngOnInit(): void {
  }

}
