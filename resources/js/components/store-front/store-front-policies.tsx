import {
    CheckCircle2,
    Leaf,
    Lock,
    PackageCheck,
    RefreshCw,
    Truck,
} from 'lucide-react';

const policies = [
    {
        icon: PackageCheck,
        title: 'Embalaje Blindado & Consciente',
        copy: 'Cajas de cartón reforzado con relleno de viruta de madera reciclada y burbuja de fécula de maíz biodegradable. 0% plásticos sintéticos.',
        note: 'Compromiso ecológico',
    },
    {
        icon: Truck,
        title: 'Envíos Cuidados a Todo Chile',
        copy: 'Despachos asegurados desde Pucón vía Starken y Correos de Chile con código de seguimiento en tiempo real y aviso de entrega por SMS.',
        note: '3 a 5 días hábiles',
    },
    {
        icon: RefreshCw,
        title: 'Reposición Garantizada en 24h',
        copy: 'Si tu pieza sufre algún daño durante el traslado, Valentina envía una pieza de reemplazo o reintegro total inmediato sin trámites tediosos.',
        note: '100% Sin riesgo',
    },
    {
        icon: Lock,
        title: 'Feria Ikigai Escrow Seguro',
        copy: 'Tus fondos quedan custodiados de manera segura en la feria y se liberan a la artesana una vez que confirmas la recepción feliz de tu paquete.',
        note: 'Compra protegida',
    },
];

export function StoreFrontTraceability() {
    return (
        <section className="bg-surface-container py-10">
            <div className="mx-auto max-w-7xl px-6 lg:px-12">
                <div className="flex flex-col justify-between gap-6 rounded-2xl bg-surface-container-lowest p-6 shadow-sm sm:p-8 lg:flex-row lg:items-center">
                    <div className="max-w-xl space-y-2">
                        <p className="flex items-center gap-2 font-label text-xs font-bold tracking-wider text-tertiary uppercase">
                            <Leaf className="size-4" />
                            Compromiso Artesanal & Trazabilidad del Stand
                        </p>
                        <h2 className="font-headline text-xl font-semibold text-on-surface sm:text-2xl">
                            Materia noble, huella limpia y despacho de autor
                        </h2>
                        <p className="text-sm leading-relaxed text-on-surface-variant">
                            Arcillas locales sin aditivos tóxicos, esmaltes
                            naturales formulados con cenizas volcánicas,
                            empaques 100% biodegradables compostables y despacho
                            seguro entre 3 y 5 días hábiles a todo Chile.
                        </p>
                    </div>
                    <div className="grid shrink-0 grid-cols-2 gap-4 font-label text-xs sm:grid-cols-3">
                        {[
                            ['Mineral Puro', 'Cenizas del Villarrica'],
                            ['Cero Plástico', 'Caja compostable'],
                            ['3 a 5 Días', 'Rastreo certificado'],
                        ].map(([title, copy]) => (
                            <div
                                className="rounded-xl bg-surface-container-low p-3.5"
                                key={title}
                            >
                                <Leaf className="mb-1.5 size-5 text-primary" />
                                <p className="font-semibold text-on-surface">
                                    {title}
                                </p>
                                <p className="text-[11px] text-on-surface-variant">
                                    {copy}
                                </p>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        </section>
    );
}

export function StoreFrontPolicies() {
    return (
        <section className="bg-surface-container py-16">
            <div className="mx-auto max-w-7xl space-y-12 px-6 lg:px-12">
                <div className="mx-auto max-w-2xl space-y-2 text-center">
                    <p className="font-label text-xs font-bold tracking-widest text-primary uppercase">
                        Protección & Confianza
                    </p>
                    <h2 className="font-headline text-2xl font-semibold text-on-surface sm:text-3xl">
                        Políticas del Stand y Garantía Feria Ikigai
                    </h2>
                    <p className="text-sm text-on-surface-variant">
                        Cada adquisición apoya de forma directa la continuidad
                        del taller de Valentina sin comisiones abusivas.
                    </p>
                </div>
                <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                    {policies.map(({ icon: Icon, title, copy, note }) => (
                        <article
                            className="flex min-h-64 flex-col justify-between gap-4 rounded-2xl bg-surface-container-lowest p-6"
                            key={title}
                        >
                            <div className="space-y-3">
                                <span className="flex size-10 items-center justify-center rounded-xl bg-primary-fixed/40 text-primary">
                                    <Icon className="size-5" />
                                </span>
                                <h3 className="font-headline text-base font-semibold text-on-surface">
                                    {title}
                                </h3>
                                <p className="text-xs leading-relaxed text-on-surface-variant">
                                    {copy}
                                </p>
                            </div>
                            <p className="flex items-center gap-1 font-label text-[11px] font-semibold text-emerald-800">
                                <CheckCircle2 className="size-4" />
                                {note}
                            </p>
                        </article>
                    ))}
                </div>
            </div>
        </section>
    );
}
