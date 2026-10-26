# Registro e inicio de sesión

## Resumen

Esta funcionalidad permite crear una cuenta e iniciar sesión con correo electrónico y contraseña o con una cuenta de Google. Toda cuenta comienza con las funciones de comprador y podrá convertirse en proveedora al crear una tienda; esa conversión no introduce roles ni permisos en esta etapa.

La aplicación reutiliza la autenticación integrada de Laravel mediante Fortify e Inertia. El registro por correo incorpora los campos requeridos, Google se integra mediante Socialite y la verificación de correo permanece desactivada conforme al alcance.

## Requisitos

| ID | Requisito | Origen | Estado frente a la implementación y pruebas existentes |
| --- | --- | --- |
| R1 | El usuario puede registrarse con correo electrónico y contraseña. | `docs/spec.md`, secciones 14 y 16, regla 53; `docs/technical.md`, sección 13; `docs/features.md`, sección 1. | Cubierto. Fortify, la pantalla Inertia y `CreateNewUser` crean la cuenta; `tests/Feature/Auth/RegistrationTest.php` fue actualizado y ejecutado. |
| R2 | El registro por correo solicita nombre, apellido, nombre de usuario, correo, contraseña y confirmación. El nombre de usuario es visible, obligatorio, no único, tiene entre 3 y 50 caracteres y solo admite letras, números, espacios, guiones y guiones bajos. | `docs/spec.md`, sección 14; `docs/technical.md`, sección 13; `docs/features.md`, sección 1; decisión de producto aprobada. | Cubierto. El esquema, modelo, validación y formulario conservan apellido y nombre de usuario con las reglas aprobadas. |
| R3 | El usuario puede iniciar sesión con correo electrónico y contraseña. | `docs/spec.md`, secciones 14 y 16, regla 53; `docs/technical.md`, sección 13; `docs/features.md`, sección 1. | Cubierto. Fortify usa `email` como identificador, ofrece `GET/POST /login` y aplica límite de cinco intentos por correo e IP. `tests/Feature/Auth/AuthenticationTest.php` cubre pantalla, credenciales válidas e inválidas y límite; fue ejecutado. |
| R4 | El usuario puede registrarse o iniciar sesión con Google mediante `laravel/socialite`, el proveedor Google, redirección y callback web con validación de estado de sesión. | `docs/spec.md`, secciones 3.3, 14 y 16, regla 53; `docs/technical.md`, sección 13; `docs/features.md`, sección 1; decisión de producto aprobada. | Cubierto. Las identidades se persisten por proveedor e ID externo; el callback distingue cuentas vinculadas, correos nuevos y correos existentes. `tests/Feature/Auth/GoogleAuthenticationTest.php` fue agregado y ejecutado. |
| R5 | No se requiere verificación de correo en la primera versión. El acceso autenticado no dependerá de `verified`; conservará `auth` y las futuras comprobaciones de roles, permisos y políticas. | `docs/spec.md`, secciones 14 y 16, regla 54; `docs/technical.md`, sección 13; `docs/features.md`, sección 1; decisión de producto aprobada. | Cubierto. Fortify ya no activa verificación, las rutas protegidas usan `auth` y el panel exige un perfil completo para las cuentas creadas con Google. |
| R6 | La misma cuenta comparte la autenticación de las áreas de comprador y proveedor; comienza como comprador y luego puede crear una tienda. | `docs/spec.md`, secciones 3.2, 14 y 16, reglas 52 y 53; `docs/technical.md`, secciones 13 y 15; `docs/features.md`, sección 1. | Pendiente de las funcionalidades de tienda y control de acceso. El modelo actual no define roles ni permisos, y no hay tienda ni pruebas de esa transición. No corresponde implementarlo aquí. |

## Criterios de aceptación

- Una persona puede abrir el formulario de registro por correo y crear una cuenta aportando nombre, apellido, nombre de usuario visible obligatorio de 3 a 50 caracteres, correo, contraseña y confirmación de contraseña. El nombre de usuario solo admite letras, números, espacios, guiones y guiones bajos; no es único ni se usa para iniciar sesión.
- Una persona puede abrir el formulario de inicio de sesión e iniciar sesión con correo electrónico y contraseña válidos.
- Una contraseña inválida no autentica al usuario y los intentos de inicio de sesión respetan el límite configurado.
- La cuenta creada con correo y contraseña no requiere verificar su correo para acceder a las áreas autenticadas disponibles; no se marcará artificialmente como verificada.
- La opción «Continuar con Google» usa redirección y callback de `laravel/socialite` con validación de estado mediante sesión, sin `stateless()`.
- Si la identidad Google ya está vinculada, inicia sesión en la cuenta asociada. Si no hay cuenta con ese correo, se crea una cuenta sin contraseña y se solicitan los datos obligatorios que Google no haya proporcionado, incluido el nombre de usuario, antes de acceder al panel. Si el correo pertenece a una cuenta existente, no se vincula automáticamente y la vinculación se realiza tras autenticarse con el método actual desde la cuenta.
- El acceso con Google conserva los roles y permisos de la cuenta asociada y no asigna permisos administrativos automáticamente.
- La cuenta seguirá siendo única y compartida entre las futuras áreas de comprador y proveedor. La asignación de roles y permisos queda fuera de esta funcionalidad.

## Implementación existente y cobertura de pruebas

La base proviene de la autenticación integrada prevista por `docs/features/Feature 00 — Inicialización y configuración base del proyecto.md`, secciones 12 y 13. En concreto:

- `app/Providers/FortifyServiceProvider.php` configura las vistas Inertia, el alta mediante `CreateNewUser` y los límites de inicio de sesión.
- `config/fortify.php` activa registro y no activa verificación de correo.
- `resources/js/pages/auth/register.tsx` y `resources/js/pages/auth/login.tsx` incluyen el acceso con correo y la acción «Continuar con Google».
- `app/Actions/Fortify/CreateNewUser.php`, `app/Models/User.php`, las migraciones de usuarios y `SocialIdentity` persisten los datos del perfil y las identidades externas.
- `routes/web.php` protege el panel con `auth` y exige completar los datos de perfil a las cuentas Google antes de acceder.

### Pruebas encontradas

- `tests/Feature/Auth/RegistrationTest.php`: renderizado del registro y alta por correo.
- `tests/Feature/Auth/AuthenticationTest.php`: renderizado del inicio de sesión, credenciales válidas e inválidas, doble factor, cierre de sesión y límite de intentos.
- `tests/Feature/Auth/EmailVerificationTest.php` y `tests/Feature/Auth/VerificationNotificationTest.php`: flujo de verificación de correo actualmente habilitado y contrario a R5.
- `tests/Feature/Auth/TwoFactorChallengeTest.php`, `tests/Feature/Auth/PasswordResetTest.php` y `tests/Feature/Auth/PasswordConfirmationTest.php`: capacidades adicionales de Fortify, no requeridas por esta funcionalidad.

### Pruebas ejecutadas

Se ejecutó `php artisan test --compact tests/Feature/Auth/RegistrationTest.php tests/Feature/Auth/AuthenticationTest.php tests/Feature/Auth/GoogleAuthenticationTest.php tests/Feature/DashboardTest.php tests/Feature/Settings/ProfileUpdateTest.php`: 23 pruebas y 84 aserciones aprobadas. También se ejecutaron `npm run types:check` y `npm run build` sin errores.

No se ejecutaron las pruebas de verificación de correo, doble factor, restablecimiento ni confirmación de contraseña. Haberlas encontrado no implica que hayan sido ejecutadas ni que demuestren cumplimiento de los requisitos de esta funcionalidad.

## Preguntas pendientes

- La funcionalidad posterior de roles, permisos y políticas deberá definir qué panel corresponde a cada cuenta. Esta funcionalidad solo conservará la autorización existente y no otorgará privilegios al autenticar con Google.

## Implementación completada

### 1. Completar los datos requeridos del registro por correo

Se extendieron el esquema de usuarios, el modelo, la acción de Fortify y el formulario Inertia para solicitar, validar y conservar apellido y nombre de usuario. El nombre de usuario es visible, obligatorio, no único, tiene entre 3 y 50 caracteres y solo acepta letras, números, espacios, guiones y guiones bajos.

#### Tests

- [Existente] `tests/Feature/Auth/RegistrationTest.php`: registro con los seis campos requeridos y rechazo de un nombre de usuario inválido.
- [Existente] `tests/Feature/Auth/AuthenticationTest.php`: inicio de sesión válido por correo después del alta de campos.

### 2. Ajustar la configuración al requisito de no verificar el correo

Se desactivó la verificación de correo de Fortify y se retiró `verified` de las áreas cuyo acceso solo requiere autenticación. Se conservan `auth` y las futuras comprobaciones de roles, permisos y políticas, sin marcar artificialmente los correos como verificados.

#### Tests

- [Existente] `tests/Feature/DashboardTest.php`: una cuenta tradicional no verificada accede al panel.
- [Existente] `tests/Feature/Auth/AuthenticationTest.php`: inicio de sesión válido e inválido tras el cambio de configuración.

### 3. Incorporar el acceso y la vinculación de cuentas con Google

Se incorporó `laravel/socialite` con el proveedor Google y credenciales de entorno. La redirección y callback web conservan la validación de estado de sesión, sin `stateless()`, y las pantallas ofrecen «Continuar con Google».

Las identidades externas se persisten por proveedor e ID de usuario del proveedor. Una identidad ya vinculada inicia sesión en su cuenta asociada. Para un correo sin cuenta se crea una cuenta sin contraseña y se solicita completar los datos obligatorios ausentes antes del panel. Para un correo existente se impide la vinculación automática y se ofrece «Vincular Google» desde Perfil tras autenticar con el método actual. La implementación no modifica roles o permisos ni otorga privilegios administrativos.

#### Tests

- [Existente] `tests/Feature/Auth/GoogleAuthenticationTest.php`: identidad vinculada, cuenta nueva con perfil incompleto, correo existente sin vínculo automático y finalización del registro.
- [Existente] `tests/Feature/Auth/GoogleAuthenticationTest.php`: vinculación manual desde Perfil y persistencia por proveedor e ID externo.
- [Nueva] Cuando se implemente la funcionalidad de roles y permisos, agregar una prueba que confirme que Google no los altera ni concede privilegios administrativos.

## Trabajo aplazado y dependencias

- Roles y permisos: aplazados a una funcionalidad posterior. La futura relación entre cuenta compradora, proveedor y tienda deberá integrar esta autenticación compartida, pero no debe implementarse ni considerarse cumplida ahora.
- Creación de tienda y conversión efectiva a proveedor: dependen de la funcionalidad de tienda; no se resuelven desde el registro o inicio de sesión.
- Doble factor, passkeys y recuperación de contraseña: existen como capacidades del Starter Kit, pero no son requisitos documentados de esta funcionalidad y no se propone modificarlas en esta etapa.

## Desarrollo local con Google

El acceso local único utiliza `http://localhost/feria-virtual-ikigai/public/`.
El archivo `.env` local debe definir
`APP_URL=http://localhost/feria-virtual-ikigai/public/`, no debe definir
`ASSET_URL`, y debe mantener `SESSION_DOMAIN=null` y
`SESSION_SECURE_COOKIE=false` para que la sesión web que valida el estado de
Socialite se conserve durante el retorno de Google.

Las credenciales de Google se mantienen exclusivamente en el entorno local
mediante `GOOGLE_CLIENT_ID` y `GOOGLE_CLIENT_SECRET`. El callback se configura
con `GOOGLE_REDIRECT_URI=http://localhost/feria-virtual-ikigai/public/auth/google/callback`.

En Google Cloud, registrar esta URI de redirección autorizada:

`http://localhost/feria-virtual-ikigai/public/auth/google/callback`

El inicio de sesión usa `GET /auth/google` y el callback anterior. La
vinculación de una cuenta Google ya autenticada se inicia en
`http://localhost/feria-virtual-ikigai/public/settings/social-identities/google`, pero reutiliza el
mismo callback; no se registra una segunda URI de redirección.

## Fuentes

- `AGENTS.md`, instrucciones de documentación y alcance.
- `docs/spec.md`, secciones 3.2, 3.3, 14, 16 y 19.
- `docs/technical.md`, secciones 13, 15, 17 y 18.
- `docs/features.md`, sección 1 y flujos relacionados de las secciones 2 y 3.
- `docs/features/Feature 00 — Inicialización y configuración base del proyecto.md`, secciones 12, 13, 14, 19 y 20.
- Decisiones funcionales aprobadas por el usuario: reglas del nombre de usuario, uso de `laravel/socialite` con Google, vinculación de identidades externas y retiro de `verified` para accesos que solo requieran autenticación.
- Implementación revisada: `app/Actions/Fortify/CreateNewUser.php`, `app/Models/User.php`, `app/Providers/FortifyServiceProvider.php`, `config/fortify.php`, `database/migrations/0001_01_01_000000_create_users_table.php`, `resources/js/pages/auth/register.tsx`, `resources/js/pages/auth/login.tsx` y `routes/web.php`.
- Pruebas revisadas: `tests/Feature/Auth/RegistrationTest.php`, `tests/Feature/Auth/AuthenticationTest.php`, `tests/Feature/Auth/EmailVerificationTest.php`, `tests/Feature/Auth/VerificationNotificationTest.php`, `tests/Feature/Auth/TwoFactorChallengeTest.php`, `tests/Feature/Auth/PasswordResetTest.php` y `tests/Feature/Auth/PasswordConfirmationTest.php`.
