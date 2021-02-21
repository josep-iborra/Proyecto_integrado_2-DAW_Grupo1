import { Component, OnInit } from '@angular/core';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { EmpresaService } from 'src/app/servicios/empresa.service';

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.component.html',
  styleUrls: ['./perfil.component.css']
})
export class PerfilComponent implements OnInit {

  usuario!: any;
  user !: any;
  empresa !: any;

  constructor(private usuarioService: UsuarioService, private empresaService: EmpresaService) {
    this.user = this.usuarioService.userValue;
    this.usuarioService.GetUser(this.user.id).subscribe(res => { console.log('::'); console.log(res); this.usuario = res; });
    this.empresaService.GetEmpresaByUserId(this.user.id).subscribe(res => { console.log('::'); console.log(res); this.empresa = res; });
    console.log(this.usuario);
  }

  ngOnInit(): void {
  }

}
