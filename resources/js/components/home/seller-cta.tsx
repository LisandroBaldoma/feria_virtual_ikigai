export default function SellerCTA() {
    return (
        <section
            className="w-full bg-surface-container-high px-6 py-20 lg:px-12"
            id="abrir-tienda"
        >
            <div className="relative mx-auto max-w-5xl overflow-hidden rounded-3xl bg-surface-container-lowest p-8 shadow-xl lg:p-16">
                <div className="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-primary/5" />
                <div className="relative z-10 flex flex-col items-center gap-space-lg text-center">
                    <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-secondary-container text-on-secondary-container">
                        <span className="material-symbols-outlined text-3xl">
                            cottage
                        </span>
                    </div>
                    <div className="flex max-w-2xl flex-col gap-space-xs">
                        <h2 className="font-headline-lg text-headline-lg text-on-surface">
                            Lleva tu oficio al mundo digital sin perder tu
                            calidez humana.
                        </h2>
                        <p className="font-body-lg text-body-lg text-on-surface-variant">
                            Un marketplace pensado para creadores y no para
                            corporaciones. Abre tu puesto virtual en menos de 15
                            minutos, publica productos físicos o archivos
                            descargables y conéctate con compradores que
                            aprecian el valor del tiempo.
                        </p>
                    </div>
                    <div className="my-4 grid w-full grid-cols-1 gap-6 text-left md:grid-cols-3">
                        <div className="flex flex-col gap-2 rounded-xl bg-surface-container p-5">
                            <span className="material-symbols-outlined text-2xl text-primary">
                                palette
                            </span>
                            <h3 className="font-title-md text-title-md text-on-surface">
                                Stand Propio &amp; Personalizado
                            </h3>
                            <p className="font-body-sm text-body-sm text-on-surface-variant">
                                Elige colores, pon fotos de tu taller y cuenta
                                la historia detrás de cada materia prima.
                            </p>
                        </div>
                        <div className="flex flex-col gap-2 rounded-xl bg-surface-container p-5">
                            <span className="material-symbols-outlined text-2xl text-secondary">
                                local_shipping
                            </span>
                            <h3 className="font-title-md text-title-md text-on-surface">
                                Físicos o Descargas
                            </h3>
                            <p className="font-body-sm text-body-sm text-on-surface-variant">
                                Vende tus piezas enviadas por correo o entrega
                                PDFs y recursos digitales en segundos.
                            </p>
                        </div>
                        <div className="flex flex-col gap-2 rounded-xl bg-surface-container p-5">
                            <span className="material-symbols-outlined text-2xl text-tertiary">
                                handshake
                            </span>
                            <h3 className="font-title-md text-title-md text-on-surface">
                                Comisiones Justas &amp; Transparentes
                            </h3>
                            <p className="font-body-sm text-body-sm text-on-surface-variant">
                                Sin suscripciones forzadas ni subastas de
                                publicidad engañosa. Todos los puestos tienen
                                visibilidad real.
                            </p>
                        </div>
                    </div>
                    <div className="flex flex-wrap items-center justify-center gap-space-md pt-2">
                        <a
                            className="rounded-xl bg-primary px-space-xl py-4 font-title-md text-title-md text-on-primary shadow-lg transition-all hover:bg-primary-container"
                            href="#"
                        >
                            Crear mi stand en Ikigai
                        </a>
                        <a
                            className="inline-flex items-center gap-1 font-title-md text-title-md text-on-surface transition-colors hover:text-primary"
                            href="#"
                        >
                            Ver cómo funciona un stand
                            <span className="material-symbols-outlined text-base">
                                arrow_forward
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    );
}
