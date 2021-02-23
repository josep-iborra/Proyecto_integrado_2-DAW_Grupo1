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
  AddMsg(data: Messages): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addMensaje';
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

  GetMsgByReceptor(id: any): Observable<any> {
    let API_URL = 'http://localhost:8000/api/mensajeByReceptor/' + id;
    return this.httpClient.get(API_URL);
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
