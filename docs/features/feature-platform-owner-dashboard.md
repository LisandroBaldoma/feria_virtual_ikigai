# Panel del dueño de la plataforma

## Objetivo

Proporcionar al dueño de la plataforma un espacio privado global desde el que
pueda supervisar el marketplace y administrar recursos de cualquier tienda.

## Alcance

- Un dueño autorizado puede acceder a un panel independiente del contexto de
  una tienda.
- El panel muestra un resumen global de tiendas, proveedores, pedidos,
  suscripciones y reseñas cuando esas funcionalidades estén disponibles.
- El panel centraliza accesos a la administración de tiendas, proveedores,
  categorías de tiendas, pedidos, suscripciones, pagos de suscripciones,
  reseñas, tiendas destacadas y productos destacados de proveedores.
- Las áreas aún no implementadas se muestran como próximas y no enlazan a
  rutas inexistentes.
- La administración operativa de cada recurso se incorporará junto con la
  funcionalidad correspondiente.

## Fuera de alcance

- Configuración de una comisión global o distribución de ingresos.
- Categorías de productos; las categorías clasifican exclusivamente tiendas.
- Gestión de productos, pedidos, reseñas, suscripciones o pagos de
  suscripciones, que requieren sus funcionalidades específicas.
- Integraciones con Mercado Libre, Andreani u otros servicios externos.
- Cambios en el panel del proveedor, salvo los enlaces o estados que dependan
  de futuras acciones administrativas.

## Reglas de negocio

- Solo el dueño autorizado puede acceder al panel y a sus futuras áreas de
  administración global.
- El dueño puede consultar información de cualquier tienda; no queda limitado
  a la tienda asociada a su propia cuenta.
- Las categorías son recursos globales administrados por el dueño y se
  asignan a tiendas, no a productos.
- Una tienda podrá publicarse únicamente cuando reciba aprobación
  administrativa; las acciones de aprobación, suspensión y desactivación se
  implementarán en una etapa posterior.
- Las suscripciones disponibles son mensual y anual, y sus pagos requieren
  verificación manual del dueño.

## Interfaz

- El panel presenta una vista general del marketplace y tarjetas de acceso a
  sus áreas administrativas.
- Cada tarjeta describe brevemente la responsabilidad correspondiente.
- Las áreas disponibles dirigen a sus rutas funcionales; las pendientes se
  identifican sin simular acciones que todavía no existen.
- Un usuario no autorizado no puede ver ni acceder al panel.

## Criterios de aceptación

- El dueño autorizado puede acceder al panel global.
- Un usuario autenticado que no sea dueño recibe una respuesta de acceso no
  autorizado.
- El panel no utiliza ni expone el contexto de una única tienda.
- El panel presenta los accesos previstos para la administración global.
- El panel no incluye comisión global ni categorías de productos.

## Decisión técnica confirmada

La cuenta del dueño se identifica mediante el atributo booleano
`is_platform_owner` en el usuario. Las rutas globales se protegen mediante un
Gate de Laravel. La condición de proveedor se conserva en la relación entre el
usuario y su tienda; cualquier usuario autenticado puede actuar como comprador.
No se incorpora un paquete de roles o permisos en esta etapa.
