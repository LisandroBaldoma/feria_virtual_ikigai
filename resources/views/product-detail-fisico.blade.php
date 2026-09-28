<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  @vite('resources/css/app.css')
  <meta content="web_standard" name="shell-type" />
</head>

<body class="bg-background font-body text-[15px] leading-[24px] text-on-surface antialiased">
  <header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/95 backdrop-blur-xl border-b border-outline-variant/30 shadow-[0_1px_8px_rgba(0,0,0,0.03)]">
    <div class="h-20 max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between gap-gutter">
      <div class="flex items-center gap-space-sm"><a class="flex items-center gap-space-sm group" data-path="recorrer-feria" href="#"><img alt="Ikigai Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1Uc4Cj-7Oyk3C7zlDGLW-hPWmOWLcvCK6KLKBlN0r4_NK1lVEsMw8Lj8RNfmpM-q5sXvs8agc2iUEzC17emXqASh-uJls0kejzel784NTEqBAOONz_NKKtD6CPSMsqPCaljzYSLCgmqGZHMMznGtn6pyX8lmDD84qSs3xZWOKirq-Y51kR0kU-aZur1xCl7j1Qyd1fg2ns-mviovMHuLSLepKnfTVRmyvei9tRFfP1VwNjnoQhpNp-Rep0" /><span class="font-headline font-medium text-[22px] leading-[30px] text-on-surface tracking-tight group-hover:text-primary-container transition-colors">Feria Ikigai</span></a></div>
      <nav class="hidden md:flex items-center gap-space-md lg:gap-space-lg" data-active-classes="bg-surface-container text-primary-container font-semibold"><a class="px-space-sm py-space-xs rounded-lg font-body font-medium text-[15px] text-on-surface-variant hover:text-on-surface transition-colors" data-path="recorrer-feria" href="#">Recorrer Feria</a><a class="px-space-sm py-space-xs rounded-lg font-body font-medium text-[15px] text-on-surface-variant hover:text-on-surface transition-colors" data-path="stands-y-tiendas" href="#">Stands y Tiendas</a><a class="px-space-sm py-space-xs rounded-lg font-body font-medium text-[15px] text-on-surface-variant hover:text-on-surface transition-colors" data-path="categorias" href="#">Categorías</a><a class="px-space-sm py-space-xs rounded-lg font-body font-medium text-[15px] text-on-surface-variant hover:text-on-surface transition-colors" data-path="historias-de-creadores" href="#">Historias de Creadores</a></nav>
      <div class="flex items-center gap-space-md"><a class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-primary-container hover:bg-primary text-on-primary font-body font-semibold text-[15px] shadow-[0_4px_14px_rgba(51,102,204,0.22)] hover:shadow-[0_6px_20px_rgba(9,76,178,0.3)] transition-all" data-path="abrir-mi-stand" href="#">Abrir mi Stand</a><a class="flex items-center rounded-full p-0.5 hover:ring-2 hover:ring-primary-container/50 transition-all" data-path="perfil-artesano" href="#"><img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSkqBDdCwtmEUSTvSwtTMke6eIDU2789iiZ9a3qiNTkoY4R88-dFpmWbBx5vZBAI1cW-ojbaalIb4yK703bad1HS3ppMtPy8aRjHq2-HLp6_CSpbEjAzEl5bfpnRIrxqzhV009efyj8CL8hE1rb-62VBaaM0ROUUuKwmSOjdemc6T2G7PO7uc_AAzWlhnKvC4IA_oR_ytajF6HUosBgnDcwVXuiZoNOY0rgzVOUxJznyj4pp57sD_o_Q" /></a></div>
    </div>
  </header>
  <main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
      <!-- Top Archival Meta & Breadcrumb -->
      <section class="w-full bg-surface border-b border-surface-container-high/60">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-3.5 flex flex-wrap items-center justify-between gap-4">
          <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[13px] font-body text-on-surface-variant">
            <a class="hover:text-primary transition-colors" data-path="recorrer-feria" href="#">Feria Ikigai</a>
            <span class="text-outline-variant font-light">/</span>
            <a class="hover:text-primary transition-colors" data-path="categorias" href="#">Cerámica &amp; Barro</a>
            <span class="text-outline-variant font-light">/</span>
            <span class="text-on-surface font-medium truncate max-w-[200px] sm:max-w-none">Jarra Escultórica en Gres</span>
          </nav>
          <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-container font-label text-[11px] font-bold tracking-wider uppercase">
              <span class="material-symbols-outlined text-[14px]">token</span>
              Pieza física artesanal · Serie limitada (1/8)
            </span>
            <span class="hidden sm:inline-flex items-center gap-1 text-[12px] font-body text-secondary">
              <span class="material-symbols-outlined text-[15px] text-tertiary">verified</span>
              Stand Oficial #48
            </span>
          </div>
        </div>
      </section>
      <!-- Physical Guarantee Ribbon -->
      <section class="w-full bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-3">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-[12.5px] font-body text-on-surface-variant">
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-primary text-[18px]">inventory_2</span>
              <span>Embalaje biodegradable reforzado</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-primary text-[18px]">local_shipping</span>
              <span>Despacho 3–5 días desde Pucón</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-tertiary text-[18px]">workspace_premium</span>
              <span>Certificado firmado por autora</span>
            </div>
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-primary text-[18px]">published_with_changes</span>
              <span>Llegada intacta o reposición íntegra</span>
            </div>
          </div>
        </div>
      </section>
      <!-- Core Showcase Area: Gallery & Acquisition Terminal -->
      <section class="w-full py-10 lg:py-14">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            <!-- Left: Image Gallery & 360 viewer -->
            <div class="lg:col-span-7 flex flex-col gap-5">
              <!-- Main Hero Frame -->
              <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden bg-surface-container shadow-sm group">
                <img alt="Jarra Escultórica en Gres" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" data-alt="High resolution studio photography of a handcrafted sculptural ceramic pitcher with an earthy sand texture, raw volcanic ash glaze gradient from warm ochre to charcoal matte, organic curved handle, soft directional daylight highlighting fine mineral specks, museum editorial quality" id="main-product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXHv3D7RZl9XmB4XbdkX2IV6yWIxo_nX5iahpQ-5vV8QJ9BSgWDsrVaSzlqBbg9M1jTVJ8-J93OnmXNqWQh3TrZdNAjvVQe-bFw8Tzqb6oiRhetTXPBRFZVn8NUJ06AXcEP9K5eZgfPuhBMqNFSy_CznsaJwxaBJw8myRu_IBhRdfqve8n_4HuIB0PuXgP3Sx_l7D72Wp4I42foS4lZ7PKh6_vkz_puBH8QxTUFkLZPBkfNbpJtKsATA" />
                <div class="absolute top-4 left-4 flex flex-col gap-2">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-lowest/90 backdrop-blur-md font-label text-[11px] font-bold uppercase tracking-wider text-on-surface shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    Horneada N° 14 · Fuego de Roble
                  </span>
                </div>
                <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between pointer-events-none">
                  <span class="pointer-events-auto px-3 py-1.5 rounded-lg bg-inverse-surface/80 backdrop-blur-md text-inverse-on-surface font-body text-[12px] flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[15px]">scatter_plot</span>
                    Textura mineral al tacto
                  </span>
                  <button class="pointer-events-auto inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-surface-container-lowest/95 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface text-[12.5px] font-body font-medium shadow-md transition-all active:scale-95" onclick="alert('Visor 360° interactivo cargado. Arrastre horizontalmente para girar la pieza.')" type="button">
                    <span class="material-symbols-outlined text-[17px] text-primary">360</span>
                    Ver en 360° &amp; Escala real
                  </button>
                </div>
              </div>
              <!-- Thumbnails Row -->
              <div class="grid grid-cols-4 gap-3 sm:gap-4">
                <button aria-label="Ver jarra completa con asa" class="thumbnail-btn relative aspect-square rounded-lg overflow-hidden bg-surface-container transition-all ring-2 ring-primary p-0.5" onclick="selectThumbnail(this, 'placeholder', 'Vista frontal con asa ergonómica')" type="button">
                  <img alt="Jarra vista completa" class="w-full h-full object-cover rounded-md" data-alt="Studio shot of ceramic pitcher showing ergonomic hand-pulled handle and natural stoneware form" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8VMXn0Qq9a4Ge7xNFlBLqYsGziQs42wDwzHyyLIuJxE5oaD6I21CxKnPK04M87dU6KQMQewzqcCrPSBZUFz8WwMHjU0JhlhP1biX3xZ4RYce_cc6So3R_k43agEn7NJCP5SV_WtqgI1LRizMsylPvpDUkwmjTTOMfVO60JrtyL6-L-nSt8rCV22y-CAe3reaN1ul7Fy2M9c18Gqk0_dZWgolljtaMOECWVZIMvUmiNN3zKbETZQ8C1w" />
                </button>
                <button aria-label="Ver detalle macro del esmalte de ceniza volcánica" class="thumbnail-btn relative aspect-square rounded-lg overflow-hidden bg-surface-container transition-all hover:opacity-90 p-0.5" onclick="selectThumbnail(this, 'placeholder', 'Macro esmalte ceniza volcánica')" type="button">
                  <img alt="Detalle de esmalte de cenizas" class="w-full h-full object-cover rounded-md" data-alt="Extreme macro close up of rough volcanic ash glaze showing crystalline ochre minerals and crackle texture on natural ceramic surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDG5udS_hB7sHXzNWMrs4opfqF-pR90SH3OnSHCtbX4ttL-g-bP9055QTwADJctCyb3Vvy8iGeRu0dawBLr5MVwijUNOdvsOa9BVwyqliINmaYPYIPtP3h-ijm3IUQ43b1lWVdMGjNwX3pO6w87onYs63BMXFymH1gGBysRtojSzoWg5kPV6_WHaFsPaknSeaLcVSc1Iomef0NVjTXsPZ42ZqR510k4ja8F9xn0Gwrr9vxiYJ84TT7O4A" />
                </button>
                <button aria-label="Ver en contexto con agua y flores" class="thumbnail-btn relative aspect-square rounded-lg overflow-hidden bg-surface-container transition-all hover:opacity-90 p-0.5" onclick="selectThumbnail(this, 'placeholder', 'Escala en mesa con flores secas')" type="button">
                  <img alt="Jarra en uso con flores secas" class="w-full h-full object-cover rounded-md" data-alt="Earthy lifestyle editorial of the stoneware pitcher sitting on a rustic wooden dining table filled with wild dried Andean flowers, soft natural sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjK-DQ3GGI2HDdrs8VDvjyrB1neAakWMaU4ksGIVk74-FhkMefudRab0garDXEtNJgZxN0Wz5BmQM2NMXFNTLttNvQ-6hGVxmz1s55RSoMUlR8aDSkUn9eKsqq08jjR1mgeq-M94Klrc3jrdTV6MlQk3VQToZA1EtSZIDAO18Agh-qBvWvjUEmTP05wx-pQ4LmjdcDaXm-YMBp73zVK1Aa9YRFkahSEeQRppAeeiG6gqb-_Ahin0gsEg" />
                </button>
                <button aria-label="Ver sello de autor grabado en la base" class="thumbnail-btn relative aspect-square rounded-lg overflow-hidden bg-surface-container transition-all hover:opacity-90 p-0.5" onclick="selectThumbnail(this, 'placeholder', 'Sello del taller en base')" type="button">
                  <img alt="Sello del artesano en la base" class="w-full h-full object-cover rounded-md" data-alt="Close up of underside unglazed stoneware base showing hand-stamped potter chop mark of Taller Barro Mestizo and numbered edition mark" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCX18VwClo0JFj9YHSJeRfzmqC325JUJME-hxO0Xp2iG5ZAc0DQ-5ZfsJu_-13q-kFMlaNM8gSRdoMcScCgMqKwSoYpbDDK597ubqQyqNGTJN06Uv5vVanqWJMhcm07SATi96FNGsy3cQLqELC5IVC-ySEa-PEoVzq_36IV26AtS914ulP9mYmpxK4cpS7gcpRTJE8vUtU_0ujRvp2Z6qUcwIgFJr5HeE8Vd5t209Y0RWDLl6JjPn6aow" />
                </button>
              </div>
              <!-- Tactile Manifesto Note -->
              <div class="p-5 rounded-xl bg-surface-container-low flex items-start gap-4">
                <span class="material-symbols-outlined text-tertiary text-[22px] mt-0.5">handshake</span>
                <div class="flex flex-col gap-1 text-[13px] leading-relaxed">
                  <span class="font-headline font-semibold text-on-surface text-[14px]">Nota del conservador sobre la materia viva</span>
                  <p class="text-on-surface-variant font-body">Al ser horneada en atmósfera reductora a 1.250°C, cada jarra presenta variaciones irrepetibles en el depósito de ceniza y gradación del ocre. Ninguna pieza es idéntica a otra.</p>
                </div>
              </div>
            </div>
            <!-- Right: Purchasing & Decision Terminal -->
            <div class="lg:col-span-5 flex flex-col gap-6 lg:sticky lg:top-24">
              <!-- Main Title & Stand Header -->
              <div class="flex flex-col gap-2">
                <div class="flex items-center justify-between">
                  <a class="font-label text-[12px] uppercase font-bold tracking-wider text-primary hover:underline" data-path="stands-y-tiendas" href="#">
                    Taller Barro Mestizo · Stand #48
                  </a>
                  <span class="text-outline text-[12px] font-body">Ref: BM-PUC-24</span>
                </div>
                <h1 class="font-headline text-[30px] sm:text-[34px] leading-[1.2] text-on-surface font-semibold">
                  Jarra Escultórica en Gres: Colección Ceniza &amp; Arcilla
                </h1>
                <div class="flex items-center gap-3 pt-1">
                  <div class="flex items-center text-tertiary">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="font-body font-semibold text-[13.5px] text-on-surface">5.0</span>
                  <span class="text-on-surface-variant text-[13px]">(32 reseñas verificadas de compradores)</span>
                </div>
              </div>
              <!-- Price & Tax Tag -->
              <div class="p-4 rounded-xl bg-surface-container flex items-baseline justify-between">
                <div class="flex items-baseline gap-2">
                  <span class="font-headline text-[32px] font-bold text-on-surface tracking-tight">$28.000</span>
                  <span class="font-label text-[13px] text-secondary font-semibold">CLP</span>
                </div>
                <span class="font-body text-[12px] text-on-surface-variant">IVA incluido · Boleta o Factura</span>
              </div>
              <!-- Live Scarcity Indicator -->
              <div class="flex items-center gap-2.5 px-3.5 py-2.5 rounded-lg bg-error-container/30 text-on-error-container text-[13px] font-body">
                <span class="w-2 h-2 rounded-full bg-error animate-ping"></span>
                <span>Pieza en custodia: <strong>Solo quedan 3 piezas</strong> listas para embalaje inmediato.</span>
              </div>
              <!-- Finishes / Glaze Selection -->
              <div class="flex flex-col gap-3">
                <label class="font-label text-[12px] font-bold uppercase tracking-wider text-on-surface-variant">
                  Acabado Mineral: <span class="text-on-surface font-semibold lowercase first-letter:uppercase" id="selected-finish-name">Esmalte ocre mineral</span>
                </label>
                <div class="grid grid-cols-3 gap-2.5">
                  <button class="finish-btn flex flex-col p-3 rounded-lg bg-surface-container-low text-left ring-2 ring-primary transition-all" onclick="setFinish(this, 'Esmalte Ocre Mineral')" type="button">
                    <span class="w-4 h-4 rounded-full bg-[#bfab49] mb-2 shadow-inner"></span>
                    <span class="font-body text-[12.5px] font-semibold text-on-surface leading-tight">Ocre Mineral</span>
                    <span class="font-body text-[11px] text-on-surface-variant mt-0.5">En stock (3)</span>
                  </button>
                  <button class="finish-btn flex flex-col p-3 rounded-lg bg-surface-container-low text-left hover:bg-surface-container transition-all" onclick="setFinish(this, 'Barro Ahumado Mate')" type="button">
                    <span class="w-4 h-4 rounded-full bg-[#42474b] mb-2 shadow-inner"></span>
                    <span class="font-body text-[12.5px] font-medium text-on-surface leading-tight">Ahumado Mate</span>
                    <span class="font-body text-[11px] text-on-surface-variant mt-0.5">Bajo pedido (5d)</span>
                  </button>
                  <button class="finish-btn flex flex-col p-3 rounded-lg bg-surface-container-low text-left hover:bg-surface-container transition-all" onclick="setFinish(this, 'Arena y Cuarzo Crudo')" type="button">
                    <span class="w-4 h-4 rounded-full bg-[#dfe3e8] mb-2 shadow-inner"></span>
                    <span class="font-body text-[12.5px] font-medium text-on-surface leading-tight">Arena &amp; Cuarzo</span>
                    <span class="font-body text-[11px] text-on-surface-variant mt-0.5">En stock (1)</span>
                  </button>
                </div>
              </div>
              <!-- Quantity & Purchase Block -->
              <div class="flex flex-col gap-3 pt-2">
                <div class="flex items-center gap-3">
                  <div class="flex items-center bg-surface-container-lowest rounded-lg shadow-sm border border-outline-variant/30 p-1">
                    <button aria-label="Restar una unidad" class="w-8 h-8 flex items-center justify-center text-on-surface hover:bg-surface-container rounded transition-colors" onclick="updateQty(-1)" type="button">
                      <span class="material-symbols-outlined text-[16px]">remove</span>
                    </button>
                    <span class="w-10 text-center font-headline font-semibold text-[15px] text-on-surface" id="quantity-display">1</span>
                    <button aria-label="Sumar una unidad" class="w-8 h-8 flex items-center justify-center text-on-surface hover:bg-surface-container rounded transition-colors" onclick="updateQty(1)" type="button">
                      <span class="material-symbols-outlined text-[16px]">add</span>
                    </button>
                  </div>
                  <span class="text-[12px] text-secondary font-body">Máximo 2 piezas por pedido por resguardo artesanal</span>
                </div>
                <!-- Primary CTAs -->
                <button class="w-full py-3.5 px-6 rounded-lg bg-gradient-to-r from-primary to-primary-container hover:opacity-95 text-on-primary font-body font-semibold text-[15px] flex items-center justify-center gap-2.5 shadow-[0_4px_16px_rgba(9,76,178,0.25)] active:scale-[0.99] transition-all" onclick="addToCartNotification()" type="button">
                  <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                  <span>Agregar a la cesta de la feria</span>
                </button>
                <button class="w-full py-3.5 px-6 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-primary font-body font-semibold text-[14.5px] flex items-center justify-center gap-2 transition-colors" onclick="buyDirect()" type="button">
                  <span class="material-symbols-outlined text-[18px]">bolt</span>
                  <span>Comprar ahora con envío directo</span>
                </button>
                <div class="flex items-center justify-center pt-1">
                  <button class="inline-flex items-center gap-2 text-on-surface-variant hover:text-primary text-[13px] font-body transition-colors" id="fav-btn" onclick="toggleWishlist(this)" type="button">
                    <span class="material-symbols-outlined text-[18px]">bookmark_border</span>
                    <span>Guardar en mi bitácora de deseos</span>
                  </button>
                </div>
              </div>
              <!-- Shipping Calculator Panel -->
              <div class="p-4 rounded-xl bg-surface-container-low flex flex-col gap-3">
                <span class="font-headline font-semibold text-[14px] text-on-surface flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-[18px] text-primary">local_shipping</span>
                  Calcular envío y método de entrega
                </span>
                <div class="flex gap-2">
                  <select class="flex-1 px-3 py-2 rounded-lg bg-surface-container-lowest text-on-surface text-[13px] border border-outline-variant/30 focus:outline-none focus:ring-1 focus:ring-primary" id="shipping-dest" onchange="updateShippingEstimate(this.value)">
                    <option value="metropolitana">Región Metropolitana (Stgo) — 2 a 3 días</option>
                    <option selected="" value="araucania">Región de la Araucanía (Local) — 24 a 48 hrs</option>
                    <option value="regiones">Otras Regiones de Chile (Starken/Correos) — 3 a 5 días</option>
                    <option value="pickup">Retiro en Taller Pucón (Gratis)</option>
                  </select>
                </div>
                <div class="text-[12.5px] text-on-surface-variant font-body flex items-center justify-between" id="shipping-feedback">
                  <span>Costo estimado de embalaje &amp; flete:</span>
                  <strong class="text-on-surface font-semibold">$3.800 CLP</strong>
                </div>
                <p class="text-[11.5px] text-secondary leading-snug">Cada pieza viaja suspendida en viruta de madera chilena y caja doble corrugada certificada para resistir caídas de hasta 1.5 metros.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Artisan Workshop Profile (Using context portrait https://lh3.googleusercontent.com/aida/AEtjO1UpXNIdIGORa3VDdJHp0E__OxrGMgPf6QhOOL0IKt4XueOeZOmemsQqO2-23KaVDykay1pFbcT_NPJwIveiOPZuRpcrEHlMLEQic3dIp1zlzbjB4R4vIASAo75L_wCMvQpxyUU3DZIPOTj01ApBmnX7cEIVwtva0JUF7vPYF09eE5rOfra9dBYchWoIVrkl-V1lUebNIIlJWMdTQq_50BSAQldEpvlDlMOUzbpOvUR6Ro-a-k3duAjIlh-B) -->
      <section class="w-full bg-surface-container-low py-14">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
          <div class="p-8 lg:p-10 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col md:flex-row items-center md:items-start gap-8 lg:gap-12">
            <!-- Artisan Avatar -->
            <div class="relative shrink-0">
              <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden shadow-md ring-4 ring-surface-container">
                <img alt="Valentina Lagos, maestra ceramista en su taller de Pucón" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1UpXNIdIGORa3VDdJHp0E__OxrGMgPf6QhOOL0IKt4XueOeZOmemsQqO2-23KaVDykay1pFbcT_NPJwIveiOPZuRpcrEHlMLEQic3dIp1zlzbjB4R4vIASAo75L_wCMvQpxyUU3DZIPOTj01ApBmnX7cEIVwtva0JUF7vPYF09eE5rOfra9dBYchWoIVrkl-V1lUebNIIlJWMdTQq_50BSAQldEpvlDlMOUzbpOvUR6Ro-a-k3duAjIlh-B" />
              </div>
              <span class="absolute bottom-2 right-2 p-1.5 rounded-full bg-primary text-on-primary shadow-sm" title="Artesana verificada Ikigai">
                <span class="material-symbols-outlined text-[16px] block">verified</span>
              </span>
            </div>
            <!-- Artisan Bio & Statement -->
            <div class="flex-1 flex flex-col gap-3 text-center md:text-left">
              <div class="flex flex-wrap items-center justify-center md:justify-start gap-2.5">
                <span class="font-label text-[11px] font-bold uppercase tracking-wider text-tertiary bg-tertiary-fixed/60 px-2.5 py-0.5 rounded">Maestra Ceramista</span>
                <span class="text-outline text-[13px]">·</span>
                <span class="font-body text-[13px] text-on-surface-variant flex items-center gap-1">
                  <span class="material-symbols-outlined text-[16px] text-primary">location_on</span>
                  Pucón, Región de la Araucanía, Chile
                </span>
              </div>
              <h2 class="font-headline text-[24px] lg:text-[28px] text-on-surface font-semibold">Valentina Lagos · Taller Barro Mestizo</h2>
              <blockquote class="font-headline italic text-on-surface text-[15px] lg:text-[16px] leading-relaxed text-secondary border-l-2 border-primary/40 pl-4 py-1 my-1">
                "Moldeamos a mano en torno con arcillas sedimentarias del sur de Chile y cenizas vivas del volcán Villarrica. La cocción en leña a 1.250°C hace que cada huella y soplo de fuego quede cristalizado para siempre."
              </blockquote>
              <div class="flex flex-wrap items-center justify-center md:justify-start gap-6 pt-2 text-[13px] text-on-surface-variant">
                <div><strong class="font-headline text-on-surface text-[16px]">8 años</strong> de oficio en torno</div>
                <span class="text-outline-variant">/</span>
                <div><strong class="font-headline text-on-surface text-[16px]">428</strong> piezas enviadas</div>
                <span class="text-outline-variant">/</span>
                <div><strong class="font-headline text-on-surface text-[16px]">100%</strong> entregas intactas</div>
              </div>
              <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 pt-3">
                <a class="px-5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-body font-semibold text-[13.5px] transition-colors inline-flex items-center gap-2" data-path="stands-y-tiendas" href="#">
                  <span class="material-symbols-outlined text-[18px]">storefront</span>
                  <span>Visitar Stand (#48)</span>
                </a>
                <button class="px-5 py-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-primary font-body font-medium text-[13.5px] border border-outline-variant/40 transition-colors inline-flex items-center gap-2" onclick="alert('Abriendo canal directo de mensajería con el taller de Valentina Lagos.')" type="button">
                  <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
                  <span>Consultar a la artesana</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Technical Anatomy & Specs Cards -->
      <section class="w-full py-14">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col gap-10">
          <div class="flex flex-col gap-2 max-w-2xl">
            <span class="font-label text-[11px] font-bold uppercase tracking-wider text-primary">Ficha de conservación &amp; técnica</span>
            <h2 class="font-headline text-[26px] lg:text-[30px] font-semibold text-on-surface">Anatomía y características físicas de la jarra</h2>
            <p class="font-body text-[14px] text-on-surface-variant">Cada especificación ha sido calibrada para combinar belleza escultural con solidez funcional en el uso cotidiano.</p>
          </div>
          <!-- 4 Technical Cards -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="p-6 rounded-xl bg-surface-container-low flex flex-col justify-between gap-6">
              <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[22px]">straighten</span>
              </div>
              <div>
                <span class="font-label text-[11px] uppercase tracking-wider text-secondary">Dimensiones &amp; Capacidad</span>
                <h3 class="font-headline text-[18px] font-semibold text-on-surface mt-1">22 cm × 14 cm</h3>
                <p class="font-body text-[13px] text-on-surface-variant mt-1.5 leading-snug">Capacidad útil de 1.2 litros. Cuello estrecho para vertido controlado y antigoteo.</p>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="p-6 rounded-xl bg-surface-container-low flex flex-col justify-between gap-6">
              <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[22px]">scale</span>
              </div>
              <div>
                <span class="font-label text-[11px] uppercase tracking-wider text-secondary">Peso &amp; Estabilidad</span>
                <h3 class="font-headline text-[18px] font-semibold text-on-surface mt-1">850 gramos</h3>
                <p class="font-body text-[13px] text-on-surface-variant mt-1.5 leading-snug">Gres de alta densidad que otorga centro de gravedad bajo y balance seguro al servir.</p>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="p-6 rounded-xl bg-surface-container-low flex flex-col justify-between gap-6">
              <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[22px]">volcano</span>
              </div>
              <div>
                <span class="font-label text-[11px] uppercase tracking-wider text-secondary">Materialidad Orgánica</span>
                <h3 class="font-headline text-[18px] font-semibold text-on-surface mt-1">Gres &amp; Cenizas</h3>
                <p class="font-body text-[13px] text-on-surface-variant mt-1.5 leading-snug">Ceniza volcánica del Villarrica fusionada a 1.250°C formando vidrio mineral natural.</p>
              </div>
            </div>
            <!-- Card 4 -->
            <div class="p-6 rounded-xl bg-surface-container-low flex flex-col justify-between gap-6">
              <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[22px]">restaurant</span>
              </div>
              <div>
                <span class="font-label text-[11px] uppercase tracking-wider text-secondary">Uso &amp; Mantención</span>
                <h3 class="font-headline text-[18px] font-semibold text-on-surface mt-1">Apto Lavavajillas</h3>
                <p class="font-body text-[13px] text-on-surface-variant mt-1.5 leading-snug">100% seguro para alimentos y bebidas frías o calientes. Evitar shock térmico directo en llama.</p>
              </div>
            </div>
          </div>
          <!-- Deep Dive Accordions / Tabs -->
          <div class="flex flex-col gap-3 mt-4">
            <!-- Accordion 1 -->
            <details class="group rounded-xl bg-surface-container-lowest p-5 [&amp;_summary::-webkit-details-marker]:none cursor-pointer" open="">
              <summary class="flex items-center justify-between text-on-surface font-headline font-semibold text-[16px]">
                <span class="flex items-center gap-3">
                  <span class="material-symbols-outlined text-primary text-[20px]">architecture</span>
                  El proceso de elaboración: Del torno a la reducción a leña
                </span>
                <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-open:-rotate-180 text-secondary">expand_more</span>
              </summary>
              <div class="pt-4 text-[14px] leading-relaxed text-on-surface-variant font-body border-t border-surface-container-high/40 mt-3 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                  <strong class="text-on-surface block mb-1">1. Torneado en reposo</strong>
                  <p>Torneado alzado lentamente durante 40 minutos en rueda tradicional. Secado en sombra durante 12 días para evitar tensiones moleculares en el barro.</p>
                </div>
                <div>
                  <strong class="text-on-surface block mb-1">2. Formulación de esmalte</strong>
                  <p>Cenizas de leña nativa recolectada y ceniza volcánica lavada tres veces en agua de vertiente para eliminar sales solubles antes de la suspensión vítrea.</p>
                </div>
                <div>
                  <strong class="text-on-surface block mb-1">3. Cocción de 36 horas</strong>
                  <p>Horno de tiro invertido a leña con monitoreo constante de conos pirométricos Orton 8 (1.250°C), permitiendo que la llama pinte la jarra de forma azarosa.</p>
                </div>
              </div>
            </details>
            <!-- Accordion 2 -->
            <details class="group rounded-xl bg-surface-container-lowest p-5 [&amp;_summary::-webkit-details-marker]:none cursor-pointer">
              <summary class="flex items-center justify-between text-on-surface font-headline font-semibold text-[16px]">
                <span class="flex items-center gap-3">
                  <span class="material-symbols-outlined text-primary text-[20px]">shield</span>
                  Protocolo de embalaje blindado &amp; Política de llegada intacta
                </span>
                <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-open:-rotate-180 text-secondary">expand_more</span>
              </summary>
              <div class="pt-4 text-[14px] leading-relaxed text-on-surface-variant font-body border-t border-surface-container-high/40 mt-3 flex flex-col gap-2">
                <p>Sabemos el valor de una pieza única. Por ello, empleamos un sistema de suspensión en doble caja de cartón corrugado Kraft reciclado y amortiguación de viruta de álamo natural biodegradable.</p>
                <p><strong>Garantía Ikigai:</strong> Si la pieza sufre algún daño durante el transporte, basta con enviarnos una fotografía en las primeras 48 horas tras la entrega y Valentina elaborará una nueva jarra prioritaria o te reembolsaremos el 100% de inmediato.</p>
              </div>
            </details>
            <!-- Accordion 3 -->
            <details class="group rounded-xl bg-surface-container-lowest p-5 [&amp;_summary::-webkit-details-marker]:none cursor-pointer">
              <summary class="flex items-center justify-between text-on-surface font-headline font-semibold text-[16px]">
                <span class="flex items-center gap-3">
                  <span class="material-symbols-outlined text-primary text-[20px]">workspace_premium</span>
                  Certificado de autenticidad y número de horneada
                </span>
                <span class="material-symbols-outlined text-[20px] transition-transform duration-300 group-open:-rotate-180 text-secondary">expand_more</span>
              </summary>
              <div class="pt-4 text-[14px] leading-relaxed text-on-surface-variant font-body border-t border-surface-container-high/40 mt-3">
                <p>Cada jarra incluye una tarjeta botánica de papel de algodón confeccionado a mano, firmada por la autora Valentina Lagos, detallando la fecha exacta de salida de horno, la procedencia del lote de arcilla y el número de serie de la edición.</p>
              </div>
            </details>
          </div>
        </div>
      </section>
      <!-- Verified Buyer Testimonials (Physical Experience) -->
      <section class="w-full bg-surface-container-low py-14">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col gap-8">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
            <div>
              <span class="font-label text-[11px] font-bold uppercase tracking-wider text-primary">Experiencia tangible</span>
              <h2 class="font-headline text-[26px] lg:text-[30px] font-semibold text-on-surface">Testimonios de quienes ya conviven con la pieza</h2>
            </div>
            <div class="flex items-center gap-2">
              <div class="flex text-tertiary">
                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
              </div>
              <span class="font-headline font-semibold text-on-surface text-[15px]">5.0 / 5.0</span>
              <span class="text-secondary text-[13px]">(100% embalajes recibidos intactos)</span>
            </div>
          </div>
          <!-- Testimonial Grid -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Testimonial 1 -->
            <div class="p-6 rounded-xl bg-surface-container-lowest flex flex-col justify-between gap-5 shadow-sm">
              <div class="flex flex-col gap-3">
                <div class="flex text-tertiary">
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="font-body text-[13.5px] text-on-surface-variant leading-relaxed">
                  "Llegó a Santiago en 48 horas. El paquete olía a madera sureña y venía protegido como una reliquia. La textura de la ceniza al tacto tiene una calidez que ninguna foto alcanza a transmitir del todo."
                </p>
              </div>
              <div class="flex items-center gap-3 pt-2 border-t border-surface-container-high/40">
                <div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center font-headline font-semibold text-primary text-[14px]">
                  CR
                </div>
                <div class="flex flex-col">
                  <span class="font-body font-semibold text-[13px] text-on-surface">Camila Riquelme</span>
                  <span class="text-[11.5px] text-secondary">Compradora Verificada · Providencia, Santiago</span>
                </div>
              </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="p-6 rounded-xl bg-surface-container-lowest flex flex-col justify-between gap-5 shadow-sm">
              <div class="flex flex-col gap-3">
                <div class="flex text-tertiary">
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="font-body text-[13.5px] text-on-surface-variant leading-relaxed">
                  "El asa es asombrosamente cómoda. Llena de agua tiene un equilibrio perfecto para servir en la mesa. Es utilitaria pero cuando no se usa funciona como una escultura en la repisa."
                </p>
              </div>
              <div class="flex items-center gap-3 pt-2 border-t border-surface-container-high/40">
                <div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center font-headline font-semibold text-primary text-[14px]">
                  ME
                </div>
                <div class="flex flex-col">
                  <span class="font-body font-semibold text-[13px] text-on-surface">Martín Edwards</span>
                  <span class="text-[11.5px] text-secondary">Comprador Verificado · Zapallar</span>
                </div>
              </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="p-6 rounded-xl bg-surface-container-lowest flex flex-col justify-between gap-5 shadow-sm">
              <div class="flex flex-col gap-3">
                <div class="flex text-tertiary">
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <p class="font-body text-[13.5px] text-on-surface-variant leading-relaxed">
                  "El certificado firmado y la explicación de los minerales del volcán le dan un significado inmenso. Comprar en Feria Ikigai realmente se siente como visitar el taller en Pucón."
                </p>
              </div>
              <div class="flex items-center gap-3 pt-2 border-t border-surface-container-high/40">
                <div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center font-headline font-semibold text-primary text-[14px]">
                  FO
                </div>
                <div class="flex flex-col">
                  <span class="font-body font-semibold text-[13px] text-on-surface">Francisca Olavarría</span>
                  <span class="text-[11.5px] text-secondary">Compradora Verificada · Concepción</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Related Physical Products -->
      <section class="w-full py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col gap-8">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
            <div>
              <span class="font-label text-[11px] font-bold uppercase tracking-wider text-primary">Colección complementaria</span>
              <h2 class="font-headline text-[26px] lg:text-[30px] font-semibold text-on-surface">Más piezas de este taller y cerámica afín</h2>
            </div>
            <a class="text-primary hover:underline font-body font-medium text-[13.5px] inline-flex items-center gap-1" data-path="stands-y-tiendas" href="#">
              <span>Ver catálogo completo del Stand #48</span>
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
          </div>
          <!-- 4 Related Cards Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Item 1 -->
            <div class="group rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col transition-all hover:shadow-md">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Tazas de té en gres" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Pair of minimalist handcrafted stoneware tea cups with volcanic ash glaze in subtle cream and ochre tones on clean white studio pedestal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALqIRQrtqWysd8yTgPpUMeofyxRVnQDNPUYQy8t54dNpacSgylODF6u8ysMwP6VGpvqxBplOHcpUlEHv3wBaFa3dwpPh52pms0nrT3bTgbkXZIsFpCdjMriAIUlMw7yTOrSoJ37sKClH1LQmJ9XXBscg2Z04VBYrzW4SY461P4GfTu2VZWslQ9xEcShxGllC5wp_7u5sd-huSkLhyhv4eoDGYCzpwkhYduuDBkfYpI3PlHmkR7-rmL_w" />
                <span class="absolute top-3 left-3 px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label text-[10px] font-bold uppercase tracking-wide">Pieza Física</span>
              </div>
              <div class="p-4 flex-1 flex flex-col justify-between gap-3">
                <div>
                  <span class="text-secondary text-[11.5px] font-body">Taller Barro Mestizo</span>
                  <h3 class="font-headline text-[15px] font-semibold text-on-surface mt-0.5 group-hover:text-primary transition-colors">Dúo Tazas de Té en Gres Volcánico</h3>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline text-[16px] font-bold text-on-surface">$16.500 <span class="text-[11px] font-normal text-secondary">CLP</span></span>
                  <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors" onclick="quickAdd('Dúo Tazas de Té')" title="Agregar a la cesta" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="group rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col transition-all hover:shadow-md">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Florero Acanalado" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Sculptural tall ribbed stoneware vase with organic matte volcanic ash texture holding a dried branch, architectural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYlSIBBiM3l7FXLwluZRVTWqswphSq8ClFW3nhlovPSAEJ2u1ArvfO8gbPFPRJWzBuloF39piaBZYV2GkYUxwb8pNQpKpiTJEyTg1OHw8rALZIKlgpzpQrSCi3kOksBz1JLN5gDJTggtCPhkvdXZGKxL_OKp49CRc8rqLqNdT9gA-LjnJONGSbMQXQsHz8q-nAo5goqhF_Wc1roX8ypeUIS9gSE9mQoaDOAgym8TApX5gEZZjK7crTEg" />
                <span class="absolute top-3 left-3 px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label text-[10px] font-bold uppercase tracking-wide">Pieza Física</span>
              </div>
              <div class="p-4 flex-1 flex flex-col justify-between gap-3">
                <div>
                  <span class="text-secondary text-[11.5px] font-body">Taller Barro Mestizo</span>
                  <h3 class="font-headline text-[15px] font-semibold text-on-surface mt-0.5 group-hover:text-primary transition-colors">Florero Escultórico Acanalado</h3>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline text-[16px] font-bold text-on-surface">$34.000 <span class="text-[11px] font-normal text-secondary">CLP</span></span>
                  <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors" onclick="quickAdd('Florero Escultórico')" title="Agregar a la cesta" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="group rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col transition-all hover:shadow-md">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Cuenco Chawan para Matcha" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Traditional Japanese style chawan matcha bowl handcrafted in rough Chilean southern clay with ochre ash pooling in the interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcVPMXo282Ebxi7XUlS5C-VBIgO3RsmeOm3gyvqDPYVjyfOKPp5WGhKvU434Ht9wesWPv510ar-oZ1uh-wgEolZjb7HMGVT7nl-H90qJP0MU01P424U4p5diu6DNVq3c03FmBdHgGsdI2rnW__iuCBaXtqqsOPDsmNg1sUXKmoh681Ula8DdPmtHJ6pb2G2nwkssJD5kacmt8dY8P250eYpycDb5RhkREtIf6SYghdE3JvxRWnrB9HSw" />
                <span class="absolute top-3 left-3 px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label text-[10px] font-bold uppercase tracking-wide">Pieza Física</span>
              </div>
              <div class="p-4 flex-1 flex flex-col justify-between gap-3">
                <div>
                  <span class="text-secondary text-[11.5px] font-body">Taller Barro Mestizo</span>
                  <h3 class="font-headline text-[15px] font-semibold text-on-surface mt-0.5 group-hover:text-primary transition-colors">Cuenco Chawan de Ceremonia</h3>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline text-[16px] font-bold text-on-surface">$22.000 <span class="text-[11px] font-normal text-secondary">CLP</span></span>
                  <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors" onclick="quickAdd('Cuenco Chawan')" title="Agregar a la cesta" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="group rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col transition-all hover:shadow-md">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Bandeja de Arcilla y Cuarzo" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Oblong organic clay serving platter with raw edge and subtle mineral speckling, contemporary artisanal craft table setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0w59GnAxKdAcU8eLp04EOAlFFZakRNPZCkqU5MaVb-PLUWufEal36FW4VE6wbUJ7Wv_TmKkE3FQEserxxoozgnc-RNkkmeXP2yAdwJSBlkkn481eqAMoEpZmA57m1sYrxlp_rsdRR8myzb7V0X7gUuzxgCTWqbRs_NPj7fL0T6-WA-3mmb1-5F5l1s42wb7nwKMt3nQ9Fy_-jiEVTQw9VRD_hHwJwycrgC6xk1EZ2x-OEwgHApePbBw" />
                <span class="absolute top-3 left-3 px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label text-[10px] font-bold uppercase tracking-wide">Pieza Física</span>
              </div>
              <div class="p-4 flex-1 flex flex-col justify-between gap-3">
                <div>
                  <span class="text-secondary text-[11.5px] font-body">Taller Barro Mestizo</span>
                  <h3 class="font-headline text-[15px] font-semibold text-on-surface mt-0.5 group-hover:text-primary transition-colors">Bandeja de Servicio Arcilla &amp; Cuarzo</h3>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline text-[16px] font-bold text-on-surface">$25.500 <span class="text-[11px] font-normal text-secondary">CLP</span></span>
                  <button class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors" onclick="quickAdd('Bandeja de Servicio')" title="Agregar a la cesta" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Floating Toast Notification System (Micro-interaction) -->
      <div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none" id="toast">
        <div class="px-5 py-3.5 rounded-xl bg-on-surface text-surface shadow-xl flex items-center gap-3">
          <span class="material-symbols-outlined text-tertiary-fixed text-[20px]">check_circle</span>
          <span class="font-body text-[13.5px]" id="toast-message">Pieza agregada a la cesta de la feria.</span>
        </div>
      </div>
    </div>
    <script>
      let currentQty = 1;
      const maxStock = 2;

      function updateQty(change) {
        const newQty = currentQty + change;
        if (newQty >= 1 && newQty <= maxStock) {
          currentQty = newQty;
          document.getElementById('quantity-display').textContent = currentQty;
        }
      }

      function setFinish(btn, finishName) {
        document.querySelectorAll('.finish-btn').forEach(b => {
          b.classList.remove('ring-2', 'ring-primary');
        });
        btn.classList.add('ring-2', 'ring-primary');
        document.getElementById('selected-finish-name').textContent = finishName;
      }

      function selectThumbnail(btn, src, altText) {
        document.querySelectorAll('.thumbnail-btn').forEach(b => {
          b.classList.remove('ring-2', 'ring-primary');
        });
        btn.classList.add('ring-2', 'ring-primary');
        const mainImg = document.getElementById('main-product-image');
        mainImg.src = src;
        mainImg.alt = altText;
      }

      function toggleWishlist(btn) {
        const icon = btn.querySelector('.material-symbols-outlined');
        const label = btn.querySelector('span:last-child');
        if (icon.textContent === 'bookmark_border') {
          icon.textContent = 'bookmark';
          icon.style.fontVariationSettings = "'FILL' 1";
          icon.classList.add('text-primary');
          label.textContent = 'Guardado en tu bitácora';
          showToast('Guardado en tus piezas favoritas de la feria');
        } else {
          icon.textContent = 'bookmark_border';
          icon.style.fontVariationSettings = "'FILL' 0";
          icon.classList.remove('text-primary');
          label.textContent = 'Guardar en mi bitácora de deseos';
        }
      }

      function updateShippingEstimate(val) {
        const feedback = document.getElementById('shipping-feedback');
        if (val === 'pickup') {
          feedback.innerHTML = '<span>Retiro presencial en taller:</span><strong class="text-primary font-semibold">Gratuito</strong>';
        } else if (val === 'araucania') {
          feedback.innerHTML = '<span>Costo estimado Araucanía:</span><strong class="text-on-surface font-semibold">$3.800 CLP</strong>';
        } else if (val === 'metropolitana') {
          feedback.innerHTML = '<span>Costo despacho Santiago:</span><strong class="text-on-surface font-semibold">$4.900 CLP</strong>';
        } else {
          feedback.innerHTML = '<span>Costo despacho Regiones:</span><strong class="text-on-surface font-semibold">$5.600 CLP</strong>';
        }
      }

      function addToCartNotification() {
        showToast('Jarra agregada a tu canasta (' + currentQty + ' unidad/es)');
      }

      function buyDirect() {
        showToast('Iniciando pasarela de pago seguro con despacho directo...');
      }

      function quickAdd(itemTitle) {
        showToast(itemTitle + ' agregado a tu cesta');
      }

      function showToast(msg) {
        const toast = document.getElementById('toast');
        const msgEl = document.getElementById('toast-message');
        msgEl.textContent = msg;
        toast.classList.remove('translate-y-20', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        setTimeout(() => {
          toast.classList.remove('translate-y-0', 'opacity-100');
          toast.classList.add('translate-y-20', 'opacity-0');
        }, 2800);
      }
    </script>
  </main>
  <footer class="w-full bg-surface-container-low border-t border-outline-variant/40 text-on-surface">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">
        <div class="lg:col-span-4 flex flex-col gap-space-md">
          <div class="flex items-center gap-space-sm"><span class="font-headline font-semibold text-[26px] text-on-surface">Feria Ikigai</span></div>
          <p class="font-body text-[14px] leading-relaxed text-on-surface-variant max-w-sm">Un santuario digital para la artesanía con alma, donde creadores de obras físicas y digitales comparten sus piezas con intención, calma y devoción por el detalle.</p>
          <div class="pt-space-xs"><span class="font-label font-bold text-[11px] uppercase tracking-wider text-primary-container">Edición Virtual Permanente</span></div>
        </div>
        <div class="lg:col-span-2 flex flex-col gap-space-sm"><span class="font-headline font-semibold text-[16px] text-on-surface mb-space-xs">Descubrir</span><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="recorrer-feria" href="#">Recorrer Feria</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="stands-y-tiendas" href="#">Stands y Tiendas</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="categorias" href="#">Categorías</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="historias-de-creadores" href="#">Historias de Creadores</a></div>
        <div class="lg:col-span-2 flex flex-col gap-space-sm"><span class="font-headline font-semibold text-[16px] text-on-surface mb-space-xs">Para Creadores</span><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="abrir-mi-stand" href="#">Abrir mi Stand</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="manifiesto" href="#">Manifiesto</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="sostenibilidad" href="#">Sostenibilidad</a><a class="font-body text-[14px] text-on-surface-variant hover:text-primary-container transition-colors" data-path="ayuda-y-contacto" href="#">Ayuda &amp; Contacto</a></div>
        <div class="lg:col-span-4 flex flex-col gap-space-md"><span class="font-headline font-semibold text-[20px] text-on-surface">Drops del Fin de Semana</span>
          <p class="font-body text-[13px] text-on-surface-variant leading-relaxed">Suscríbete a nuestra carta quincenal para recibir lanzamientos exclusivos de talleres artesanos y colecciones digitales de autor.</p>
          <form class="flex items-center gap-space-xs w-full" onsubmit="event.preventDefault();"><input class="flex-1 px-space-md py-space-sm rounded-lg bg-surface-container-lowest border border-outline-variant/50 text-on-surface font-body text-[13px] placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary-container" placeholder="tu-correo@estudio.com" type="email" /><button class="px-space-md py-space-sm rounded-lg bg-primary-container hover:bg-primary text-on-primary font-body font-semibold text-[14px] transition-colors" type="submit">Unirme</button></form><span class="font-label text-[11px] text-outline">Sin spam. Solo historias y oficios selectos.</span>
        </div>
      </div>
      <div class="pt-8 border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body text-[13px]">
        <div class="flex items-center gap-space-lg"><a class="hover:text-primary-container transition-colors" data-path="manifiesto" href="#">Manifiesto</a><a class="hover:text-primary-container transition-colors" data-path="sostenibilidad" href="#">Sostenibilidad</a><a class="hover:text-primary-container transition-colors" data-path="ayuda-y-contacto" href="#">Ayuda &amp; Contacto</a></div>
        <p>© 2025 Feria Virtual Ikigai. Celebrando el oficio y la creación pausada.</p>
      </div>
    </div>
  </footer>
</body>

</html>