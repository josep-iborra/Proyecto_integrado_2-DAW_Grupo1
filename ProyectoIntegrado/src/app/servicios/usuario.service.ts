import { Injectable, NgZone } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError, BehaviorSubject } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';


export class User {
  id!: any;
  email!: String;
  nombre!: any;
  apellidos!: any;
  telefono!: any;
  password!: String;
  roles!: any;
}

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {

  private userSubject!: BehaviorSubject<User>;
  public user!: Observable<User>;

  constructor(
    private httpClient: HttpClient,
    private router: Router,
    private ngZone: NgZone
  ) {
    const aux = localStorage.getItem('user');
    this.userSubject = new BehaviorSubject<User>(JSON.parse(aux || '{}'));
    this.user = this.userSubject.asObservable();
  }

  public get userValue(): User {
    return this.userSubject.value;
  }

  REST_API_USER: string = 'http://localhost:8000/api/user';
  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');

  AddUser(data: User): Observable<any> {
    let API_URL = 'http://localhost:8000/api/addUser';
    return this.httpClient.post(API_URL, data)
      .pipe(
        catchError(this.handleError)
      )
  }

  GetUsers() {
    return this.httpClient.get(this.REST_API_USER);
  }

  GetUser(id: any): Observable<any> {
    let API_URL = '' + this.REST_API_USER + '/' + id;
    return this.httpClient.get(API_URL, { headers: this.httpHeaders })
      .pipe(map((res: any) => {
        return res || {}
      }),
        catchError(this.handleError)
      )
  }

  updateUser(id: any, data: any): Observable<any> {
    let API_URL = '' + this.REST_API_USER + '/' + id;
    return this.httpClient.put(API_URL, data, { headers: this.httpHeaders })
      .pipe(
        catchError(this.handleError)
      )
  }

  deleteUser(id: any): Observable<any> {
    let API_URL = '' + this.REST_API_USER + '/' + id;
    return this.httpClient.delete(API_URL, { headers: this.httpHeaders }).pipe(
      catchError(this.handleError)
    )
  }

  login(data: any) {
    let API_URL = 'http://localhost:8000/login';
    return this.httpClient.post(API_URL, data, { headers: this.httpHeaders })
      .pipe(map((user: any) => {
        localStorage.setItem('user', JSON.stringify(user));
        const fecha = new Date();
        localStorage.setItem('date', '' + fecha.getTime());
        this.userSubject.next(user);
        return user;
      }),
        catchError(this.handleError)
      )
  }

  logout() {
    localStorage.removeItem('user');

  }

  GetUserByEmail(email: any): Observable<any> {
    let API_URL = 'http://localhost:8000/api/usuario/' + email;
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
    console.log(errorMessage);
    return throwError(errorMessage);
  }
}
