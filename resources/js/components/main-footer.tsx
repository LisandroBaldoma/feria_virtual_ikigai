export default function MainFooter() {
    return (
        <footer className="w-full bg-surface-container-low text-on-surface">
            <div className="mx-auto max-w-7xl px-6 py-16 lg:px-12">
                <div className="mb-16 grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-12">
                    <div className="flex flex-col gap-space-md lg:col-span-4">
                        <div className="flex items-center gap-space-sm">
                            <span className="font-headline-md text-headline-md text-on-surface">
                                Feria Ikigai
                            </span>
                        </div>
                        <p className="max-w-sm font-body-md text-body-md text-on-surface-variant">
                            Un santuario digital para la artesanía con alma,
                            donde creadores de obras físicas y digitales
                            comparten sus piezas con intención, calma y devoción
                            por el detalle.
                        </p>
                        <div className="pt-space-xs">
                            <span className="font-label-sm text-label-sm tracking-wider text-secondary uppercase">
                                Edición Virtual Permanente
                            </span>
                        </div>
                    </div>
                    <div className="flex flex-col gap-space-sm lg:col-span-2">
                        <span className="mb-space-xs font-title-md text-title-md text-on-surface">
                            Descubrir
                        </span>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="recorrer-feria"
                            href="#"
                        >
                            Recorrer Feria
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="stands-y-tiendas"
                            href="#"
                        >
                            Stands y Tiendas
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="categorias"
                            href="#"
                        >
                            Categorías
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="historias-de-creadores"
                            href="#"
                        >
                            Historias de Creadores
                        </a>
                    </div>
                    <div className="flex flex-col gap-space-sm lg:col-span-2">
                        <span className="mb-space-xs font-title-md text-title-md text-on-surface">
                            Para Creadores
                        </span>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="abrir-mi-stand"
                            href="#"
                        >
                            Abrir mi Stand
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="manifiesto"
                            href="#"
                        >
                            Manifiesto
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="sostenibilidad"
                            href="#"
                        >
                            Sostenibilidad
                        </a>
                        <a
                            className="font-body-md text-body-md text-on-surface-variant transition-colors hover:text-on-surface"
                            data-path="ayuda-y-contacto"
                            href="#"
                        >
                            Ayuda &amp; Contacto
                        </a>
                    </div>
                    <div className="flex flex-col gap-space-md lg:col-span-4">
                        <span className="font-headline-sm text-headline-sm text-on-surface">
                            Drops del Fin de Semana
                        </span>
                        <p className="font-body-sm text-body-sm text-on-surface-variant">
                            Suscríbete a nuestra carta quincenal para recibir
                            lanzamientos exclusivos de talleres artesanos y
                            colecciones digitales de autor.
                        </p>
                        <form
                            className="flex w-full items-center gap-space-xs"
                            onSubmit={(event) => event.preventDefault()}
                        >
                            <input
                                className="flex-1 rounded-lg bg-surface-container-lowest px-space-md py-space-sm font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:ring-1 focus:ring-primary focus:outline-none"
                                placeholder="tu-correo@estudio.com"
                                type="email"
                            />
                            <button
                                className="rounded-lg bg-secondary px-space-md py-space-sm font-title-md text-title-md text-on-secondary transition-colors hover:bg-secondary/90"
                                type="submit"
                            >
                                Unirme
                            </button>
                        </form>
                        <span className="font-label-sm text-label-sm text-outline">
                            Sin spam. Solo historias y oficios selectos.
                        </span>
                    </div>
                </div>
                <div className="flex flex-col items-center justify-between gap-space-md pt-8 font-body-sm text-body-sm text-on-surface-variant sm:flex-row">
                    <div className="flex items-center gap-space-lg">
                        <a
                            className="transition-colors hover:text-on-surface"
                            data-path="manifiesto"
                            href="#"
                        >
                            Manifiesto
                        </a>
                        <a
                            className="transition-colors hover:text-on-surface"
                            data-path="sostenibilidad"
                            href="#"
                        >
                            Sostenibilidad
                        </a>
                        <a
                            className="transition-colors hover:text-on-surface"
                            data-path="ayuda-y-contacto"
                            href="#"
                        >
                            Ayuda &amp; Contacto
                        </a>
                    </div>
                    <p>
                        © 2025 Feria Virtual Ikigai. Celebrando el oficio y la
                        creación pausada.
                    </p>
                </div>
            </div>
        </footer>
    );
}
