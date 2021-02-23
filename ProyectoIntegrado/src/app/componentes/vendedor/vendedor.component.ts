import { Component, OnInit, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { EmpresaService } from 'src/app/servicios/empresa.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { ActivatedRoute } from '@angular/router';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';

@Component({
  selector: 'app-vendedor',
  templateUrl: './vendedor.component.html',
  styleUrls: ['./vendedor.component.css']
})
export class VendedorComponent implements OnInit {

  getId: any;
  vendedor!: any;
  empresa!: any;
  closeResult = '';
  content: any;

  constructor(
    private usuariosService: UsuarioService,
    private empresaService: EmpresaService,
    private activatedRoute: ActivatedRoute,
    private modalService: NgbModal,
    private ngzone: NgZone,
    private router: Router
  ) {
    if (localStorage.getItem('user') == undefined) {
      this.ngzone.run(() => this.router.navigateByUrl('/aviso'));
    }
    this.getId = this.activatedRoute.snapshot.paramMap.get('id');
    this.empresaService.GetEmpresaByUserId(this.getId).subscribe(res => { console.log('::'); console.log(res); this.empresa = res; });
    this.usuariosService.GetUser(this.getId).subscribe(res => { console.log('::'); console.log(res); this.vendedor = res; });
  }
  open(content: any) {
    this.modalService.open(content, { ariaLabelledBy: 'modal-basic-title' }).result.then((result) => {
      this.closeResult = `Closed with: ${result}`;
    }, (reason) => {
      this.closeResult = `Dismissed ${this.getDismissReason(reason)}`;
    });
  }

  private getDismissReason(reason: any): string {
    if (reason === ModalDismissReasons.ESC) {
      return 'by pressing ESC';
    } else if (reason === ModalDismissReasons.BACKDROP_CLICK) {
      return 'by clicking on a backdrop';
    } else {
      return `with: ${reason}`;
    }
  }
  ngOnInit(): void {
  }

}
