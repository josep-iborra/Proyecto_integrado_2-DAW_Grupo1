import { Component, OnInit } from '@angular/core';
import { from } from 'rxjs';
import { User } from 'src/app/servicios/usuario.service'
import { UsuarioService } from 'src/app/servicios/usuario.service'

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  user: User;

  constructor(private usuarioService: UsuarioService) {
    this.user = this.usuarioService.userValue;
  }

  ngOnInit(): void {
  }



  
}
