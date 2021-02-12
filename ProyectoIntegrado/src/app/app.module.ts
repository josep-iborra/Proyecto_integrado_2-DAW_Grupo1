import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { IndexComponent } from './componentes/index/index.component';
import { PerfilComponent } from './componentes/perfil/perfil.component';
import { InicioComponent } from './componentes/inicio/inicio.component';
import { AddServicioComponent } from './componentes/add-servicio/add-servicio.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ProductosComponent } from './componentes/productos/productos.component';
import { RegisterComponent } from './componentes/formularios/register/register.component';
import { MensajesComponent } from './componentes/formularios/mensajes/mensajes.component';
import { EditarPerfilComponent } from './formularios/editar-perfil/editar-perfil.component';

@NgModule({
  declarations: [
    AppComponent,
    IndexComponent,
    PerfilComponent,
    InicioComponent,
    AddServicioComponent,
    ProductosComponent,
    RegisterComponent,
    MensajesComponent,
    EditarPerfilComponent,
  ],
  imports: [BrowserModule, AppRoutingModule, NgbModule],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
