import { Component, OnInit, NgZone } from '@angular/core'
import { MessagesService } from 'src/app/servicios/messages.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';
import { FormGroup, FormBuilder } from '@angular/forms';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-envio-mensaje',
  templateUrl: './envio-mensaje.component.html',
  styleUrls: ['./envio-mensaje.component.css']
})
export class EnvioMensajeComponent implements OnInit {

  messageForm: FormGroup;
  user: any;
  ruta: any;
  getId: any;

  constructor(
    public formBuilder: FormBuilder,
    private messageService: MessagesService,
    private userService: UsuarioService,
    private router: Router,
    private ngZone: NgZone,
    private activatedRoute: ActivatedRoute
  ) {
    this.user = this.userService.userValue;
    this.getId = this.activatedRoute.snapshot.paramMap.get('id');
    this.ruta = this.router.url;
    this.messageForm = this.formBuilder.group({
      idReceptor: this.getId,
      idEmisor: this.user.id,
      fecha: [''],
      asunto: [''],
      mensaje: ['']
    });
  }
  ngOnInit(): void {
  }
  onSubmit(): any {
    console.log(this.messageForm.value);
    this.messageService.AddMsg(this.messageForm.value)
      .subscribe(() => {
        console.log('Data added successfully!');
        alert('Mensaje enviado');
        this.ngZone.run(() => this.router.navigateByUrl('/' + this.ruta));
      }, (err) => {
        console.log(err);
      });
  }
}
