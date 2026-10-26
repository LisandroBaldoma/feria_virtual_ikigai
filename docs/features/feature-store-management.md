# Creación y administración de tienda

## Objetivo

Permitir que un usuario autenticado cree una única tienda y administre su
información pública básica desde un espacio privado.

## Alcance

- Un usuario autenticado puede crear una sola tienda.
- La creación solicita título, descripción, imagen de perfil, subdominio,
  categoría y tipo de tienda.
- El subdominio debe ser único y no podrá modificarse después de crear la
  tienda.
- El tipo de tienda será físico o digital y no podrá modificarse después de su
  creación.
- La tienda se crea sin aprobación previa, pero no queda disponible
  públicamente hasta que el dueño de la plataforma la apruebe.
- El proveedor puede editar posteriormente el título, la descripción y la
  imagen de perfil de su propia tienda.
- El proveedor solo puede consultar y modificar su propia tienda.

## Fuera de alcance

- Aprobación, suspensión o desactivación de tiendas por el dueño de la
  plataforma.
- Página pública de tienda y resolución técnica de subdominios.
- Productos, archivos, pagos, envíos, suscripciones e integraciones externas.
- Creación y administración de categorías, que corresponde al dueño de la
  plataforma.

## Reglas de negocio

- Cada usuario puede tener como máximo una tienda.
- El subdominio identifica a una única tienda y debe rechazarse si ya está en
  uso.
- El subdominio y el tipo de tienda son permanentes después de la creación.
- La tienda conserva un estado que impide su publicación hasta la aprobación
  administrativa definida en funcionalidades posteriores.

## Interfaz

- Los usuarios sin tienda ven una entrada para crearla.
- El formulario de creación informa que el subdominio y el tipo no podrán
  cambiarse después de confirmar la creación.
- Los proveedores con tienda ven un formulario de configuración con los campos
  editables y los valores permanentes mostrados sin controles de edición.
- Los errores de validación se muestran junto a cada campo, incluido el
  conflicto de subdominio.

## Criterios de aceptación

- Un usuario autenticado puede crear una tienda con datos válidos.
- No puede crear una segunda tienda.
- No puede crear una tienda con un subdominio existente.
- Puede modificar título, descripción e imagen de perfil de su propia tienda.
- No puede modificar el subdominio ni el tipo de tienda después de crearla.
- No puede administrar la tienda de otra cuenta.

## Decisión confirmada

La creación de tienda admite tipos físico y digital desde esta primera
implementación. La restricción técnica se actualizó para reflejarlo.

## Decisiones de implementación

- Las categorías iniciales se crean mediante un seeder. Su administración se
  mantiene fuera de alcance hasta la funcionalidad de categorías.
- La imagen de perfil se almacena en el disco público configurable de Laravel
  durante esta etapa.
