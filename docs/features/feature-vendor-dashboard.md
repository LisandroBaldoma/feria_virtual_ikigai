# Panel del proveedor

## Objetivo

Ofrecer a cada proveedor un espacio privado que centralice el estado de su
tienda y los accesos para administrar únicamente los recursos que le
pertenecen.

## Alcance

- Un usuario con tienda accede a un panel asociado exclusivamente a su tienda.
- El panel muestra la identidad de la tienda, su tipo permanente, su
  subdominio, categoría y estado de aprobación para publicación.
- El panel incluye un acceso funcional a la configuración de tienda existente.
- El panel reserva accesos para productos, archivos, ventas y verificación de
  pagos, indicando que estarán disponibles cuando se implementen las
  funcionalidades correspondientes.
- Un usuario autenticado sin tienda es redirigido al flujo de creación de
  tienda al intentar acceder al panel del proveedor.

## Fuera de alcance

- Gestión de productos físicos o digitales, archivos, imágenes, stock y
  productos destacados.
- Consulta o administración de ventas, pedidos y transferencias.
- Configuración de alias, teléfono, métodos de entrega, punto de retiro,
  Mercado Libre o Andreani.
- Implementación de aprobación administrativa, suscripciones o suspensión de
  tiendas.
- Integraciones externas y el proceso de verificación para recibir pagos.

## Reglas de negocio

- Cada proveedor solo puede consultar información de su propia tienda.
- El panel no se habilita para una cuenta que todavía no creó una tienda.
- El tipo y subdominio de tienda se muestran como valores permanentes, sin
  controles de edición.
- El estado de publicación se deriva de `approved_at`: pendiente cuando es
  nulo y aprobado cuando tiene valor.

## Interfaz

- El panel presenta un resumen de la tienda y tarjetas de acceso a las áreas
  de proveedor.
- La tarjeta de configuración dirige a la edición de tienda.
- Las áreas que dependen de funcionalidades posteriores se muestran como
  próximas, sin enlaces a rutas inexistentes.
- El estado de publicación comunica claramente que una tienda pendiente aún
  no es pública.

## Criterios de aceptación

- Un proveedor con tienda puede consultar su panel privado.
- Un usuario sin tienda es dirigido al formulario de creación de tienda.
- El panel muestra datos de la tienda del usuario autenticado, no de otra
  tienda.
- El panel permite acceder a la configuración de la tienda.
- El panel no ofrece acciones operativas para funcionalidades aún no
  implementadas.
