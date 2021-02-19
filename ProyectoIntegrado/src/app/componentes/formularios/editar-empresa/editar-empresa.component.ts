import { Component, OnInit } from '@angular/core';
import { EmpresaService, Empresa } from 'src/app/servicios/empresa.service'
import { UsuarioService } from 'src/app/servicios/usuario.service'
import { FormGroup, FormBuilder } from "@angular/forms";
import { JsonPipe } from '@angular/common';
import { AnyTxtRecord } from 'dns';

@Component({
  selector: 'app-editar-empresa',
  templateUrl: './editar-empresa.component.html',
  styleUrls: ['./editar-empresa.component.css']
})
export class EditarEmpresaComponent implements OnInit {

  updateForm!: FormGroup;
  empresa!: any;
  user: any;
  eId: any;
  pingo: any;

  constructor(
    public formBuilder: FormBuilder,
    private empresaService: EmpresaService,
    private usuarioService: UsuarioService
  ) {

    this.user = this.usuarioService.userValue;
    this.empresaService.GetEmpresas().subscribe(res =>{ console.log('::'); console.log(res); this.pingo = res;});

    this.empresaService.GetEmpresaByUserId(this.user.id).subscribe(res => {
      this.eId = res['id'];
      this.updateForm.setValue({
        id: res['id'],
        categoria: res['categoria'],
        localidad: res['localidad'],
        codigo_postal: res['codigoPostal'],
        descripcion: res['descripcion'],
        idUsuario: res['idUsuario']
      });
    });

    this.updateForm = this.formBuilder.group({
      id: [''],
      categoria: [''],
      localidad: [''],
      codigo_postal: [''],
      descripcion: [''],
      idUsuario: ['']
    });
  }

  ngOnInit(): void {
  }
  onUpdate(): any {
    console.log(this.updateForm.value);
    this.empresaService.updateEmpresa(this.eId, this.updateForm.value)
      .subscribe(() => {
        console.log('Data updated successfully!')
      }, (err) => {
        console.log(err);
      });
  }

}