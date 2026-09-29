import type { District, DistrictId } from '@/components/tiendas-stores/types';

interface EditorialHeaderProps {
    activeDistrict: District;
    district: DistrictId;
    districts: District[];
    onDistrictSelect: (district: DistrictId) => void;
    onSearchChange: (value: string) => void;
    query: string;
    visibleStandsCount: number;
    zoom: number;
}

export function EditorialHeader({
    activeDistrict,
    district,
    districts,
    onDistrictSelect,
    onSearchChange,
    query,
    visibleStandsCount,
    zoom,
}: EditorialHeaderProps) {
    return (
        <section className="bg-surface-container-lowest px-6 pt-8 pb-10 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col gap-6">
                <div className="flex flex-wrap items-center justify-between gap-4">
                    <nav className="flex items-center gap-2 font-label-sm text-label-sm tracking-wider text-secondary uppercase">
                        <span>Feria Ikigai</span>
                        <span className="text-outline-variant">/</span>
                        <span>Stands & Tiendas</span>
                        <span className="text-outline-variant">/</span>
                        <span className="font-bold text-primary">
                            Ciudad Ferial Interactiva
                        </span>
                    </nav>
                    <div className="flex items-center gap-3">
                        <span className="inline-flex items-center gap-1.5 rounded-full bg-surface-container-high px-3 py-1 font-label-sm text-label-sm font-bold tracking-widest text-tertiary uppercase">
                            <span className="size-2 animate-pulse rounded-full bg-tertiary" />
                            Cartografía Viva · Edición Otoño 2025
                        </span>
                        <span className="font-label-sm text-label-sm text-outline">
                            {visibleStandsCount} Talleres en Mapa
                        </span>
                    </div>
                </div>
                <div className="grid grid-cols-1 items-end gap-8 lg:grid-cols-12">
                    <div className="flex flex-col gap-3 lg:col-span-8">
                        <h1 className="font-display-hero-mobile text-display-hero-mobile text-on-surface lg:font-display-hero lg:text-display-hero">
                            La Ciudad Ferial de los Oficios
                        </h1>
                        <p className="max-w-3xl font-body-lg text-body-lg text-on-surface-variant">
                            Un mapa ilustrado contemporáneo para recorrer el
                            mercado con calma. Descubre las manos, tornos y
                            telares detrás de cada pieza singular.
                        </p>
                    </div>
                    <div className="flex flex-col items-start gap-3 lg:col-span-4 lg:items-end">
                        <span className="flex items-center gap-2 rounded-xl bg-surface-container-low px-4 py-2 font-label-sm text-label-sm text-on-surface">
                            <span className="material-symbols-outlined text-primary">
                                explore
                            </span>
                            Navegación espacial libre, zoom y catálogo
                        </span>
                        <span className="font-label-sm text-label-sm text-outline">
                            Inspirado en la cartografía de autor y talleres de
                            Kioto & sur andino
                        </span>
                    </div>
                </div>
                <div className="mt-4 flex flex-col items-stretch justify-between gap-3 rounded-xl bg-surface-container-low p-2 xl:flex-row xl:items-center">
                    <div className="scrollbar-hidden flex items-center gap-2 overflow-x-auto px-1 py-1">
                        {districts.map((item) => (
                            <button
                                key={item.id}
                                type="button"
                                onClick={() => onDistrictSelect(item.id)}
                                className={`rounded-lg px-3 py-2 font-label-sm text-label-sm whitespace-nowrap transition-colors ${district === item.id ? 'bg-primary-container font-bold text-on-primary shadow-sm' : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container'}`}
                            >
                                {item.label}
                            </button>
                        ))}
                    </div>
                    <div className="flex items-center gap-2">
                        <label className="relative w-full xl:w-72">
                            <span className="material-symbols-outlined absolute top-1/2 left-3 -translate-y-1/2 text-[18px] text-outline">
                                search
                            </span>
                            <input
                                value={query}
                                onChange={(event) =>
                                    onSearchChange(event.target.value)
                                }
                                className="w-full rounded-lg border-none bg-surface-container-lowest py-2 pr-3 pl-9 font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary"
                                placeholder="Buscar taller o creador"
                            />
                        </label>
                        <div className="hidden items-center gap-1 rounded-lg bg-surface-container-lowest px-2 py-1.5 shadow-sm sm:flex">
                            <span className="rounded bg-surface-container px-1.5 py-0.5 font-label-sm text-label-sm text-secondary">
                                Zoom {zoom.toFixed(1)}x
                            </span>
                            <span className="font-label-sm text-label-sm text-on-surface">
                                {activeDistrict.title}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
