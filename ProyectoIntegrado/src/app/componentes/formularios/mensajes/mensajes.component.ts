import { Component, OnInit, NgZone } from '@angular/core';
import { MessagesService } from 'src/app/servicios/messages.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';
import { FormGroup, FormBuilder } from '@angular/forms';
import { Router, ActivatedRoute } from '@angular/router';

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
  receptor: any;
  newMessageForm!: FormGroup;
  msg: any;

  constructor(
    private modalService: NgbModal,
    private messageService: MessagesService,
    private usuarioService: UsuarioService,
    public formBuilder: FormBuilder,
    private router: Router,
    private ngZone: NgZone,
    private activatedRoute: ActivatedRoute
  ) {
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
      this.newMessageForm = this.formBuilder.group({
        Receptor: [''],
        idReceptor: [''],
        idEmisor: this.user.id,
        fecha: [''],
        asunto: [''],
        mensaje: ['']
      });
    });

    if (localStorage.getItem('user') == undefined) {
      this.ngZone.run(() => this.router.navigateByUrl('/aviso'));
    }
  }

  mostrarMsg(id: any) {
    for (let i = 0; i < Object.keys(this.mensajes).length; i++) {
      document.getElementById('nuevo')?.setAttribute('style', 'display:none');
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
    for (let i = 0; i < Object.keys(this.mensajes).length; i++) {
      document.getElementById('msg' + i)?.setAttribute('style', 'display:none');
    }
    document.getElementById('nuevo')?.setAttribute('style', 'display:content');
  }

  descartar() {

    document.getElementById('nuevo')?.setAttribute('style', 'display:none');
  }

  onSubmit(): any {
    console.log(this.newMessageForm.value);

    this.usuarioService.GetUserByEmail(this.newMessageForm.value['Receptor']).subscribe(res => {
      console.log('::');
      console.log(res);
      this.receptor = res;
      this.newMessageForm.value['idReceptor'] = this.receptor.id;
      console.log(this.newMessageForm.value);
      this.msg = {
        asunto: this.newMessageForm.value['asunto'],
        fecha: this.newMessageForm.value['fecha'],
        idEmisor: this.newMessageForm.value['idEmisor'],
        idReceptor: this.newMessageForm.value['idReceptor'],
        mensaje: this.newMessageForm.value['mensaje']
      };
    });

    this.messageService.AddMsg(this.msg)
      .subscribe(() => {
        console.log('Data added successfully!');
        alert('Mensaje enviado');
      }, (err) => {
        console.log(err);
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
}


