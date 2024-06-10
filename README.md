<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre el sistema

API para obtener el listado de tareas relacionadas a cada usuario y empresas

## Puntos de entrada 
/companies/{search?}   -> tipo GET
Obtenemos todas las empresas que estan registradas en el sistema
Si se le añade un segundo valor a la url, solo obtenemos las compañias que coincidan con el valor de búsqueda ingresado. 

--------------------------------------
/task/create  -> tipo POST
Creamos una nueva tarea en el sistema. Debemos mandar los siguientes valores:
company_id que es el id de la compañia,
name  que es el nombre de la tarea,
description que es la descripción de la tarea,
user_id que es el id del usuario al que se le va asignar la tarea.

Este endpoint realiza una validación para determinar si el usuario al que se intenta asignar una nueva tarea tiene menos de 5 tareas pendientes. Si el usuario ya tiene 5 o más tareas pendientes, no será posible crear una nueva. 


--------------------------------------
/user/{id}  -> tipo GET
Obtenemos todas las tareas que tiene un usuario en especifico. 


## Capturas de pantalla 
[![creando-Tarea.png](https://i.postimg.cc/5tPvmSB3/creando-Tarea.png)](https://postimg.cc/7C2fH7QG)
[![tarea-por-empresa.png](https://i.postimg.cc/RFyHkCbJ/tarea-por-empresa.png)](https://postimg.cc/gXyjRppG)
[![tareas-empresas.png](https://i.postimg.cc/FzSLNt2W/tareas-empresas.png)](https://postimg.cc/ZvTRxQYp)
[![tarea-User.png](https://i.postimg.cc/44Htztm6/tarea-User.png)](https://postimg.cc/jCKLTD62)
[![validacion.png](https://i.postimg.cc/7YvzX62p/validacion.png)](https://postimg.cc/vDzDZGXz)



