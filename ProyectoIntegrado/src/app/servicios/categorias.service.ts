import { Injectable } from '@angular/core';
import { catchError, map } from 'rxjs/operators';
import { Observable, throwError, BehaviorSubject } from 'rxjs';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Router } from '@angular/router';

export class Categoria {
  id!: any;
  nombre!: any;
}
@Injectable({
  providedIn: 'root'
})
export class CategoriasService {

  constructor(private httpClient: HttpClient, private router: Router) { }

  httpHeaders = new HttpHeaders().set('Content-Type', 'application/json');
  GetCategorias() {
    return this.httpClient.get('http://localhost:8000/api/categorias', { headers: this.httpHeaders });
  }

  GetSubCategorias(id:any) {
    return this.httpClient.get('http://localhost:8000/api/subcategorias/' + id);
  }
}
