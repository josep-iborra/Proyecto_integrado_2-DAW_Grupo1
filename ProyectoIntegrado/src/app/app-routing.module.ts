import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AboutComponent } from './componentes/about/about.component';
import { AddServicioComponent } from './componentes/add-servicio/add-servicio.component';
import { ContactoComponent } from './componentes/formularios/contacto/contacto.component';
import { EditarPerfilComponent } from './componentes/formularios/editar-perfil/editar-perfil.component';
import { EnvioMensajeComponent } from './componentes/formularios/envio-mensaje/envio-mensaje.component';
import { LoginComponent } from './componentes/formularios/login/login.component';
import { MensajesComponent } from './componentes/formularios/mensajes/mensajes.component';
import { RegisterComponent } from './componentes/formularios/register/register.component';
import { IndexComponent } from './componentes/index/index.component';
import { PerfilComponent } from './componentes/perfil/perfil.component';
import { ProductosComponent } from './componentes/productos/productos.component';
import { VendedorComponent } from './componentes/vendedor/vendedor.component';
import { EditarEmpresaComponent } from './componentes/formularios/editar-empresa/editar-empresa.component';
import { RegistrarEmpresaComponent } from './componentes/formularios/registrar-empresa/registrar-empresa.component';
import { CategoriasComponent } from './componentes/categorias/categorias.component';
import { SubcategoriasComponent } from './componentes/subcategorias/subcategorias.component';
import { FaqsComponent } from './componentes/faqs/faqs.component';
import { PoliticaComponent } from './componentes/politica/politica.component';

const routes: Routes = [
  { path: '', pathMatch: 'full', redirectTo: 'index' },
  { path: 'index', component: IndexComponent },
  { path: 'perfil', component: PerfilComponent },
  { path: 'productos/:id', component: ProductosComponent },
  { path: 'crear-servicios', component: AddServicioComponent },
  { path: 'contacto', component: ContactoComponent },
  { path: 'login', component: LoginComponent },
  { path: 'mensajes', component: MensajesComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'registrarEmpresa', component: RegistrarEmpresaComponent },
  { path: 'vendedor', component: VendedorComponent },
  { path: 'editarPerfil', component: EditarPerfilComponent },
  { path: 'editarEmpresa', component: EditarEmpresaComponent },
  { path: 'mensaje-nuevo', component: EnvioMensajeComponent },
  { path: 'about', component: AboutComponent },
  { path: 'categorias', component: CategoriasComponent},
  { path: 'subcategorias/:id', component: SubcategoriasComponent},
  { path: 'faqs', component: FaqsComponent},
  { path: 'politica', component: PoliticaComponent},
  { path: '**', component: IndexComponent },




];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
