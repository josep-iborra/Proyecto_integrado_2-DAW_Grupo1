import { Component, OnInit } from '@angular/core';
import { EmpresaService } from 'src/app/servicios/empresa.service'
import { FormGroup, FormBuilder } from "@angular/forms";

@Component({
  selector: 'app-editar-empresa',
  templateUrl: './editar-empresa.component.html',
  styleUrls: ['./editar-empresa.component.css']
})
export class EditarEmpresaComponent implements OnInit {

  updateForm!: FormGroup;
  empresa: any;

  constructor(
    public formBuilder: FormBuilder,
    private empresaService: EmpresaService,
  ) {



  }

  ngOnInit(): void {
  }
  onUpdate(): any {
    console.log(this.updateForm.value);
  }
}