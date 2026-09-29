import type { Stand } from '@/components/tiendas-stores/types';

interface TrendingStoresCatalogProps {
    onStandSelect: (id: string, scrollToMap: boolean) => void;
    stands: Stand[];
}

export function TrendingStoresCatalog({
    onStandSelect,
    stands,
}: TrendingStoresCatalogProps) {
    return (
        <section className="bg-surface px-6 py-16 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col gap-10">
                <div className="flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div>
                        <span className="font-label-sm text-label-sm font-bold tracking-widest text-tertiary uppercase">
                            Nuevas Hornadas & Puestos en Tendencia
                        </span>
                        <h2 className="font-headline-lg text-headline-lg text-on-surface">
                            Talleres con persiana arriba esta semana
                        </h2>
                        <p className="max-w-xl font-body-md text-body-md text-on-surface-variant">
                            Explora las tiendas con piezas recién creadas listas
                            para viaje directo desde los talleres.
                        </p>
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-6 lg:grid-cols-3">
                    {stands.slice(0, 3).map((stand) => (
                        <article
                            key={stand.id}
                            className="flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-6 shadow-sm transition-shadow hover:shadow-md"
                        >
                            <div className="flex flex-col gap-4">
                                <div className="flex items-start justify-between gap-3">
                                    <div className="flex items-center gap-3">
                                        <img
                                            src={stand.avatar}
                                            alt={`Retrato de ${stand.artisan}`}
                                            className="size-12 rounded-full object-cover ring-2 ring-primary/20"
                                        />
                                        <div>
                                            <h3 className="font-title-lg text-title-lg text-on-surface">
                                                {stand.name}
                                            </h3>
                                            <span className="font-label-sm text-label-sm text-secondary">
                                                Stand #{stand.id} ·{' '}
                                                {stand.location.split(
                                                    ' · ',
                                                )[1] ?? 'Chile'}
                                            </span>
                                        </div>
                                    </div>
                                    <span className="rounded-full bg-emerald-500/10 px-2.5 py-1 font-label-sm text-label-sm font-bold text-emerald-700 uppercase">
                                        {stand.inventoryStatus}
                                    </span>
                                </div>
                                <p className="font-body-sm text-body-sm text-on-surface-variant">
                                    {stand.quote}
                                </p>
                                <div className="grid grid-cols-2 gap-2">
                                    {stand.products.map((product) => (
                                        <img
                                            key={product.title}
                                            src={product.image}
                                            alt={product.title}
                                            className="h-28 w-full rounded-lg object-cover"
                                        />
                                    ))}
                                </div>
                            </div>
                            <button
                                type="button"
                                onClick={() => onStandSelect(stand.id, true)}
                                className="mt-6 inline-flex items-center gap-1 self-end font-label-sm text-label-sm font-bold text-primary transition-all hover:gap-2"
                            >
                                Visitar Mostrador
                                <span className="material-symbols-outlined text-base">
                                    arrow_forward
                                </span>
                            </button>
                        </article>
                    ))}
                </div>
            </div>
        </section>
    );
}
