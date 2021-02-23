import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';

export class Productos {
  id!: any;
  titulo!: any;
  precio!: any;
  multimedia!: any;
  descripcion!: any;
  categoria!: any;
  autor_id!: any;
}

@Injectable({
  providedIn: 'root'
})
export class ProductosService {

  constructor(private httpClient: HttpClient) { }

  REST_API_MESSAGE: string = 'http://localhost:8000/api/productos';
  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');
  AddMsg(data: Productos): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addProductos';
    return this.httpClient.post(API_URL, data)
      .pipe(
        catchError(this.handleError)
      )
  }

  GetMsgs() {
    return this.httpClient.get(this.REST_API_MESSAGE);
  }

  GetMsg(id: any): Observable<any> {
    let API_URL = '' + this.REST_API_MESSAGE + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  updateMsg(id: any, data: any): Observable<any> {
    let API_URL = '' + this.REST_API_MESSAGE + '/' + id;
    return this.httpClient.put(API_URL, data, { headers: this.httpHeaders })
      .pipe(
        catchError(this.handleError)
      )
  }

  deleteMsg(id: any): Observable<any> {
    let API_URL = '' + this.REST_API_MESSAGE + '/' + id;
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
