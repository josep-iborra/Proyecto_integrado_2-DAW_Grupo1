import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';


export class Messages {
  id!: any;
  asunto!: any;
  mensaje!: any;
  fecha!: any;
  idEmisor!: any;
  idReceptor!: any;
}

@Injectable({
  providedIn: 'root'
})
export class MessagesService {

  constructor(private httpClient: HttpClient) { }

  REST_API_MESSAGE: string = 'http://localhost:8000/api/mensaje';
  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');
  AddUser(data: Messages): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addMensaje';
    return this.httpClient.post(API_URL, data)
      .pipe(
        catchError(this.handleError)
      )
  }

  GetUsers() {
    return this.httpClient.get(this.REST_API_MESSAGE);
  }

  GetUser(id: any): Observable<any> {
    let API_URL = '' + this.REST_API_MESSAGE + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  updateUser(id: any, data: any): Observable<any> {
    let API_URL = '' + this.REST_API_MESSAGE + '/' + id;
    return this.httpClient.put(API_URL, data, { headers: this.httpHeaders })
      .pipe(
        catchError(this.handleError)
      )
  }

  deleteUser(id: any): Observable<any> {
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
