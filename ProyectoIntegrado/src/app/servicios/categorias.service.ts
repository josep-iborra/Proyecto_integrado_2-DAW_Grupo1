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

  GetCategorias() {
    return this.httpClient.get('http://localhost:8000/api/categorias');
  }
}
