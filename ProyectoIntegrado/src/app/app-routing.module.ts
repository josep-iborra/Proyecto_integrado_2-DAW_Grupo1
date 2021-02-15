import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AddServicioComponent } from './componentes/add-servicio/add-servicio.component';
import { ContactanosComponent } from './componentes/formularios/contactanos/contactanos.component';
import { ContactoComponent } from './componentes/formularios/contacto/contacto.component';
import { LoginComponent } from './componentes/formularios/login/login.component';
import { MensajesComponent } from './componentes/formularios/mensajes/mensajes.component';
import { RegisterComponent } from './componentes/formularios/register/register.component';
import { IndexComponent } from './componentes/index/index.component';
import { PerfilComponent } from './componentes/perfil/perfil.component';
import { ProductosComponent } from './componentes/productos/productos.component';


const routes: Routes = [
  { path: '', pathMatch: 'full', redirectTo: 'index' },
  { path: 'index', component: IndexComponent },
  { path: 'perfil', component: PerfilComponent},
  { path: 'productos', component: ProductosComponent},
  { path: 'crear-servicios', component:AddServicioComponent},
  { path: 'contacto', component:ContactoComponent},
  { path: 'login', component: LoginComponent},
  { path: 'mensajes', component: MensajesComponent},
  { path: 'register', component: RegisterComponent},
  {path:'contactanos', component:ContactanosComponent},
  { path: '**', component: IndexComponent},
  


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
