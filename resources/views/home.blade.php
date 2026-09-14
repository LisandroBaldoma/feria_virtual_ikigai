<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @vite('resources/css/app.css')
</head>

<body class="bg-background font-body-md text-body-md text-on-surface antialiased">
    <header
        class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-20 max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-sm"><a class="flex items-center gap-space-sm group"
                    data-path="recorrer-feria" href="#"><img alt="Ikigai Logo" class="h-8 w-auto object-contain"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1Uc4Cj-7Oyk3C7zlDGLW-hPWmOWLcvCK6KLKBlN0r4_NK1lVEsMw8Lj8RNfmpM-q5sXvs8agc2iUEzC17emXqASh-uJls0kejzel784NTEqBAOONz_NKKtD6CPSMsqPCaljzYSLCgmqGZHMMznGtn6pyX8lmDD84qSs3xZWOKirq-Y51kR0kU-aZur1xCl7j1Qyd1fg2ns-mviovMHuLSLepKnfTVRmyvei9tRFfP1VwNjnoQhpNp-Rep0" /><span
                        class="font-headline-sm text-headline-sm text-on-surface tracking-tight group-hover:text-primary transition-colors">Feria
                        Ikigai</span></a></div>
            <nav class="hidden md:flex items-center gap-space-md lg:gap-space-lg"
                data-active-classes="bg-surface-container text-primary font-bold"><a aria-current="page"
                    class="px-space-sm py-space-xs rounded transition-colors bg-surface-container text-primary font-bold"
                    data-path="recorrer-feria" href="#">Recorrer Feria</a><a
                    class="px-space-sm py-space-xs rounded font-title-md text-title-md text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="stands-y-tiendas" href="#">Stands y Tiendas</a><a
                    class="px-space-sm py-space-xs rounded font-title-md text-title-md text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="categorias" href="#">Categorías</a><a
                    class="px-space-sm py-space-xs rounded font-title-md text-title-md text-on-surface-variant hover:text-on-surface transition-colors"
                    data-path="historias-de-creadores" href="#">Historias de Creadores</a></nav>
            <div class="flex items-center gap-space-md"><a
                    class="inline-flex items-center justify-center px-space-md py-space-sm rounded-lg bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-[0_4px_14px_rgba(164,55,22,0.18)] hover:shadow-[0_6px_20px_rgba(164,55,22,0.28)] transition-all"
                    data-path="abrir-mi-stand" href="#">Abrir mi Stand</a><a
                    class="flex items-center rounded-full p-0.5 hover:ring-2 hover:ring-primary/40 transition-all"
                    data-path="perfil-artesano" href="#"><img alt="Profile"
                        class="w-8 h-8 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSkqBDdCwtmEUSTvSwtTMke6eIDU2789iiZ9a3qiNTkoY4R88-dFpmWbBx5vZBAI1cW-ojbaalIb4yK703bad1HS3ppMtPy8aRjHq2-HLp6_CSpbEjAzEl5bfpnRIrxqzhV009efyj8CL8hE1rb-62VBaaM0ROUUuKwmSOjdemc6T2G7PO7uc_AAzWlhnKvC4IA_oR_ytajF6HUosBgnDcwVXuiZoNOY0rgzVOUxJznyj4pp57sD_o_Q" /></a>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-background min-h-screen">
        <div class="flex flex-col w-full">
            <!-- 1. HERO EDITORIAL DE BIENVENIDA -->
            <section class="relative w-full overflow-hidden bg-surface-container-low px-6 lg:px-12 py-16 lg:py-24">
                <div
                    class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 rounded-full bg-primary/5 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 left-1/3 -mb-32 w-80 h-80 rounded-full bg-secondary/10 blur-3xl pointer-events-none">
                </div>
                <div
                    class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
                    <div class="lg:col-span-7 flex flex-col items-start gap-space-lg">
                        <!-- Live Pill -->
                        <div
                            class="inline-flex items-center gap-space-sm px-space-md py-space-xs rounded-full bg-surface-container-lowest shadow-sm">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">Edición
                                de Otoño: 142 creadores activos este fin de semana</span>
                        </div>
                        <!-- Headline & Narrative -->
                        <div class="flex flex-col gap-space-md">
                            <h1
                                class="font-display-hero text-display-hero text-on-surface tracking-tight leading-tight">
                                Una feria viva donde cada objeto tiene un <span
                                    class="italic text-primary">creador</span> y un propósito.
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                                Pasea sin prisa entre talleres artesanales independientes y estudios de diseño.
                                Encuentra cerámicas modeladas a mano, textiles de tintes lentos, piezas de autor y
                                herramientas digitales creadas con devoción.
                            </p>
                        </div>
                        <!-- Primary Actions -->
                        <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                            <a class="inline-flex items-center gap-space-sm px-space-xl py-4 rounded-xl bg-primary text-on-primary font-title-md text-title-md shadow-md hover:shadow-xl hover:bg-primary-container transition-all group"
                                href="#recorrer-puestos">
                                <span
                                    class="material-symbols-outlined text-title-lg group-hover:rotate-45 transition-transform">explore</span>
                                Comenzar a recorrer la feria
                            </a>
                            <a class="inline-flex items-center gap-space-sm px-space-lg py-4 rounded-xl bg-surface-container-highest hover:bg-surface-variant text-on-surface font-title-md text-title-md transition-all"
                                href="#abrir-tienda">
                                <span class="material-symbols-outlined text-title-lg text-secondary">storefront</span>
                                Montar mi stand virtual
                            </a>
                        </div>
                        <!-- Metric Badges -->
                        <div class="flex items-center gap-8 pt-4">
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-on-surface">1.8k+</span>
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Obras
                                    únicas</span>
                            </div>
                            <div class="w-px h-8 bg-outline-variant/40"></div>
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-on-surface">100%</span>
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Trato
                                    directo con el taller</span>
                            </div>
                            <div class="w-px h-8 bg-outline-variant/40"></div>
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-on-surface">4.9 / 5</span>
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Comunidad
                                    de creadores</span>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Visual Composition (Collage Bento) -->
                    <div class="lg:col-span-5 relative">
                        <div
                            class="relative w-full aspect-[4/5] rounded-2xl overflow-hidden shadow-xl bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Warm studio photo of an artisan ceramist shaping a terracotta clay vessel on a potter's wheel in natural soft morning light with dried eucalyptus in the background and earthy tones"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAfp0P0NO1pcz8UBSC6175smDKtfKq9Ajgym84fDFSxpy99zugRePrReCw0qC2qrA0kIRRPPFJ_lLaJ_UgimGN1t21ZAKNjSET4wS19kRY0lVUepVxgofBm_7q-B7Asby1OrYq9EXp48FD7DzAriOEU1rpWme-fu5jeqOjT6Ig296c5S8ISIU_ub2vE8DeypSi8JmPd3n4elg-7a8wJKeUQj3dDgCjYmTk_j2HMrzvHSMXVF33NyswlQ" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <div
                                class="absolute bottom-6 left-6 right-6 p-space-md rounded-xl bg-surface/90 backdrop-blur-md shadow-md flex items-center justify-between">
                                <div class="flex items-center gap-space-sm min-w-0">
                                    <div class="w-11 h-11 rounded-full overflow-hidden shrink-0 bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Close-up portrait of a young artisan woman with apron smiling gently in an artisanal workshop with soft lighting"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuACDuGKhC-QA6h9abnFoDqE72UYQaFvpn4Wem0xhgHsbMjh_eHrBd1l1Fnij2Cxmz4DIWcSsoTQsQjd_pSi7lSvJXLDTJYMZ0WDWUZN18rbjLWl1DjFBo3g8nVR4pWLS6F_Eo0XN-iMYenN4PSWcWBysdb46Sy6Hignjk-MKa0ezzbYhm1ko6vHTunOOmtHGtTCNqa0UPAZuFoPaK4xJ_QTHZvMq-RCRJUyv6-LdIIf8QYoB7aCLJ3bTg" />
                                    </div>
                                    <div class="min-w-0">
                                        <p class="font-title-md text-title-md text-on-surface truncate">Taller Barro
                                            Mestizo</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Pucón · 8 piezas
                                            disponibles</p>
                                    </div>
                                </div>
                                <span
                                    class="px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">En
                                    Vivo</span>
                            </div>
                        </div>
                        <!-- Floating badge tag -->
                        <div
                            class="absolute -top-4 -left-6 px-space-md py- space-xs py-2 rounded-xl bg-surface-container-lowest shadow-lg flex items-center gap-2">
                            <span
                                class="material-symbols-outlined text-primary text-title-md">local_fire_department</span>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Drop Especial
                                #48</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 2. CATEGORÍAS DE TIENDAS -->
            <section class="w-full max-w-7xl mx-auto px-6 lg:px-12 py-20" id="recorrer-puestos">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-12">
                    <div class="flex flex-col gap-space-xs">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Pasear
                            por oficio</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Recorre por tipo de stand</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Cada tienda virtual es un atelier
                            independiente con su propia voz, filosofía y ritmo de producción.</p>
                    </div>
                    <div class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
                        <span>6 categorías seleccionadas</span>
                        <span class="material-symbols-outlined text-base">filter_vintage</span>
                    </div>
                </div>
                <!-- Category Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Cat 1 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Artisanal ceramic tableware, terracotta mugs and raw glazed bowls staged gracefully on a natural linen cloth with muted warm daylight"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVtSOobOrQVnRc2dFgMkf0a0htmbN_BYDjKtDvYkV9lAQYvX1QEaJyUPFcq0jEhTCAeJC1WO9S0nAW20Wl4cvSmwRwyYfffUd8ZJ-Na13nuRtAj2KOgg3V82Z1xImC1uu87AJDRkMgyh6QbJp_SBWK-agAk3FLJ9wlHZ17Zbmac35pulpCEv8Dp-EXSeOusgg-XomxgfEAcA3Dj1wSPcWVkMgOOA6h9eYd5nglJpb899I1KMH0FC5SrQ" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">28
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-primary font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">water_drop</span>
                                <h3>Cerámica &amp; Barro</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Piezas modeladas al torno y
                                horneadas a fuego lento con esmaltes minerales no tóxicos.</p>
                        </div>
                    </a>
                    <!-- Cat 2 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Hand-bound botanical notebooks, pressed wildflower greeting cards, and fountain pens placed on an oak workbench"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUsmTCAk34tDCAyjQ07dJBKbVjfgNWrQtl7X9FVS9sh1i7NH01n45WSa9m_iniz239MReCcn2PYNcbIN9VKQQBVL4zfJWB3N01iTw-BPTJTCXYS8mOy_4pCdV6kZGsqdoJ6lbTuCmC9kcOv1wLYDc_vhLEf8pey6SepdCLZyv1hxQ6DdCDMtfOvxieyIWp6VCfRcEXo2KH_FqamwVe8j06KoW98S35ZmC1rmMkwe71TP-Z-w95aLM_xw" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">19
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-secondary font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">spa</span>
                                <h3>Estudios Botánicos &amp; Papelería</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Prensas botánicas de madera
                                nativa, libretas cosidas a mano y láminas botánicas de autor.</p>
                        </div>
                    </a>
                    <!-- Cat 3 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Natural linen textiles, hand-dyed scarves with eucalyptus and onion skins, hung over a rustic timber wooden rack in sunlit atelier"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEKSdu1JJ4lMPX0oZQAZXVEprWN3HBcxRnddamcQ1C1QfFD5o6k6vLBfjz4HLMIhq3ELYaywmfEbu4ze5UqLl_Zro1Zmp_hbl8bj_U4k1sXhtuDSqAmk-ozI1ulNLfRPzsvOQVKDB-RcKzLDNfGJTxdCqNocaTBHTHRowo-2QI_Su491dnRVBkv4SR-W0t8xJi8zrHwB-YMqHSnb5FNTiaqAY8izH_gHtVEQSkm3uVjjdVMmHlbRMa3g" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">24
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-tertiary font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">texture</span>
                                <h3>Diseño Textil &amp; Telar Consciente</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Prendas lentas, hilados de
                                oveja libre de crueldad y tinturas con corteza y flora nativa.</p>
                        </div>
                    </a>
                    <!-- Cat 4 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Minimalist creator workspace showing an iPad with Procreate botanical illustration brushes, typography swatches, and clean aesthetic workspace"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_h8TD6PX-c30fO75URTfG3e_D44IF7nCV_fgM-ZMxrFNpmOsQxwJZfEPKySQw-9GWfrD8TQQvzaDzu3LsYBuToDahJlLkjBQHfM6YLJghDaKGCAtjpx-9po-eVALKCseavqn_zA9HcHAp4Eq-jqs-xRAJO3A1f4atBowXfzhtELI1smjsiN3fh96i8jLrMS8_epFvPyrKVoslQqZNCXxZ4vqkNboQqNPARKKHgu0o_FOdHg7cs-aZaw" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">32
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-primary font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">layers</span>
                                <h3>Activos Digitales &amp; Recursos</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Paletas de color de autor,
                                pinceles Procreate artesanales, plantillas Notion y guías de oficio.</p>
                        </div>
                    </a>
                    <!-- Cat 5 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Handmade oxidized sterling silver rings, raw tourmaline stones, and goldsmith tools resting on leather jeweler's bench"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5BT1OvppoQ6WF0Zes8o-zEcQPWcD8Lzdt6iiDQr665ReFu8dwLlQII0lYCFCV4vPGQCpMoJ5t02qm00mjTP16pFfeZh1yo_k_bZn7JGFnRfJQb-14IuHCbz9I5mANEIUnB43EVrq1A-CNW1CZ6iF3VYFTG28kPFJMX9rObG6pxO8grbB69WbqDUNdNRpjkQC_DbDTsxos-RVhNe305zcc--yS2MKO7oUz0iBV37hthp09OV3lzO89xQ" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">21
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-on-surface font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">diamond</span>
                                <h3>Joyería de Autor &amp; Metales</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Plata 950 reciclada, piedras
                                en bruto sin tallar y orfebrería de inspiración ancestral.</p>
                        </div>
                    </a>
                    <!-- Cat 6 -->
                    <a class="group flex flex-col rounded-2xl overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300"
                        href="#">
                        <div class="relative h-48 w-full overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Cold process organic soaps with rosemary sprigs, dark amber glass dropper bottles, and clay powder on a clean travertine stone slab"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5DnR1i7IYlnSFt_BcnRwrHkYlXO8iHs5zDkQRS0GIBbIXIItjDDhe_d2Yrz2DadDQkHKMeS55-NhtIP_9AY70nPkEiWUnrtn_JwHsXR8w3vfZuMTRJ4zSjBB5oJPb-MdIiLPb6m-I_Fa2VL9uQ9QNsELe5FosVFZihWGiY7J4EVQBeGAcLWpx1gZ-Gf-nPavR1_8Y0ViCLcXpw2KKaqlIjLeKNyYWqori6y1dNpypHDn0dkhuX2e2Uw" />
                            <span
                                class="absolute top-4 right-4 px-space-sm py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur font-label-sm text-label-sm text-on-surface font-semibold">18
                                Stands</span>
                        </div>
                        <div class="p-6 flex flex-col gap-space-xs">
                            <div class="flex items-center gap-2 text-secondary font-title-md text-title-md">
                                <span class="material-symbols-outlined text-lg">science</span>
                                <h3>Cosmética Botánica &amp; Alquimia</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Jabonería en frío, hidrolatos
                                destilados en alambique de cobre y ungüentos orgánicos.</p>
                        </div>
                    </a>
                </div>
            </section>
            <!-- 3. PRODUCTOS DESTACADOS POR LOS PROPIOS EMPRENDEDORES -->
            <section class="w-full bg-surface-container py-20 px-6 lg:px-12">
                <div class="max-w-7xl mx-auto flex flex-col gap-12">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                        <div>
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Curaduría
                                de la semana</span>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Favoritos elegidos por los
                                creadores</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Piezas insignia
                                recomendadas y garantizadas personalmente por quienes las diseñan y elaboran.</p>
                        </div>
                        <a class="inline-flex items-center gap-1 text-primary font-title-md text-title-md hover:underline"
                            href="#">
                            Ver todas las piezas
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                    <!-- 4 Highlighted Products Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Item 1: Físico -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container-high">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Handcrafted sculptural terracotta water pitcher with an organic curved handle against a clean warm ecru background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuARxgw_QkHSUNsIL4bYB5rVzPY-N4ogB7Dzb3YJoNSxb9TeV4PMLZJgTi2dmmZKxdtOJzpqr8yfsd-s-vrA8IedQQFQR8hLvoR9oEDlU9DWadH74ZXTMN_-fPzVrP8QZc3J3clsjbZmHR3QWWmNDT-H-X_NZfpLRgnREk-ebB4dahV1zCXjf9JY7eTIcOaikRj9A-kaxJ2kSMh6X-8wKCaBw23ZaWLtgWKf-_3eWJnDvdtpL3zkAZQ1tQ" />
                                <!-- Physical Badge -->
                                <div
                                    class="absolute top-3 left-3 px-space-sm py-1 rounded-md bg-surface-container-lowest/95 backdrop-blur flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-primary">handyman</span>
                                    <span class="font-label-sm text-label-sm font-semibold text-on-surface">FÍSICO ·
                                        Envío a mano</span>
                                </div>
                                <button
                                    class="absolute top-3 right-3 w-8 h-8 rounded-full bg-surface-container-lowest/80 backdrop-blur hover:bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-base">favorite</span>
                                </button>
                            </div>
                            <div class="p-5 flex flex-col flex-1 justify-between gap-4">
                                <div class="flex flex-col gap-1">
                                    <span class="font-label-sm text-label-sm text-secondary font-medium">Por Taller
                                        Lúcuma (Cerámica de Autor)</span>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">
                                        Jarra Escultórica Terracota</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">Modelada
                                        con greda chilena de alta temperatura, apta para líquidos y decoración.</p>
                                </div>
                                <div class="flex items-center justify-between pt-2">
                                    <span class="font-title-lg text-title-lg text-on-surface">$28.000 CLP</span>
                                    <button
                                        class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-base">add_shopping_cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2: Digital -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container-high">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Cover of an artisanal PDF digital handbook about natural plant dyes with clean editorial layout, swatch samples and botanical illustrations"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnvvAwmHFLSp3sTBOPdHQ3uD4yLzUfuiOYnR0yK4A4KfGz6xmtqI_pIfT3oLpnS0Hj64s302_ITAG77z_E0Hw97fQmVRDi2FGktSBGzdohMarQgPgkiimTn9I9OiA8cTCPyXLp1rhP3H-ychw9-be1eJyAwIsXBc0oDyttQNoUM1ODBT6AURln5biPqUd1Ej65Sx6G1HefMtU6ruceqGDQaWB4ATI0WkZj8zNagOLmYycRYEM7rWBe1w" />
                                <!-- Digital Badge -->
                                <div
                                    class="absolute top-3 left-3 px-space-sm py-1 rounded-md bg-secondary-container/95 backdrop-blur flex items-center gap-1 shadow-sm">
                                    <span
                                        class="material-symbols-outlined text-xs text-on-secondary-container">download_for_offline</span>
                                    <span
                                        class="font-label-sm text-label-sm font-semibold text-on-secondary-container">DIGITAL
                                        · Descarga inmediata</span>
                                </div>
                                <button
                                    class="absolute top-3 right-3 w-8 h-8 rounded-full bg-surface-container-lowest/80 backdrop-blur hover:bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-base">favorite</span>
                                </button>
                            </div>
                            <div class="p-5 flex flex-col flex-1 justify-between gap-4">
                                <div class="flex flex-col gap-1">
                                    <span class="font-label-sm text-label-sm text-secondary font-medium">Por Estudio
                                        Telar &amp; Bosque</span>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">
                                        Guía Maestra de Tintes Naturales</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">84
                                        páginas en PDF interactivo con recetas, tiempos de mordentado y fichas de
                                        plantas.</p>
                                </div>
                                <div class="flex items-center justify-between pt-2">
                                    <span class="font-title-lg text-title-lg text-on-surface">$16.500 CLP</span>
                                    <button
                                        class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-base">bolt</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3: Físico -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container-high">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Artisan silver molten textured ring with raw green tourmaline crystal photographed in macro shot over weathered dark wood"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpJ50o6pkjdheMcxv7Vtydc3LlZQDgemg5H8jQ80e75m_kmQPAQIoAI5w1SbgL2owkGFVUs9TBvWXiIiOFxl966ziF4ar-ug4cxR643gSTF7VjmSF9bAN0OHuMh4Ga6kIYsa_u23UhqE7aOv6QyABJGzGIBM_d3vr1_o0djlL4UvmX1prDizz420Jvz5Oxc42nG_DJTzhDTsDNB6oBHDxJHH7VEtAzjxGA3ThVmGyGzfJr1Mol8L21Gw" />
                                <!-- Physical Badge -->
                                <div
                                    class="absolute top-3 left-3 px-space-sm py-1 rounded-md bg-surface-container-lowest/95 backdrop-blur flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-xs text-primary">handyman</span>
                                    <span class="font-label-sm text-label-sm font-semibold text-on-surface">FÍSICO ·
                                        Pieza Única</span>
                                </div>
                                <button
                                    class="absolute top-3 right-3 w-8 h-8 rounded-full bg-surface-container-lowest/80 backdrop-blur hover:bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-base">favorite</span>
                                </button>
                            </div>
                            <div class="p-5 flex flex-col flex-1 justify-between gap-4">
                                <div class="flex flex-col gap-1">
                                    <span class="font-label-sm text-label-sm text-secondary font-medium">Por Orfebrería
                                        Cúmulo</span>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">
                                        Anillo Lava Plata Martillada</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">Fundido a
                                        la cera perdida con plata 950 reciclada y pátina oxidada profunda.</p>
                                </div>
                                <div class="flex items-center justify-between pt-2">
                                    <span class="font-title-lg text-title-lg text-on-surface">$42.000 CLP</span>
                                    <button
                                        class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-base">add_shopping_cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Item 4: Digital -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container-high">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Digital illustration asset preview showing botanical leaves, paper textures and watercolor stamp brushes for creative software"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHVELwyHy_TAiqQ1L92COOEX0ln3tUt3zUzN84GdaJIwv8wNygfFuI5ju_MWLrRXtmhAdxvIkRG_r2J4jwK8ALs2Yc2AwKswK1fcwVUzXFw30flObOW22rPuaaYyJL4zq5CixNDq3PSQYGu9yrwOyjD_W8awN4u3E9kq_YgN1KGTbVjEnFAWibmnidqJU_6gK5S-5bFCAodP5GMMYFtL3LgwZukmurMgZEIl0sj2NJk1RHclAN0CE0vg" />
                                <!-- Digital Badge -->
                                <div
                                    class="absolute top-3 left-3 px-space-sm py-1 rounded-md bg-secondary-container/95 backdrop-blur flex items-center gap-1 shadow-sm">
                                    <span
                                        class="material-symbols-outlined text-xs text-on-secondary-container">download_for_offline</span>
                                    <span
                                        class="font-label-sm text-label-sm font-semibold text-on-secondary-container">DIGITAL
                                        · Pinceles &amp; Texturas</span>
                                </div>
                                <button
                                    class="absolute top-3 right-3 w-8 h-8 rounded-full bg-surface-container-lowest/80 backdrop-blur hover:bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-base">favorite</span>
                                </button>
                            </div>
                            <div class="p-5 flex flex-col flex-1 justify-between gap-4">
                                <div class="flex flex-col gap-1">
                                    <span class="font-label-sm text-label-sm text-secondary font-medium">Por Estudio
                                        Gráfica Nómada</span>
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">
                                        Colección Pinceles Herbarium</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">45
                                        pinceles artesanales para Procreate y Photoshop digitalizados desde tintas
                                        chinas.</p>
                                </div>
                                <div class="flex items-center justify-between pt-2">
                                    <span class="font-title-lg text-title-lg text-on-surface">$14.000 CLP</span>
                                    <button
                                        class="p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-base">bolt</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 4. ESPACIO EDITORIAL IKIGAI (Rompe grilla Asimétrico) -->
            <section class="w-full max-w-7xl mx-auto px-6 lg:px-12 py-24">
                <div class="relative rounded-3xl overflow-hidden bg-surface-container-high p-8 lg:p-16">
                    <!-- Ambient background tint -->
                    <div class="absolute -bottom-16 -right-16 w-80 h-80 rounded-full bg-primary/10 blur-2xl"></div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                        <!-- Story / Quote Content -->
                        <div class="lg:col-span-7 flex flex-col gap-space-lg">
                            <div class="flex items-center gap-space-xs text-primary">
                                <span class="material-symbols-outlined text-xl">auto_stories</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-widest font-bold">Voz de
                                    los Creadores</span>
                            </div>
                            <blockquote class="font-headline-lg text-headline-lg text-on-surface leading-snug">
                                “En Ikigai no competimos por algoritmos ni precios de remate; construimos vínculos
                                reales con personas que aprecian el tiempo, los errores hermosos y el alma detrás de
                                cada creación.”
                            </blockquote>
                            <div class="flex items-center gap-space-md">
                                <div class="w-12 h-12 rounded-full overflow-hidden shrink-0 bg-surface">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Portrait of Camila Valenzuela, a textile designer from Valparaiso smiling gently in her sunny textile studio"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDk83qD0GOJ4shijEKumWp0shll2dTj3PlVxAPbEPF9mnaeHuCaKb8bWdDBdKI4Dkf1JV-qvb2KaFSrVs8GhBD05Ja97mFa6YRuP2YlG2QOXLOtba2Z_3DESrzMK8RUITaSdXtw-dzvDy0NBYsbm2pWOS1fCWPfu8HrTWVCYD_WZrBfPi82jNKtWnQX2oz9g0vK0Es2BrQLVdTUFAKTJLSDA1rb6PY516IU0EZo2cKxh83lKQx8pNPrjw" />
                                </div>
                                <div>
                                    <p class="font-title-md text-title-md text-on-surface">Camila Valenzuela</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Fundadora de Taller
                                        Hilandera · Stand #24</p>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a class="inline-flex items-center gap-2 px-space-md py-3 rounded-lg bg-surface-container-lowest hover:bg-surface-bright text-on-surface font-title-md text-title-md shadow-sm transition-colors"
                                    href="#">
                                    <span>Leer el manifiesto de la feria</span>
                                    <span class="material-symbols-outlined text-base text-primary">east</span>
                                </a>
                            </div>
                        </div>
                        <!-- Craft Process Visual -->
                        <div class="lg:col-span-5 flex flex-col gap-4">
                            <div class="rounded-2xl overflow-hidden shadow-lg h-72 w-full bg-surface">
                                <img class="w-full h-full object-cover"
                                    data-alt="Detailed close-up hands weaving raw undyed wool on a wooden traditional frame loom with soft natural shadows"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAei6lyQVUKYntG52FcZdUHEA9Ks8BrVSksJn1w7Nhh0PXXO_E4Q95lLOOuTbpP-4lriWXHFiEuroJkVG2cBTyUzi8OREZq1DyaYTfHgCQVgGtGB0HBSQY8yuvFqVM_73M6l7BopPHbbdEpF3rsxmB7pN2PdV9QNvckrKIPztUqaT7hgR6LODH80x8ju-lF5yMkNEqMCk_qPZDTVoyqTLgd3BO8kOkb0eXq9DgN5E63SIMD5RHLOiho7A" />
                            </div>
                            <div
                                class="p-4 rounded-xl bg-surface-container-lowest/80 backdrop-blur flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-secondary text-2xl">eco</span>
                                    <div>
                                        <p class="font-label-md text-label-md text-on-surface font-semibold">
                                            Trazabilidad Total</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Conoce el origen
                                            de materias primas de cada taller.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 5. TIENDAS DESTACADAS (STANDS INDEPENDIENTES) -->
            <section class="w-full max-w-7xl mx-auto px-6 lg:px-12 py-16">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-12">
                    <div>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Vitrina
                            de Talleres</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Stands destacados de la semana
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Entra a los puestos virtuales,
                            conversa con los artesanos y revisa sus estantes curados.</p>
                    </div>
                    <a class="inline-flex items-center gap-2 text-primary font-title-md text-title-md hover:underline"
                        href="#">
                        Explorar todos los 142 stands
                        <span class="material-symbols-outlined text-base">store</span>
                    </a>
                </div>
                <!-- 3 Curated Shop Booths -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Stand 1 -->
                    <div
                        class="flex flex-col rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <!-- Stand Header / Banner -->
                        <div class="relative h-36 w-full bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Artisan ceramic pottery workshop panoramic view with drying clay cups and sun rays through rustic window"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2DdEANh2KxOFVD33Wbok3P4_c18woUJu2__Hrw8tQhltgI0hmz8tvAlGVumEwZ_wmh-X8jP-OBzxs79zxDzlrAs8dfdxpVnUGXj5rX9SdWMJllWqCc95HycsRCxHSQEKBLYpZbTCg2xYHpxcSOPo9pYCwJlwMo8a0pGjsr4ZL1GTJQRGYMM2JKFzeBopgNoCW4yyyLnIAkubjcS4CKYqnCIZZwOMUbhPNbSComtuOaXBPr62DsPUtgA" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            <!-- Avatar -->
                            <div
                                class="absolute -bottom-6 left-6 w-14 h-14 rounded-full overflow-hidden shadow-md bg-surface">
                                <img class="w-full h-full object-cover"
                                    data-alt="Friendly male ceramist with dust on hands smiling at camera in his workshop"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8FolXJmlwuihJlV-TaW6bwjCl8l96GaXkzr0VxPjNxO2PKU_i8wIRcbev-SPfWTaM0BJzWPnySKHYk8RfuimKUhNRaJjWwg6O8dnenbpurl7BDa0NweCW8QS_w9Ubw2XXT8neLjKZ1sfT8DQ67cDcc0XLBDAL_VKmjsnCijgZBYm1zUqSfAaiGQvH72NrUATq2mZjr8EuXcXjtCWf78gpFoQ5mbo4RDSae7RZo0v2-YAQ_YcjWW5Irg" />
                            </div>
                        </div>
                        <!-- Stand Info -->
                        <div class="pt-8 px-6 pb-6 flex flex-col flex-1 justify-between gap-6">
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Casa
                                        Arcilla</h3>
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Valparaíso</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Vajilla de gres utilitaria
                                    pensada para rituales cotidianos de té y café.</p>
                            </div>
                            <!-- Stand Mini 3-Products Reel -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">En
                                    exhibición:</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Glazed ceramic espresso cup in speckled warm cream glaze"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlXb5bGAECBk_aYiHrdrHh0soD8pVpKpRyNx9sHwDH3PmMpUGRD83BxLaMneG59qHR62-UC6DVFSWp8ea9OTIJZ6z5CzXxCXJ5US_sYH9NDIYnVJ_xHJ9wQFgpmeqGDgH_hi8aLIlbuKuPvrmDnJkZ0hZFcxr_3hY_hWVmIzFvNgZ3DoPe6ZsMeOKw_DwozJ7ck-Z9fs0sMkzzJDSZhQUHtDoYCs04W0uTDvXcMfNhXumwFkZSio4Kqw" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Stoneware small bowl with raw iron clay accents"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHLwSBvG7oN2kdWgyBZuLEhximmr4yntokG9UCZZsnyYPz1odIhXkfzAjALZ2W7NpwTxvihnOz9EcrNkEO14zkcefwafWKClDX-FR4nfValw6p-qUoj2PXx5esGMuxeWKqSax_u2SaXcdtL3qHTuMrCCNkRQHPD-xdvNFFS_frsEN19CCZMAk1V-bvuyPYS01fK0fc8VSSSWITGtRfEhl3wwOAWETG6BrmwJG6lYNOGNN4ZzmwHcC1-Q" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Clay pouring vessel with organic handmade handle"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcnQxcWrLudQWyh837daZ1ArHqqbzpw0C-MiU9rdNNHO0kI12UsZG1CXmtWVKfrKiKWH31Q5yGefERSRWVpnbx04D8md9r7hLAZWLD07TV3CdAia9FlUEPsC_dUAeuoTtt7sMw999TbnfkgLhOXj9ZAWRFS7nuUM-hyxHfqHKy4jpDbB20-IaF0jHJqi0HC846KKiVF2Uo6qlUoK_arq8s4o_CM0VFPtIW9E_vq2tdRW_Aexg3iIMTBg" />
                                    </div>
                                </div>
                            </div>
                            <a class="w-full py-3 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface font-title-md text-title-md text-center transition-colors"
                                href="#">
                                Entrar al stand
                            </a>
                        </div>
                    </div>
                    <!-- Stand 2 -->
                    <div
                        class="flex flex-col rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <!-- Stand Header / Banner -->
                        <div class="relative h-36 w-full bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Botanical illustration studio with watercolor pigments, dried eucalyptus hanging and art prints mounted on paper clips"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYOS2p3RQqhNvkzILQ2FVIXvU1J1v3r-0i-7wNx3A-etTlQ9ADEkchGMAQc9_Wy4_xmCNIXzFMpfD4sF0A4YJKauR8o9cSmnS4ZjTN0pVSPdDQ0U1vW7ouO4pLMyPgtp19wDwP4rqDamQOf2Ja0QyIzZtcohUrgaR9190vJNDDkDppaK6avNDizs3wk4X7kqfZwsVGnGo_kxxjRoqhs4ln_OX3HMMb9nUi2kdy3E6r4FeqDSgF1I_BzA" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            <!-- Avatar -->
                            <div
                                class="absolute -bottom-6 left-6 w-14 h-14 rounded-full overflow-hidden shadow-md bg-surface">
                                <img class="w-full h-full object-cover"
                                    data-alt="Botanical artist woman arranging dry pressed flowers with fine tweezers in bright room"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSxJdyqK79wLFL4i7a1LWOgFSHSRi4QUlSuajhOwP7hWL3lI7B3r0JtQfLMBl8wTSpOXtsn6xEe99edVhqkFeXjSrp2Cm7b8SIoeOU7Zyve6aI5OAgSCFQfB1A4qAxCusEi-nhv35Wd7Cz9AFcJY8vhy1Kvdf72-go3z6XbuTCEcBcF5sdCW4GT6MpGoxsPxexVb8tdS_E5LSNG8Tm3LEKRBfAbBim3YVPoAVqv8Dsq6Rl0oSmJYR8Yg" />
                            </div>
                        </div>
                        <!-- Stand Info -->
                        <div class="pt-8 px-6 pb-6 flex flex-col flex-1 justify-between gap-6">
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Flora
                                        Silvestre</h3>
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Frutillar</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Herbarios prensados en
                                    cristal y láminas giclée de flora nativa en peligro.</p>
                            </div>
                            <!-- Stand Mini 3-Products Reel -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">En
                                    exhibición:</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Pressed fern framed between two clear glass panes with brass borders"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK8LxynmTzyCz8Eu5B7MH0dyJlGrudL6iHt32dXMvM7uzCLA3JX_hVxIMILpx2RkX10gCm1Ic3RgCcGJUXZVKlfjYhb1zRe8fXOLXgvsCM10WGwFUkgRswJx7crGEOlD59ekI9HX7BUoo1O72tRdTJpCUIjfeEOm3tLFDZ_4S8kR4ykWhQvtlcx-CQLw7SDHI1BJvVV2R7UtpW_dvuxG5tlQDCm1YcKbhiQuZvwdeKp6C9H6MClxPpSQ" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="High quality giclee print of native Patagonian wild mushrooms"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNsBvOhOlVkQp_ruIYlTfGmg9aQnYY0rw1iDGz18ax1aYX_61CBPWV9T56bXgr9rtuOatJbL99BkUulKcsi-JcuPTFvLhXWfXDLV2wT8LESgjPA7rLOFjRJPO-0G82_rW5J7p3QkyUC_U_8pwtcOxqhIhfiC2Mvh1SokS1oWC6lBjGal-P5KUpU0DMxOliMejzSzBOudOMc-FPOpX8jS7jMvVwnRgXxDikpbw4WWc8_QlKIgHhiq2d0g" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Mini wooden hand press for botanical field trips and flower pressing"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYqtjKvc5Kow_qRlMEJVAvu9QoaLzVTPA8LcUWxxDr_CXxNqc08kHiTvErwoO0-jY5NaCOPZUwcrZ4-3CBZEzjG8k-eJh9WhZn3cPLCsFJWNsL8t7y4jbzamPmgzPrtlNmcg7rdZX12068klJ9AR9IlHFTG7Hn3b7sAGAEKQE7dXXVP6XvwRuoCU3gqvY6JFN7fbJZOMe5sIyghDn-Xy2wiIoAGxP2xtuePngvazWec0ZLiHNiIQo9Dg" />
                                    </div>
                                </div>
                            </div>
                            <a class="w-full py-3 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface font-title-md text-title-md text-center transition-colors"
                                href="#">
                                Entrar al stand
                            </a>
                        </div>
                    </div>
                    <!-- Stand 3 -->
                    <div
                        class="flex flex-col rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <!-- Stand Header / Banner -->
                        <div class="relative h-36 w-full bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Digital designer creative nook with cozy warm desk lamp, graphics tablet and typography specimens"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkbyZT1JXsm-11wmoy2nubjA7SY8_UrJebToZUaYUOgQGfdcQTbvm5Bov8Zep4Knus5QYjGMc7L-ZgwtQgH527Fzh1YSX1rG2Oa29rsQrQkOSqsLaiUUxjDD4AfCChEFbmQtFkjvemyrIDXSKqn57_5bZri2QLlgj3lYnAlrUyF8lQ3JmLzhz9d3zTtGilTmIuY8EuUO8hlkK1_Y6Q_FsMCAIO0MrXzJDKQgmYLgQR7D6uEzVwx5_Wfw" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            <!-- Avatar -->
                            <div
                                class="absolute -bottom-6 left-6 w-14 h-14 rounded-full overflow-hidden shadow-md bg-surface">
                                <img class="w-full h-full object-cover"
                                    data-alt="Creative developer and graphic designer with glasses working on layout mockups"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQgxUNdCM49nfZoMx_WDJn2dwutXkgHrSBxEB-GXgUCpVwxEcupt_ZJtKspFBZv_Vqj6w1bCmtivw6PlJZBaekhtvIXfNv-W_06CjsfpJwlJ8JP-RNIOpCiCFs44inwQUi66g8adhKxSng1L5LtcF2Bzo35ohTA5KDb17gqKDhwPHmTQ70KFM8tnWqYmYmSq5GN1TkYi7SXhln_a3qEmJAaKZI_NTP5m7T5Xwdam-QnAHv2Y0iIyu41g" />
                            </div>
                        </div>
                        <!-- Stand Info -->
                        <div class="pt-8 px-6 pb-6 flex flex-col flex-1 justify-between gap-6">
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Taller
                                        Bit &amp; Papel</h3>
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Digital
                                        · Remoto</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sistemas tipográficos
                                    artesanales y plantillas de productividad para creativos.</p>
                            </div>
                            <!-- Stand Mini 3-Products Reel -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">En
                                    exhibición:</span>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Minimalist Notion dashboard preview for artisan studios and sales tracking"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeyrNddf_7kKoQ8NHUiPZysw9y-SISZokoz2hMI_cgm3ZV30K3P3CUz_z2uVhopU6EAC5HsLrSpziBKgJdwpCodhkLk532Oy-h1O9sJ_rxDUaHik_ontub1fz2H0Qk-A_KotZ2_h_WS9yoAot8tFxSvX1Mr-ynt6ERUQE6cgdruxKtVz5HlKOUiH3AHE81ktuzuN0MNQpT6Q-p61k2YgB68z2GdbdktQfDv-4ChTl69U8_5uwRdcjW7Q" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Handcrafted serif typography specimen sheet preview with glyph set"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvJWPrXSpguyfsAiwD1z-GG2kZRxvT5Lu2hVc5pY4diQsiy_jr4W0Vchvv4m1zqUK-0emhyDBc-SPnc42R3SNnzU8aHhlpFKtp-ZYX6tLKd7uIoV3305HXO9tOf3ERcMRKXKMlIrSeZNc6KgfWa5pEGjTc6CghQxqK0O0g83FeLqpuO2QkQC_Iu1oJtqtaBx92Vn3qmgLqCGv7W_xztUx6IVfBCtAmM6ahJ6_yiztYDoQb8rlmlFYD1g" />
                                    </div>
                                    <div class="aspect-square rounded-lg overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover"
                                            data-alt="Set of 12 natural paper texture overlays for digital artwork mockups"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWhQ10jIgup26DJZGGm8yKVZIyPI5BjDTlJVJAtcTO7T1sI1Ym-n2iYlchd7luvynaI56ecuqB6-bi4vluS45yGubKfJsc2w82EFjuO4PKXAN_xM76X6iwV_9fVG8I7lvrvH0umSG-FbwAjxhwBgU6SvGoO2u38tnygdKtqzY5C24vKylTcdF9AdWeEOrNfkEDjL6pdbuMNOGP4K_b4cZXDV38ZiVNaGp5YvIhnxrZXK3cHzytDNLtOA" />
                                    </div>
                                </div>
                            </div>
                            <a class="w-full py-3 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface font-title-md text-title-md text-center transition-colors"
                                href="#">
                                Entrar al stand
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 6. TIENDAS CON MAYOR VOLUMEN DE VENTAS (Comunidad favorita) -->
            <section class="w-full bg-surface-container-low py-20 px-6 lg:px-12">
                <div class="max-w-7xl mx-auto flex flex-col gap-12">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                        <div>
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Preferidos
                                del público</span>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Las más visitadas por la
                                comunidad</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">Stands destacados por su
                                constancia, valoración de envíos y atención humana.</p>
                        </div>
                    </div>
                    <!-- Horizontal Cards with Ranking -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Ranked Stand 1 -->
                        <div
                            class="flex items-center gap-space-md p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <span
                                class="font-display-hero text-headline-lg font-bold text-outline-variant/60 w-8 text-center shrink-0">1</span>
                            <div class="w-20 h-20 rounded-xl overflow-hidden bg-surface-container shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Organic soaps, essential oils and wooden soap dishes on a shelf"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzQXLwqq0tZVQ5t_z0o73TUraCThI0gnUqXTJ8bmwVw9lSjMzf7m7fJgikt3VGjtTi83LwzrXn4fCpwlawH6_g6SKX3QvfZCxQ4Ucg8PvSyGOVf3NGCSGV0wdD-bKhU9rzFAbzl2f7JrhnCIt-liuv8aUHQ_L2LJA-mRACpcKqR7weXLvKdb0_oS9IPWu5C98d-YkdAsqmSzjTlUOLHDhYP9stdGKJI4p_QhhmgyqB0ZyUTr9U3q8WXg" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-title-lg text-title-lg text-on-surface truncate">Botica de los
                                        Andes</h3>
                                    <span class="material-symbols-outlined text-sm text-secondary"
                                        title="Artesano Verificado">verified</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Cosmética sólida
                                    y herbolaria pura</p>
                                <div class="flex items-center gap-4 mt-2 font-label-sm text-label-sm text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">package_2</span> 480+ envíos
                                        felices</span>
                                    <span class="flex items-center gap-1 text-tertiary"><span
                                            class="material-symbols-outlined text-xs">star</span> 5.0 (132)</span>
                                </div>
                            </div>
                            <a class="p-2.5 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary transition-colors shrink-0"
                                href="#">
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Ranked Stand 2 -->
                        <div
                            class="flex items-center gap-space-md p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <span
                                class="font-display-hero text-headline-lg font-bold text-outline-variant/60 w-8 text-center shrink-0">2</span>
                            <div class="w-20 h-20 rounded-xl overflow-hidden bg-surface-container shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Clay cups in earthy glaze being packed inside corrugated boxes with dry lavender sprigs"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFvzXwyLITH_9AHeKXBFxMgQj9MwgmfAUpuTb_VErpudK-8IF9yuoKWM0qCuTNe71fkmaz3vu3QE94z9I5fn3m5r96h6Sd8pmux9QrHN_WNFKSoFzC4sjxNs5Qb-avp2MUtEFJ4lRlCPIH8mPzp8lXYjg8f2K7OC90SkPuCf6wbOOa-06GHf9CusEVZZM_m4NqwdlCKN2gqOvDmfr_QePDhEahuPfvTqTGT_86oOLvQyULJsEjY6R91A" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-title-lg text-title-lg text-on-surface truncate">Greda Sur Taller
                                    </h3>
                                    <span class="material-symbols-outlined text-sm text-secondary"
                                        title="Artesano Verificado">verified</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Pocillos y tazas
                                    moldeadas a torno</p>
                                <div class="flex items-center gap-4 mt-2 font-label-sm text-label-sm text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">package_2</span> 390+ envíos
                                        felices</span>
                                    <span class="flex items-center gap-1 text-tertiary"><span
                                            class="material-symbols-outlined text-xs">star</span> 4.9 (98)</span>
                                </div>
                            </div>
                            <a class="p-2.5 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary transition-colors shrink-0"
                                href="#">
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Ranked Stand 3 -->
                        <div
                            class="flex items-center gap-space-md p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <span
                                class="font-display-hero text-headline-lg font-bold text-outline-variant/60 w-8 text-center shrink-0">3</span>
                            <div class="w-20 h-20 rounded-xl overflow-hidden bg-surface-container shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Warm wool blankets in mustard yellow and sage green folded neatly on rustic bench"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQHEdq-saTIvIYR5OuukUPzzaRsxeYJqk1IX9doAXiduC7C7Cqi119-WY0Uq-8ddV9_UDlb9WyACP0Ux6uZg2Lfyvo-7EOfe0UT9JR5eBpFtGltGsYBJTDPrX6s24-yojjT0WOdNmgfR6vYMoe17ARV7nafmOoO0hsHTmZW2EUyFkq8mNX0Ptj2jZ9KCxRMV1uinUfznewO4r9WMSogqWhEFeabdEPfItyQWUtO_JOkffP18-e9S--yA" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-title-lg text-title-lg text-on-surface truncate">Telares de la
                                        Cuenca</h3>
                                    <span class="material-symbols-outlined text-sm text-secondary"
                                        title="Artesano Verificado">verified</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Mantas en telar
                                    mapuche y lana merino</p>
                                <div class="flex items-center gap-4 mt-2 font-label-sm text-label-sm text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">package_2</span> 315+ envíos
                                        felices</span>
                                    <span class="flex items-center gap-1 text-tertiary"><span
                                            class="material-symbols-outlined text-xs">star</span> 4.9 (76)</span>
                                </div>
                            </div>
                            <a class="p-2.5 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary transition-colors shrink-0"
                                href="#">
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Ranked Stand 4 -->
                        <div
                            class="flex items-center gap-space-md p-5 rounded-2xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all">
                            <span
                                class="font-display-hero text-headline-lg font-bold text-outline-variant/60 w-8 text-center shrink-0">4</span>
                            <div class="w-20 h-20 rounded-xl overflow-hidden bg-surface-container shrink-0">
                                <img class="w-full h-full object-cover"
                                    data-alt="Stationery designer hand-binding leather traveler notebook journals with thread"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvX8eD2_HZYiS_J0Wtzakz2qS-mfvqOkdxejBD8AqjjzVJQpsrCx5xj7qYzsov7AUCHpjdowG0h8zPG_osmDaN7b2THyLlkZ7FqD80BbL2x4KlPz5OqsUQl5H4bjjJtuBQUkuotV2Zb2HqloKfwPhkPR0aEy9v-rHPjphizgn94um1YbtbNmOWZxXdiYIbnCBeaaIQ3SiSmO4W0HwdtkGYzdzG8A7BBo-Bp161lc23-_DC64pYSNTzow" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-title-lg text-title-lg text-on-surface truncate">Cuadernos Ámbar
                                    </h3>
                                    <span class="material-symbols-outlined text-sm text-secondary"
                                        title="Artesano Verificado">verified</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant truncate">Encuadernación
                                    japonesa &amp; bitácoras de viaje</p>
                                <div class="flex items-center gap-4 mt-2 font-label-sm text-label-sm text-secondary">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">package_2</span> 270+ envíos
                                        felices</span>
                                    <span class="flex items-center gap-1 text-tertiary"><span
                                            class="material-symbols-outlined text-xs">star</span> 5.0 (89)</span>
                                </div>
                            </div>
                            <a class="p-2.5 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary transition-colors shrink-0"
                                href="#">
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 7. EXPLORACIÓN DE PRODUCTOS CON FILTRO POR RANGO DE PRECIO -->
            <section class="w-full max-w-7xl mx-auto px-6 lg:px-12 py-20">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-2">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Catálogo
                            Vivo</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Explora piezas según tu
                            presupuesto</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Filtra obras por rango de valor y
                            tipo de formato para encontrar exactamente lo que resuena contigo.</p>
                    </div>
                    <!-- Minimalist Interactive Filter Bar -->
                    <div
                        class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4 p-4 rounded-2xl bg-surface-container-low">
                        <!-- Price Chips -->
                        <div class="flex flex-wrap items-center gap-2">
                            <button
                                class="px-4 py-2 rounded-full bg-on-surface text-surface-container-lowest font-title-md text-body-sm transition-all shadow-sm">
                                Todos los precios
                            </button>
                            <button
                                class="px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-title-md text-body-sm transition-all">
                                Menos de $15.000
                            </button>
                            <button
                                class="px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-title-md text-body-sm transition-all">
                                $15.000 - $35.000
                            </button>
                            <button
                                class="px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-title-md text-body-sm transition-all">
                                $35.000 - $70.000
                            </button>
                            <button
                                class="px-4 py-2 rounded-full bg-surface-container-lowest hover:bg-surface-container-high text-on-surface font-title-md text-body-sm transition-all">
                                Colección +$70.000
                            </button>
                        </div>
                        <!-- Format Switcher -->
                        <div class="flex items-center p-1 rounded-xl bg-surface-container-lowest">
                            <button
                                class="px-3 py-1.5 rounded-lg bg-surface-container text-on-surface font-label-md text-label-md">Todos</button>
                            <button
                                class="px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md">Solo
                                Físicos</button>
                            <button
                                class="px-3 py-1.5 rounded-lg hover:bg-surface-container-high text-on-surface-variant font-label-md text-label-md">Solo
                                Digitales</button>
                        </div>
                    </div>
                    <!-- Filtered Product Grid Showcase -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Filter Item 1 -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Hand-poured beeswax candle in raw terracotta vessel on neutral background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYHPLJCvlv55soUhc7fYpbmvI_SXoGG5TrMYmh9huLb9Cae6AnpswpGy6drHZBDHpzVpVegOcorh5x_LRkQWpKipmSVbPwHf2ryhIkb0sFdIrZoKbmPzhmq-2SWoc8HLj25zYkcghFNMK2TT4yOTB3VxTUt6y89yFTcCAljcZAxAcKeMr1WxzhkTM91TKcaWhP567np8O-GRXhws2pWxr0GQuvs8YXnrpxXlwVwx1BJG-gmEP91P_brg" />
                                <span
                                    class="absolute top-3 left-3 px-2 py-0.5 rounded-md bg-surface-container-lowest/90 text-on-surface font-label-sm text-label-sm">FÍSICO</span>
                            </div>
                            <div class="p-4 flex flex-col flex-1 justify-between gap-3">
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Por Cera Sagrada</p>
                                    <h3 class="font-title-md text-title-md text-on-surface">Vela Cera de Abejas en
                                        Vasija</h3>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-title-md text-title-md text-primary font-bold">$12.500 CLP</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">5 disp.</span>
                                </div>
                            </div>
                        </div>
                        <!-- Filter Item 2 -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Artistic botanical calendar illustration sheets mockup for desktop and print download"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfUQO3dZRXwWi1bFU2vvj19taYzHuOpBvlXKrvRiT3XkDpDPlrtAEdvpS8_c3pSALdTwxJOuOCAJlUYeCwZoPQKNbmFL7kHBBM0ncwF94jjWJ_X40XNwkGiwjEisMZp5anUjkt9AgTFzSwysYbFwF6qw9P03Jte8fbgh7atBj8ZVn1i3oQAbX7rJRpd_Tmwi-TiD28pTZb4P-_LuC7dJXqXjOJcbWdG-J4OugT6oRJtMX2BmMQ_OFvNg" />
                                <span
                                    class="absolute top-3 left-3 px-2 py-0.5 rounded-md bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">DIGITAL</span>
                            </div>
                            <div class="p-4 flex flex-col flex-1 justify-between gap-3">
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Por Estudio
                                        Bosquecillo</p>
                                    <h3 class="font-title-md text-title-md text-on-surface">Calendario Botánico
                                        Imprimible</h3>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-title-md text-title-md text-primary font-bold">$8.900 CLP</span>
                                    <span
                                        class="font-body-sm text-body-sm text-secondary font-semibold">Descarga</span>
                                </div>
                            </div>
                        </div>
                        <!-- Filter Item 3 -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Handmade wool knit cozy balaclava in soft moss green wool lying on linen"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDokBelGPMsO4P9ayGaiNwDTPdiNBqPeZdIx-I4J9HHRC_00YFEV3tsvqZWmUCSI1bbZINru_bF3UovOkA809SRpBnboXgmgHg46eghPwlUsVEqZV3Y52_H7oCI6NnUNKL_iQkIv-XCBD6-RqkEuoJ4iO8lJ-QzieiSm4j19J4NcjzzLr1Qw-NBiDyUsFB8j_7JF4m6AAhOjcm96KYL_iI9c0U-AsgBTqMVB_Z85S_4XAhhJtj5Gbs2yA" />
                                <span
                                    class="absolute top-3 left-3 px-2 py-0.5 rounded-md bg-surface-container-lowest/90 text-on-surface font-label-sm text-label-sm">FÍSICO</span>
                            </div>
                            <div class="p-4 flex flex-col flex-1 justify-between gap-3">
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Por Taller Oveja
                                        Negra</p>
                                    <h3 class="font-title-md text-title-md text-on-surface">Balaclava Lana Merino Musgo
                                    </h3>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-title-md text-title-md text-primary font-bold">$32.000 CLP</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">2 disp.</span>
                                </div>
                            </div>
                        </div>
                        <!-- Filter Item 4 -->
                        <div
                            class="flex flex-col bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                            <div class="relative aspect-square overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    data-alt="Sculptural large ceramic floor vase in textured natural coarse clay"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCV5CfXRJfKinmdM1hBZhYF4wpCJEb4t3_xP92h-y_JaTKEAM-1xKjlRjQ3Gjamfe8Kn446Gk7Bo6EmctYO2SwFd8bmlrBNMuFDe_WxM-1h8eA_lB2qSq1lcKEOPQjA2PhEDBbqN4xavu7UmoJxf_0Hbif2SuvFb0Cqmtlof3ZIW5g09PqMuiXy-QnWp-lH-L8mtvPMLrCtw8ry9r7vataF7JnnssoScSDgXfUKUVJgexjNogu8GFzBFQ" />
                                <span
                                    class="absolute top-3 left-3 px-2 py-0.5 rounded-md bg-surface-container-lowest/90 text-on-surface font-label-sm text-label-sm">FÍSICO</span>
                            </div>
                            <div class="p-4 flex flex-col flex-1 justify-between gap-3">
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Por Escultura Taller
                                        Sur</p>
                                    <h3 class="font-title-md text-title-md text-on-surface">Vasija Gigante Ocre (Pieza
                                        #03)</h3>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-title-md text-title-md text-primary font-bold">$85.000 CLP</span>
                                    <span
                                        class="font-body-sm text-body-sm text-tertiary font-semibold">Exclusiva</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 8. GRAN CTA EDITORIAL PARA NUEVOS EMPRENDEDORES -->
            <section class="w-full bg-surface-container-high py-20 px-6 lg:px-12" id="abrir-tienda">
                <div
                    class="max-w-5xl mx-auto rounded-3xl bg-surface-container-lowest p-8 lg:p-16 shadow-xl relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/5 rounded-full pointer-events-none">
                    </div>
                    <div class="flex flex-col items-center text-center gap-space-lg relative z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-secondary-container flex items-center justify-center text-on-secondary-container">
                            <span class="material-symbols-outlined text-3xl">cottage</span>
                        </div>
                        <div class="flex flex-col gap-space-xs max-w-2xl">
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Lleva tu oficio al mundo
                                digital sin perder tu calidez humana.</h2>
                            <p class="font-body-lg text-body-lg text-on-surface-variant">
                                Un marketplace pensado para creadores y no para corporaciones. Abre tu puesto virtual en
                                menos de 15 minutos, publica productos físicos o archivos descargables y conéctate con
                                compradores que aprecian el valor del tiempo.
                            </p>
                        </div>
                        <!-- 3 Feature Pillars -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full text-left my-4">
                            <div class="p-5 rounded-xl bg-surface-container flex flex-col gap-2">
                                <span class="material-symbols-outlined text-primary text-2xl">palette</span>
                                <h3 class="font-title-md text-title-md text-on-surface">Stand Propio &amp;
                                    Personalizado</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Elige colores, pon fotos
                                    de tu taller y cuenta la historia detrás de cada materia prima.</p>
                            </div>
                            <div class="p-5 rounded-xl bg-surface-container flex flex-col gap-2">
                                <span class="material-symbols-outlined text-secondary text-2xl">local_shipping</span>
                                <h3 class="font-title-md text-title-md text-on-surface">Físicos o Descargas</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Vende tus piezas enviadas
                                    por correo o entrega PDFs y recursos digitales en segundos.</p>
                            </div>
                            <div class="p-5 rounded-xl bg-surface-container flex flex-col gap-2">
                                <span class="material-symbols-outlined text-tertiary text-2xl">handshake</span>
                                <h3 class="font-title-md text-title-md text-on-surface">Comisiones Justas &amp;
                                    Transparentes</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sin suscripciones forzadas
                                    ni subastas de publicidad engañosa. Todos los puestos tienen visibilidad real.</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center justify-center gap-space-md pt-2">
                            <a class="px-space-xl py-4 rounded-xl bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-lg transition-all"
                                href="#">
                                Crear mi stand en Ikigai
                            </a>
                            <a class="inline-flex items-center gap-1 font-title-md text-title-md text-on-surface hover:text-primary transition-colors"
                                href="#">
                                Ver cómo funciona un stand
                                <span class="material-symbols-outlined text-base">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="w-full bg-surface-container-low text-on-surface">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 mb-16">
                <div class="lg:col-span-4 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-sm"><span
                            class="font-headline-md text-headline-md text-on-surface">Feria Ikigai</span></div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Un santuario digital para la
                        artesanía con alma, donde creadores de obras físicas y digitales comparten sus piezas con
                        intención, calma y devoción por el detalle.</p>
                    <div class="pt-space-xs"><span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Edición Virtual
                            Permanente</span></div>
                </div>
                <div class="lg:col-span-2 flex flex-col gap-space-sm"><span
                        class="font-title-md text-title-md text-on-surface mb-space-xs">Descubrir</span><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="recorrer-feria" href="#">Recorrer Feria</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="stands-y-tiendas" href="#">Stands y Tiendas</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="categorias" href="#">Categorías</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="historias-de-creadores" href="#">Historias de Creadores</a></div>
                <div class="lg:col-span-2 flex flex-col gap-space-sm"><span
                        class="font-title-md text-title-md text-on-surface mb-space-xs">Para Creadores</span><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="abrir-mi-stand" href="#">Abrir mi Stand</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="manifiesto" href="#">Manifiesto</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="sostenibilidad" href="#">Sostenibilidad</a><a
                        class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors"
                        data-path="ayuda-y-contacto" href="#">Ayuda &amp; Contacto</a></div>
                <div class="lg:col-span-4 flex flex-col gap-space-md"><span
                        class="font-headline-sm text-headline-sm text-on-surface">Drops del Fin de Semana</span>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Suscríbete a nuestra carta quincenal
                        para recibir lanzamientos exclusivos de talleres artesanos y colecciones digitales de autor.</p>
                    <form class="flex items-center gap-space-xs w-full" onsubmit="event.preventDefault();"><input
                            class="flex-1 px-space-md py-space-sm rounded-lg bg-surface-container-lowest text-on-surface font-body-sm text-body-sm placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary"
                            placeholder="tu-correo@estudio.com" type="email" /><button
                            class="px-space-md py-space-sm rounded-lg bg-secondary hover:bg-secondary/90 text-on-secondary font-title-md text-title-md transition-colors"
                            type="submit">Unirme</button></form><span
                        class="font-label-sm text-label-sm text-outline">Sin spam. Solo historias y oficios
                        selectos.</span>
                </div>
            </div>
            <div
                class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-body-sm text-body-sm">
                <div class="flex items-center gap-space-lg"><a class="hover:text-on-surface transition-colors"
                        data-path="manifiesto" href="#">Manifiesto</a><a
                        class="hover:text-on-surface transition-colors" data-path="sostenibilidad"
                        href="#">Sostenibilidad</a><a class="hover:text-on-surface transition-colors"
                        data-path="ayuda-y-contacto" href="#">Ayuda &amp; Contacto</a></div>
                <p>© 2025 Feria Virtual Ikigai. Celebrando el oficio y la creación pausada.</p>
            </div>
        </div>
    </footer>
</body>

</html>
