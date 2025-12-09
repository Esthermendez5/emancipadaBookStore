# 📚 EmancipadaBookStore  
### Entregable 02_3 — Módulo funcional basado en MVC + Trazabilidad en WordPress

Este repositorio contiene el desarrollo del módulo **“La Emancipada BookStore”**, creado sobre WordPress, integrando la arquitectura **MVC (Modelo–Vista–Controlador)** mediante un **Plugin personalizado**, dado que WordPress no sigue MVC de forma nativa.

---

# 📌 1. Contexto del Proyecto

Dado que se trabajó la librería *“La Emancipada”* directamente en WordPress usando un **constructor visual (Ovation Elements)** y un **Tema personalizado**, fue necesario adaptar la arquitectura del entregable.

WordPress **NO** está diseñado bajo MVC estricto. Sin embargo, sí permite crear:

✔ **Temas** → Vistas  
✔ **Plugins** → Lógica modular  
✔ **Clases PHP** → Modelos y Controladores  

Por eso, para cumplir con el entregable, se implementó un **Plugin propio** que sí utiliza separación clara entre Modelo, Vista y Controlador.

---

# 📌 2. ¿Por Qué los Archivos del Tema NO Son Modelos?

Los archivos del tema que normalmente genera WordPress, tales como:

- `style.css`  
- `functions.php`  
- `index.php`  
- `page.php`  
- `header.php`  
- `footer.php`  
- `archive.php`  
- etc.

cumplen funciones que **no pertenecen a la capa de Modelo**:

### 🚫 Archivos de Vista (V)
Ejemplos:  
`page.php`, `index.php`, `header.php`, `footer.php`, `Single.php`, etc.

Estos archivos solo **muestran contenido en pantalla** (HTML + PHP).

### 🚫 Archivos de Controlador/Orquestación (C)
Ejemplo:  
`functions.php`

Contiene hooks, actions y filtros que controlan el flujo de WordPress, pero **NO son Modelos**.

---

# 📌 3. Solución: Creación de un Plugin con Modelo Real

Para cumplir con el patrón MVC fue necesario crear una **carpeta de Plugin** con:

[Modelo](emancipadaPlugins/modelo/BookModel.php)



### ✔ **BookModel.php**
Función:  
Gestiona la carga de categorías o libros para alimentar el módulo del menú circular.

---

# 📌 4. Arquitectura del Proyecto (Adaptación MVC)

### 🗂 Estructura real en el repositorio:
[Controlador](Controlador)
[Vista](Vista)
[Modelo](emancipadaPlugins/modelo/BookModel.php)



