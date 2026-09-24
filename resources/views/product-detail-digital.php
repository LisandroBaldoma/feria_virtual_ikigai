<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Serif:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&amp;family=Public+Sans:wght@500;600;700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <style>
    @layer base {

      html,
      body {
        margin: 0;
        padding: 0;
      }

      body {
        overscroll-behavior: none;
      }

      main>:first-child {
        margin-top: 0 !important;
      }

      main>:last-child {
        margin-bottom: 0 !important;
      }
    }

    ::-webkit-scrollbar {
      display: none;
    }
  </style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-tertiary-container": "#4a3f00",
            "on-error-container": "#93000a",
            "tertiary-fixed": "#f9e37a",
            "outline-variant": "#c3c6d5",
            "on-primary": "#ffffff",
            "on-secondary-container": "#606569",
            "on-surface-variant": "#434653",
            "inverse-primary": "#b1c5ff",
            "on-primary-container": "#e7ebff",
            "tertiary-container": "#bfab49",
            "primary": "#094cb2",
            "surface-container-lowest": "#ffffff",
            "on-primary-fixed-variant": "#00419d",
            "surface-container": "#efedee",
            "on-tertiary-fixed-variant": "#524600",
            "surface-container-low": "#f5f3f4",
            "surface-tint": "#2259bf",
            "on-secondary-fixed": "#171c20",
            "on-secondary": "#ffffff",
            "secondary-fixed": "#dfe3e8",
            "primary-fixed": "#d9e2ff",
            "primary-container": "#3366cc",
            "error": "#ba1a1a",
            "secondary-container": "#dfe3e8",
            "on-tertiary": "#ffffff",
            "on-tertiary-fixed": "#211b00",
            "surface": "#faf9fa",
            "secondary-fixed-dim": "#c2c7cc",
            "on-surface": "#1b1c1d",
            "tertiary": "#6d5e00",
            "error-container": "#ffdad6",
            "primary-fixed-dim": "#b1c5ff",
            "on-secondary-fixed-variant": "#42474b",
            "inverse-on-surface": "#f2f0f1",
            "surface-container-highest": "#e3e2e3",
            "surface-dim": "#dbdadb",
            "on-background": "#1b1c1d",
            "tertiary-fixed-dim": "#dcc661",
            "surface-container-high": "#e9e8e9",
            "on-error": "#ffffff",
            "secondary": "#5a5f63",
            "outline": "#737784",
            "surface-variant": "#e3e2e3",
            "background": "#faf9fa",
            "inverse-surface": "#303031",
            "surface-bright": "#faf9fa",
            "on-primary-fixed": "#001946"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-lg": "1.5rem",
            "margin-mobile": "1.25rem",
            "margin": "3rem",
            "space-xl": "2.5rem",
            "gutter-mobile": "1rem",
            "space-sm": "0.5rem",
            "gutter": "1.5rem",
            "space-md": "1rem",
            "space-xs": "0.25rem"
          },
          "fontFamily": {
            "headline": ["Noto Serif", "serif"],
            "display": ["Noto Serif", "serif"],
            "body": ["Inter", "sans-serif"],
            "label": ["Public Sans", "sans-serif"]
          }
        }
      }
    }
  </script>
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
      <!-- Breadcrumb & Digital Badge Anchor Bar -->
      <section class="w-full bg-surface-container-low px-6 lg:px-12 py-5">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-4">
          <nav aria-label="Ruta de navegación" class="flex items-center gap-2 text-[13px] font-label text-on-surface-variant flex-wrap">
            <a class="hover:text-primary transition-colors flex items-center gap-1.5" data-path="recorrer-feria" href="#">
              <span class="material-symbols-outlined text-[16px]">storefront</span>
              <span>Feria Ikigai</span>
            </a>
            <span class="text-outline-variant select-none">/</span>
            <a class="hover:text-primary transition-colors" data-path="categorias" href="#">Activos Digitales &amp; Recursos</a>
            <span class="text-outline-variant select-none">/</span>
            <span class="text-on-surface font-semibold truncate max-w-[260px] sm:max-w-md">Guía Maestra de Tintes Naturales</span>
          </nav>
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 text-primary self-start md:self-auto">
            <span class="material-symbols-outlined text-[16px]">bolt</span>
            <span class="font-label font-semibold text-[12px] uppercase tracking-wider">Activo Digital · Descarga Instantánea</span>
          </div>
        </div>
      </section>
      <!-- Digital Banner Notice (Zero Shipping, Instant Access) -->
      <section class="w-full bg-surface-container-lowest px-6 lg:px-12 py-3.5">
        <div class="max-w-7xl mx-auto flex items-center justify-between gap-4">
          <div class="flex items-center gap-3 flex-wrap text-[13px] text-on-surface">
            <span class="flex items-center gap-1.5 text-tertiary font-medium">
              <span class="material-symbols-outlined text-[18px]">verified</span>
              Acceso instantáneo de por vida + Actualizaciones libres
            </span>
            <span class="hidden sm:inline text-outline-variant">•</span>
            <span class="hidden sm:flex items-center gap-1.5 text-on-surface-variant">
              <span class="material-symbols-outlined text-[18px]">package_2</span>
              Sin costo de envío ni esperas logísticas
            </span>
            <span class="hidden lg:inline text-outline-variant">•</span>
            <span class="hidden lg:flex items-center gap-1.5 text-on-surface-variant">
              <span class="material-symbols-outlined text-[18px]">devices</span>
              Apto para iPad, GoodNotes, Tabletas y Lectores de PDF
            </span>
          </div>
          <a class="text-primary hover:underline font-label font-semibold text-[12px] uppercase tracking-wide shrink-0" href="#especificaciones">
            Ver Fichas Técnicas
          </a>
        </div>
      </section>
      <!-- Main Showcase & Buy Decision Grid -->
      <section class="w-full px-6 lg:px-12 py-10 lg:py-14">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 xl:gap-14 items-start">
          <!-- Left Column: Gallery & Visual Teaser (7 cols) -->
          <div class="lg:col-span-7 flex flex-col gap-6">
            <!-- Main Media Container -->
            <div class="relative w-full rounded-2xl overflow-hidden bg-surface-container-low shadow-sm aspect-[4/3] group">
              <img alt="Vista principal de la Guía Maestra de Tintes Naturales" class="w-full h-full object-cover transition-all duration-500 ease-out" data-alt="Editorial close-up flatlay of an open artisan guidebook on botanical natural dyes, featuring raw dyed wool skeins in ochre, forest green, and soft indigo, with handwritten mordanting formulas and dried native Chilean leaves on an organic linen desk under warm soft sunlight" id="main-product-view" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwmiFBgJ_-rIK_22H1A1VaS5J7VaRepHYbQmSxJ7tSaHiS-T3ue2Va9ULBxZ3hw5myAWXzYb_pGKjgYyDMMXb7s_o_Josu5Nz8mpJdHjrUW7EsGNtOJu1rB9_Zdh0ojNzAnmBTv7ioKvbmWHW3wuM3ugbWHsvN0GxwdmW_3veOhCoH6ihGT_YZJZoDKicornjzrrFGzghrWUIQNktYomU7UOg3EOzENYk7XmEiP5hPKg4Xv-LvSGHugQ" />
              <!-- Overlaid Pill Badge -->
              <div class="absolute top-4 left-4 flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-lowest/90 backdrop-blur-md shadow-sm">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                <span class="font-label text-[11px] font-bold tracking-wider uppercase text-on-surface">Libro Interactivo + Archivo RAW</span>
              </div>
              <!-- Quick Preview Sample PDF Button -->
              <button class="absolute bottom-4 right-4 inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-surface-container-lowest/95 hover:bg-surface-container-lowest text-primary shadow-md hover:shadow-lg transition-all font-body font-medium text-[13px]" onclick="openPreviewModal()" type="button">
                <span class="material-symbols-outlined text-[18px]">visibility</span>
                <span>Muestra gratis (5 págs)</span>
              </button>
            </div>
            <!-- Thumbnail Strip with Active Indicators -->
            <div class="grid grid-cols-4 gap-3.5">
              <button class="gallery-thumb group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container transition-all ring-2 ring-primary" onclick="switchGalleryImage(0, this)" type="button">
                <img alt="Muestra de capítulo de mordentado" class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Page spread mockup of chapter three showing chemical formulas for alum mordanting and natural tannin extraction with Chilean native flora illustrations in vintage botanical line art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkkIQ4zXEUcqdsxfC79YYkyuT_HABgnW40Rd2AWKiUEdqDuSomaH_GZ8nO7QiYQrTvdjMzwehjKUcN1Jh3SutQK5j6m6P9X8v3cma2mHLgB6NZU26gQ3ZGkgbB0VD3zrtYOlW_UKQHFSp1ePBGatDDDV8x3Xk8tzhvbppkgCJ8GlzJHFk5hgTPw8luP-VfVqqyhGgHglNjo-gjQx0RIPG99jt-M-NYG9cCmR6RUgCOlDgzHMGqwqdEvA" />
                <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-transparent p-1.5 text-[10px] text-white font-label truncate">
                  Capítulos &amp; Fórmulas
                </span>
              </button>
              <button class="gallery-thumb group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container opacity-70 hover:opacity-100 transition-all" onclick="switchGalleryImage(1, this)" type="button">
                <img alt="Paletas digitales Procreate y Photoshop" class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Digital color swatches palette grid for Procreate and Photoshop inspired by Valdivian rainforest bark, moss, lichen, and native maqui berries with exact HEX and CMYK references" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmQ2XJ7QjW-7Eg0vjmPJughoyK6Vg6cCQ66uUXaFMhEPneXuc2ixPQxt_S_NwvB6dSkUACGSNqqY9IbmZ-UD3IFzAdelEc7Uo-Ar4hE2_tfEd1W7pjZHQM9S9aHW6O20tl1oj34vF_o8G_pXKpHVDJZx9_H0IY3iGNr0eHOGB7EaLtLU4wGPurF30ahsDaexg3GjaiyXfhhwEoHeHVA5QTYf2grIP9nldAEUGkrByjsvaJgPxk5PKpaw" />
                <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-transparent p-1.5 text-[10px] text-white font-label truncate">
                  Paletas .SWATCHES
                </span>
              </button>
              <button class="gallery-thumb group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container opacity-70 hover:opacity-100 transition-all" onclick="switchGalleryImage(2, this)" type="button">
                <img alt="Fichas de recetas imprimibles" class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Printable laboratory recipe sheet cards on thick textured recycled paper with checkboxes for fiber weight, temperature, and sun curing times" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGOo8kYtW5agcYETZQsRJrhU0yKGR62riQRvXhWaBik2U0T1IXMtCd3BgQAOQ-AOwZnfaNCaSi8vEXMA41BDHF85MYmYkjBfm47-Theiq_EGTJt31pDQkZeERfJpjrSUE_EOvIGUcjrpMPtRKnzOLZGzmgLCZpjr6YyYXnirkUo2tGW6YNblucuwZjVvZzRfRYeGVGj264SJAWPsWGxxbA-ij8JpkZDM95J56RInNLl5uviO6fRWpYzg" />
                <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-transparent p-1.5 text-[10px] text-white font-label truncate">
                  12 Fichas Imprimibles
                </span>
              </button>
              <button class="gallery-thumb group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container opacity-70 hover:opacity-100 transition-all" onclick="switchGalleryImage(3, this)" type="button">
                <img alt="Vista en GoodNotes e iPad" class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="An Apple iPad Pro displaying the natural dyeing e-book open in GoodNotes with hand-drawn annotations and highlighted herbarium index" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA74TtHl_GN_BmfXEXNY2LgII-2Z7Wlq0x5XpQjAAscWZZBD5zjPtPUfGqV_v8ep6nIUlOg2Tu3haXC7xebE6pEgvt1wMa___s_EGTJZ8d5PX-b6iQ8cu4gnTWsFBLYn7LJwMeezGgTIJott2z7fIedORRVyAzVchhdD1AFZJC_idZow5FoCWpAqhjzYwYx0Yd9TJJiDEs1ADVJZY6BzSSX7S1Il-F7rxNqlv_4pbdiw1m13xyW40nJew" />
                <span class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-transparent p-1.5 text-[10px] text-white font-label truncate">
                  Formato GoodNotes
                </span>
              </button>
            </div>
            <!-- Author / Artisan Virtual Stand Card -->
            <div class="mt-4 p-6 rounded-2xl bg-surface-container-low flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5">
              <div class="flex items-start gap-4">
                <div class="relative shrink-0">
                  <img alt="Estudio Telar &amp; Bosque" class="w-14 h-14 rounded-full object-cover ring-2 ring-surface-container-lowest shadow-sm" data-alt="Artisan portrait of a textile dyer with warm earthen apron holding hand-spun wool bundles in an open-air forest studio in southern Chile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdn5OfU43NC5nXMevRyshpMy8c7PNWBRoJJJCxuc-G8RMt0tKImL5LNDQghu6cKQ9yArfKUvWaGSaYDYMa7aTfxRhBD6RIRTV0YOkyrNfrWfQCFrUCVkWPp7u9JQCzKmLbclmdyqUh7EB7Zi-ssbdp2LEApwNGykN4bexMQc6JYGn6C9svbTdBDhrUWfD3HyPtpmg9yCir736XYEidhk4GZ45lmxXaspqty3ZdAbzr0Sts_KuB0qH-AQ" />
                  <span class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center text-[11px]" title="Taller Destacado">
                    <span class="material-symbols-outlined text-[13px]">verified</span>
                  </span>
                </div>
                <div>
                  <div class="flex items-center gap-2 flex-wrap">
                    <h3 class="font-headline font-semibold text-[17px] text-on-surface">Estudio Telar &amp; Bosque</h3>
                    <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label text-[11px] font-medium">Stand #18 · Valdivia</span>
                  </div>
                  <p class="font-body text-[13px] text-on-surface-variant mt-1 line-clamp-2 max-w-md">
                    Taller botánico e hilandería ancestral dedicado a preservar el oficio del teñido pausado con corteza, hojas nativas y líquenes caídos.
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-2.5 w-full sm:w-auto shrink-0">
                <a class="flex-1 sm:flex-none text-center px-4 py-2 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-primary font-body font-medium text-[13px] transition-colors" data-path="stands-y-tiendas" href="#">
                  Visitar Stand (18)
                </a>
                <button class="p-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors" onclick="alert('Abriendo canal directo con Creador: Estudio Telar &amp; Bosque')" title="Contactar taller" type="button">
                  <span class="material-symbols-outlined text-[20px]">chat</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Right Column: Buy Box & Product Architecture (5 cols, sticky) -->
          <div class="lg:col-span-5 flex flex-col gap-6 lg:sticky lg:top-28">
            <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.04)] flex flex-col gap-6">
              <!-- Title & Badges -->
              <div class="flex flex-col gap-2.5">
                <div class="flex items-center justify-between">
                  <span class="font-label text-[12px] uppercase tracking-wider text-tertiary font-bold">
                    Edición Ampliada 2025 · 2ª Tirada Digital
                  </span>
                  <button aria-label="Guardar en favoritos" class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-error hover:bg-error-container/30 transition-all" id="wishlist-toggle" onclick="toggleWishlist(this)" type="button">
                    <span class="material-symbols-outlined text-[19px]">favorite_border</span>
                  </button>
                </div>
                <h1 class="font-headline font-semibold text-[26px] sm:text-[30px] leading-[1.25] text-on-surface">
                  Guía Maestra de Tintes Naturales: Del Bosque Nativo a la Lana
                </h1>
                <div class="flex items-center gap-3 pt-1">
                  <div class="flex items-center text-tertiary text-[14px]">
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="font-body text-[13px] font-semibold text-on-surface">5.0</span>
                  <a class="font-body text-[13px] text-on-surface-variant hover:text-primary underline decoration-outline-variant" href="#resenas">
                    48 reseñas de artesanos
                  </a>
                </div>
              </div>
              <!-- Price & Tax Disclaimer -->
              <div class="p-4 rounded-xl bg-surface-container-low flex items-baseline justify-between">
                <div>
                  <span class="font-headline font-bold text-[32px] text-on-surface tracking-tight">$16.500</span>
                  <span class="font-label text-[13px] text-on-surface-variant font-medium ml-1">CLP</span>
                </div>
                <div class="text-right">
                  <span class="inline-block font-label text-[11px] font-semibold text-tertiary uppercase tracking-wider bg-tertiary-container/30 px-2 py-0.5 rounded">
                    Pago Único
                  </span>
                  <p class="font-body text-[11px] text-outline mt-0.5">IVA incluido · Factura electrónica</p>
                </div>
              </div>
              <!-- Bundle Inclusions Quick Check -->
              <div class="flex flex-col gap-2.5">
                <span class="font-label text-[11px] uppercase tracking-wider text-outline font-bold">El archivo descargable incluye:</span>
                <div class="space-y-2 text-[13px] text-on-surface">
                  <div class="flex items-start gap-2.5 p-2.5 rounded-lg bg-surface-container">
                    <span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">picture_as_pdf</span>
                    <div>
                      <strong class="font-medium text-on-surface">E-book interactivo de 84 páginas</strong>
                      <p class="text-on-surface-variant text-[12px]">Índice clickeable, modo lectura noche y alta resolución tipográfica.</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-2.5 p-2.5 rounded-lg bg-surface-container">
                    <span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">palette</span>
                    <div>
                      <strong class="font-medium text-on-surface">Set de Paletas de Color (.swatches y .ase)</strong>
                      <p class="text-on-surface-variant text-[12px]">Para Procreate, Adobe Photoshop e Illustrator con códigos HEX.</p>
                    </div>
                  </div>
                  <div class="flex items-start gap-2.5 p-2.5 rounded-lg bg-surface-container">
                    <span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">print</span>
                    <div>
                      <strong class="font-medium text-on-surface">12 Fichas de Recetas Imprimibles (PDF A4)</strong>
                      <p class="text-on-surface-variant text-[12px]">Listas para encuadernar o plastificar en tu mesón de teñido.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Purchase Call-To-Action Stack -->
              <div class="flex flex-col gap-3 pt-2">
                <button class="w-full py-4 px-6 rounded-xl bg-gradient-to-r from-primary to-primary-container text-on-primary font-body font-semibold text-[15px] shadow-[0_8px_20px_rgba(9,76,178,0.28)] hover:shadow-[0_10px_26px_rgba(9,76,178,0.38)] hover:brightness-105 active:scale-[0.99] transition-all flex items-center justify-center gap-2" id="btn-instant-buy" onclick="handleInstantCheckout()" type="button">
                  <span class="material-symbols-outlined text-[20px]">download</span>
                  <span>Comprar ahora con descarga instantánea</span>
                </button>
                <button class="w-full py-3 px-6 rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-primary font-body font-semibold text-[14px] transition-colors flex items-center justify-center gap-2" onclick="handleAddToCart()" type="button">
                  <span class="material-symbols-outlined text-[19px]">add_shopping_cart</span>
                  <span id="cart-btn-label">Agregar a la cesta de la feria</span>
                </button>
              </div>
              <!-- Trust Signals & Guarantee -->
              <div class="pt-4 border-t border-surface-container flex flex-col gap-3 text-[12px] text-on-surface-variant">
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-tertiary text-[17px]">sync_saved_locally</span>
                  <span>Descargas ilimitadas desde tu biblioteca de usuario de Feria Ikigai.</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-tertiary text-[17px]">support_agent</span>
                  <span>Soporte directo con Estudio Telar &amp; Bosque para consultas técnicas.</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-tertiary text-[17px]">lock</span>
                  <span>Pago cifrado seguro con Webpay Plus, MercadoPago y tarjetas globales.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Technical Specs Bento Strip -->
      <section class="w-full bg-surface-container-low px-6 lg:px-12 py-14" id="especificaciones">
        <div class="max-w-7xl mx-auto flex flex-col gap-8">
          <div>
            <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Arquitectura del Producto</span>
            <h2 class="font-headline font-semibold text-[26px] text-on-surface mt-1">Especificaciones Técnicas del Archivo</h2>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Spec Card 1 -->
            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-primary text-[28px]">folder_zip</span>
                <span class="font-label text-[11px] font-bold uppercase tracking-wider text-outline">Peso Total</span>
              </div>
              <div>
                <h4 class="font-headline text-[18px] text-on-surface font-semibold">240 MB (.ZIP)</h4>
                <p class="font-body text-[13px] text-on-surface-variant mt-1">Descarga dividida o completa según la velocidad de tu conexión.</p>
              </div>
            </div>
            <!-- Spec Card 2 -->
            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-primary text-[28px]">auto_stories</span>
                <span class="font-label text-[11px] font-bold uppercase tracking-wider text-outline">Volumen</span>
              </div>
              <div>
                <h4 class="font-headline text-[18px] text-on-surface font-semibold">84 Páginas</h4>
                <p class="font-body text-[13px] text-on-surface-variant mt-1">PDF interactivo + versión EPUB adaptada a e-readers de tinta electrónica.</p>
              </div>
            </div>
            <!-- Spec Card 3 -->
            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-primary text-[28px]">devices_other</span>
                <span class="font-label text-[11px] font-bold uppercase tracking-wider text-outline">Entorno</span>
              </div>
              <div>
                <h4 class="font-headline text-[18px] text-on-surface font-semibold">Universal</h4>
                <p class="font-body text-[13px] text-on-surface-variant mt-1">Compatible con GoodNotes, Notability, Acrobat, Windows, Mac, iPad y Android.</p>
              </div>
            </div>
            <!-- Spec Card 4 -->
            <div class="p-6 rounded-2xl bg-surface-container-lowest shadow-sm flex flex-col justify-between">
              <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-primary text-[28px]">gavel</span>
                <span class="font-label text-[11px] font-bold uppercase tracking-wider text-outline">Licencia</span>
              </div>
              <div>
                <h4 class="font-headline text-[18px] text-on-surface font-semibold">Uso en Taller</h4>
                <p class="font-body text-[13px] text-on-surface-variant mt-1">Autorizada para pequeños talleres y artesanos individuales (no masiva).</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Editorial Deep Dive: Content Tabs & Syllabus -->
      <section class="w-full bg-surface px-6 lg:px-12 py-16">
        <div class="max-w-4xl mx-auto flex flex-col gap-10">
          <!-- Segment Control / Custom Tabs -->
          <div class="flex items-center justify-center p-1.5 rounded-xl bg-surface-container overflow-x-auto w-full max-w-lg mx-auto">
            <button class="tab-btn flex-1 py-2 px-4 rounded-lg font-label text-[13px] font-semibold transition-all bg-surface-container-lowest text-primary shadow-sm" onclick="setTab('contenido', this)" type="button">
              Índice &amp; Temario
            </button>
            <button class="tab-btn flex-1 py-2 px-4 rounded-lg font-label text-[13px] font-medium text-on-surface-variant hover:text-on-surface transition-all" onclick="setTab('manifiesto', this)" type="button">
              Filosofía Botánica
            </button>
            <button class="tab-btn flex-1 py-2 px-4 rounded-lg font-label text-[13px] font-medium text-on-surface-variant hover:text-on-surface transition-all" onclick="setTab('licencia', this)" type="button">
              Términos de Descarga
            </button>
          </div>
          <!-- Tab Panel 1: Temario Editorial -->
          <div class="tab-panel flex flex-col gap-8" id="tab-panel-contenido">
            <div class="text-center max-w-2xl mx-auto">
              <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Estructura Pedagógica</span>
              <h3 class="font-headline font-semibold text-[28px] text-on-surface mt-1">Cinco módulos para dominar el color vivo</h3>
              <p class="font-body text-[15px] text-on-surface-variant mt-2">
                Desarrollada tras ocho años de experimentación en los bosques húmedos valdivianos, esta guía simplifica la química orgánica del teñido sin sacrificar rigor.
              </p>
            </div>
            <div class="space-y-4">
              <!-- Accordion Item 1 -->
              <div class="p-6 rounded-xl bg-surface-container-low transition-all">
                <div class="flex items-start justify-between gap-4">
                  <div class="flex items-start gap-3">
                    <span class="font-headline font-semibold text-[18px] text-tertiary">01</span>
                    <div>
                      <h4 class="font-headline font-semibold text-[17px] text-on-surface">Recolección Consciente &amp; Calendario Estacional</h4>
                      <p class="font-body text-[13.5px] text-on-surface-variant mt-1">
                        Cómo identificar hojas caídas, líquenes de poda y cortezas desprendidas sin dañar árboles vivos. Calendario de floración y recolección para el Cono Sur.
                      </p>
                    </div>
                  </div>
                  <span class="font-label text-[11px] text-outline font-semibold uppercase shrink-0">Págs 06–22</span>
                </div>
              </div>
              <!-- Accordion Item 2 -->
              <div class="p-6 rounded-xl bg-surface-container-low transition-all">
                <div class="flex items-start justify-between gap-4">
                  <div class="flex items-start gap-3">
                    <span class="font-headline font-semibold text-[18px] text-tertiary">02</span>
                    <div>
                      <h4 class="font-headline font-semibold text-[17px] text-on-surface">Preparación de Fibras &amp; Mordentado No Tóxico</h4>
                      <p class="font-body text-[13.5px] text-on-surface-variant mt-1">
                        Diferenciación entre fibras proteicas (lana de oveja, alpaca, seda) y celulósicas (algodón, cáñamo, lino). Uso de alumbre de potasio, corteza de roble y vinagre de manzana.
                      </p>
                    </div>
                  </div>
                  <span class="font-label text-[11px] text-outline font-semibold uppercase shrink-0">Págs 23–44</span>
                </div>
              </div>
              <!-- Accordion Item 3 -->
              <div class="p-6 rounded-xl bg-surface-container-low transition-all">
                <div class="flex items-start justify-between gap-4">
                  <div class="flex items-start gap-3">
                    <span class="font-headline font-semibold text-[18px] text-tertiary">03</span>
                    <div>
                      <h4 class="font-headline font-semibold text-[17px] text-on-surface">El Recetario: 24 Fórmulas Botánicas Precisas</h4>
                      <p class="font-body text-[13.5px] text-on-surface-variant mt-1">
                        Proporciones exactas en gramos para amarillos de espino, verdes musgo con romero y cobre, rosas de piel de palta curada y ocres de corteza de avellano.
                      </p>
                    </div>
                  </div>
                  <span class="font-label text-[11px] text-outline font-semibold uppercase shrink-0">Págs 45–68</span>
                </div>
              </div>
              <!-- Accordion Item 4 -->
              <div class="p-6 rounded-xl bg-surface-container-low transition-all">
                <div class="flex items-start justify-between gap-4">
                  <div class="flex items-start gap-3">
                    <span class="font-headline font-semibold text-[18px] text-tertiary">04</span>
                    <div>
                      <h4 class="font-headline font-semibold text-[17px] text-on-surface">Fijación, Solidez a la Luz &amp; Cuidado de Prendas</h4>
                      <p class="font-body text-[13.5px] text-on-surface-variant mt-1">
                        Protocolos de prueba ante rayos UV, pH de lavado y consejos de conservación para que los tonos mantengan su luminosidad durante décadas.
                      </p>
                    </div>
                  </div>
                  <span class="font-label text-[11px] text-outline font-semibold uppercase shrink-0">Págs 69–84</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Tab Panel 2: Filosofía Botánica (Hidden by default) -->
          <div class="tab-panel hidden flex flex-col gap-6 bg-surface-container-low p-8 rounded-2xl" id="tab-panel-manifiesto">
            <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Manifiesto de Estudio Telar &amp; Bosque</span>
            <h3 class="font-headline text-[24px] text-on-surface leading-snug">"El color verdadero no proviene de un laboratorio sintético; respira con las estaciones."</h3>
            <p class="font-body text-[14px] text-on-surface-variant leading-relaxed">
              Diseñamos este documento digital para que ningún artesano dependa de colorantes petroquímicos dañinos para las cuencas fluviales. Cada página fue maquetada con márgenes generosos pensando en quien la imprime sobre papeles reciclados o quien la consulta en su mesa de trabajo salpicada de agua y cortezas.
            </p>
            <div class="flex items-center gap-4 pt-2">
              <div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[20px]">eco</span>
              </div>
              <span class="font-body text-[13px] text-on-surface font-medium">100% de lo recaudado financia la reforestación de especies nativas tintóreas en Los Ríos, Chile.</span>
            </div>
          </div>
          <!-- Tab Panel 3: Licencia y Soporte (Hidden by default) -->
          <div class="tab-panel hidden flex flex-col gap-4 bg-surface-container-low p-8 rounded-2xl" id="tab-panel-licencia">
            <h3 class="font-headline text-[20px] text-on-surface">Condiciones de Uso &amp; Licenciamiento Digital</h3>
            <p class="font-body text-[14px] text-on-surface-variant leading-relaxed">
              Al adquirir este archivo obtienes el derecho indefinido de utilizar estas recetas para tu obra personal, prendas de venta propia y piezas de encargo. No está permitida la redistribución no autorizada del PDF ni la venta de las paletas digitales de manera aislada en otros marketplaces.
            </p>
            <div class="mt-2 p-4 rounded-xl bg-surface-container-lowest">
              <span class="font-label text-[12px] font-semibold text-primary">¿Tienes un taller comunitario?</span>
              <p class="font-body text-[13px] text-on-surface-variant mt-1">Escríbenos a través del stand virtual para licencias colectivas y escuelas rurales.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Buyers Social Proof & Verified Reviews -->
      <section class="w-full bg-surface-container-lowest px-6 lg:px-12 py-16" id="resenas">
        <div class="max-w-7xl mx-auto flex flex-col gap-10">
          <!-- Reviews Header with Stat Breakdown -->
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-6 border-b border-surface-container">
            <div>
              <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Comunidad de Teñido</span>
              <h2 class="font-headline font-semibold text-[28px] text-on-surface mt-1">Valoraciones de Creadores</h2>
            </div>
            <!-- Rating overview badge -->
            <div class="flex items-center gap-4 bg-surface-container-low px-5 py-3 rounded-xl">
              <div class="flex flex-col">
                <span class="font-headline font-bold text-[28px] text-on-surface leading-none">5.0</span>
                <span class="font-label text-[11px] text-on-surface-variant mt-1">de 5.0 estrellas</span>
              </div>
              <div class="h-8 w-[1px] bg-surface-container-highest"></div>
              <div class="text-[13px] text-on-surface-variant">
                <strong>100%</strong> de satisfacción reportada<br />(48 compras verificadas)
              </div>
            </div>
          </div>
          <!-- Testimonial Cards Grid -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Review 1 -->
            <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-4">
              <div class="flex flex-col gap-3">
                <div class="flex items-center justify-between">
                  <div class="flex items-center text-tertiary">
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="font-label text-[11px] text-outline">Hace 4 días</span>
                </div>
                <p class="font-body text-[13.5px] text-on-surface leading-relaxed">
                  "Una joya editorial. Las fichas de cálculo de mordentado me ahorraron meses de prueba y error. Pude teñir mi primera partida de vellón merino con corteza de espino y el tono ocre dorado es impecable."
                </p>
              </div>
              <div class="flex items-center gap-3 pt-2">
                <img alt="Margarita V." class="w-9 h-9 rounded-full object-cover" data-alt="Avatar portrait of a young artisan woman holding hand-dyed textile yarn in warm natural sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN28xREzkdJeVsOP1lSaaR8ck2MYDMc-TCFowrZJow98NJ1lTKW6U_Dn3hzcX18ZLjqZVr20oZjb8oQGGod4gX6hO4NZgJ5QjdOU4l6PYMM2jiUPNlpF7lBJ0ZPx5y_OmxDi2CaO7AuhKL_eiO5nDguXjBfJbuJ2BdNi7TlxOXNuvCV9InrJTEoDzi9KtbyYdhjoQ-gaXbkfuHfNGq28QWY9wcAZr4wfkNOx7VeHtHYKBkRjrQpJZdBA" />
                <div>
                  <span class="font-body font-semibold text-[13px] text-on-surface block">Margarita Vial</span>
                  <span class="font-label text-[11px] text-tertiary">Compradora Verificada · Taller Hebra Viva</span>
                </div>
              </div>
            </div>
            <!-- Review 2 -->
            <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-4">
              <div class="flex flex-col gap-3">
                <div class="flex items-center justify-between">
                  <div class="flex items-center text-tertiary">
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  </div>
                  <span class="font-label text-[11px] text-outline">Hace 2 semanas</span>
                </div>
                <p class="font-body text-[13.5px] text-on-surface leading-relaxed">
                  "La integración con la paleta de Procreate es algo que no esperaba de un taller tradicional. Puedo diseñar el boceto de mis tapices con los colores químicos exactos que luego obtengo en las ollas."
                </p>
              </div>
              <div class="flex items-center gap-3 pt-2">
                <img alt="Claudio R." class="w-9 h-9 rounded-full object-cover" data-alt="Avatar portrait of a graphic designer and textile maker with glasses in a light wood workshop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS2nAXOKxpSM4HrJVsnJ_llJ-vgcOvEovbm23LFuJIEOEyn9Zv-YLtnFW0RmgXs1W2X8buC2ose9OmVrEauoauOYzf5EZDlRoSfYjoRfhQe3Rxf_ntD6CFnFYtx3rOas7qFcZNmw3dyDquAeAsjHVJUhMWuG-BSyPjwzXzZGQwhH0HLRx0buJAHsrE9qItdT-1CwAfwq5afa1roItH4AzKgSM_IzHu0R7Op6BrQeCINZdrjdClHAY8xg" />
                <div>
                  <span class="font-body font-semibold text-[13px] text-on-surface block">Claudio Riquelme</span>
                  <span class="font-label text-[11px] text-tertiary">Comprador Verificado · Diseñador Gráfico</span>
                </div>
              </div>
            </div>
            <!-- Review 3 -->
            <div class="p-6 rounded-2xl bg-surface-container-low flex flex-col justify-between gap-4">
              <div class="flex items-center justify-between">
                <div class="flex items-center text-tertiary">
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                  <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <span class="font-label text-[11px] text-outline">Hace 1 mes</span>
              </div>
              <p class="font-body text-[13.5px] text-on-surface leading-relaxed">
                "La descargué en menos de dos segundos tras el pago. Imprimí las 12 fichas en papel kraft grueso y son la base de mi laboratorio textil diario. Rigor científico con alma poética."
              </p>
              <div class="flex items-center gap-3 pt-2">
                <img alt="Elena S." class="w-9 h-9 rounded-full object-cover" data-alt="Avatar portrait of a mature artisan weaver with silver hair smiling gently in a sunny craft studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVUQZR3tb30kU5huK95GMOL5Pml1UqS2nErSJtGUqTPwe05Fp2UYaJYPiLm5oidHWFPz9g2ksJC32l5YMRmJMTP7MuJ5N2riO30hGVHo0rpQOvvbIbiwTrio0LLFaNsJGlMCe-lWFgabjmF8JMqZtunmYL6e_ig9o-6GCktMcOugseXl3bBrNxdLXwWL7yPIYYBgvgDJjxtAv_nwCWjG-_mffxw6ykxGlbf9QXIin9c51kpStIGJh74Q" />
                <div>
                  <span class="font-body font-semibold text-[13px] text-on-surface block">Elena Sandoval</span>
                  <span class="font-label text-[11px] text-tertiary">Compradora Verificada · Hilandera</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Cross-sell & Related Works from Same Stand & Digital Creators -->
      <section class="w-full bg-surface px-6 lg:px-12 py-16">
        <div class="max-w-7xl mx-auto flex flex-col gap-10">
          <div class="flex items-end justify-between">
            <div>
              <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Taller &amp; Comunidad</span>
              <h2 class="font-headline font-semibold text-[26px] text-on-surface mt-1">Más del Creador y Recursos Afines</h2>
            </div>
            <a class="hidden sm:inline-flex items-center gap-1 text-primary hover:underline font-label text-[13px] font-semibold" data-path="stands-y-tiendas" href="#">
              Explorar todo el stand #18
              <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
          </div>
          <!-- 4 Cards Grid with Distinct Physical/Digital badges -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 (Digital) -->
            <div class="group flex flex-col rounded-2xl bg-surface-container-low overflow-hidden hover:shadow-md transition-all">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Colección Pinceles Botánicos" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Digital brushes preview for Procreate showing authentic botanical watercolor marks and natural mineral pigment strokes on rough textured cotton paper" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChXLxN5Gzaz-5JTcGi6FNT4uy8ieH5_4B0cPTJQfYjanLiTEa6v7hdSCRG2jexWImcGmYtqVeaoks4pTYMSb5C4KgnmMWgqkqC-uo9RTAv8D4vYCuv5Lb9avJuZq48o5fPwln1QqUsnhzZ8mPsHSsyYIifyqF5lqh1T6_r17emkQ0GCceUiNUJu9C-743UUZfB6peS9MJggpuP2Btmh5eJPEwGayUPUf8iB4fXMfmgbPF5cH-xoa9E6g" />
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm font-label text-[10px] font-bold tracking-wider text-primary uppercase">
                  Digital
                </span>
              </div>
              <div class="p-5 flex flex-col justify-between flex-1 gap-3">
                <div>
                  <span class="font-label text-[11px] text-outline block">Estudio Telar &amp; Bosque</span>
                  <h4 class="font-headline font-semibold text-[15px] text-on-surface mt-0.5 group-hover:text-primary transition-colors line-clamp-2">
                    Pinceles &amp; Texturas de Pigmento Natural para Procreate
                  </h4>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline font-semibold text-[16px] text-on-surface">$11.900 CLP</span>
                  <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors flex items-center justify-center" onclick="quickAdd('Pinceles Procreate', '$11.900 CLP')" type="button">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Card 2 (Physical) -->
            <div class="group flex flex-col rounded-2xl bg-surface-container-low overflow-hidden hover:shadow-md transition-all">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Madeja de Lana Teñida a Mano" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Hand-dyed organic wool yarn skeins in a wooden box with botanical labels indicating lichen and walnut bark origin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFK0eayGtKCGW86cByyzLJ66vF8yhITUe9zECJA6lQ_Pfnmw_J7XaG7d1HH_A3cRdGPLluOo95FtoJq6aG1yqT_hmI0cFDkTVletewFk9N0NmR36TdbKChrU-GY2kamC6e1FNYvLBr_ORYsZiajNGo3LwRbLT4J0rSjsQpeTjGIFmDaTvBPMLTzTv-FSzxotRdcftY8WSvCZNsu0duoRMfZCJJKetBP3IfKFvDjJyMEIG0mZUSU1E0Fg" />
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm font-label text-[10px] font-bold tracking-wider text-tertiary uppercase">
                  Físico · Pieza Única
                </span>
              </div>
              <div class="p-5 flex flex-col justify-between flex-1 gap-3">
                <div>
                  <span class="font-label text-[11px] text-outline block">Estudio Telar &amp; Bosque</span>
                  <h4 class="font-headline font-semibold text-[15px] text-on-surface mt-0.5 group-hover:text-primary transition-colors line-clamp-2">
                    Madeja de Lana Merino teñida con Corteza de Roble (200g)
                  </h4>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline font-semibold text-[16px] text-on-surface">$22.000 CLP</span>
                  <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors flex items-center justify-center" onclick="quickAdd('Madeja Merino Roble', '$22.000 CLP')" type="button">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Card 3 (Digital) -->
            <div class="group flex flex-col rounded-2xl bg-surface-container-low overflow-hidden hover:shadow-md transition-all">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Plantilla Cuaderno de Campo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Herbarium digital template sheet mockup showing botanical drying press logs, leaf silhouette outlines, and specimen data fields in minimalist modern typography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAJyIynhcK6VgcJDuVVClaNxW5JG-YzoL1k8v7LCxzHklJxTwMa9fXRhPN6csceqiSvv_styAMan5ZY7XBTYnXBHtkm3l_VFU6x-_TJ9BO0ErCu2Y9TOFcCxb24Y1uXqvniTjXws5PftWcd2cjQKP-yluLR9MpXWLaUofWj9iuGfcdjxmc0ttgAswSBW23GNjAxd2hmofcNGEKdODVNpLJ5ZMLowTPff2uE_PwnArhWzUNdUwJcEdqRA" />
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm font-label text-[10px] font-bold tracking-wider text-primary uppercase">
                  Digital
                </span>
              </div>
              <div class="p-5 flex flex-col justify-between flex-1 gap-3">
                <div>
                  <span class="font-label text-[11px] text-outline block">Taller Botánica Austral</span>
                  <h4 class="font-headline font-semibold text-[15px] text-on-surface mt-0.5 group-hover:text-primary transition-colors line-clamp-2">
                    Cuaderno Digital de Campo &amp; Herbario para iPad (PDF)
                  </h4>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline font-semibold text-[16px] text-on-surface">$8.500 CLP</span>
                  <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors flex items-center justify-center" onclick="quickAdd('Cuaderno de Campo', '$8.500 CLP')" type="button">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Card 4 (Digital Audio / Masterclass) -->
            <div class="group flex flex-col rounded-2xl bg-surface-container-low overflow-hidden hover:shadow-md transition-all">
              <div class="relative aspect-square overflow-hidden bg-surface-container">
                <img alt="Masterclass en Video" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Cinematic still from an artisan masterclass showing steam rising from copper pots outdoors in the Chilean Valdivian forest during winter" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlAB-aTzDViscD3mmhhgvEe_j68iwFVH3uThrEZS-jgOadrTT38OxxVCiHxB2Qu7EpXPBw4c8NCTKRwJs-qba5hCR3K84KTJBTR3TEM11HtNmrlLW10REXnz0uVRak7JGdApQLf_gXvRXCC7QhHj9M4AFNri04haOwfHC6x3RLk-TXPCENyz8R-5_cqrCswrueu20tcePjJ30zq90BSFWZHVHiAGhtGz0v6U3PtFt-80tN2kSgqPHu6w" />
                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm font-label text-[10px] font-bold tracking-wider text-primary uppercase">
                  Digital · Video 4K
                </span>
              </div>
              <div class="p-5 flex flex-col justify-between flex-1 gap-3">
                <div>
                  <span class="font-label text-[11px] text-outline block">Estudio Telar &amp; Bosque</span>
                  <h4 class="font-headline font-semibold text-[15px] text-on-surface mt-0.5 group-hover:text-primary transition-colors line-clamp-2">
                    Masterclass Grabada: Alquimia de Tintes en Caldero de Cobre
                  </h4>
                </div>
                <div class="flex items-center justify-between pt-2">
                  <span class="font-headline font-semibold text-[16px] text-on-surface">$24.000 CLP</span>
                  <button class="w-8 h-8 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface transition-colors flex items-center justify-center" onclick="quickAdd('Masterclass Caldero', '$24.000 CLP')" type="button">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Sample PDF Modal (Preview 5 pages) -->
      <div class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300" id="preview-modal">
        <div class="bg-surface-container-lowest rounded-2xl max-w-2xl w-full p-6 sm:p-8 flex flex-col gap-6 shadow-2xl relative">
          <div class="flex items-center justify-between border-b border-surface-container pb-4">
            <div>
              <span class="font-label text-[11px] uppercase tracking-wider text-tertiary font-bold">Muestra Editorial Libre</span>
              <h3 class="font-headline font-semibold text-[20px] text-on-surface">Guía Maestra de Tintes (Extracto 5 Págs)</h3>
            </div>
            <button class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors" onclick="closePreviewModal()" type="button">
              <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
          </div>
          <div class="w-full aspect-[16/10] bg-surface-container rounded-xl overflow-hidden relative flex items-center justify-center">
            <img alt="Visualizador de muestra de libro digital" class="w-full h-full object-cover" data-alt="Digital PDF viewer preview inside a sleek tablet reader displaying page four of the dye recipe book with step by step illustrations and fabric swatch samples" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6pCu0Ucg_BxYKTVyEebU3DphcK-oxYslQ8ctt00dC4juyPPB9j_uMT_bR29JS0zLjUJJFWVO7yMFgotTdL61z6A6R4yA3B6OJ8BZufmFgMujf2EVYyRpnvden4ghQJRJTBeJrZbLSnHOyImPH7jMMJ8Hjkl_lX58b1GjdIh92dlKYiiswWRNgvcFVb8Ke8yyvtpsdo6vwhID3qOQTof1YX6oiZP7Ih_UD7vTFGfVcvDvMbb4Ll5mXxw" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-5 text-white">
              <div>
                <span class="font-label text-[11px] uppercase tracking-wider opacity-80">Vista previa interactiva de muestra</span>
                <p class="font-headline text-[15px]">Capítulo 2: Principios Básicos de Extracción en Frío y Caliente.</p>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between gap-4 pt-2">
            <span class="text-[13px] text-on-surface-variant font-body">¿Te gusta la muestra? El archivo completo incluye 84 páginas + 12 fichas.</span>
            <button class="px-5 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-body font-semibold text-[13px] transition-colors shrink-0" onclick="closePreviewModal(); handleInstantCheckout();" type="button">
              Adquirir Completa ($16.500)
            </button>
          </div>
        </div>
      </div>
      <!-- Toast Notification -->
      <div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none bg-inverse-surface text-inverse-on-surface px-5 py-3 rounded-xl shadow-lg flex items-center gap-3" id="toast">
        <span class="material-symbols-outlined text-[20px] text-tertiary-fixed">check_circle</span>
        <span class="font-body text-[13px] font-medium" id="toast-text">Producto añadido con éxito</span>
      </div>
      <script>
        // Gallery Thumbnails switching
        function switchGalleryImage(index, button) {
          document.querySelectorAll('.gallery-thumb').forEach(b => {
            b.classList.remove('ring-2', 'ring-primary', 'opacity-100');
            b.classList.add('opacity-70');
          });
          button.classList.add('ring-2', 'ring-primary', 'opacity-100');
          button.classList.remove('opacity-70');

          const mainImg = document.getElementById('main-product-view');
          const thumbImg = button.querySelector('img');
          if (thumbImg && mainImg) {
            mainImg.style.opacity = '0.4';
            setTimeout(() => {
              mainImg.setAttribute('data-alt', thumbImg.getAttribute('data-alt'));
              mainImg.style.opacity = '1';
            }, 150);
          }
        }

        // Modal Control
        function openPreviewModal() {
          const modal = document.getElementById('preview-modal');
          modal.classList.remove('opacity-0', 'pointer-events-none');
          modal.classList.add('opacity-100');
        }

        function closePreviewModal() {
          const modal = document.getElementById('preview-modal');
          modal.classList.add('opacity-0', 'pointer-events-none');
          modal.classList.remove('opacity-100');
        }

        // Tabs Controller
        function setTab(tabKey, button) {
          document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
            btn.classList.add('text-on-surface-variant');
          });
          button.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm');
          button.classList.remove('text-on-surface-variant');

          document.querySelectorAll('.tab-panel').forEach(panel => {
            panel.classList.add('hidden');
          });

          const target = document.getElementById('tab-panel-' + tabKey);
          if (target) {
            target.classList.remove('hidden');
          }
        }

        // Toast feedback helper
        function showToast(message) {
          const toast = document.getElementById('toast');
          const text = document.getElementById('toast-text');
          text.innerText = message;
          toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
          setTimeout(() => {
            toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
          }, 3200);
        }

        // Cart & Buy handlers
        function handleAddToCart() {
          const label = document.getElementById('cart-btn-label');
          label.innerText = '¡Agregado a la cesta!';
          showToast('Guía Maestra añadida a tu cesta de la feria.');
          setTimeout(() => {
            label.innerText = 'Agregar a la cesta de la feria';
          }, 2500);
        }

        function handleInstantCheckout() {
          showToast('Iniciando pasarela de descarga directa segura...');
        }

        function quickAdd(productName, price) {
          showToast(productName + ' (' + price + ') agregado a la cesta.');
        }

        function toggleWishlist(button) {
          const icon = button.querySelector('span');
          if (icon.innerText === 'favorite_border') {
            icon.innerText = 'favorite';
            icon.style.fontVariationSettings = "'FILL' 1";
            button.classList.add('text-error');
            showToast('Guardado en tus favoritos de la feria.');
          } else {
            icon.innerText = 'favorite_border';
            icon.style.fontVariationSettings = "'FILL' 0";
            button.classList.remove('text-error');
            showToast('Eliminado de tus favoritos.');
          }
        }
      </script>
    </div>
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