# **Feature 01 — Inicialización y configuración base del proyecto**

## **1\. Descripción breve**

Inicializar la base técnica de **Feria Virtual IKIGAI** utilizando Laravel y el Starter Kit oficial de React, configurando el proyecto para desarrollo local sobre Laragon.

La creación inicial del proyecto será realizada manualmente por el desarrollador siguiendo el instalador oficial de Laravel y las decisiones definidas en esta feature.

El proyecto deberá quedar preparado con React, TypeScript, Inertia, Tailwind CSS, MySQL, autenticación integrada de Laravel, Pest como framework de testing y Laravel Boost como herramienta de soporte para el desarrollo asistido por IA.

Esta feature no implementará reglas de negocio propias del marketplace.

---

## **2\. Objetivo**

Disponer de una instalación limpia, funcional, reproducible y testeable sobre la cual desarrollar progresivamente las siguientes funcionalidades de Feria Virtual IKIGAI.

Al finalizar esta feature deberán estar funcionando:

* Laravel.  
* React.  
* TypeScript.  
* Inertia.  
* Tailwind CSS.  
* Vite.  
* MySQL.  
* Laravel Built-in Authentication.  
* Pest.  
* Laravel Boost.  
* Entorno local mediante Laragon.  
* Dominio local `.test`.

---

## **3\. Responsabilidad de implementación**

La creación inicial del proyecto será realizada manualmente por el desarrollador.

No deberá delegarse a Codex ni a otro agente de IA la ejecución del instalador inicial de Laravel.

El desarrollador deberá:

1. Ejecutar el instalador oficial de Laravel.  
2. Seleccionar el Starter Kit oficial de React.  
3. Seleccionar Laravel Built-in Authentication como proveedor de autenticación.  
4. Seleccionar Pest como framework de testing.  
5. Completar la creación del proyecto.  
6. Configurar el proyecto para funcionar sobre Laragon.  
7. Configurar MySQL.  
8. Instalar e inicializar Laravel Boost.  
9. Ejecutar las validaciones definidas en esta feature.

Una vez completada esta base, Codex podrá utilizarse para desarrollar las siguientes features del proyecto.

---

## **4\. Stack técnico**

La aplicación utilizará:

### **Backend**

* Laravel.

### **Frontend**

* React.  
* TypeScript.  
* Inertia.  
* Tailwind CSS.  
* Vite.

### **Persistencia**

* MySQL.

### **Autenticación**

* Laravel Built-in Authentication.

### **Testing**

* Pest.

### **Desarrollo asistido por IA**

* Laravel Boost.  
* Codex.

### **Entorno local**

* Windows.  
* Laragon.

---

## **5\. Nombre del proyecto**

Nombre del producto:

`Feria Virtual IKIGAI`

Nombre técnico recomendado:

`feria-virtual-ikigai`

Directorio local esperado:

`C:\laragon\www\feria-virtual-ikigai`

Dominio local esperado:

`http://feria-virtual-ikigai.test`

El dominio `.test` deberá ser proporcionado por la configuración de Virtual Hosts de Laragon.

La aplicación no deberá depender de rutas del tipo:

`http://localhost/feria-virtual-ikigai/public`

---

## **6\. Creación del proyecto**

La creación deberá realizarse mediante las herramientas oficiales de Laravel.

Durante el proceso de instalación deberán seleccionarse las siguientes opciones:

**Starter Kit**

React.

**Authentication Provider**

Laravel Built-in Authentication.

No utilizar WorkOS para esta primera versión.

**Testing Framework**

Pest.

La creación del proyecto deberá producir una aplicación Laravel con React integrado mediante Inertia.

No deberá crearse un frontend React separado del backend Laravel.

---

## **7\. Arquitectura inicial**

La aplicación comenzará como un monolito Laravel.

La estructura conceptual será:

Feria Virtual IKIGAI  
│  
├── Laravel  
│   ├── Controllers  
│   ├── Models  
│   ├── Middleware  
│   ├── Requests  
│   ├── Policies  
│   └── Domain logic futura  
│  
├── Inertia  
│  
├── React \+ TypeScript  
│  
├── Tailwind CSS  
│  
├── Vite  
│  
└── MySQL

No deberán introducirse anticipadamente:

* Microservicios.  
* Frontend desacoplado.  
* API Gateway.  
* CQRS.  
* Event Sourcing.  
* DDD completo.  
* Repository Pattern genérico.  
* Bases de datos independientes por tenant.  
* Redis como requisito.  
* Docker como requisito.  
* Infraestructura adicional que todavía no sea necesaria.

La arquitectura deberá evolucionar únicamente cuando una necesidad funcional o técnica concreta lo justifique.

---

## **8\. Configuración de Laragon**

Laragon será utilizado como entorno de desarrollo local en reemplazo de Laravel Herd.

Laragon deberá proporcionar:

* PHP.  
* MySQL.  
* Servidor web.  
* Virtual Hosts.  
* Resolución local de dominios `.test`.

La intención es conseguir una experiencia de desarrollo equivalente conceptualmente a la proporcionada por Herd, sin introducir dependencias de Laragon dentro del código de la aplicación.

El proyecto deberá poder abrirse mediante:

`http://feria-virtual-ikigai.test`

---

## **9\. Configuración del entorno**

El archivo `.env` deberá contener la configuración necesaria para ejecutar la aplicación localmente.

Deberá existir una `APP_KEY` válida.

Cuando sea necesario podrá generarse mediante:

php artisan key:generate

La configuración de base de datos deberá utilizar MySQL.

Estructura esperada:

DB\_CONNECTION=mysql  
DB\_HOST=127.0.0.1  
DB\_PORT=3306  
DB\_DATABASE=feria\_virtual\_ikigai  
DB\_USERNAME=\<usuario-local\>  
DB\_PASSWORD=\<password-local\>

Las credenciales concretas dependerán de la instalación local de Laragon y no deberán incorporarse al repositorio.

---

## **10\. Base de datos**

La aplicación utilizará una única base de datos MySQL.

En esta feature solamente deberán existir las migraciones proporcionadas por Laravel y por las dependencias oficiales utilizadas durante la instalación.

No deberán crearse todavía tablas correspondientes a:

* Tiendas.  
* Proveedores.  
* Productos.  
* Categorías.  
* Pedidos.  
* Archivos.  
* Carritos.  
* Pagos.  
* Comisiones.  
* Reseñas.  
* Multi-tenancy.

La configuración deberá validarse mediante:

php artisan migrate

Todas las migraciones iniciales deberán ejecutarse correctamente.

---

## **11\. Frontend**

El Starter Kit deberá dejar configurados:

* React.  
* TypeScript.  
* Inertia.  
* Tailwind CSS.  
* Vite.

Las dependencias frontend deberán instalarse correctamente.

El entorno de desarrollo deberá poder ejecutarse mediante:

npm run dev

La aplicación deberá poder compilarse para producción mediante:

npm run build

No deberán existir errores de TypeScript o de compilación que impidan generar el build.

---

## **12\. Autenticación base**

La aplicación utilizará la autenticación integrada de Laravel proporcionada por el Starter Kit.

Esta feature solamente deberá comprobar el funcionamiento de la infraestructura de autenticación.

Como mínimo deberá ser posible:

* Registrar un usuario.  
* Iniciar sesión.  
* Cerrar sesión.  
* Acceder a una página protegida después de autenticarse.  
* Impedir el acceso de usuarios no autenticados a las rutas protegidas correspondientes.

La personalización funcional del registro no pertenece a esta feature.

Por lo tanto, todavía no deberán agregarse los campos específicos requeridos por Feria Virtual IKIGAI:

* Nombre.  
* Apellido.  
* Nombre de usuario.  
* Google authentication.  
* Funciones de comprador.  
* Funciones de proveedor.

Estas reglas deberán implementarse en una feature específica de usuarios y autenticación.

---

## **13\. Autenticación con Google**

La autenticación mediante Google forma parte de los requisitos del producto, pero queda explícitamente fuera de esta feature.

No deberán instalarse anticipadamente paquetes o integraciones OAuth para resolverla.

La solución técnica se decidirá cuando se implemente la feature correspondiente a autenticación.

---

## **14\. Testing**

Pest será el framework de testing oficial del proyecto.

La instalación inicial deberá permitir ejecutar:

php artisan test

y, cuando corresponda:

./vendor/bin/pest

Los tests incluidos por la instalación inicial deberán ejecutarse correctamente.

Esta feature establece además la siguiente convención para el proyecto:

> Las features deberán incorporar tests Pest para sus reglas de negocio, autorización, aislamiento de información y comportamientos críticos siempre que dichos comportamientos puedan verificarse automáticamente.

No se establece como objetivo alcanzar un porcentaje arbitrario de cobertura.

La prioridad será proteger comportamientos relevantes del dominio.

---

## **15\. Laravel Boost**

Laravel Boost deberá formar parte de las dependencias de desarrollo.

No constituye una funcionalidad del marketplace.

Su propósito será mejorar el contexto disponible para las herramientas de IA utilizadas durante el desarrollo.

Deberá instalarse como dependencia `dev` y posteriormente inicializarse siguiendo el procedimiento oficial correspondiente.

Conceptualmente:

composer require laravel/boost \--dev

php artisan boost:install

La instalación deberá configurarse para el entorno de desarrollo utilizado en el proyecto y para su integración con Codex cuando corresponda.

---

## **16\. Laravel Boost y Codex**

Laravel Boost será utilizado como capa de contexto técnico para los agentes de IA.

El flujo de desarrollo previsto para las próximas features será:

spec.md  
   ↓  
technical.md  
   ↓  
features.md  
   ↓  
Feature específica  
   ↓  
Prompt de implementación  
   ↓  
Laravel Boost  
   ↓  
Codex  
   ↓  
Implementación  
   ↓  
Pest  
   ↓  
Revisión

Codex deberá utilizarse como herramienta de implementación asistida y no como sustituto de las decisiones funcionales y arquitectónicas documentadas previamente.

---

## **17\. Multi-tenancy**

No deberá implementarse multi-tenancy durante esta feature.

Sin embargo, la instalación deberá conservar la decisión arquitectónica establecida para el producto:

Una aplicación Laravel  
        \+  
Una base de datos MySQL  
        \+  
Múltiples tiendas  
        \+  
Separación lógica por tienda

La estrategia concreta de aislamiento se implementará posteriormente cuando exista el dominio de tiendas.

No deberán instalarse paquetes de multi-tenancy durante esta feature.

---

## **18\. Control de versiones**

El proyecto deberá quedar preparado para Git.

No deberán versionarse:

.env  
vendor/  
node\_modules/  
credenciales  
secretos  
archivos temporales  
configuraciones locales sensibles

Deberá mantenerse el `.gitignore` apropiado proporcionado por Laravel y ampliarlo solamente cuando exista una necesidad concreta.

El archivo `.env.example` deberá permanecer disponible como referencia de configuración.

---

## **19\. Fuera de alcance**

Esta feature no deberá implementar:

* Personalización definitiva de usuarios.  
* Google OAuth.  
* Roles.  
* Permisos.  
* Super Admin.  
* Comprador.  
* Proveedor.  
* Tiendas.  
* Creación de tiendas.  
* Multi-tenancy.  
* Subdominios dinámicos de tiendas.  
* Productos.  
* Categorías.  
* Archivos digitales.  
* Carrito.  
* Checkout.  
* Mercado Pago / Mercado Libre.  
* Comisiones.  
* Pedidos.  
* Historial de compras.  
* Reseñas.  
* Panel del proveedor.  
* Panel del administrador.  
* Marketplace.  
* Diseño visual definitivo.

Tampoco deberán instalarse dependencias destinadas exclusivamente a resolver estas funcionalidades antes de que sean necesarias.

---

## **20\. Criterios de aceptación**

La feature se considerará implementada cuando se cumplan todos los siguientes criterios:

* El proyecto Laravel fue creado utilizando herramientas oficiales.  
* Se utilizó el Starter Kit oficial de React.  
* React funciona correctamente.  
* TypeScript está configurado.  
* Inertia integra Laravel y React.  
* Tailwind CSS está disponible.  
* Vite funciona correctamente.  
* Laravel Built-in Authentication fue seleccionado.  
* Pest fue seleccionado como framework de testing.  
* MySQL está configurado como base de datos.  
* Existe una `APP_KEY` válida.  
* Las migraciones iniciales se ejecutan correctamente.  
* Es posible registrar un usuario.  
* Es posible iniciar sesión.  
* Es posible cerrar sesión.  
* Las rutas protegidas respetan la autenticación.  
* Los tests iniciales pasan correctamente.  
* El frontend puede ejecutarse en modo desarrollo.  
* El frontend puede generar un build correctamente.  
* Laravel Boost está instalado como dependencia de desarrollo.  
* Laravel Boost está inicializado.  
* Boost queda preparado para utilizarse con Codex.  
* La aplicación funciona desde `feria-virtual-ikigai.test`.  
* No se implementó lógica de negocio fuera del alcance de esta feature.

---

## **21\. Validación final**

Antes de considerar cerrada la feature deberán ejecutarse como mínimo:

php artisan migrate

Resultado esperado:

Migraciones ejecutadas correctamente.

Luego:

php artisan test

Resultado esperado:

Todos los tests pasan.

Finalmente:

npm run build

Resultado esperado:

Build generado sin errores.

También deberá comprobarse manualmente:

http://feria-virtual-ikigai.test

y verificar:

1. La aplicación carga correctamente.  
2. El registro funciona.  
3. El login funciona.  
4. El logout funciona.  
5. Una página protegida requiere autenticación.  
6. No aparecen errores de Laravel, Inertia, React o Vite.

---

## **22\. Definition of Done**

La Feature 01 estará finalizada cuando la aplicación disponga de una base técnica estable sobre Laragon y todas las comprobaciones anteriores sean satisfactorias.

El resultado esperado es:

Feria Virtual IKIGAI  
│  
├── Laravel .................. OK  
├── React .................... OK  
├── TypeScript ............... OK  
├── Inertia .................. OK  
├── Tailwind ................. OK  
├── Vite ..................... OK  
├── MySQL .................... OK  
├── Built-in Authentication . OK  
├── Pest ..................... OK  
├── Laravel Boost ............ OK  
├── Codex integration ........ OK  
└── Laragon .test ............ OK

A partir de este punto podrán comenzar a implementarse las features funcionales del producto utilizando esta base técnica.

