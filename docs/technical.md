\# technical.md

\# Restricciones técnicas iniciales

\#\# 1\. Propósito

\#\# 2\. Stack principal

La aplicación utilizará:

\- Laravel como framework principal del backend.  
\- React para la interfaz de usuario.  
\- TypeScript para el desarrollo del frontend.  
\- Inertia como capa de integración entre Laravel y React.  
\- Tailwind CSS para estilos.  
\- MySQL como base de datos relacional.

La solución será una única aplicación que atenderá:

\---

\#\# 3\. Arquitectura general

La plataforma utilizará una arquitectura monolítica con una sola aplicación y una sola base de datos.

\---

\#\# 6\. Control de acceso

\---

\#\# 13\. Autenticación

La plataforma permitirá registro e inicio de sesión mediante:

\- Correo electrónico y contraseña.  
\- Google.

El registro mediante correo deberá solicitar:

\- Nombre.  
\- Apellido.  
\- Nombre de usuario.  
\- Correo electrónico.  
\- Contraseña.  
\- Confirmación de contraseña.

No se requerirá verificación de correo electrónico en esta primera versión.

La autenticación será compartida por las distintas áreas de la aplicación, ya que una misma cuenta puede actuar como comprador y proveedor.

\---

\#\# 14\. Persistencia y separación de información

MySQL será la única base de datos principal de la aplicación.

La información de todas las tiendas coexistirá dentro de la misma base de datos.

La arquitectura deberá mantener una separación lógica estricta entre la información de diferentes tiendas.

La información global de la plataforma, como categorías y configuración de comisión, deberá poder compartirse entre tiendas cuando corresponda.

La información histórica de compras deberá conservarse incluso cuando un producto deje de estar disponible o una tienda sea suspendida o desactivada.

\---

\#\# 15\. Paneles y superficies de la aplicación

La aplicación tendrá varias superficies funcionales dentro del mismo sistema:

\#\#\# Marketplace público

Permitirá descubrir productos, tiendas, categorías y elementos destacados.

\#\#\# Tiendas públicas

Se resolverán mediante subdominios y mostrarán el catálogo correspondiente a una sola tienda.

\#\#\# Área del comprador

Permitirá consultar compras y acceder a los archivos adquiridos.

\#\#\# Panel del proveedor

Permitirá administrar la única tienda del proveedor, sus productos, archivos, ventas y proceso de verificación.

\#\#\# Panel del dueño de la plataforma

Permitirá administrar información global del marketplace.

Estas superficies deberán compartir la misma aplicación y autenticación cuando corresponda, pero respetando sus reglas de acceso.

\---

\#\# 16\. Límites técnicos iniciales

Para esta primera versión se mantienen las siguientes restricciones:

\- Una sola aplicación.  
\- Una sola base de datos MySQL.  
\- Multi-tenancy propio y ligero.  
\- Una sola tienda por proveedor.  
\- Identificación pública de tiendas mediante subdominios.  
\- Sin bases de datos independientes por tenant.  
\- Sin aplicaciones independientes por tenant.  
\- Sin búsqueda de texto.  
\- Sin múltiples monedas.  
\- Sin productos físicos.  
\- Sin productos gratuitos.  
\- Sin reproducción de archivos dentro de la plataforma.  
\- Sin reembolsos, cancelaciones ni gestión de disputas.  
\- Sin definición en este documento de estructuras internas de código o base de datos.

\---

\#\# 17\. Decisiones técnicas pendientes

Los siguientes puntos no pueden derivarse de la especificación funcional ni de las restricciones técnicas proporcionadas y deberán decidirse antes o durante el diseño técnico detallado.

\#\#\# Infraestructura y despliegue

\- Qué proveedor o plataforma alojará la aplicación.  
\- Cómo se configurarán los subdominios dinámicos en producción.  
\- Cómo se gestionarán certificados HTTPS para los subdominios.  
\- Qué estrategia de despliegue se utilizará.  
\- Qué entornos existirán además de producción.

\#\#\# Archivos

\- Qué servicio o infraestructura almacenará los archivos digitales.  
\- Si los archivos serán almacenados localmente o en almacenamiento de objetos.  
\- Cómo se protegerá técnicamente el acceso a archivos privados.  
\- Cómo se conservarán versiones o copias históricas cuando un archivo vendido sea reemplazado o retirado.  
\- Cómo se gestionará la eliminación física definitiva de archivos que ya no deban conservarse.

\#\#\# Mercado Libre

\- Qué modalidad concreta de integración de Mercado Libre API se utilizará.  
\- Cómo se realizará técnicamente la distribución de ingresos entre plataforma y proveedor.  
\- Qué estrategia se utilizará para sincronizar los estados de pagos y cuentas Connect con la aplicación.  
\- Cómo se manejarán confirmaciones tardías o duplicadas de Mercado Libre.  
\- Qué estados internos representarán un pago pendiente, fallido o completado.  
\- Qué estados internos representarán el proceso de verificación de un proveedor.  
\- Cómo se recuperará la aplicación si Mercado Libre confirma un pago pero la aplicación falla antes de procesarlo completamente.

\#\#\# Autenticación con Google

\- Qué mecanismo concreto se utilizará para integrar Google.  
\- Cómo se resolverán cuentas que utilizan la misma dirección de correo mediante distintos métodos de autenticación.

\#\#\# Procesamiento asíncrono

\- Si la primera versión utilizará procesamiento en segundo plano.  
\- Qué operaciones, si existen, requerirán colas o procesamiento diferido.  
\- Qué mecanismo se utilizaría para reintentar operaciones externas fallidas.

\#\#\# Caché y sesiones

\- Qué mecanismo se utilizará para almacenar sesiones.  
\- Si será necesario utilizar una capa de caché adicional.  
\- Cómo se mantendrá técnicamente el carrito persistente entre sesiones.

\#\#\# Estados del dominio

\- Qué conjunto exacto de estados técnicos representará una tienda.  
\- Qué conjunto exacto de estados técnicos representará un pedido.  
\- Qué conjunto exacto de estados técnicos representará una reseña pendiente de moderación.  
\- Cómo se representarán los cambios de disponibilidad derivados del estado de Mercado Libre API.

\#\#\# Historial de compras

\- Qué información de un producto deberá conservarse como fotografía histórica al momento de una compra.  
\- Cómo se distinguirá técnicamente la información actual de un producto de la información que correspondía al momento de la venta.  
\- Cómo se conservará el acceso histórico a archivos cuando el producto o la tienda cambien posteriormente.

\#\#\# Observabilidad y operación

\- Qué estrategia se utilizará para logs.  
\- Qué errores externos deberán generar alertas.  
\- Qué nivel de auditoría requerirán operaciones sensibles como pagos, suspensiones de tiendas y eliminación de archivos.

\#\#\# Seguridad

\- Qué estrategia concreta se utilizará para proteger descargas privadas.  
\- Qué medidas adicionales se aplicarán a operaciones sensibles.  
\- Qué política de rate limiting será necesaria.  
\- Qué estrategia se utilizará para validar y proteger los archivos subidos por proveedores.

\---

\#\# 18\. Principio arquitectónico

La prioridad técnica de esta primera versión será mantener una arquitectura sencilla.

El sistema deberá comenzar como una única aplicación Laravel con React e Inertia, una única base de datos MySQL y separación lógica de tenants mediante el contexto de tienda.

Las decisiones adicionales deberán introducirse únicamente cuando sean necesarias para cumplir las reglas funcionales del producto o para garantizar la integridad, seguridad y operación correcta de la plataforma.  
