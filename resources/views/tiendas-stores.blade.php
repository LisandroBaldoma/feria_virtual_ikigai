<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Noto+Serif:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&amp;family=Public+Sans:wght@500;600;700&amp;display=swap" rel="stylesheet" />
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
      <!-- ENCABEZADO EDITORIAL & HERO EXPLORADOR -->
      <section class="w-full bg-surface-container-lowest px-6 lg:px-12 pt-8 pb-10">
        <div class="max-w-7xl mx-auto flex flex-col gap-6">
          <!-- BREADCRUMB & METADATOS ARCHIVÍSTICOS -->
          <div class="flex flex-wrap items-center justify-between gap-4">
            <nav class="flex items-center gap-2 font-label text-[12px] uppercase tracking-wider text-secondary">
              <span class="hover:text-primary transition-colors cursor-pointer">Feria Ikigai</span>
              <span class="text-outline-variant">/</span>
              <span class="hover:text-primary transition-colors cursor-pointer">Stands &amp; Tiendas</span>
              <span class="text-outline-variant">/</span>
              <span class="text-primary font-semibold">Ciudad Ferial Interactiva</span>
            </nav>
            <div class="flex items-center gap-3">
              <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high text-tertiary font-label text-[11px] font-bold tracking-widest uppercase">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                Cartografía Viva · Edición Otoño 2025
              </span>
              <span class="font-label text-[12px] text-outline" id="active-talleres-count">6 Talleres en Mapa</span>
            </div>
          </div>
          <!-- TÍTULO EDITORIAL & BAJADA POÉTICA -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8 flex flex-col gap-3">
              <h1 class="font-headline text-4xl lg:text-5xl font-medium tracking-tight text-on-surface leading-[1.15]">
                La Ciudad Ferial de los Oficios
              </h1>
              <p class="font-body text-base lg:text-lg text-on-surface-variant max-w-3xl leading-relaxed">
                Un mapa ilustrado contemporáneo para recorrer el mercado con calma. Camina por sus cinco distritos de creación pausada, acércate a los puestos con persianas levantadas y descubre las manos, tornos y telares detrás de cada pieza singular.
              </p>
            </div>
            <div class="lg:col-span-4 flex flex-col items-start lg:items-end gap-3">
              <div class="flex items-center gap-2 bg-surface-container-low px-4 py-2 rounded-xl text-on-surface text-xs font-label">
                <span class="material-symbols-outlined text-primary text-[18px]">explore</span>
                <span>Navegación espacial libre, zoom y catálogo</span>
              </div>
              <span class="font-label text-[11px] text-outline">Inspirado en la cartografía de autor y talleres de kioto &amp; sur andino</span>
            </div>
          </div>
          <!-- BARRA DE HERRAMIENTAS & SELECTOR DE DENSIDAD -->
          <div class="mt-4 p-2 bg-surface-container-low rounded-xl flex flex-col xl:flex-row items-stretch xl:items-center justify-between gap-3">
            <!-- Selector de Distrito -->
            <div class="flex items-center gap-2 overflow-x-auto py-1 px-1 scrollbar-none" id="districts-container">
              <button class="district-filter-btn px-4 py-2 rounded-lg bg-primary-container text-on-primary font-label text-xs font-semibold whitespace-nowrap shadow-sm transition-all" data-district="all">
                Toda la Ciudad
              </button>
              <button class="district-filter-btn px-3 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label text-xs whitespace-nowrap transition-colors" data-district="barro">
                Fuego y Barro (Cerámica)
              </button>
              <button class="district-filter-btn px-3 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label text-xs whitespace-nowrap transition-colors" data-district="telar">
                Telar &amp; Fibras
              </button>
              <button class="district-filter-btn px-3 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label text-xs whitespace-nowrap transition-colors" data-district="ebanistas">
                Ebanistas &amp; Forja
              </button>
              <button class="district-filter-btn px-3 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label text-xs whitespace-nowrap transition-colors" data-district="digital">
                Distrito Digital
              </button>
              <button class="district-filter-btn px-3 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label text-xs whitespace-nowrap transition-colors" data-district="botanica">
                Botánica &amp; Joyería
              </button>
            </div>
            <!-- Buscador Rápido -->
            <div class="flex items-center gap-2">
              <div class="relative w-full xl:w-72">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
                <input class="w-full pl-9 pr-3 py-2 text-xs bg-surface-container-lowest rounded-lg border-none text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary font-body" id="taller-search-input" placeholder="Buscar taller o creador (ej. Valentina, Telar, Gres...)" type="text" />
              </div>
              <div class="hidden sm:flex items-center bg-surface-container-lowest rounded-lg px-2 py-1.5 gap-1 shadow-sm">
                <span class="font-label text-[10px] text-secondary uppercase font-semibold px-1.5 py-0.5 rounded bg-surface-container" id="zoom-badge">Zoom 1.0x</span>
                <span class="font-label text-[11px] text-on-surface" id="district-status-label">Distrito Activo</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- EL MAPA ILUSTRADO INTERACTIVO (CANVAS CARTOGRÁFICO BESPOKE) -->
      <section class="relative w-full bg-[#f4efeb] overflow-hidden select-none py-4 px-3 sm:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto relative rounded-2xl overflow-hidden shadow-2xl bg-[#faf7f2] min-h-[680px] lg:min-h-[780px] cursor-grab active:cursor-grabbing" id="map-viewport">
          <!-- Contenedor Transformable para Zoom y Pan -->
          <div class="absolute inset-0 w-full h-full origin-center transition-transform duration-100 ease-out" id="map-plane" style="transform: translate(0px, 0px) scale(1);">
            <!-- Fondo Topográfico y Textura Orgánica (Inspiración Monocle / Kyoto Craft) -->
            <div class="absolute inset-0 pointer-events-none opacity-40">
              <svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <radialgradient cx="50%" cy="50%" id="topocenter" r="50%">
                    <stop offset="0%" stop-color="#e9e1d6" stop-opacity="0.8"></stop>
                    <stop offset="100%" stop-color="#faf7f2" stop-opacity="0"></stop>
                  </radialgradient>
                </defs>
                <!-- Curvas de Nivel Topográficas Sutiles -->
                <path d="M-50,200 Q200,120 400,240 T900,180 T1250,300" fill="none" stroke="#d5c8b8" stroke-dasharray="4,6" stroke-width="1.2"></path>
                <path d="M-30,340 Q250,280 500,420 T1000,320 T1250,480" fill="none" stroke="#d5c8b8" stroke-width="1"></path>
                <path d="M-40,560 Q300,500 600,640 T1050,520 T1250,680" fill="none" stroke="#d5c8b8" stroke-dasharray="6,8" stroke-width="1"></path>
                <!-- Río / Arroyo Sereno que serpentea -->
                <path d="M220,0 C260,180 340,320 420,410 C520,520 680,590 780,800" fill="none" opacity="0.6" stroke="#c4d5ea" stroke-linecap="round" stroke-width="26"></path>
                <path d="M220,0 C260,180 340,320 420,410 C520,520 680,590 780,800" fill="none" opacity="0.8" stroke="#a2bedc" stroke-dasharray="8,12" stroke-width="4"></path>
                <!-- Senderos de adoquín y gravilla -->
                <path d="M100,620 Q300,580 430,420 T720,380 T1100,280" fill="none" stroke="#e0d6c9" stroke-linecap="round" stroke-width="14"></path>
                <path d="M430,420 Q600,220 850,200" fill="none" stroke="#e0d6c9" stroke-linecap="round" stroke-width="10"></path>
                <path d="M500,650 Q750,600 980,680" fill="none" stroke="#e0d6c9" stroke-linecap="round" stroke-width="12"></path>
                <!-- Puente rústico sobre el río -->
                <rect fill="#a47c5d" height="24" opacity="0.9" rx="4" transform="rotate(-35 425 410)" width="34" x="408" y="398"></rect>
              </svg>
            </div>
            <!-- ARBOLEDAS Y VEGETACIÓN ESTILIZADA JAPONESA (SVG DECORATIVO) -->
            <div class="absolute inset-0 pointer-events-none">
              <!-- Bosque de Quillayes y Pinos Norte -->
              <div class="absolute top-12 left-1/3 flex items-center gap-1 opacity-70">
                <span class="w-4 h-6 rounded-t-full bg-[#7a8b6e]"></span>
                <span class="w-5 h-8 rounded-t-full bg-[#657958]"></span>
                <span class="w-3 h-5 rounded-t-full bg-[#8c9c7f]"></span>
              </div>
              <!-- Ciruelos en Flor Sur -->
              <div class="absolute bottom-24 right-1/4 flex items-center gap-1.5 opacity-80">
                <span class="w-4 h-4 rounded-full bg-[#d6969c]/70 ring-4 ring-[#f4d7d9]/60"></span>
                <span class="w-6 h-6 rounded-full bg-[#c98086]/70 ring-4 ring-[#f4d7d9]/60"></span>
                <span class="w-3 h-3 rounded-full bg-[#b96970]/70"></span>
              </div>
              <!-- Piedras del Río y Estanque -->
              <div class="absolute bottom-36 left-[34%] flex gap-1 opacity-60">
                <span class="w-3 h-2 rounded-full bg-[#99948d]"></span>
                <span class="w-4 h-3 rounded-full bg-[#b5b0a8]"></span>
              </div>
            </div>
            <!-- ROTULACIÓN CARTOGRÁFICA DE LOS 5 DISTRITOS TEMÁTICOS -->
            <!-- Distrito 1: Fuego y Barro (Oeste) -->
            <div class="absolute top-[28%] left-[8%] lg:left-[11%] flex flex-col items-start pointer-events-none transition-opacity duration-300" data-district-title="barro">
              <span class="font-label text-[10px] tracking-[0.25em] uppercase text-tertiary font-bold">Sector I · Alfarería Ancestral</span>
              <span class="font-headline text-lg lg:text-xl font-medium text-on-surface opacity-90">Distrito del Fuego y Barro</span>
              <span class="text-[11px] font-body text-secondary">Hornos de leña &amp; ceniza volcánica</span>
            </div>
            <!-- Distrito 2: Barrio del Telar (Norte) -->
            <div class="absolute top-[8%] left-[44%] lg:left-[48%] -translate-x-1/2 flex flex-col items-center text-center pointer-events-none transition-opacity duration-300" data-district-title="telar">
              <span class="font-label text-[10px] tracking-[0.25em] uppercase text-primary font-bold">Sector II · Urdimbres</span>
              <span class="font-headline text-lg lg:text-xl font-medium text-on-surface opacity-90">Barrio del Telar &amp; Fibras</span>
              <span class="text-[11px] font-body text-secondary">Lino orgánico, oveja merino &amp; tintes</span>
            </div>
            <!-- Distrito 3: Ebanistas & Forja (Central-Este) -->
            <div class="absolute top-[22%] right-[8%] lg:right-[12%] flex flex-col items-end text-right pointer-events-none transition-opacity duration-300" data-district-title="ebanistas">
              <span class="font-label text-[10px] tracking-[0.25em] uppercase text-[#735338] font-bold">Sector III · Talleres Nobles</span>
              <span class="font-headline text-lg lg:text-xl font-medium text-on-surface opacity-90">Paseo de Ebanistas &amp; Forja</span>
              <span class="text-[11px] font-body text-secondary">Aromas a raulí, cepillo yunque &amp; fuego</span>
            </div>
            <!-- Distrito 4: Distrito Creativo Digital (Plaza Central) -->
            <div class="absolute top-[48%] left-[54%] flex flex-col items-start pointer-events-none transition-opacity duration-300" data-district-title="digital">
              <span class="font-label text-[10px] tracking-[0.25em] uppercase text-primary font-bold">Ágora Central</span>
              <span class="font-headline text-base lg:text-lg font-medium text-on-surface opacity-90">Distrito Digital &amp; Saberes</span>
              <span class="text-[10px] font-body text-secondary">Plantillas, manuales &amp; tipos de autor</span>
            </div>
            <!-- Distrito 5: Jardín Botánico & Joyas (Sur) -->
            <div class="absolute bottom-[10%] right-[14%] lg:right-[20%] flex flex-col items-start pointer-events-none transition-opacity duration-300" data-district-title="botanica">
              <span class="font-label text-[10px] tracking-[0.25em] uppercase text-[#3e6843] font-bold">Sector V · Herbarios</span>
              <span class="font-headline text-lg lg:text-xl font-medium text-on-surface opacity-90">Jardín Botánico &amp; Joyería Silvestre</span>
              <span class="text-[11px] font-body text-secondary">Plata 950, hidrolatos nativos &amp; flores secas</span>
            </div>
            <!-- ========================================== -->
            <!-- MARCADORES INTERACTIVOS DE LA CIUDAD       -->
            <!-- ========================================== -->
            <!-- Stand #48: Taller Barro Mestizo (Cerámica & Gres) -->
            <div class="stall-marker absolute top-[38%] left-[20%] lg:left-[22%] z-20 transition-all duration-300" data-district="barro" data-stand-id="48" style="transform-origin: bottom center;">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="pulse-ring absolute -top-3 w-8 h-8 rounded-full bg-primary/20 animate-ping"></div>
                <div class="relative flex flex-col items-center">
                  <div class="w-14 h-4 rounded-t-lg bg-gradient-to-r from-primary-container via-primary to-primary-container shadow-md flex items-center justify-around px-1 overflow-hidden">
                    <span class="w-1 h-full bg-surface-container-lowest/30"></span>
                    <span class="w-1 h-full bg-surface-container-lowest/30"></span>
                    <span class="w-1 h-full bg-surface-container-lowest/30"></span>
                    <span class="w-1 h-full bg-surface-container-lowest/30"></span>
                  </div>
                  <div class="w-12 h-10 bg-surface-container-lowest rounded-b-md shadow-lg flex items-center justify-center ring-2 ring-primary group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-primary text-[24px]">potted_plant</span>
                  </div>
                  <div class="w-3 h-3 bg-primary rotate-45 -mt-1.5 shadow-sm"></div>
                </div>
                <div class="mt-2 px-3 py-1 bg-on-surface text-surface-bright rounded-full shadow-lg flex items-center gap-1.5 whitespace-nowrap group-hover:bg-primary transition-colors">
                  <span class="w-2 h-2 rounded-full bg-[#10b981] animate-pulse"></span>
                  <span class="font-label text-[11px] font-bold tracking-tight">Stand #48 · Valentina Lagos</span>
                </div>
              </div>
            </div>
            <!-- Stand #18: Estudio Telar & Bosque (Norte) -->
            <div class="stall-marker absolute top-[18%] left-[45%] z-20 transition-all duration-300" data-district="telar" data-stand-id="18">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="relative flex flex-col items-center">
                  <div class="w-10 h-10 rounded-xl bg-surface-container-lowest shadow-md flex items-center justify-center group-hover:scale-110 transition-transform ring-2 ring-primary/20 group-hover:ring-primary">
                    <span class="material-symbols-outlined text-primary text-[20px]">texture</span>
                  </div>
                  <div class="w-2.5 h-2.5 bg-primary/70 rotate-45 -mt-1 shadow-sm"></div>
                </div>
                <div class="mt-1 px-2.5 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-md text-center group-hover:bg-primary group-hover:text-white transition-colors">
                  <p class="font-headline text-[11px] font-semibold text-on-surface group-hover:text-white leading-tight">Telar &amp; Bosque #18</p>
                  <span class="font-label text-[9px] text-[#2d6a4f] group-hover:text-white/90 flex items-center justify-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#2d6a4f] group-hover:bg-white"></span> En telar
                  </span>
                </div>
              </div>
            </div>
            <!-- Stand #09: Taller Raíz Austral (Este) -->
            <div class="stall-marker absolute top-[34%] right-[16%] z-20 transition-all duration-300" data-district="ebanistas" data-stand-id="09">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="relative flex flex-col items-center">
                  <div class="w-10 h-10 rounded-xl bg-surface-container-lowest shadow-md flex items-center justify-center group-hover:scale-110 transition-transform ring-2 ring-[#735338]/30 group-hover:ring-[#735338]">
                    <span class="material-symbols-outlined text-[#735338] text-[20px]">carpenter</span>
                  </div>
                  <div class="w-2.5 h-2.5 bg-[#735338] rotate-45 -mt-1 shadow-sm"></div>
                </div>
                <div class="mt-1 px-2.5 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-md text-center group-hover:bg-[#735338] group-hover:text-white transition-colors">
                  <p class="font-headline text-[11px] font-semibold text-on-surface group-hover:text-white leading-tight">Raíz Austral #09</p>
                  <span class="font-label text-[9px] text-secondary group-hover:text-white/80">Mesas de autor</span>
                </div>
              </div>
            </div>
            <!-- Stand #24: Bitácora Digital & Saberes (Centro) -->
            <div class="stall-marker absolute top-[58%] left-[49%] z-20 transition-all duration-300" data-district="digital" data-stand-id="24">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="relative flex flex-col items-center">
                  <div class="w-10 h-10 rounded-xl bg-surface-container-lowest shadow-md flex items-center justify-center group-hover:scale-110 transition-transform ring-2 ring-primary/20 group-hover:ring-primary">
                    <span class="material-symbols-outlined text-primary text-[20px]">menu_book</span>
                  </div>
                  <div class="w-2.5 h-2.5 bg-primary/70 rotate-45 -mt-1 shadow-sm"></div>
                </div>
                <div class="mt-1 px-2.5 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-md text-center group-hover:bg-primary group-hover:text-white transition-colors">
                  <p class="font-headline text-[10px] font-semibold text-on-surface group-hover:text-white leading-tight">Bitácora #24</p>
                  <span class="font-label text-[8px] text-tertiary group-hover:text-white/90">3 Manuales hoy</span>
                </div>
              </div>
            </div>
            <!-- Stand #07: Botánica Silvestre & Joyería (Sur) -->
            <div class="stall-marker absolute bottom-[20%] right-[18%] z-20 transition-all duration-300" data-district="botanica" data-stand-id="07">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="relative flex flex-col items-center">
                  <div class="w-10 h-10 rounded-xl bg-surface-container-lowest shadow-md flex items-center justify-center group-hover:scale-110 transition-transform ring-2 ring-[#3e6843]/30 group-hover:ring-[#3e6843]">
                    <span class="material-symbols-outlined text-[#3e6843] text-[20px]">spa</span>
                  </div>
                  <div class="w-2.5 h-2.5 bg-[#3e6843] rotate-45 -mt-1 shadow-sm"></div>
                </div>
                <div class="mt-1 px-2.5 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-md text-center group-hover:bg-[#3e6843] group-hover:text-white transition-colors">
                  <p class="font-headline text-[11px] font-semibold text-on-surface group-hover:text-white leading-tight">Botánica #07</p>
                  <span class="font-label text-[9px] text-secondary group-hover:text-white/80">Aromas nativos</span>
                </div>
              </div>
            </div>
            <!-- Stand #32: Gres Vulcano (Oeste Inferior) -->
            <div class="stall-marker absolute top-[64%] left-[12%] z-20 transition-all duration-300" data-district="barro" data-stand-id="32">
              <div class="relative flex flex-col items-center cursor-pointer group">
                <div class="relative flex flex-col items-center">
                  <div class="w-10 h-10 rounded-xl bg-surface-container-lowest shadow-md flex items-center justify-center group-hover:scale-110 transition-transform ring-2 ring-tertiary/30 group-hover:ring-tertiary">
                    <span class="material-symbols-outlined text-tertiary text-[20px]">local_fire_department</span>
                  </div>
                  <div class="w-2.5 h-2.5 bg-tertiary rotate-45 -mt-1 shadow-sm"></div>
                </div>
                <div class="mt-1 px-2.5 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-md text-center group-hover:bg-tertiary group-hover:text-white transition-colors">
                  <p class="font-headline text-[10px] font-semibold text-on-surface group-hover:text-white leading-tight">Gres Vulcano #32</p>
                  <span class="font-label text-[8px] text-secondary group-hover:text-white/80">Teteras de fuego</span>
                </div>
              </div>
            </div>
          </div><!-- /#map-plane -->
          <!-- =============================================== -->
          <!-- INSPECTION POPOVER / TARJETA DINÁMICA DE TIENDA -->
          <!-- =============================================== -->
          <div class="absolute left-1/2 -translate-x-1/2 md:translate-x-0 md:left-auto md:right-16 top-16 md:top-20 w-[92%] sm:w-[390px] bg-surface-container-lowest/98 backdrop-blur-xl rounded-2xl shadow-2xl p-5 z-40 transition-all duration-300 border border-outline-variant/30" id="stand-modal" style="display: block;">
            <!-- Encabezado del Popover: Creadora & Verificación -->
            <div class="flex items-start justify-between gap-3 pb-3">
              <div class="flex items-center gap-3">
                <div class="relative">
                  <img class="w-12 h-12 rounded-full object-cover ring-2 ring-primary-container/30" id="modal-artisan-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtLQbTh3OR60aLl6bfQnkKBBF_iAiVXJrsl8z5Itptuf-YCwljSa1U9l3GcjjiXIHnoFFNOMqsPudzSVtgI-n6q8wSEIRSZfxSHVzJmFRRhB9IuugSZOUpJ6SXdeik64i83IjA6JtiiyJ5M-2bR5YM8xdxLtgrqiylVo-qFytRJ_ihDnWGOdaa7W3tKZ6qgwWTbV-ML2DRP2Ai7qnpFYri-1dehfCwmEIowCUPewA9C8sSSiMhn0Ts0g" />
                  <span class="absolute -bottom-1 -right-1 w-4 h-4 rounded-full bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined text-[10px]">verified</span>
                  </span>
                </div>
                <div class="flex flex-col">
                  <span class="font-label text-[10px] font-bold tracking-wider uppercase text-tertiary" id="modal-role-badge">Maestra Artesana · Stand #48</span>
                  <h2 class="font-headline text-lg font-bold text-on-surface leading-snug" id="modal-stand-title">Taller Barro Mestizo</h2>
                  <span class="font-body text-xs text-secondary" id="modal-location">Cerámica &amp; Gres · Pucón, Chile</span>
                </div>
              </div>
              <button class="text-outline hover:text-on-surface p-1.5 rounded-full hover:bg-surface-container transition-colors" id="close-modal-btn" title="Cerrar ficha de stand">
                <span class="material-symbols-outlined text-[20px]">close</span>
              </button>
            </div>
            <!-- Poética del Puesto / Declaración -->
            <div class="py-2.5 bg-surface-container-low rounded-xl px-3 my-2">
              <p class="font-body text-[12px] leading-relaxed text-on-surface-variant italic" id="modal-quote">
                "Piezas esculpidas a mano en torno de pie y horneadas a leña a 1.280°C con mezclas de ceniza volcánica del Villarrica y arenas ribereñas."
              </p>
            </div>
            <!-- Métricas de Confianza & Estado -->
            <div class="flex items-center justify-between text-xs py-2">
              <div class="flex items-center gap-1 text-on-surface">
                <span class="material-symbols-outlined text-tertiary text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="font-bold" id="modal-rating">5.0</span>
                <span class="text-outline" id="modal-reviews-count">(142 reseñas de coleccionistas)</span>
              </div>
              <div class="flex items-center gap-1 font-label text-[11px] font-medium text-[#10b981]" id="modal-inventory-status">
                <span class="w-1.5 h-1.5 rounded-full bg-[#10b981]"></span>
                <span id="modal-inventory-text">12 piezas listas</span>
              </div>
            </div>
            <!-- Mini-Vitrina de 2 Productos Insignia Disponibles -->
            <div class="grid grid-cols-2 gap-2.5 my-3" id="modal-products-grid">
              <!-- Producto 1 -->
              <div class="flex flex-col bg-surface-container-low rounded-xl p-2 group/prod hover:bg-surface-container transition-colors cursor-pointer">
                <div class="relative w-full h-24 rounded-lg overflow-hidden bg-surface-container-highest">
                  <img class="w-full h-full object-cover group-hover/prod:scale-105 transition-transform duration-300" id="modal-prod1-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGjSjVbTEdahHZcO7oR1lrSixfcudbp8oN5Ux55XorayJqrGcRDVxaodbcL4IH6vVug0XZAFqpsBxuFsTSdA7eioO7zAqGc7_BeSyYa7lO_kz0hqTH8l-QFtsbaebs989hCnABxR79d-Ci-FuaHn-6vpG5gPd-XPr7mDZ3gRGdeG_DfMP8N9aeffAsQKvxWCV63kSYi8e7XSwuBAvvlWjOEje5L8t_2OdgQ0Yp5YX6OCRAUOk7Rhq-hA" />
                  <span class="absolute top-1 left-1 px-1.5 py-0.5 rounded bg-on-surface/80 backdrop-blur-sm text-surface-bright font-label text-[9px] uppercase" id="modal-prod1-tag">Pieza Única</span>
                </div>
                <h3 class="font-headline text-[12px] font-semibold text-on-surface mt-1.5 truncate" id="modal-prod1-title">Jarra Escultórica en Gres</h3>
                <span class="font-label text-[11px] font-bold text-primary mt-0.5" id="modal-prod1-price">$28.000 CLP</span>
              </div>
              <!-- Producto 2 -->
              <div class="flex flex-col bg-surface-container-low rounded-xl p-2 group/prod hover:bg-surface-container transition-colors cursor-pointer">
                <div class="relative w-full h-24 rounded-lg overflow-hidden bg-surface-container-highest">
                  <img class="w-full h-full object-cover group-hover/prod:scale-105 transition-transform duration-300" id="modal-prod2-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtodEUMsvgIJFNYAtdLOGc_JvvqXti2FkSCd2KqqD1ixkU6tTpaVVN5AWFhd4mWxKr7qMe_IchjzWXaebbvWG6BhU1ImokSI1Q8EJ56k8pGJIC7qIQx5u9-X-HbtNExPS7sxY98N9b-wCPP2EZjKYOMdnlL44-10e_uPBSP-XzpNJBQw_mzdBDAcmDHaXOOlJfD3Oktfp8uG5qlqbDtgOrd-Iz85-SlXf_VNkg1z2o6jQJWwWtE3hELw" />
                  <span class="absolute top-1 left-1 px-1.5 py-0.5 rounded bg-tertiary-container text-on-tertiary-container font-label text-[9px] uppercase font-bold" id="modal-prod2-tag">Activo Digital</span>
                </div>
                <h3 class="font-headline text-[12px] font-semibold text-on-surface mt-1.5 truncate" id="modal-prod2-title">Guía: Cenizas &amp; Vidriado</h3>
                <span class="font-label text-[11px] font-bold text-primary mt-0.5" id="modal-prod2-price">$12.500 CLP</span>
              </div>
            </div>
            <!-- Acciones del Stand -->
            <div class="flex items-center gap-2 pt-2">
              <a class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-primary to-primary-container text-on-primary font-body font-semibold text-xs shadow-md hover:shadow-lg transition-all" href="#" id="modal-enter-btn">
                <span id="modal-enter-text">Entrar al Stand #48</span>
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
              </a>
              <button class="p-2.5 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors" title="Conversar con el creador">
                <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
              </button>
            </div>
          </div>
          <!-- ============================================== -->
          <!-- CONTROLES FLOTANTES DE NAVEGACIÓN & ZOOM (UI)  -->
          <!-- ============================================== -->
          <div class="absolute top-6 right-6 z-30 flex flex-col gap-2">
            <div class="bg-surface-container-lowest/95 backdrop-blur-md rounded-xl p-1 shadow-lg flex flex-col border border-outline-variant/30">
              <button class="w-9 h-9 flex items-center justify-center text-on-surface hover:bg-surface-container rounded-lg transition-colors" id="zoom-in" title="Acercar mapa">
                <span class="material-symbols-outlined text-[20px]">add</span>
              </button>
              <button class="w-9 h-9 flex items-center justify-center text-on-surface hover:bg-surface-container rounded-lg transition-colors" id="zoom-out" title="Alejar mapa">
                <span class="material-symbols-outlined text-[20px]">remove</span>
              </button>
              <div class="w-full h-px bg-outline-variant/30 my-0.5"></div>
              <button class="w-9 h-9 flex items-center justify-center text-primary hover:bg-surface-container rounded-lg transition-colors" id="recenter-map" title="Restaurar y Centrar Ciudad (1.0x)">
                <span class="material-symbols-outlined text-[20px]">center_focus_strong</span>
              </button>
            </div>
            <!-- Indicador de Viento / Rosa de los Vientos Minimalista -->
            <div class="bg-surface-container-lowest/95 backdrop-blur-md rounded-xl p-2 shadow-lg flex items-center justify-center w-11 h-11 text-secondary border border-outline-variant/30" title="Orientación Norte">
              <span class="font-headline font-bold text-xs text-tertiary">N</span>
            </div>
          </div>
          <!-- ======================================================== -->
          <!-- PANEL LATERAL COLAPSABLE: EXPLORACIÓN & DENSIDAD RÁPIDA -->
          <!-- ======================================================== -->
          <div class="absolute bottom-6 left-6 z-30 max-w-sm hidden md:block">
            <div class="bg-surface-container-lowest/95 backdrop-blur-md rounded-2xl shadow-xl p-4 flex flex-col gap-3 border border-outline-variant/30">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                  <span class="font-label text-xs font-bold uppercase tracking-wider text-on-surface" id="panel-district-title">Distrito Seleccionado</span>
                </div>
                <span class="px-2 py-0.5 rounded bg-surface-container text-secondary text-[11px] font-label" id="panel-taller-count">6 talleres</span>
              </div>
              <div class="space-y-1.5 text-xs text-on-surface-variant font-body max-h-44 overflow-y-auto pr-1" id="panel-talleres-list">
                <!-- Rellenado dinámicamente -->
              </div>
              <!-- Mini Guía de Recorrido -->
              <div class="pt-2 flex items-center justify-between text-[11px] font-label text-outline border-t border-outline-variant/20">
                <span class="flex items-center gap-1">
                  <span class="material-symbols-outlined text-[14px]">touch_app</span> Clic en marcador o lista para abrir vitrina
                </span>
                <button class="text-primary font-semibold hover:underline" id="reset-filter-link">Ver todos</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECCIÓN COMPLEMENTARIA: CATÁLOGO EN TENDENCIA & NUEVAS HORNADAS -->
      <section class="w-full bg-surface py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto flex flex-col gap-10">
          <!-- Cabecera de la Sección de Descubrimiento -->
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div class="flex flex-col gap-2">
              <div class="flex items-center gap-2 text-tertiary font-label text-xs font-bold tracking-widest uppercase">
                <span class="material-symbols-outlined text-[16px]">local_fire_department</span>
                <span>Nuevas Hornadas &amp; Puestos en Tendencia</span>
              </div>
              <h2 class="font-headline text-3xl font-medium text-on-surface">
                Talleres con persiana arriba esta semana
              </h2>
              <p class="font-body text-sm text-on-surface-variant max-w-xl">
                Si prefieres recorrer por catálogo o territorio, explora las tiendas con piezas recién creadas listas para viaje directo desde los talleres.
              </p>
            </div>
            <!-- Filtro Territorial Rápido -->
            <div class="flex flex-wrap items-center gap-1.5 bg-surface-container-low p-1.5 rounded-xl">
              <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface text-xs font-label font-semibold shadow-sm">
                Todo Chile
              </button>
              <button class="px-3 py-1.5 rounded-lg text-secondary hover:text-on-surface text-xs font-label">
                Araucanía &amp; Lagos
              </button>
              <button class="px-3 py-1.5 rounded-lg text-secondary hover:text-on-surface text-xs font-label">
                Valle Central
              </button>
              <button class="px-3 py-1.5 rounded-lg text-secondary hover:text-on-surface text-xs font-label">
                Digital / Remoto
              </button>
            </div>
          </div>
          <!-- Bento Grid de 3 Talleres Destacados de la Semana -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tarjeta 1: Valentina Lagos (Fuego y Barro) -->
            <div class="bg-surface-container-lowest rounded-2xl p-6 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
              <div class="flex flex-col gap-4">
                <div class="flex items-start justify-between">
                  <div class="flex items-center gap-3">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/20" data-alt="Retrato artesanal de Valentina Lagos ceramista en su taller de Pucón, delantal manchado con gres y sonrisa natural." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcUNOWnz1UJBcVYN0PdrhWI1jX-s2XHRU804j8zRqSfBGd2XmshZl6S1vcEZkPfdZ7pHqXcx8_YuS-fIjYNplYzozJ__ulgBxWNkW20QSb1KAPMy1-J9fdZVTc03gLlTd9ja80z-xUbzMBoewqh4cQDw_cHVMCasVFNHhLTIPRaXxNtS3L0GYIOvNo_6Wk-LearYNVpqwHMYLrn-D1xVLWSB8QUeQBJn9q-b8Ub_z24IZB2vRMapI7vQ" />
                    <div>
                      <h3 class="font-headline text-lg font-bold text-on-surface group-hover:text-primary transition-colors">Taller Barro Mestizo</h3>
                      <span class="font-label text-xs text-secondary">Stand #48 · Pucón</span>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-[#10b981]/10 text-[#0d7d56] font-label text-[10px] font-bold uppercase">
                    En vivo
                  </span>
                </div>
                <p class="font-body text-xs text-on-surface-variant leading-relaxed line-clamp-3">
                  Investigación de pastas cerámicas silvestres y esmaltes minerales basados en ceniza volcánica del volcán Villarrica. Piezas únicas horneadas a leña.
                </p>
                <div class="grid grid-cols-2 gap-2 pt-2">
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Cuenco de té ceremonial chawan en cerámica gres oscura con textura de lava y reflejos dorados sutiles." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhl75kgvcFc7R5Isi6eMTWpgDP1HJmT5t5V3dSZwbwYb5Yjo4jT0qKoLhSp-UVQ8RMDoNMQIoWt0Y1oWUZSqov-Y_e2ErheOQXYdBHmBvCu89I7kwRkagvB7XoXRmFWXu82hQ7_gXOMhWyAzwlhx85zwdrfWo3wt1-5UhEdzRdRlVhtVSp1EuKt0M4qjfpRurXSGTNPUrZHjYewTS4I33ZhehX8JQO9cByn9p4JrQrxeaYvkhMQQ5zgQ" />
                  </div>
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Set de platos planos de cerámica rústica artesanal dispuestos con hojas de eucalipto seco en una mesa de madera de roble." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6GisGkqqfQ6RdOlHYpi26DrdrXcuuBptRLYCIy4lZTjBgeRNKJpYuWXzVD_B6oLDDxfiXH-YGJ7dj1GdVfrQI-lbXXtic2YcJKiBhKVULzMoAuMvNsBbW-xsUfegsJmr0o29LxRdRJaTq-d5q-5yYlACN8JxSnIhXlh93qxJ-t0mb2bYVTuSVo7wfjspoAnEjkcuiDFuxn8BIiGCLGTzliczibSiwug8x3jwqoDSieEEzp2jSLeRkbA" />
                  </div>
                </div>
              </div>
              <div class="pt-6 mt-4 flex items-center justify-between">
                <span class="font-label text-xs font-semibold text-tertiary">12 piezas disponibles</span>
                <button class="inline-flex items-center gap-1 font-label text-xs font-bold text-primary group-hover:gap-2 transition-all open-stand-shortcut" data-stand="48">
                  <span>Visitar Mostrador</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </button>
              </div>
            </div>
            <!-- Tarjeta 2: Telar & Bosque (Fibras y Lana) -->
            <div class="bg-surface-container-lowest rounded-2xl p-6 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
              <div class="flex flex-col gap-4">
                <div class="flex items-start justify-between">
                  <div class="flex items-center gap-3">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/20" data-alt="Retrato de Amalia Quintriqueo, maestra tejedora mapuche en Telar vertical huitral en Curarrehue, sosteniendo un ovillo de lana hilada a mano con rueca tradicional." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAWqTtWQPlxpJF2XhAtp6YKPkJfeFjZtoqzGmMWWxP654IPcDJ0uJ03Px-EFeeur_80andCVTeFrpTyI-PV-Up822wDAz73knRkFEPrYETtBhgf6RV4_F3OrEa71FA1M-bxByxCNDlT0me6Zyjqs2Q5Opm_CrXfkkrMOOUaFcDzQIJxacoWpOEyNzSIroXKtndKqAkqBQWIxTr0RyzxLTN5QyVUNOX_eTTYtmPNXYyvMTgSvDdcaN0Nw" />
                    <div>
                      <h3 class="font-headline text-lg font-bold text-on-surface group-hover:text-primary transition-colors">Estudio Telar &amp; Bosque</h3>
                      <span class="font-label text-xs text-secondary">Stand #18 · Curarrehue</span>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-surface-container-high text-secondary font-label text-[10px] font-bold uppercase">
                    Edición Limitada
                  </span>
                </div>
                <p class="font-body text-xs text-on-surface-variant leading-relaxed line-clamp-3">
                  Mantas pesadas y bufandones tejidos en telar de cuatro lizos con lana de oveja hilada a mano y teñida exclusivamente con cortezas de maqui y barro de mallín.
                </p>
                <div class="grid grid-cols-2 gap-2 pt-2">
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Manta gruesa de lana pura tejida a telar con flecos artesanales doblada sobre un banco de madera rústica." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa4jWIpFsnkiLNUo39RXm7oa8fLRFRJsu3bvf_1SIgGGNG8UGfjulj3qfiFwyuXSeMuBp4qAsHqEeLewQbGMPJck8JRO4RWF5ki1SuXQRXHA6KiESaYvDhz3hxYuAzzQDrWCEbvNx2eHP5foJFnV3lhMXegY5hAKEf8Eq-TrplQ0M8AV_2tKC_WehXeNsLU3xC_T6WxMAVzF-J0mBjKmVHwzk8R5S8OuvdS8i67HVI1gM-pmKUO8LjSg" />
                  </div>
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Detalle macro del tejido de una bufanda de lino y lana merina con tonos ocres y mostaza naturales teñidos con hierbas silvestres." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxUbpyCNJHa_tc46t33fAHdXa7XAyDYahXwAoFa8O6uoh-wD_KYpQof9Hw5put9r2_8IKsEfpfZRjJFJySo63qc2DbikW5MUAZYRJigIOflsctbA9h-mZIJwmHLzlcm01ukE6xrVdUPWehwevtG5OkVpuIDY0DKjYCC1j5OxUlLP1aP_PZnm5lfFYPkf2x8HxoPlC1Ma2Vd6y3_GKXrzwhqBWdxAr7kYAthA5Co7fvgMx6b3PTH1cBLw" />
                  </div>
                </div>
              </div>
              <div class="pt-6 mt-4 flex items-center justify-between">
                <span class="font-label text-xs font-semibold text-tertiary">6 mantas listas</span>
                <button class="inline-flex items-center gap-1 font-label text-xs font-bold text-primary group-hover:gap-2 transition-all open-stand-shortcut" data-stand="18">
                  <span>Visitar Mostrador</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </button>
              </div>
            </div>
            <!-- Tarjeta 3: Bitácora Digital (Recursos de Taller) -->
            <div class="bg-surface-container-lowest rounded-2xl p-6 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
              <div class="flex flex-col gap-4">
                <div class="flex items-start justify-between">
                  <div class="flex items-center gap-3">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/20" data-alt="Retrato de Tomás Silva, diseñador y documentador de oficios en Valparaíso frente a una pantalla con tipografías y cuadernos encuadernados." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYOZe1agz7IHhShPQjEO7o_aNGRSoIgUTBezvZRWguC-kx20rT0uYYHMEToaZSLfvsZ1Wb6yDngXTy2V1to7HquyuJ7KkHcw6bUdaemebsT4c1iUPSLzPRdeyOftwdP_KydUHtljze7b1n-TSoguYFptIi44tiDQ4vx4QwrAsexaNe1oI9R7pwTRIj_p4_esRkzpTq_UGwcLFOCjRKDlQGAXV2WFesQuG22r7jLswFGr0Ef42iwMaBjA" />
                    <div>
                      <h3 class="font-headline text-lg font-bold text-on-surface group-hover:text-primary transition-colors">Bitácora &amp; Saberes</h3>
                      <span class="font-label text-xs text-secondary">Stand #24 · Distrito Digital</span>
                    </div>
                  </div>
                  <span class="px-2.5 py-1 rounded-full bg-primary/10 text-primary font-label text-[10px] font-bold uppercase">
                    Descarga Inmediata
                  </span>
                </div>
                <p class="font-body text-xs text-on-surface-variant leading-relaxed line-clamp-3">
                  Plantillas de Notion para gestión de inventario artesano, cuadernos técnicos de costeo de piezas de autor y tipografías inspiradas en letreros porteños.
                </p>
                <div class="grid grid-cols-2 gap-2 pt-2">
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Mockup minimalista de una plantilla digital de Notion para control de costos de taller artesanal en una tableta gráfica moderna." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnnS_x4aPVIiAT2vzcqtoi6cjPpQH9fuLOnVCNJjWx0B-W2xnY8wYXaD9p1GBVoAm9GW3V-XCAUnMw5n72cJsV2t9mi2U2O4raZMv1QdOXMneKi4F4GJSEiD9xAdSPMlyej-jU7huh2IDrLzBuyIrrWxicOxONCdo_9Pu6H7BEiRqyTatgoKYMw_Cy89OCljeKaiX33oFwni33lUy85tb5A4R-lwwbGtIqXR0pT7Y3SIRRHhULp9edGQ" />
                  </div>
                  <div class="h-28 rounded-lg overflow-hidden bg-surface-container">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Muestrario de espécimen tipográfico impreso con caracteres serifa elegantes y citas sobre el tiempo y la creación pausada." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPpH2RG74jPvoXv_odRs_sZJ8bRMeyPrel1T6NDTsRVu0TjvZp42onEi6gAN7lkjl6S52NXhiM-Da_ApgBQI9zqCWYXfOIfOxFNOqKrood90xRQvB_q0WMSo0_KEq4eyZUgVJj5aeFcaHHV3IWW3CLmAYs7od9pJ5nu_EsAZVln0mEYI5muf8wogWCstZCNiExOtKFuq6saTnvQ8IaDpTfqXr0YN-fUjz1gVyhLOorhryr9iR7DgcoKA" />
                  </div>
                </div>
              </div>
              <div class="pt-6 mt-4 flex items-center justify-between">
                <span class="font-label text-xs font-semibold text-tertiary">8 guías descargables</span>
                <button class="inline-flex items-center gap-1 font-label text-xs font-bold text-primary group-hover:gap-2 transition-all open-stand-shortcut" data-stand="24">
                  <span>Visitar Mostrador</span>
                  <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- BANNER COMUNITARIO: ABRIR MI STAND EN LA CIUDAD FERIAL -->
      <section class="w-full bg-surface-container-low px-6 lg:px-12 py-16">
        <div class="max-w-7xl mx-auto rounded-3xl bg-surface-container-lowest p-8 lg:p-14 shadow-lg flex flex-col lg:flex-row items-center justify-between gap-10">
          <div class="flex flex-col gap-4 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container font-label text-xs font-bold uppercase tracking-wider text-primary">
              <span class="material-symbols-outlined text-[16px]">storefront</span>
              <span>Convocatoria Abierta · Edición Continua</span>
            </div>
            <h2 class="font-headline text-3xl lg:text-4xl font-medium text-on-surface leading-tight">
              ¿Creas con devoción y buscas un puesto en la Ciudad Ferial?
            </h2>
            <p class="font-body text-base text-on-surface-variant leading-relaxed">
              La Feria Virtual Ikigai reúne a talleres de torno, telares, encuadernación, forja y creadores de activos digitales con alma. Abre tu puesto sin comisiones abusivas y con una vitrina cartográfica que respeta el valor de tu tiempo.
            </p>
            <div class="flex flex-wrap items-center gap-6 pt-2 text-xs font-label text-secondary">
              <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                Sin costos fijos de mantención
              </span>
              <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                Cobro transparente vía Flow / Stripe
              </span>
              <span class="flex items-center gap-1.5">
                <span class="material-symbols-outlined text-primary text-[18px]">check_circle</span>
                Marcador propio en el mapa interactivo
              </span>
            </div>
          </div>
          <div class="flex flex-col sm:flex-row lg:flex-col gap-3 w-full sm:w-auto">
            <a class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-gradient-to-r from-primary to-primary-container text-on-primary font-body font-semibold text-sm shadow-lg hover:shadow-xl transition-all" data-path="abrir-mi-stand" href="#">
              <span>Postular para abrir mi Stand</span>
              <span class="material-symbols-outlined text-[18px]">north_east</span>
            </a>
            <a class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface font-body font-medium text-sm transition-colors" data-path="manifiesto" href="#">
              <span>Leer Manifiesto de Oficios</span>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script>
      // =========================================================================
      // SISTEMA CARTOGRÁFICO INTERACTIVO FERIA IKIGAI (VANILLA JS AUTOCONTENIDO)
      // =========================================================================
      document.addEventListener('DOMContentLoaded', () => {
        // 1. BASE DE DATOS DE STANDS Y TIENDAS
        const STALLS_DATA = {
          '48': {
            id: '48',
            district: 'barro',
            name: 'Taller Barro Mestizo',
            artisan: 'Valentina Lagos',
            role: 'Maestra Artesana · Stand #48',
            location: 'Cerámica & Gres · Pucón, Chile',
            quote: '"Piezas esculpidas a mano en torno de pie y horneadas a leña a 1.280°C con mezclas de ceniza volcánica del Villarrica y arenas ribereñas."',
            rating: '5.0',
            reviews: '(142 reseñas de coleccionistas)',
            inventory: '12 piezas listas',
            inventoryStatus: 'Torno activo',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtLQbTh3OR60aLl6bfQnkKBBF_iAiVXJrsl8z5Itptuf-YCwljSa1U9l3GcjjiXIHnoFFNOMqsPudzSVtgI-n6q8wSEIRSZfxSHVzJmFRRhB9IuugSZOUpJ6SXdeik64i83IjA6JtiiyJ5M-2bR5YM8xdxLtgrqiylVo-qFytRJ_ihDnWGOdaa7W3tKZ6qgwWTbV-ML2DRP2Ai7qnpFYri-1dehfCwmEIowCUPewA9C8sSSiMhn0Ts0g',
            prod1: {
              title: 'Jarra Escultórica en Gres',
              tag: 'Pieza Única',
              price: '$28.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDGjSjVbTEdahHZcO7oR1lrSixfcudbp8oN5Ux55XorayJqrGcRDVxaodbcL4IH6vVug0XZAFqpsBxuFsTSdA7eioO7zAqGc7_BeSyYa7lO_kz0hqTH8l-QFtsbaebs989hCnABxR79d-Ci-FuaHn-6vpG5gPd-XPr7mDZ3gRGdeG_DfMP8N9aeffAsQKvxWCV63kSYi8e7XSwuBAvvlWjOEje5L8t_2OdgQ0Yp5YX6OCRAUOk7Rhq-hA'
            },
            prod2: {
              title: 'Guía: Cenizas & Vidriado',
              tag: 'Activo Digital',
              price: '$12.500 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtodEUMsvgIJFNYAtdLOGc_JvvqXti2FkSCd2KqqD1ixkU6tTpaVVN5AWFhd4mWxKr7qMe_IchjzWXaebbvWG6BhU1ImokSI1Q8EJ56k8pGJIC7qIQx5u9-X-HbtNExPS7sxY98N9b-wCPP2EZjKYOMdnlL44-10e_uPBSP-XzpNJBQw_mzdBDAcmDHaXOOlJfD3Oktfp8uG5qlqbDtgOrd-Iz85-SlXf_VNkg1z2o6jQJWwWtE3hELw'
            },
            pos: {
              x: 22,
              y: 38
            }
          },
          '18': {
            id: '18',
            district: 'telar',
            name: 'Estudio Telar & Bosque',
            artisan: 'Amalia Quintriqueo',
            role: 'Maestra Tejedora · Stand #18',
            location: 'Lino & Lanas Merinas · Curarrehue, Chile',
            quote: '"Mantas pesadas y bufandones tejidos en telar de cuatro lizos con lana de oveja hilada a mano y teñida con cortezas de maqui y barro."',
            rating: '4.9',
            reviews: '(98 reseñas de coleccionistas)',
            inventory: '6 mantas listas',
            inventoryStatus: 'En telar',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDAWqTtWQPlxpJF2XhAtp6YKPkJfeFjZtoqzGmMWWxP654IPcDJ0uJ03Px-EFeeur_80andCVTeFrpTyI-PV-Up822wDAz73knRkFEPrYETtBhgf6RV4_F3OrEa71FA1M-bxByxCNDlT0me6Zyjqs2Q5Opm_CrXfkkrMOOUaFcDzQIJxacoWpOEyNzSIroXKtndKqAkqBQWIxTr0RyzxLTN5QyVUNOX_eTTYtmPNXYyvMTgSvDdcaN0Nw',
            prod1: {
              title: 'Manta Telar Austral Cuatro Lizos',
              tag: 'Lana Pura',
              price: '$64.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBa4jWIpFsnkiLNUo39RXm7oa8fLRFRJsu3bvf_1SIgGGNG8UGfjulj3qfiFwyuXSeMuBp4qAsHqEeLewQbGMPJck8JRO4RWF5ki1SuXQRXHA6KiESaYvDhz3hxYuAzzQDrWCEbvNx2eHP5foJFnV3lhMXegY5hAKEf8Eq-TrplQ0M8AV_2tKC_WehXeNsLU3xC_T6WxMAVzF-J0mBjKmVHwzk8R5S8OuvdS8i67HVI1gM-pmKUO8LjSg'
            },
            prod2: {
              title: 'Bufandón Merina & Tintes Silvestres',
              tag: 'Edición Otoño',
              price: '$34.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBxUbpyCNJHa_tc46t33fAHdXa7XAyDYahXwAoFa8O6uoh-wD_KYpQof9Hw5put9r2_8IKsEfpfZRjJFJySo63qc2DbikW5MUAZYRJigIOflsctbA9h-mZIJwmHLzlcm01ukE6xrVdUPWehwevtG5OkVpuIDY0DKjYCC1j5OxUlLP1aP_PZnm5lfFYPkf2x8HxoPlC1Ma2Vd6y3_GKXrzwhqBWdxAr7kYAthA5Co7fvgMx6b3PTH1cBLw'
            },
            pos: {
              x: 45,
              y: 18
            }
          },
          '09': {
            id: '09',
            district: 'ebanistas',
            name: 'Taller Raíz Austral',
            artisan: 'Mateo Cárdenas',
            role: 'Maestro Ebanista · Stand #09',
            location: 'Tornería en Raulí & Forja · Puerto Varas, Chile',
            quote: '"Madera noble recuperada de galpones centenarios torneada con gubia tradicional y sellada con cera virgen de abeja y aceites orgánicos."',
            rating: '4.95',
            reviews: '(114 reseñas de coleccionistas)',
            inventory: '8 fuentes listas',
            inventoryStatus: 'Cepillo activo',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCSkqBDdCwtmEUSTvSwtTMke6eIDU2789iiZ9a3qiNTkoY4R88-dFpmWbBx5vZBAI1cW-ojbaalIb4yK703bad1HS3ppMtPy8aRjHq2-HLp6_CSpbEjAzEl5bfpnRIrxqzhV009efyj8CL8hE1rb-62VBaaM0ROUUuKwmSOjdemc6T2G7PO7uc_AAzWlhnKvC4IA_oR_ytajF6HUosBgnDcwVXuiZoNOY0rgzVOUxJznyj4pp57sD_o_Q',
            prod1: {
              title: 'Fuente Esculpida en Raulí Vivo',
              tag: 'Madera Reciclada',
              price: '$45.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA6GisGkqqfQ6RdOlHYpi26DrdrXcuuBptRLYCIy4lZTjBgeRNKJpYuWXzVD_B6oLDDxfiXH-YGJ7dj1GdVfrQI-lbXXtic2YcJKiBhKVULzMoAuMvNsBbW-xsUfegsJmr0o29LxRdRJaTq-d5q-5yYlACN8JxSnIhXlh93qxJ-t0mb2bYVTuSVo7wfjspoAnEjkcuiDFuxn8BIiGCLGTzliczibSiwug8x3jwqoDSieEEzp2jSLeRkbA'
            },
            prod2: {
              title: 'Cucharas de Autor Forjadas',
              tag: 'Juego de 2',
              price: '$18.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDGjSjVbTEdahHZcO7oR1lrSixfcudbp8oN5Ux55XorayJqrGcRDVxaodbcL4IH6vVug0XZAFqpsBxuFsTSdA7eioO7zAqGc7_BeSyYa7lO_kz0hqTH8l-QFtsbaebs989hCnABxR79d-Ci-FuaHn-6vpG5gPd-XPr7mDZ3gRGdeG_DfMP8N9aeffAsQKvxWCV63kSYi8e7XSwuBAvvlWjOEje5L8t_2OdgQ0Yp5YX6OCRAUOk7Rhq-hA'
            },
            pos: {
              x: 84,
              y: 34
            }
          },
          '24': {
            id: '24',
            district: 'digital',
            name: 'Bitácora Digital & Saberes',
            artisan: 'Tomás Silva',
            role: 'Diseñador & Tipógrafo · Stand #24',
            location: 'Herramientas de Taller · Valparaíso, Chile',
            quote: '"Diseño editorial, sistemas Notion para inventario de creadores y familias tipográficas inspiradas en los antiguos letreros de oficios porteños."',
            rating: '4.88',
            reviews: '(205 descargas)',
            inventory: '8 guías descargables',
            inventoryStatus: 'Disponible 24/7',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAYOZe1agz7IHhShPQjEO7o_aNGRSoIgUTBezvZRWguC-kx20rT0uYYHMEToaZSLfvsZ1Wb6yDngXTy2V1to7HquyuJ7KkHcw6bUdaemebsT4c1iUPSLzPRdeyOftwdP_KydUHtljze7b1n-TSoguYFptIi44tiDQ4vx4QwrAsexaNe1oI9R7pwTRIj_p4_esRkzpTq_UGwcLFOCjRKDlQGAXV2WFesQuG22r7jLswFGr0Ef42iwMaBjA',
            prod1: {
              title: 'Sistema Notion: Costos & Taller',
              tag: 'Plantilla Notion',
              price: '$9.900 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDnnS_x4aPVIiAT2vzcqtoi6cjPpQH9fuLOnVCNJjWx0B-W2xnY8wYXaD9p1GBVoAm9GW3V-XCAUnMw5n72cJsV2t9mi2U2O4raZMv1QdOXMneKi4F4GJSEiD9xAdSPMlyej-jU7huh2IDrLzBuyIrrWxicOxONCdo_9Pu6H7BEiRqyTatgoKYMw_Cy89OCljeKaiX33oFwni33lUy85tb5A4R-lwwbGtIqXR0pT7Y3SIRRHhULp9edGQ'
            },
            prod2: {
              title: 'Tipografía Porteña: Espécimen OTF',
              tag: 'Licencia Estudio',
              price: '$16.500 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAPpH2RG74jPvoXv_odRs_sZJ8bRMeyPrel1T6NDTsRVu0TjvZp42onEi6gAN7lkjl6S52NXhiM-Da_ApgBQI9zqCWYXfOIfOxFNOqKrood90xRQvB_q0WMSo0_KEq4eyZUgVJj5aeFcaHHV3IWW3CLmAYs7od9pJ5nu_EsAZVln0mEYI5muf8wogWCstZCNiExOtKFuq6saTnvQ8IaDpTfqXr0YN-fUjz1gVyhLOorhryr9iR7DgcoKA'
            },
            pos: {
              x: 49,
              y: 58
            }
          },
          '07': {
            id: '07',
            district: 'botanica',
            name: 'Botánica Silvestre & Joyería',
            artisan: 'Camila Montecinos',
            role: 'Orfebre Botánica · Stand #07',
            location: 'Plata 950 & Flores Secas · Curacaví, Chile',
            quote: '"Fundición a la cera perdida con hojas nativas reales recolectadas en el bosque esclerófilo e hidrolatos destilados en alambique de cobre."',
            rating: '4.92',
            reviews: '(87 reseñas de coleccionistas)',
            inventory: '14 piezas de plata',
            inventoryStatus: 'Hidrolatos frescos',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAcUNOWnz1UJBcVYN0PdrhWI1jX-s2XHRU804j8zRqSfBGd2XmshZl6S1vcEZkPfdZ7pHqXcx8_YuS-fIjYNplYzozJ__ulgBxWNkW20QSb1KAPMy1-J9fdZVTc03gLlTd9ja80z-xUbzMBoewqh4cQDw_cHVMCasVFNHhLTIPRaXxNtS3L0GYIOvNo_6Wk-LearYNVpqwHMYLrn-D1xVLWSB8QUeQBJn9q-b8Ub_z24IZB2vRMapI7vQ',
            prod1: {
              title: 'Anillo Textura Quillay Plata 950',
              tag: 'Plata Fina',
              price: '$36.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBhl75kgvcFc7R5Isi6eMTWpgDP1HJmT5t5V3dSZwbwYb5Yjo4jT0qKoLhSp-UVQ8RMDoNMQIoWt0Y1oWUZSqov-Y_e2ErheOQXYdBHmBvCu89I7kwRkagvB7XoXRmFWXu82hQ7_gXOMhWyAzwlhx85zwdrfWo3wt1-5UhEdzRdRlVhtVSp1EuKt0M4qjfpRurXSGTNPUrZHjYewTS4I33ZhehX8JQO9cByn9p4JrQrxeaYvkhMQQ5zgQ'
            },
            prod2: {
              title: 'Hidrolato Nativo Destilado 100ml',
              tag: 'Aroma Vivo',
              price: '$14.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtodEUMsvgIJFNYAtdLOGc_JvvqXti2FkSCd2KqqD1ixkU6tTpaVVN5AWFhd4mWxKr7qMe_IchjzWXaebbvWG6BhU1ImokSI1Q8EJ56k8pGJIC7qIQx5u9-X-HbtNExPS7sxY98N9b-wCPP2EZjKYOMdnlL44-10e_uPBSP-XzpNJBQw_mzdBDAcmDHaXOOlJfD3Oktfp8uG5qlqbDtgOrd-Iz85-SlXf_VNkg1z2o6jQJWwWtE3hELw'
            },
            pos: {
              x: 82,
              y: 80
            }
          },
          '32': {
            id: '32',
            district: 'barro',
            name: 'Gres Vulcano Villarrica',
            artisan: 'Rodrigo Baeza',
            role: 'Alfarero de Alta Temperatura · Stand #32',
            location: 'Gres de Alta Temperatura · Villarrica, Chile',
            quote: '"Teteras kyusu andinas y cuencos de té cocidos con leña nativa en atmósfera reductora con pastas silíceas de gran resistencia térmica."',
            rating: '4.89',
            reviews: '(63 reseñas de coleccionistas)',
            inventory: '5 teteras listas',
            inventoryStatus: 'Hornada lista',
            avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCSkqBDdCwtmEUSTvSwtTMke6eIDU2789iiZ9a3qiNTkoY4R88-dFpmWbBx5vZBAI1cW-ojbaalIb4yK703bad1HS3ppMtPy8aRjHq2-HLp6_CSpbEjAzEl5bfpnRIrxqzhV009efyj8CL8hE1rb-62VBaaM0ROUUuKwmSOjdemc6T2G7PO7uc_AAzWlhnKvC4IA_oR_ytajF6HUosBgnDcwVXuiZoNOY0rgzVOUxJznyj4pp57sD_o_Q',
            prod1: {
              title: 'Tetera Kyusu en Gres Oscuro',
              tag: 'Edición Fuego',
              price: '$42.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBhl75kgvcFc7R5Isi6eMTWpgDP1HJmT5t5V3dSZwbwYb5Yjo4jT0qKoLhSp-UVQ8RMDoNMQIoWt0Y1oWUZSqov-Y_e2ErheOQXYdBHmBvCu89I7kwRkagvB7XoXRmFWXu82hQ7_gXOMhWyAzwlhx85zwdrfWo3wt1-5UhEdzRdRlVhtVSp1EuKt0M4qjfpRurXSGTNPUrZHjYewTS4I33ZhehX8JQO9cByn9p4JrQrxeaYvkhMQQ5zgQ'
            },
            prod2: {
              title: 'Set 2 Chawan de Té Volcánico',
              tag: 'Gres 1280°C',
              price: '$22.000 CLP',
              img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDGjSjVbTEdahHZcO7oR1lrSixfcudbp8oN5Ux55XorayJqrGcRDVxaodbcL4IH6vVug0XZAFqpsBxuFsTSdA7eioO7zAqGc7_BeSyYa7lO_kz0hqTH8l-QFtsbaebs989hCnABxR79d-Ci-FuaHn-6vpG5gPd-XPr7mDZ3gRGdeG_DfMP8N9aeffAsQKvxWCV63kSYi8e7XSwuBAvvlWjOEje5L8t_2OdgQ0Yp5YX6OCRAUOk7Rhq-hA'
            },
            pos: {
              x: 12,
              y: 64
            }
          }
        };

        // 2. ESTADO DEL MAPA
        const state = {
          zoom: 1.0,
          minZoom: 0.8,
          maxZoom: 2.2,
          panX: 0,
          panY: 0,
          isDragging: false,
          startX: 0,
          startY: 0,
          activeDistrict: 'all',
          activeStandId: '48',
          searchQuery: ''
        };

        // Elementos DOM
        const mapViewport = document.getElementById('map-viewport');
        const mapPlane = document.getElementById('map-plane');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');
        const recenterBtn = document.getElementById('recenter-map');
        const zoomBadge = document.getElementById('zoom-badge');
        const districtStatusLabel = document.getElementById('district-status-label');
        const filterButtons = document.querySelectorAll('.district-filter-btn');
        const searchInput = document.getElementById('taller-search-input');
        const markers = document.querySelectorAll('.stall-marker');
        const modal = document.getElementById('stand-modal');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const panelDistrictTitle = document.getElementById('panel-district-title');
        const panelTallerCount = document.getElementById('panel-taller-count');
        const panelTalleresList = document.getElementById('panel-talleres-list');
        const resetFilterLink = document.getElementById('reset-filter-link');
        const activeTalleresCount = document.getElementById('active-talleres-count');

        // Elementos del Modal
        const modalArtisanImg = document.getElementById('modal-artisan-img');
        const modalRoleBadge = document.getElementById('modal-role-badge');
        const modalStandTitle = document.getElementById('modal-stand-title');
        const modalLocation = document.getElementById('modal-location');
        const modalQuote = document.getElementById('modal-quote');
        const modalRating = document.getElementById('modal-rating');
        const modalReviewsCount = document.getElementById('modal-reviews-count');
        const modalInventoryText = document.getElementById('modal-inventory-text');
        const modalProd1Img = document.getElementById('modal-prod1-img');
        const modalProd1Tag = document.getElementById('modal-prod1-tag');
        const modalProd1Title = document.getElementById('modal-prod1-title');
        const modalProd1Price = document.getElementById('modal-prod1-price');
        const modalProd2Img = document.getElementById('modal-prod2-img');
        const modalProd2Tag = document.getElementById('modal-prod2-tag');
        const modalProd2Title = document.getElementById('modal-prod2-title');
        const modalProd2Price = document.getElementById('modal-prod2-price');
        const modalEnterText = document.getElementById('modal-enter-text');

        // 3. APLICAR TRANSFORMACIÓN AL PLANO
        function applyTransform(smooth = true) {
          if (smooth) {
            mapPlane.style.transition = 'transform 0.25s cubic-bezier(0.16, 1, 0.3, 1)';
          } else {
            mapPlane.style.transition = 'none';
          }
          mapPlane.style.transform = `translate(${state.panX}px, ${state.panY}px) scale(${state.zoom})`;
          if (zoomBadge) {
            zoomBadge.textContent = `Zoom ${state.zoom.toFixed(1)}x`;
          }
        }

        // 4. ZOOM CONTROLS
        function setZoom(newZoom, targetCenter = false) {
          const clamped = Math.max(state.minZoom, Math.min(state.maxZoom, parseFloat(newZoom.toFixed(2))));
          state.zoom = clamped;
          if (targetCenter) {
            state.panX = 0;
            state.panY = 0;
          }
          applyTransform(true);
        }

        zoomInBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          setZoom(state.zoom + 0.25);
        });

        zoomOutBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          setZoom(state.zoom - 0.25);
        });

        recenterBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          recenterBtn.classList.add('rotate-180');
          setTimeout(() => recenterBtn.classList.remove('rotate-180'), 350);
          setZoom(1.0, true);
        });

        // 5. DRAG TO PAN
        mapViewport.addEventListener('mousedown', (e) => {
          // Ignorar si clic en modal o botones
          if (e.target.closest('#stand-modal') || e.target.closest('button') || e.target.closest('a')) return;
          state.isDragging = true;
          state.startX = e.clientX - state.panX;
          state.startY = e.clientY - state.panY;
          mapViewport.classList.remove('cursor-grab');
          mapViewport.classList.add('cursor-grabbing');
        });

        window.addEventListener('mousemove', (e) => {
          if (!state.isDragging) return;
          state.panX = e.clientX - state.startX;
          state.panY = e.clientY - state.startY;
          // Limitar límites de desplazamiento
          const maxPan = 400 * state.zoom;
          state.panX = Math.max(-maxPan, Math.min(maxPan, state.panX));
          state.panY = Math.max(-maxPan, Math.min(maxPan, state.panY));
          applyTransform(false);
        });

        window.addEventListener('mouseup', () => {
          if (state.isDragging) {
            state.isDragging = false;
            mapViewport.classList.remove('cursor-grabbing');
            mapViewport.classList.add('cursor-grab');
          }
        });

        // 6. APERTURA Y CIERRE DE FICHA DE STAND (MODAL CONTEXTUAL)
        function openStandModal(standId, panToMarker = true) {
          const data = STALLS_DATA[standId];
          if (!data) return;

          state.activeStandId = standId;

          modalArtisanImg.src = data.avatar;
          modalRoleBadge.textContent = data.role;
          modalStandTitle.textContent = data.name;
          modalLocation.textContent = data.location;
          modalQuote.textContent = data.quote;
          modalRating.textContent = data.rating;
          modalReviewsCount.textContent = data.reviews;
          modalInventoryText.textContent = data.inventory;

          modalProd1Img.src = data.prod1.img;
          modalProd1Tag.textContent = data.prod1.tag;
          modalProd1Title.textContent = data.prod1.title;
          modalProd1Price.textContent = data.prod1.price;

          modalProd2Img.src = data.prod2.img;
          modalProd2Tag.textContent = data.prod2.tag;
          modalProd2Title.textContent = data.prod2.title;
          modalProd2Price.textContent = data.prod2.price;

          modalEnterText.textContent = `Entrar al Stand #${data.id}`;

          // Mostrar modal suavemente
          modal.style.display = 'block';
          modal.classList.remove('opacity-0', 'scale-95');
          modal.classList.add('opacity-100', 'scale-100');

          // Resaltar marcador en mapa
          markers.forEach(m => {
            const id = m.getAttribute('data-stand-id');
            const ping = m.querySelector('.pulse-ring');
            if (id === standId) {
              m.classList.add('scale-110', 'z-30');
              if (!ping) {
                const p = document.createElement('div');
                p.className = 'pulse-ring absolute -top-3 w-8 h-8 rounded-full bg-primary/20 animate-ping';
                m.querySelector('.group')?.prepend(p);
              }
            } else {
              m.classList.remove('scale-110', 'z-30');
              if (ping && id !== '48') {
                ping.remove();
              }
            }
          });

          // Si se solicita, auto-centrar o desplazar sutilmente
          if (panToMarker && window.innerWidth >= 768) {
            // En desktop mantener un zoom cómodo
            if (state.zoom < 1.1) {
              state.zoom = 1.15;
            }
            applyTransform(true);
          }
        }

        function closeStandModal() {
          modal.classList.add('opacity-0', 'scale-95');
          setTimeout(() => {
            modal.style.display = 'none';
          }, 200);
          state.activeStandId = null;
        }

        closeModalBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          closeStandModal();
        });

        // Clic en marcadores del mapa
        markers.forEach(marker => {
          marker.addEventListener('click', (e) => {
            e.stopPropagation();
            const standId = marker.getAttribute('data-stand-id');
            openStandModal(standId);
          });
        });

        // Atajos directos desde el catálogo inferior ("Visitar Mostrador")
        document.querySelectorAll('.open-stand-shortcut').forEach(btn => {
          btn.addEventListener('click', (e) => {
            e.preventDefault();
            const standId = btn.getAttribute('data-stand');
            // Scroll suave al mapa
            mapViewport.scrollIntoView({
              behavior: 'smooth',
              block: 'center'
            });
            setTimeout(() => openStandModal(standId), 400);
          });
        });

        // 7. FILTROS DE DISTRITO Y ACTUALIZACIÓN DEL PANEL LATERAL
        const districtNames = {
          all: 'Toda la Ciudad Ferial',
          barro: 'Distrito del Fuego y Barro',
          telar: 'Barrio del Telar & Fibras',
          ebanistas: 'Paseo de Ebanistas & Forja',
          digital: 'Distrito Digital & Saberes',
          botanica: 'Jardín Botánico & Joyería'
        };

        function updateSidebarPanel() {
          const activeDist = state.activeDistrict;
          panelDistrictTitle.textContent = districtNames[activeDist] || 'Distritos';

          const visibleStands = Object.values(STALLS_DATA).filter(item => {
            const matchesDistrict = activeDist === 'all' || item.district === activeDist;
            const matchesSearch = !state.searchQuery ||
              item.name.toLowerCase().includes(state.searchQuery) ||
              item.artisan.toLowerCase().includes(state.searchQuery) ||
              item.location.toLowerCase().includes(state.searchQuery);
            return matchesDistrict && matchesSearch;
          });

          panelTallerCount.textContent = `${visibleStands.length} talleres`;
          panelTalleresList.innerHTML = '';

          if (visibleStands.length === 0) {
            panelTalleresList.innerHTML = `<p class="p-2 text-outline text-[11px]">No hay talleres coincidentes en esta zona.</p>`;
            return;
          }

          visibleStands.forEach(item => {
            const row = document.createElement('div');
            const isActive = state.activeStandId === item.id;
            row.className = `flex items-center justify-between p-2 rounded-lg transition-colors cursor-pointer ${
          isActive ? 'bg-primary/10 border border-primary/20' : 'bg-surface-container-lowest hover:bg-surface-container'
        }`;
            row.innerHTML = `
          <div class="flex items-center gap-2">
            <span class="font-label font-bold ${isActive ? 'text-primary' : 'text-secondary'}">#${item.id}</span>
            <span class="font-medium text-on-surface truncate max-w-[170px]">${item.name}</span>
          </div>
          <span class="text-[10px] text-[#10b981] font-medium whitespace-nowrap">${item.inventoryStatus}</span>
        `;
            row.addEventListener('click', () => {
              openStandModal(item.id);
            });
            panelTalleresList.appendChild(row);
          });
        }

        function applyFilters() {
          const dist = state.activeDistrict;
          const query = state.searchQuery.toLowerCase().trim();
          let matchCount = 0;

          // Filtrar marcadores
          markers.forEach(marker => {
            const standId = marker.getAttribute('data-stand-id');
            const markerDistrict = marker.getAttribute('data-district');
            const data = STALLS_DATA[standId];

            const matchDist = dist === 'all' || markerDistrict === dist;
            const matchSearch = !query ||
              (data && (
                data.name.toLowerCase().includes(query) ||
                data.artisan.toLowerCase().includes(query) ||
                data.location.toLowerCase().includes(query) ||
                data.id.includes(query)
              ));

            if (matchDist && matchSearch) {
              marker.style.display = 'block';
              marker.style.opacity = '1';
              marker.style.pointerEvents = 'auto';
              matchCount++;
            } else {
              marker.style.opacity = '0.15';
              marker.style.pointerEvents = 'none';
            }
          });

          // Resaltar títulos de distritos
          document.querySelectorAll('[data-district-title]').forEach(titleEl => {
            const titleDist = titleEl.getAttribute('data-district-title');
            if (dist === 'all' || titleDist === dist) {
              titleEl.style.opacity = '1';
            } else {
              titleEl.style.opacity = '0.2';
            }
          });

          if (districtStatusLabel) {
            districtStatusLabel.textContent = districtNames[dist] || 'Distrito Activo';
          }
          if (activeTalleresCount) {
            activeTalleresCount.textContent = `${matchCount} Talleres Visibles`;
          }

          updateSidebarPanel();
        }

        filterButtons.forEach(btn => {
          btn.addEventListener('click', () => {
            filterButtons.forEach(b => {
              b.classList.remove('bg-primary-container', 'text-on-primary', 'font-semibold', 'shadow-sm');
              b.classList.add('bg-surface-container-lowest', 'text-on-surface-variant');
            });
            btn.classList.remove('bg-surface-container-lowest', 'text-on-surface-variant');
            btn.classList.add('bg-primary-container', 'text-on-primary', 'font-semibold', 'shadow-sm');

            state.activeDistrict = btn.getAttribute('data-district');
            applyFilters();

            // Si se selecciona un distrito específico, enfocar hacia sus puestos
            if (state.activeDistrict === 'telar') {
              state.panX = 0;
              state.panY = 120;
              setZoom(1.3);
            } else if (state.activeDistrict === 'barro') {
              state.panX = 180;
              state.panY = 0;
              setZoom(1.25);
            } else if (state.activeDistrict === 'ebanistas') {
              state.panX = -180;
              state.panY = 20;
              setZoom(1.25);
            } else if (state.activeDistrict === 'digital') {
              state.panX = -40;
              state.panY = -80;
              setZoom(1.3);
            } else if (state.activeDistrict === 'botanica') {
              state.panX = -140;
              state.panY = -140;
              setZoom(1.25);
            } else {
              state.panX = 0;
              state.panY = 0;
              setZoom(1.0);
            }
          });
        });

        resetFilterLink?.addEventListener('click', () => {
          const allBtn = document.querySelector('.district-filter-btn[data-district="all"]');
          if (allBtn) allBtn.click();
        });

        // 8. BUSCADOR EN TIEMPO REAL
        searchInput.addEventListener('input', (e) => {
          state.searchQuery = e.target.value;
          applyFilters();

          // Si hay una coincidencia exacta o destacada, abrir stand
          const trimmed = state.searchQuery.toLowerCase().trim();
          if (trimmed.length >= 3) {
            const found = Object.values(STALLS_DATA).find(item =>
              item.name.toLowerCase().includes(trimmed) ||
              item.artisan.toLowerCase().includes(trimmed)
            );
            if (found) {
              openStandModal(found.id, false);
            }
          }
        });

        // Inicializar panel lateral y stand por defecto
        updateSidebarPanel();
        openStandModal('48', false);
      });
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