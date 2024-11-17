# Sanji Zero
Sanji Zero es una aplicacion desarrollada en la materia Analisis Financiero - ANF115, del ciclo II año 2022, para satisfacer con el proyecto solicitado por dicha materia. La intencion de este repositorio es ayudar a los nuevos brindando un ejemplo de una aplicacion desarrollada.

## Acerca de Sanji Zero
Sanji Zero es capaz de:
 - Generar Balances Generales
 - Estados de Resultado
 - Graficas de las cuentas ingresadas
 - Leer un excel
 - Gestion de usuarios
 - Gestion de empresas
 - Gestion de roles
 - Analisis horizontal
 - Analisis vertical
 - Ratios financieros

 <br>

## Como instalarlo

### Primero debes instalar composer, php, xampp (busca un tutorial)

1. Cambie los valores del archivo [.env.example](.env.example) por los de su base de datos, ademas de cambiar el nombre por **.env**.
2. El documento de excel [Plantilla.xlsx](Plantilla.xlsx) debe de ser movido a la carpeta de [storage/app/plantillasExcel/](storage/app/plantillasExcel/).
3. Copiar la carpeta de vendor de un proyecto de laravel, create uno nuevo y de ahi lo copias, incluso el **.env** lo puedes sacar de ahi si gustas para no complicarte xd
4. En la terminal corre el comando  
``` terminal
composer i
```
5. Luego siempre en la terminal corre   
``` terminal
php artisan migrate:fresh --seed
```
6. Luego corre el comando
``` terminal
php artisan serve
```
7. Luego solo debes acceder a la ruta otorgada por defecto suele ser **127.0.0.1:8000**

> El usuario administrador es 'zero@sanji.com' su contraseña es 'a'

<br>

## Licencia
Sanji Zero esta bajo la licencia [MIT license](https://opensource.org/licenses/MIT).  
Nuestro proyecto solo es un ejemplo de como nosotros en nuestro tiempo desarrolllamos esta aplicacion, no nos hacemos responsables de cualquier caso de plagio, Confiamos en nuestros compañeros que puede tomar este humilde proyecto de inspiracion y crear algo mucho mejor.