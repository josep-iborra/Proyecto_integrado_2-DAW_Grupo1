import { Component, OnInit } from '@angular/core';
import { MessagesService } from 'src/app/servicios/messages.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { createNamedExports } from 'typescript';

@Component({
  selector: 'app-mensajes',
  templateUrl: './mensajes.component.html',
  styleUrls: ['./mensajes.component.css']
})
export class MensajesComponent implements OnInit {

  closeResult = '';
  content: any;
  mensajes: any;
  user: any;
  sender: any;

  constructor(private modalService: NgbModal, private messageService: MessagesService, private usuarioService: UsuarioService) {
    this.user = this.usuarioService.userValue;
    this.sender = [];
    this.messageService.GetMsgByReceptor(this.user.id).subscribe(res => {
      console.log('::');
      console.log(res);
      this.mensajes = res;
      for (let i = 0; i < Object.keys(this.mensajes).length; i++) {
        this.usuarioService.GetUser(this.mensajes[i].idemisor).subscribe(res => { console.log('::'); console.log(res); this.sender[i] = res; });
      }
      console.log(this.sender);
    });
  }

  mostrarMsg(id: any) {
    for (let i = 0; i < Object.keys(this.mensajes).length; i++) {
      document.getElementById('msg' + i)?.setAttribute('style', 'display:none');
    }
    document.getElementById('msg' + id)?.setAttribute('style', 'display:content');
  }

  ngOnInit(): void {
  }

  open(content: any) {
    this.modalService.open(content, { ariaLabelledBy: 'modal-basic-title' }).result.then((result) => {
      this.closeResult = `Closed with: ${result}`;
    }, (reason) => {
      this.closeResult = `Dismissed ${this.getDismissReason(reason)}`;
    });
  }

  escribirMsg() {
    document.getElementById('nuevo')?.setAttribute('style', 'display:content');
  }

  descartar() {

    document.getElementById('nuevo')?.setAttribute('style', 'display:none');
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
}


