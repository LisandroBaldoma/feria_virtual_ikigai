# Categorías de tiendas

## Objetivo

Permitir que el dueño de la plataforma administre las categorías globales que
clasifican las tiendas del marketplace.

## Alcance

- El dueño autorizado puede consultar el listado de categorías de tiendas.
- Cada categoría muestra su nombre, identificador público y cantidad de tiendas
  asociadas.
- El dueño puede crear una categoría indicando su nombre.
- El dueño puede modificar el nombre de una categoría existente.
- El dueño puede eliminar una categoría que no tenga tiendas asociadas.
- Las categorías creadas o actualizadas quedan disponibles al crear nuevas
  tiendas.
- El acceso parte desde el panel del dueño de la plataforma.

## Fuera de alcance

- Categorías de productos; los productos no tienen categorías propias.
- Asignar varias categorías a una tienda.
- Permitir que proveedores o compradores creen, editen o eliminen categorías.
- Reasignar masivamente tiendas entre categorías.
- Filtros públicos del marketplace por categoría, que corresponden a la
  funcionalidad de descubrimiento.
- Edición de la categoría de una tienda existente por su proveedor.

## Reglas de negocio

- Las categorías clasifican exclusivamente tiendas.
- Cada tienda pertenece a una sola categoría.
- Solo el dueño de la plataforma puede administrar categorías.
- El nombre y el identificador público de cada categoría deben ser únicos.
- El identificador público se genera automáticamente a partir del nombre y no
  se edita por separado.
- Una categoría con tiendas asociadas no puede eliminarse.
- Las categorías existentes se conservan como datos globales compartidos por
  todas las tiendas.

## Interfaz

- La administración muestra una tabla o listado de categorías con su cantidad
  de tiendas asociadas.
- El dueño dispone de un formulario para crear categorías y controles para
  editar o eliminar las existentes.
- Los errores de validación se muestran junto al campo de nombre.
- Antes de eliminar, la interfaz solicita confirmación e informa si la
  categoría no puede eliminarse por tener tiendas asociadas.

## Criterios de aceptación

- El dueño puede crear una categoría con un nombre e identificador únicos.
- El dueño puede editar el nombre de una categoría y el identificador se
  actualiza de forma coherente.
- El dueño puede eliminar una categoría sin tiendas asociadas.
- No se puede eliminar una categoría que tenga tiendas asociadas.
- Un usuario que no sea dueño no puede acceder ni modificar categorías.
- Las categorías no se presentan ni se asignan como categorías de productos.

## Decisión de implementación propuesta

La eliminación se bloquea cuando existen tiendas asociadas, en lugar de
reasignarlas o eliminarlas. Esto preserva la integridad de las tiendas y evita
introducir un flujo de reasignación que no está definido en el alcance actual.
