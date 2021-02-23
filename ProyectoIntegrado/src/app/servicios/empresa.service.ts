import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError, BehaviorSubject } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';
import { EditarEmpresaComponent } from '../componentes/formularios/editar-empresa/editar-empresa.component';
import { User } from 'src/app/servicios/usuario.service';
import { UsuarioService } from 'src/app/servicios/usuario.service';

export class Empresa {
  id!: String;
  nombre!: any;
  categoria!: any;
  localidad!: any;
  codigo_postal!: any;
  descripcion!: any;
  id_user!: any;
}

@Injectable({
  providedIn: 'root'
})
export class EmpresaService {
  user: User;
  pingo: any;

  constructor(private httpClient: HttpClient, private router: Router, private usuarioService: UsuarioService) {
    this.user = this.usuarioService.userValue;
  }

  REST_API: string = 'http://localhost:8000/api/empresa';
  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');


  AddEmpresa(data: Empresa): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addEmpresa';
    return this.httpClient.post(API_URL, data)
      .pipe(
        catchError(this.handleError)
      )
  }

  GetEmpresas() {
    return this.httpClient.get(this.REST_API + 's');
  }

  GetCategorias() {
    return this.httpClient.get('http://localhost:8000/api/categorias');
  }

  GetEmpresa(id: any): Observable<any> {
    let API_URL = '' + this.REST_API + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  updateEmpresa(id: any, data: any): Observable<any> {
    let API_URL = '' + this.REST_API + '/' + id;
    return this.httpClient.put(API_URL, data, { headers: this.httpHeaders })
      .pipe(
        catchError(this.handleError)
      )
  }

  deleteEmpresa(id: any): Observable<any> {
    let API_URL = '' + this.REST_API + '/' + id;
    return this.httpClient.delete(API_URL, { headers: this.httpHeaders }).pipe(
      catchError(this.handleError)
    )
  }

  GetEmpresaByUserId(id: any): Observable<any> {
    let API_URL = "http://localhost:8000/api/empresaUser" + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  GetEmpresaBySubCategoria(id: any): Observable<any> {
    let API_URL = "http://localhost:8000/api/empresaCat" + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  handleError(error: HttpErrorResponse) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
  }
}
