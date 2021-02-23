import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';

export class Resena {
  id!: any;
  mensaje!: any;
  id_usuario!: any;
  id_vendedor!: any;
}

@Injectable({
  providedIn: 'root'
})
export class ResenasService {

  constructor(private httpClient: HttpClient) { }

  REST_API: string = 'http://localhost:8000/api/resena';
  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');
  AddResena(data: Resena): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addResena';
    return this.httpClient.post(API_URL, data)
      .pipe(
        catchError(this.handleError)
      )
  }

  GetResenas() {
    return this.httpClient.get(this.REST_API);
  }

  GetResena(id: any): Observable<any> {
    let API_URL = '' + this.REST_API + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  GetResenasByVendedor(id: any) {
    return this.httpClient.get('http://localhost:8000/api/resenaVendedor/' + id);
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
