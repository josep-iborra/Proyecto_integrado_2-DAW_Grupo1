import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError, BehaviorSubject } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';
import { EditarEmpresaComponent } from '../componentes/formularios/editar-empresa/editar-empresa.component';

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

  constructor(private httpClient: HttpClient, private router: Router) {

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
    return this.httpClient.get(this.REST_API);
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

  handleError(error: HttpErrorResponse) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    console.log(errorMessage);
    return throwError(errorMessage);
  }
}
