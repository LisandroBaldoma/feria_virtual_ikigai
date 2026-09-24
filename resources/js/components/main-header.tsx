import AppLogo from '@/components/branding/AppLogo';

export default function MainHeader() {
    return (
        <header className="fixed top-0 right-0 left-0 z-50 w-full bg-surface/90 shadow-[0_1px_8px_rgba(0,0,0,0.04)] backdrop-blur-xl">
            <div className="mx-auto flex h-20 max-w-7xl items-center justify-between gap-gutter px-6 lg:px-12">
                <div className="flex items-center gap-space-sm">
                    <a
                        className="group flex items-center gap-space-sm"
                        data-path="recorrer-feria"
                        href="#"
                    >
                        <AppLogo className="h-10 w-auto shrink-0" />
                    </a>
                </div>
                <nav
                    className="hidden items-center gap-space-md md:flex lg:gap-space-lg"
                    data-active-classes="bg-surface-container text-primary font-bold"
                >
                    <a
                        aria-current="page"
                        className="rounded bg-surface-container px-space-sm py-space-xs font-bold text-primary transition-colors"
                        data-path="recorrer-feria"
                        href="#"
                    >
                        Recorrer Feria
                    </a>
                    <a
                        className="rounded px-space-sm py-space-xs font-title-md text-title-md text-on-surface-variant transition-colors hover:text-on-surface"
                        data-path="stands-y-tiendas"
                        href="#"
                    >
                        Stands y Tiendas
                    </a>
                    <a
                        className="rounded px-space-sm py-space-xs font-title-md text-title-md text-on-surface-variant transition-colors hover:text-on-surface"
                        data-path="categorias"
                        href="#"
                    >
                        Categorías
                    </a>
                    <a
                        className="rounded px-space-sm py-space-xs font-title-md text-title-md text-on-surface-variant transition-colors hover:text-on-surface"
                        data-path="historias-de-creadores"
                        href="#"
                    >
                        Historias de Creadores
                    </a>
                </nav>
                <div className="flex items-center gap-space-md">
                    <a
                        className="inline-flex items-center justify-center rounded-lg bg-primary px-space-md py-space-sm font-title-md text-title-md text-on-primary shadow-[0_4px_14px_rgba(164,55,22,0.18)] transition-all hover:bg-primary-container hover:shadow-[0_6px_20px_rgba(164,55,22,0.28)]"
                        data-path="abrir-mi-stand"
                        href="#"
                    >
                        Abrir mi Stand
                    </a>
                    <a
                        className="flex items-center rounded-full p-0.5 transition-all hover:ring-2 hover:ring-primary/40"
                        data-path="perfil-artesano"
                        href="#"
                    >
                        <img
                            alt="Profile"
                            className="h-8 w-8 rounded-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSkqBDdCwtmEUSTvSwtTMke6eIDU2789iiZ9a3qiNTkoY4R88-dFpmWbBx5vZBAI1cW-ojbaalIb4yK703bad1HS3ppMtPy8aRjHq2-HLp6_CSpbEjAzEl5bfpnRIrxqzhV009efyj8CL8hE1rb-62VBaaM0ROUUuKwmSOjdemc6T2G7PO7uc_AAzWlhnKvC4IA_oR_ytajF6HUosBgnDcwVXuiZoNOY0rgzVOUxJznyj4pp57sD_o_Q"
                        />
                    </a>
                </div>
            </div>
        </header>
    );
}
