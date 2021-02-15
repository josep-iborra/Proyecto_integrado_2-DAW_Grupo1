import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { IndexComponent } from './componentes/index/index.component';
import { PerfilComponent } from './componentes/perfil/perfil.component';
import { AddServicioComponent } from './componentes/add-servicio/add-servicio.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ProductosComponent } from './componentes/productos/productos.component';
import { RegisterComponent } from './componentes/formularios/register/register.component';
import { MensajesComponent } from './componentes/formularios/mensajes/mensajes.component';
import { EditarPerfilComponent } from './componentes/formularios/editar-perfil/editar-perfil.component';
import { AboutComponent } from './componentes/about/about.component';
import { ContactanosComponent } from './componentes/formularios/contactanos/contactanos.component';
import { VendedorComponent } from './componentes/vendedor/vendedor.component';

@NgModule({
  declarations: [
    AppComponent,
    IndexComponent,
    PerfilComponent,
    AddServicioComponent,
    ProductosComponent,
    RegisterComponent,
    MensajesComponent,
    EditarPerfilComponent,
    AboutComponent,
    ContactanosComponent,
    VendedorComponent,
  ],
  imports: [BrowserModule, AppRoutingModule, NgbModule, FormsModule, ReactiveFormsModule, HttpClientModule],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule { }
