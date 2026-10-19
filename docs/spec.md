# Especificación del producto

## 1\. Visión general

Feria Virtual Ikigai es una plataforma e-commerce multi-tenant enfocada en proveedores y feriantes.

Su objetivo principal es digitalizar el modelo de negocio de las ferias presenciales, ofreciendo a los proveedores un espacio propio (stand/tienda virtual) mediante una suscripción mensual o anual para vender productos físicos o digitales a sus clientes de forma directa, ágil y sencilla.

La plataforma funcionará como un marketplace centralizado donde los compradores podrán descubrir tiendas y productos y realizar compras.

El producto tendrá una sola aplicación y una sola base de datos. Cada proveedor podrá administrar únicamente la información asociada con su propia tienda.

---

## 2\. Objetivo del producto

El objetivo es ofrecer una plataforma donde los proveedores puedan abrir una tienda, publicar productos y procesar ventas sin tener que construir o administrar su propio e-commerce.

La plataforma también permitirá al dueño del producto controlar la operación general del marketplace, definir categorías de tiendas, administrar proveedores, supervisar pedidos, configurar los valores de las suscripciones mensual y anual, administrar tiendas destacadas y supervisar los productos destacados seleccionados por los proveedores.

El marketplace también mostrará automáticamente tiendas con mayor volumen de ventas durante el mes actual.

---

## 3\. Participantes principales

### 3.1 Dueño de la plataforma

Es la persona responsable de administrar el marketplace completo.

Podrá:

- Administrar la plataforma.  
- Administrar tiendas y proveedores.  
- Crear y administrar categorías de tiendas.  
- Consultar y administrar pedidos.  
- Configurar los valores de las suscripciones mensual y anual.  
- Verificar manualmente los pagos de suscripciones.  
- Administrar y moderar reseñas.  
- Seleccionar tiendas destacadas.  
- Supervisar los productos destacados definidos por los proveedores.  
- Suspender o desactivar tiendas.  
- Supervisar la operación general del marketplace.

El dueño de la plataforma tendrá acceso a información global y no estará limitado a una sola tienda.

### 3.2 Proveedor

Es un emprendedor o vendedor que utiliza la plataforma para promocionar y comercializar productos desde su stand o tienda virtual. Al crear su tienda deberá definir de forma permanente si comercializará productos físicos o productos digitales.

Podrá:

- Registrarse en la plataforma.  
- Crear y administrar una tienda.  
- Definir de forma permanente si su tienda será de productos físicos o de productos digitales.  
- Definir el subdominio permanente de su tienda.  
- Solicitar la aprobación de su tienda para publicarla.  
- Completar opcionalmente el proceso requerido por Mercado Libre para habilitar ese medio de pago.  
- Completar opcionalmente la integración requerida por Andreani para ofrecer envíos a domicilio.  
- Configurar para su tienda los métodos de entrega disponibles para productos físicos.  
- Configurar un único punto de retiro propio.  
- Configurar un alias y un número de teléfono para recibir transferencias y comprobantes.  
- Crear, editar, activar o desactivar únicamente productos correspondientes al tipo definido para su tienda.  
- Asociar uno o varios archivos con cada producto digital.  
- Asociar imágenes con los productos físicos.  
- Seleccionar productos de su catálogo como destacados.  
- Consultar las ventas realizadas en su tienda.  
- Confirmar o cancelar manualmente pedidos pendientes de transferencia.  
- Administrar únicamente la información perteneciente a su tienda.

Un proveedor no podrá administrar productos, pedidos, archivos ni información perteneciente a otra tienda.

Una misma cuenta podrá utilizar la plataforma como comprador y, además, crear una tienda para convertirse en proveedor.

### 3.3 Comprador

Es la persona que descubre y adquiere productos físicos y digitales dentro del marketplace.

Podrá:

- Registrarse con correo electrónico.  
- Registrarse o iniciar sesión mediante una cuenta de Google.  
- Descubrir tiendas y productos.  
- Consultar la página pública de una tienda.  
- Filtrar tiendas por categoría.  
- Filtrar productos por rango de precio.  
- Agregar productos a un carrito después de iniciar sesión.  
- Realizar el pago mediante Mercado Libre cuando la tienda tenga habilitado ese medio.  
- Realizar el pago mediante transferencia.  
- Seleccionar el método de entrega disponible para productos físicos.  
- Consultar sus compras.  
- Descargar los archivos asociados con los productos digitales adquiridos.  
- Publicar reseñas sobre productos que haya comprado.

---

## 4\. Tiendas

Cada proveedor podrá crear una sola tienda dentro de la plataforma.

Cada tienda tendrá:

- Un subdominio propio y permanente.  
- Un título.  
- Una descripción.  
- Una imagen de perfil.  
- Una página pública.  
- Una categoría.  
- Un catálogo compuesto exclusivamente por productos físicos o exclusivamente por productos digitales, según el tipo definido al crear la tienda.  
- Filtros por rango de precio para sus productos.  
- Un espacio de administración exclusivo para su proveedor.  
- Sus propios productos y ventas.  
- Configuración de medios de pago.  
- Configuración de métodos de entrega para productos físicos.  
- Un único punto de retiro propio, cuando corresponda.  
- Un alias y un número de teléfono para pagos mediante transferencia.

Si el subdominio solicitado ya está ocupado, el proveedor deberá elegir otro.

Una tienda no requerirá aprobación previa del dueño de la plataforma para ser creada.

Una tienda requerirá aprobación previa del dueño de la plataforma para ser publicada. La aprobación administrativa será la única condición necesaria para su publicación.

Al crear la tienda, el proveedor deberá elegir si será una tienda física o una tienda digital. Esta elección será permanente y no podrá modificarse posteriormente.

La integración con Mercado Libre y la integración con Andreani serán opcionales y habilitarán únicamente los medios de pago o entrega correspondientes.

Una tienda aprobada que no tenga Mercado Libre habilitado podrá realizar ventas mediante transferencia.

El dueño de la plataforma podrá suspender o desactivar una tienda.

Una tienda suspendida o desactivada no podrá visitarse públicamente. Su proveedor podrá seguir accediendo a su panel para consultar pedidos existentes y completar la entrega de pedidos físicos ya pagados. Los compradores anteriores podrán continuar descargando los archivos digitales adquiridos.

Cuando una tienda sea suspendida por vencimiento de su suscripción, permanecerá suspendida hasta que el pago correspondiente sea realizado y aprobado.

La información de cada tienda deberá mantenerse separada de la información de las demás tiendas, aunque todas formen parte de la misma plataforma.

---

## 5\. Productos digitales

Los proveedores cuya tienda haya sido definida como tienda digital podrán publicar productos digitales sin aprobación previa del dueño de la plataforma. Una tienda física no podrá crear ni publicar productos digitales.

Los formatos contemplados son:

- PDF.  
- EPUB.  
- Imágenes.  
- Videos.  
- Archivos ZIP.

Los videos se entregarán como archivos descargables y no se reproducirán dentro de la plataforma.

Cada producto digital:

- Pertenece a una sola tienda.  
- Podrá contener hasta cinco archivos.  
- Admitirá archivos de hasta 5 MB cada uno.  
- Podrá estar activo o inactivo.  
- Deberá tener un precio mayor a cero.  
- Podrá ser seleccionado por el proveedor como producto destacado de su catálogo.

No se contemplan productos gratuitos en esta primera versión.

Un producto activo podrá mostrarse dentro de la tienda que lo publica y en las áreas de descubrimiento del marketplace.

Un producto inactivo no estará disponible para nuevas compras.

---

## 5b. Productos físicos

Los proveedores cuya tienda haya sido definida como tienda física podrán publicar productos físicos sin aprobación previa del dueño de la plataforma. Una tienda digital no podrá crear ni publicar productos físicos.

Cada producto físico:

- Pertenece a una sola tienda.  
- Podrá contener hasta cinco imágenes asociadas para su publicación.  
- Podrá estar activo o inactivo.  
- Deberá tener un precio mayor a cero.  
- Deberá tener stock mayor a cero para estar disponible para nuevas compras.  
- Podrá ser seleccionado por el proveedor como producto destacado de su catálogo.

No se contemplan productos gratuitos en esta primera versión.

Un producto activo y con stock disponible podrá mostrarse dentro de la tienda que lo publica y en las áreas de descubrimiento del marketplace.

Un producto inactivo o sin stock no estará disponible para nuevas compras.

Los métodos de entrega se configurarán únicamente en tiendas físicas y se aplicarán a todos sus productos.

---

## 6\. Categorías

Las categorías serán administradas por el dueño de la plataforma.

Las categorías clasificarán exclusivamente tiendas. Los productos no pertenecerán individualmente a categorías; pertenecerán únicamente a su tienda.

Cada tienda pertenecerá a una sola categoría.

Las categorías servirán para:

- Organizar el catálogo de tiendas.  
- Facilitar el descubrimiento de tiendas.  
- Filtrar tiendas dentro del marketplace principal.  
- Mostrar la cantidad de tiendas disponibles dentro de cada categoría.

Los proveedores no podrán crear categorías por su cuenta.

---

## 7\. Marketplace y descubrimiento

La plataforma tendrá una página principal de marketplace.

Desde esta página, los compradores podrán descubrir:

- Productos destacados.  
- Tiendas destacadas.  
- Tiendas con mayor volumen de ventas durante el mes actual.  
- Categorías y la cantidad de tiendas disponibles en cada una.  
- Tiendas filtradas por categoría.  
- Productos filtrados por rango de precio.

No se incluirá búsqueda por texto en esta primera versión.

Cada proveedor podrá seleccionar productos de su propio catálogo como destacados. El marketplace mostrará aleatoriamente un producto destacado por proveedor, evitando que una sola tienda monopolice esta sección.

Las tiendas destacadas serán seleccionadas manualmente por el dueño de la plataforma.

El ranking de tiendas con mayor volumen de ventas se calculará automáticamente tomando como período el mes actual.

El marketplace funcionará como punto de entrada general, mientras que cada tienda conservará su propia página pública y subdominio.

---

## 8\. Carrito de compra

El comprador deberá iniciar sesión antes de agregar productos al carrito.

Un carrito solo podrá contener productos pertenecientes a una misma tienda.

Como cada tienda comercializa un único tipo de producto, el carrito contendrá exclusivamente productos físicos o exclusivamente productos digitales.

No se podrán combinar en una sola compra productos de proveedores o tiendas diferentes.

Cuando un comprador intente agregar un producto de otra tienda, deberá vaciar el carrito actual o finalizar primero la compra pendiente.

El carrito se conservará cuando el usuario cierre sesión o abandone temporalmente la plataforma.

Antes de iniciar el checkout, la plataforma deberá validar nuevamente la información de cada producto.

Si un producto cambió de precio:

- El carrito deberá actualizarse con el precio vigente.  
- El comprador deberá ser informado del cambio.  
- El checkout no continuará hasta que el comprador confirme que acepta el nuevo total.

Si un producto fue desactivado o dejó de estar disponible:

- El producto deberá eliminarse del carrito.  
- El comprador deberá ser informado.  
- El resto de los productos podrá permanecer en el carrito.

Si el stock de un producto físico es inferior a la cantidad solicitada:

- El comprador deberá ser informado.  
- La cantidad deberá poder editarse de acuerdo con el stock disponible.  
- El resto de los productos podrá permanecer en el carrito.

Cuando corresponda un envío mediante Andreani, el costo de envío se calculará únicamente sobre los productos físicos y se sumará al total del pedido.

La cotización de Andreani deberá volver a validarse si se modifican los productos físicos del carrito.

No se admitirán cupones ni descuentos en esta primera versión.

---

## 9\. Checkout y pagos

El checkout podrá realizarse mediante Mercado Libre, cuando la tienda tenga habilitado ese medio, o mediante transferencia coordinada y verificada manualmente por el proveedor.

La plataforma manejará una sola moneda.

Durante una venta:

- El comprador pagará el importe vigente de los productos seleccionados.  
- Si el envío se realiza mediante Andreani, su costo se calculará sobre los productos físicos y se sumará al total.

### 9.1 Mercado Libre

La integración con Mercado Libre será opcional.

Para habilitar Mercado Libre como medio de pago, el proveedor deberá completar el proceso requerido por la plataforma de pagos.

Un proveedor se considerará habilitado cuando Mercado Libre indique que su cuenta puede recibir pagos.

Una tienda sin esta habilitación podrá continuar publicada y vender mediante transferencia.

Los pagos al proveedor se realizarán de acuerdo con la disponibilidad y los tiempos de procesamiento de Mercado Libre.

Cuando un pago falle, el comprador deberá poder intentarlo nuevamente.

Un pedido pagado mediante Mercado Libre se considerará confirmado después de que Mercado Libre confirme que el pago fue exitoso.

### 9.2 Transferencia

Cada proveedor configurará un alias y un número de teléfono.

Cuando el comprador seleccione transferencia como medio de pago, el checkout mostrará el alias y el número de teléfono de la tienda e indicará que el comprador deberá realizar la transferencia y enviar el comprobante al número informado.

El proveedor verificará manualmente el comprobante y aprobará el pago.

El pedido permanecerá pendiente hasta que el proveedor confirme el pago o lo cancele manualmente.

Para productos físicos, el stock correspondiente quedará reservado mientras el pedido permanezca pendiente. La reserva no tendrá vencimiento automático y permanecerá activa hasta la confirmación o cancelación manual del pedido.

Cuando el proveedor confirme el pago, el pedido se considerará confirmado y el stock reservado se descontará definitivamente.

Cuando el proveedor cancele el pedido, la reserva de stock se liberará.

No se contemplan reembolsos, cancelaciones iniciadas por el comprador ni gestión de disputas dentro de esta primera versión. La cancelación manual de pedidos pendientes de transferencia por parte del proveedor forma parte del flujo operativo de ese medio de pago.

---

## 10\. Compras y acceso a archivos de productos digitales

Después de realizar una compra confirmada, el comprador tendrá una sección donde podrá consultar los productos adquiridos.

Desde esta sección podrá:

- Consultar su historial de compras.  
- Identificar los productos comprados.  
- Descargar los archivos incluidos en cada producto digital.  
- Descargar los archivos un número ilimitado de veces mientras continúen disponibles.

El acceso a los archivos será permanente mientras dichos archivos sigan existiendo en la plataforma.

La plataforma deberá informar al comprador que es recomendable descargar y conservar sus archivos, debido a que el proveedor podría eliminarlos posteriormente.

Los archivos no podrán visualizarse dentro de la plataforma; deberán descargarse.

Si un proveedor reemplaza un archivo:

- El enlace disponible para los compradores se actualizará.  
- Los compradores anteriores tendrán acceso a la nueva versión.  
- El proveedor podrá crear un producto nuevo cuando desee vender la nueva versión por separado.

El proveedor podrá eliminar un archivo de la publicación actual del producto. Antes de hacerlo, la plataforma deberá advertirle que el archivo ya fue adquirido por compradores.

Los archivos asociados con compras anteriores deberán conservarse para que los compradores puedan seguir descargándolos desde su sección de compras.

Si un producto deja de estar disponible para nuevas compras, permanecerá visible dentro del historial de quienes ya lo adquirieron.

La suspensión o desactivación de una tienda no deberá eliminar los registros de compras ya realizadas ni impedir que los compradores anteriores descarguen sus archivos.

---

## 10b. Compras y entrega de productos físicos

Después de confirmado el pago de un pedido que contenga productos físicos, el proveedor será responsable de completar su entrega mediante alguno de los métodos habilitados para su tienda.

Solo las tiendas físicas podrán configurar métodos de entrega.

Una tienda física podrá configurar:

- Envío a domicilio mediante Andreani, si tiene habilitada la integración.  
- Retiro en un único punto configurado por el proveedor.  
- Ambos métodos.

La integración con Andreani no será obligatoria. Una tienda podrá vender productos físicos utilizando exclusivamente retiro en su punto configurado.

La información necesaria para calcular un envío mediante Andreani será la requerida por su API y se definirá en la especificación técnica.

En esta primera versión, la plataforma no incorporará funcionalidades adicionales de seguimiento posterior del envío.

Si una tienda es suspendida o desactivada después de que un pedido físico haya sido pagado, el proveedor conservará acceso al pedido y deberá poder completar su entrega aunque la tienda ya no sea públicamente accesible.

---

## 11\. Reseñas

Solo los compradores que hayan adquirido un producto podrán publicar una reseña sobre ese producto.

Cada reseña incluirá:

- Una calificación numérica del 1 al 5\.  
- Un texto escrito por el comprador.

Cada comprador podrá publicar una sola reseña por producto adquirido.

Las reseñas requerirán moderación antes de publicarse.

El dueño de la plataforma podrá aprobar, rechazar o eliminar reseñas.

Los proveedores no podrán responder reseñas.

El comprador no podrá editar una reseña después de enviarla, pero podrá eliminarla. Si elimina su reseña, podrá publicar una nueva posteriormente.

---

## 12\. Panel del dueño de la plataforma

El dueño de la plataforma tendrá un panel de administración global.

Desde este panel podrá administrar:

- La plataforma.  
- Tiendas.  
- Proveedores.  
- Categorías.  
- Pedidos.  
- Los valores de las suscripciones mensual y anual.  
- La verificación manual de los pagos de suscripciones.  
- Reseñas y su moderación.  
- Tiendas destacadas.  
- Supervisión general de los productos destacados definidos por los proveedores.

El panel deberá ofrecer una visión general del marketplace y permitir actuar sobre información de cualquier tienda.

---

## 13\. Panel del proveedor

Cada proveedor tendrá un panel exclusivo para su tienda.

Desde este panel podrá administrar:

- El título de su tienda.  
- La descripción de su tienda.  
- La imagen de perfil de su tienda.  
- El tipo permanente de su tienda, visible pero no editable después de la creación.  
- Los productos correspondientes al tipo de su tienda.  
- Los archivos asociados con sus productos, cuando la tienda sea digital.  
- Las imágenes y el stock de sus productos, cuando la tienda sea física.  
- El estado activo o inactivo de sus productos.  
- Los productos que desea destacar.  
- Sus ventas y pedidos.  
- La confirmación o cancelación de pedidos pendientes de transferencia.  
- Su alias y número de teléfono para transferencias.  
- Los métodos de entrega de su tienda, cuando sea física.  
- Su único punto de retiro, cuando la tienda sea física.  
- Su proceso opcional para habilitar pagos mediante Mercado Libre.  
- Su proceso opcional para habilitar envíos mediante Andreani, cuando la tienda sea física.  
- El estado de su suscripción.

El proveedor solo podrá consultar y modificar información perteneciente a su propia tienda.

El subdominio no podrá modificarse después de crear la tienda.

---

## 14\. Registro e inicio de sesión

Los usuarios podrán registrarse mediante:

- Correo electrónico y contraseña.  
- Una cuenta de Google.

No se requerirá verificación del correo electrónico en esta primera versión.

Para registrarse mediante correo electrónico, el usuario deberá proporcionar:

- Nombre.  
- Apellido.  
- Nombre de usuario.  
- Correo electrónico.  
- Contraseña.  
- Confirmación de contraseña.

Una misma cuenta podrá comprar productos y crear una tienda.

Todos los usuarios comenzarán con las funciones de comprador y podrán convertirse en proveedores al crear su tienda.

---

## 15\. Suscripciones

La plataforma ofrecerá dos modalidades de suscripción para proveedores:

- Suscripción mensual.  
- Suscripción anual.

El dueño de la plataforma podrá configurar el valor de ambas modalidades.

El pago de la suscripción será iniciado por el proveedor y posteriormente verificado manualmente por el dueño de la plataforma.

Cuando el dueño confirme el pago, la suscripción quedará activa por el período correspondiente.

Cuando una suscripción venza, la tienda será suspendida y dejará de estar disponible públicamente.

La suspensión se mantendrá hasta que el proveedor realice el pago correspondiente y este sea aprobado por el dueño de la plataforma.

La suspensión por vencimiento de suscripción no eliminará la tienda, sus productos, sus pedidos ni sus ventas anteriores.

---

## 16\. Reglas principales del producto

1. La plataforma admitirá múltiples tiendas.  
2. Cada proveedor podrá administrar una sola tienda.  
3. Cada tienda utilizará un subdominio único y permanente.  
4. Si un subdominio ya está ocupado, deberá elegirse otro.  
5. Una tienda podrá crearse sin aprobación, pero necesitará aprobación del dueño de la plataforma para publicarse.  
6. Al crear su tienda, el proveedor deberá definir si será una tienda física o una tienda digital.  
7. El tipo de tienda será permanente y no podrá modificarse después de su creación.  
8. Una tienda física solo podrá crear y comercializar productos físicos.  
9. Una tienda digital solo podrá crear y comercializar productos digitales.  
10. Mercado Libre y Andreani serán integraciones opcionales y no condicionarán la publicación de la tienda.  
11. Andreani estará disponible únicamente para tiendas físicas.  
12. El dueño de la plataforma podrá suspender o desactivar tiendas.  
13. Cada proveedor administrará únicamente la información de su tienda.  
14. Cada producto pertenecerá únicamente a una tienda y no tendrá una categoría propia.  
15. Cada producto digital podrá contener hasta cinco archivos.  
16. Cada archivo de producto digital podrá tener un tamaño máximo de 5 MB.  
17. Cada producto físico podrá cargar hasta cinco imágenes para su publicación.  
18. Los productos podrán estar activos o inactivos.  
19. No se admitirán productos gratuitos.  
20. Las categorías clasificarán tiendas, no productos.  
21. Cada tienda pertenecerá a una sola categoría.  
22. Los compradores deberán iniciar sesión para agregar productos al carrito.  
23. Un carrito solo podrá contener productos de una misma tienda.  
24. Como cada tienda tiene un único tipo, un carrito nunca podrá mezclar productos físicos y digitales.  
25. El carrito se conservará entre sesiones.  
26. Los precios, la disponibilidad y el stock, cuando corresponda, se validarán antes del checkout.  
27. El checkout podrá realizarse mediante Mercado Libre, cuando esté habilitado, o transferencia.  
28. La plataforma manejará una sola moneda.  
29. Para transferencias, cada proveedor configurará un alias y un número de teléfono.  
30. Los pedidos por transferencia permanecerán pendientes hasta su confirmación o cancelación manual por el proveedor.  
31. En tiendas físicas, el stock de pedidos por transferencia permanecerá reservado indefinidamente mientras el pedido esté pendiente.  
32. El stock se descontará definitivamente cuando el pago quede confirmado.  
33. Los métodos de entrega se configurarán únicamente para tiendas físicas y a nivel de tienda.  
34. Andreani será opcional.  
35. Cada tienda física podrá configurar un único punto de retiro propio.  
36. El costo de Andreani se calculará sobre los productos físicos y se sumará al total.  
37. La cotización de Andreani se volverá a validar si se modifican los productos físicos del carrito.  
38. No habrá seguimiento posterior de envíos dentro de la plataforma en esta primera versión.  
39. La plataforma ofrecerá suscripciones mensual y anual.  
40. Los pagos de suscripción serán verificados manualmente por el dueño.  
41. Una tienda será suspendida cuando venza su suscripción y permanecerá suspendida hasta la aprobación del nuevo pago.  
42. Los pagos fallidos mediante Mercado Libre podrán volver a intentarse.  
43. No se contemplan reembolsos, cancelaciones iniciadas por el comprador ni disputas.  
44. Los compradores podrán descargar sus archivos digitales de forma ilimitada mientras existan.  
45. Los archivos reemplazados estarán disponibles también para compradores anteriores.  
46. Los productos comprados permanecerán en el historial aunque se desactiven.  
47. Solo los compradores que hayan adquirido un producto podrán reseñarlo.  
48. Cada comprador podrá publicar una sola reseña por producto.  
49. Las reseñas incluirán una calificación del 1 al 5 y un texto.  
50. Las reseñas requerirán moderación.  
51. Una reseña eliminada podrá publicarse nuevamente.  
52. Una misma cuenta podrá actuar como comprador y proveedor.  
53. Los usuarios podrán registrarse con correo y contraseña o con Google.  
54. No se requerirá verificación de correo.  
55. El marketplace no tendrá búsqueda por texto.  
56. El marketplace permitirá filtrar tiendas por categoría y productos por rango de precio.  
57. Cada proveedor seleccionará los productos destacados de su propio catálogo.  
58. El marketplace mostrará aleatoriamente un producto destacado por proveedor.  
59. El dueño seleccionará manualmente las tiendas destacadas.  
60. El marketplace mostrará automáticamente las tiendas con mayor volumen de ventas del mes actual.  
61. Los pedidos físicos ya pagados deberán poder completarse aunque posteriormente la tienda sea suspendida o desactivada.

---

## 17\. Límites actuales del alcance

Esta primera versión no contempla:

- Más de una tienda por proveedor.  
- Cambio de subdominio después de crear la tienda.  
- Carritos con productos de múltiples tiendas.  
- Tiendas que comercialicen simultáneamente productos físicos y digitales.  
- Cambio del tipo de tienda después de su creación.  
- Categorías creadas por proveedores.  
- Categorías individuales para productos.  
- Productos gratuitos.  
- Más de cinco archivos por producto digital.  
- Archivos mayores a 5 MB.  
- Más de cinco imágenes por producto físico.  
- Reproducción o visualización de archivos digitales dentro de la plataforma.  
- Cupones o descuentos.  
- Búsqueda por texto.  
- Múltiples monedas.  
- Reembolsos.  
- Cancelaciones iniciadas por compradores.  
- Gestión de disputas.  
- Respuestas de proveedores a reseñas.  
- Edición de reseñas.  
- Vencimiento automático de pedidos pendientes de transferencia.  
- Seguimiento posterior de envíos físicos dentro de la plataforma.  
- Múltiples puntos de retiro por tienda.  
- Obligatoriedad de Mercado Libre.  
- Obligatoriedad de Andreani.  
- Cobro automático o recurrente de suscripciones.  
- Múltiples aplicaciones independientes por proveedor.  
- Múltiples bases de datos separadas por tienda.  
- Esquemas de base de datos.  
- Endpoints, rutas, archivos, clases o detalles técnicos de implementación.  
- Detalles internos de integración con Mercado Libre.  
- Detalles internos de integración con Andreani.  
- Detalles técnicos sobre almacenamiento o entrega de archivos.  
- Detalles técnicos sobre la resolución de subdominios.  
- Funcionalidades no descritas explícitamente en este documento.

---

## 18\. Preguntas pendientes

No quedan preguntas funcionales pendientes identificadas para esta primera versión.

Los detalles de implementación de las integraciones con Mercado Libre y Andreani, incluyendo la información requerida para cotizar envíos, se definirán en la especificación técnica.

---

## 19\. Criterio general de éxito

El producto cumplirá su objetivo principal cuando:

- Un usuario pueda registrarse con correo y contraseña o con Google.  
- Un usuario pueda crear una sola tienda.  
- La tienda pueda operar desde un subdominio único y permanente.  
- El dueño de la plataforma pueda aprobar una tienda para su publicación.  
- Una tienda aprobada pueda vender mediante transferencia sin depender de Mercado Libre.  
- Un proveedor pueda habilitar opcionalmente Mercado Libre como medio de pago.  
- Un proveedor con tienda física pueda habilitar opcionalmente Andreani como método de envío.  
- El proveedor pueda definir al crear su tienda si comercializará productos físicos o productos digitales.  
- El tipo de tienda permanezca inmutable después de su creación.  
- Una tienda digital pueda publicar únicamente productos digitales y cada producto pueda contener hasta cinco archivos descargables.  
- Una tienda física pueda publicar únicamente productos físicos y administrar imágenes y stock.  
- Un comprador autenticado pueda agregar productos de una sola tienda al carrito sin mezclar productos físicos y digitales.  
- La plataforma pueda validar precios, stock y disponibilidad antes del checkout.  
- Un comprador pueda completar una compra mediante Mercado Libre o transferencia.  
- Los pedidos por transferencia puedan ser aprobados o cancelados manualmente por el proveedor.  
- El stock físico permanezca reservado mientras un pedido por transferencia esté pendiente.  
- El comprador pueda elegir entre los métodos de entrega habilitados por la tienda.  
- La plataforma pueda calcular el costo de Andreani cuando corresponda.  
- La plataforma pueda gestionar suscripciones mensual y anual verificadas manualmente por el dueño.  
- Una tienda con suscripción vencida sea suspendida hasta la aprobación del nuevo pago.  
- El proveedor pueda recibir el ingreso según la disponibilidad de Mercado Libre o confirmar manualmente una transferencia.  
- El comprador pueda consultar sus compras y descargar los archivos digitales adquiridos.  
- Los archivos reemplazados estén disponibles para compradores anteriores.  
- Los pedidos físicos ya pagados puedan completarse aunque posteriormente la tienda sea suspendida.  
- Un comprador pueda publicar una reseña que pase por moderación.  
- Cada proveedor pueda seleccionar productos destacados de su catálogo y el marketplace muestre aleatoriamente uno por proveedor.  
- El marketplace pueda mostrar tiendas destacadas y las tiendas con mayor volumen de ventas del mes actual.  
- El dueño de la plataforma pueda administrar el marketplace completo.  
- Cada proveedor permanezca limitado a la información de su propia tienda.