import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { IndexComponent } from './componentes/index/index.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ProductosComponent } from './componentes/productos/productos.component';
import { RegisterComponent } from './componentes/formularios/register/register.component';
import { MensajesComponent } from './componentes/formularios/mensajes/mensajes.component';
import { EditarPerfilComponent } from './componentes/formularios/editar-perfil/editar-perfil.component';
import { AboutComponent } from './componentes/about/about.component';
import { VendedorComponent } from './componentes/vendedor/vendedor.component';
import { LoginComponent } from './componentes/formularios/login/login.component';
import { EnvioMensajeComponent } from './componentes/formularios/envio-mensaje/envio-mensaje.component';
import { ReviewsComponent } from './componentes/reviews/reviews.component';
import { EditarEmpresaComponent } from './componentes/formularios/editar-empresa/editar-empresa.component';
import { RegistrarEmpresaComponent } from './componentes/formularios/registrar-empresa/registrar-empresa.component';
import { CategoriasComponent } from './componentes/categorias/categorias.component';
import { SubcategoriasComponent } from './componentes/subcategorias/subcategorias.component';
import { FaqsComponent } from './componentes/faqs/faqs.component';
import { PoliticaComponent } from './componentes/politica/politica.component';
import { CookiesComponent } from './componentes/cookies/cookies.component';
import { LogoutComponent } from './componentes/logout/logout.component';
import { AvisoComponent } from './componentes/aviso/aviso.component';

@NgModule({
  declarations: [
    AppComponent,
    IndexComponent,
    ProductosComponent,
    RegisterComponent,
    MensajesComponent,
    EditarPerfilComponent,
    AboutComponent,
    VendedorComponent,
    LoginComponent,
    EnvioMensajeComponent,
    ReviewsComponent,
    EditarEmpresaComponent,
    RegistrarEmpresaComponent,
    CategoriasComponent,
    SubcategoriasComponent,
    FaqsComponent,
    PoliticaComponent,
    CookiesComponent,
    LogoutComponent,
    AvisoComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule { }
