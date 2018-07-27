# Tema curs 1

## 1. MVC model
   Vizionati acest [video](https://www.youtube.com/watch?v=1IsL6g2ixak)

## 2. Cont Github
Creati un cont pe Github (**daca nu aveti**) si faceti **fork** la [proiect](https://github.com/RowebDev/php-intern-2018.git)

## 3. Laracasts
Vizionati capitolele **01 - 21** din [Laravel from Scratch](https://laracasts.com/series/laravel-from-scratch-2017)
## 4. Proiect
Creati un host nou *http://tema1.local* in **XAMPP**
Instalati **Laravel**, in folderul unde ati fork-uit proiectul Roweb, asa cum ati vazut pe [Laracasts](https://laracasts.com/series/laravel-from-scratch-2017)
Creati o baza de date noua, cu numele *practica2018*. Creati **doua** tabele denumite *companies* si *employees*. Adaugati date de test in cele 2 tabele. Campurile lor sunt:
    
    Tabel companies
        - id [unsigned int - cheie primara]
        - name [varchar 32]
        - description [text]
    Tabel employees
        - id [unsigned int - cheie primara]
        - company_id [int - cheie straina]
        - name [varchar 32]
Exportati si baza de date in fisierul **db.sql**, in radacina proiectului. Commit pe GIT cu tot proiectul, in repo-ul fork-uit de voi.



# Tema curs 2

## 1. Laravel CRUD (Create Read Update Delete)

    Creati un CRUD cu urmatoarele specificatii:
    - porniti de la un template de Bootstrap
    - folositi structura de baza de date creata la Tema 1 (folosind migratii)
    - Creati sectiuni de administrare / listare pentru Companies si Employees care sa foloseasca toate operatiile CRUD

    Commit pe GIT cu noul proiect
    
## 2. REST API Principles
Cititi [articolul urmator](https://www.vinaysahni.com/best-practices-for-a-pragmatic-restful-api#restful)

## 3. Lumen
Cititi documentatia pentru microframework-ul Lumen:
 - [video](https://laracasts.com/lessons/introducing-lumen)
 - [documentatie scrisa](https://lumen.laravel.com/docs/5.6)