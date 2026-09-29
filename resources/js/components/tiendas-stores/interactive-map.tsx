import type { Dispatch, RefObject, SetStateAction } from 'react';

import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';
import type {
    District,
    DistrictId,
    Stand,
} from '@/components/tiendas-stores/types';

interface InteractiveMapProps {
    activeDistrict: District;
    activeStand: Stand | null;
    activeStandId: string | null;
    district: DistrictId;
    dragStart: { x: number; y: number } | null;
    onDistrictSelect: (district: DistrictId) => void;
    onStandSelect: (id: string) => void;
    pan: { x: number; y: number };
    setActiveStandId: Dispatch<SetStateAction<string | null>>;
    setDragStart: Dispatch<SetStateAction<{ x: number; y: number } | null>>;
    setPan: Dispatch<SetStateAction<{ x: number; y: number }>>;
    setQuery: Dispatch<SetStateAction<string>>;
    setZoom: Dispatch<SetStateAction<number>>;
    stands: Stand[];
    viewportRef: RefObject<HTMLDivElement | null>;
    visibleStands: Stand[];
    zoom: number;
}

export function InteractiveMap({
    activeDistrict,
    activeStand,
    activeStandId,
    district,
    dragStart,
    onDistrictSelect,
    onStandSelect,
    pan,
    setActiveStandId,
    setDragStart,
    setPan,
    setQuery,
    setZoom,
    stands,
    viewportRef,
    visibleStands,
    zoom,
}: InteractiveMapProps) {
    return (
        <section className="relative overflow-hidden bg-[#f4efeb] px-3 py-4 select-none sm:px-6 lg:px-12">
            <div
                ref={viewportRef}
                onPointerDown={(event) => {
                    if (
                        (event.target as HTMLElement).closest(
                            'button, a, input',
                        )
                    )
                        return;
                    event.currentTarget.setPointerCapture(event.pointerId);
                    setDragStart({
                        x: event.clientX - pan.x,
                        y: event.clientY - pan.y,
                    });
                }}
                onPointerMove={(event) => {
                    if (!dragStart) return;
                    const maxPan = 400 * zoom;
                    setPan({
                        x: Math.max(
                            -maxPan,
                            Math.min(maxPan, event.clientX - dragStart.x),
                        ),
                        y: Math.max(
                            -maxPan,
                            Math.min(maxPan, event.clientY - dragStart.y),
                        ),
                    });
                }}
                onPointerUp={() => setDragStart(null)}
                className="relative mx-auto min-h-[680px] max-w-7xl touch-none overflow-hidden rounded-2xl bg-[#faf7f2] shadow-2xl lg:min-h-[780px]"
                style={{ cursor: dragStart ? 'grabbing' : 'grab' }}
            >
                <div
                    className="absolute inset-0 h-full w-full origin-center transition-transform duration-200"
                    style={{
                        transform: `translate(${pan.x}px, ${pan.y}px) scale(${zoom})`,
                    }}
                >
                    <svg
                        className="pointer-events-none absolute inset-0 size-full opacity-40"
                        preserveAspectRatio="none"
                        viewBox="0 0 1200 800"
                    >
                        <path
                            d="M-50,200 Q200,120 400,240 T900,180 T1250,300M-30,340 Q250,280 500,420 T1000,320 T1250,480M-40,560 Q300,500 600,640 T1050,520 T1250,680"
                            fill="none"
                            stroke="#d5c8b8"
                            strokeDasharray="4 6"
                            strokeWidth="1"
                        />
                        <path
                            d="M220,0 C260,180 340,320 420,410 C520,520 680,590 780,800"
                            fill="none"
                            stroke="#c4d5ea"
                            strokeLinecap="round"
                            strokeWidth="26"
                        />
                        <path
                            d="M100,620 Q300,580 430,420 T720,380 T1100,280M430,420 Q600,220 850,200M500,650 Q750,600 980,680"
                            fill="none"
                            stroke="#e0d6c9"
                            strokeLinecap="round"
                            strokeWidth="12"
                        />
                    </svg>
                    <MapDistrictLabels district={district} />
                    {stands.map((stand) => {
                        const isVisible = visibleStands.some(
                            (item) => item.id === stand.id,
                        );
                        const isActive = stand.id === activeStandId;
                        return (
                            <button
                                key={stand.id}
                                type="button"
                                onClick={() => onStandSelect(stand.id)}
                                className="absolute z-20 flex -translate-x-1/2 -translate-y-1/2 flex-col items-center transition-all duration-300"
                                style={{
                                    left: `${stand.position.x}%`,
                                    top: `${stand.position.y}%`,
                                    opacity: isVisible ? 1 : 0.15,
                                    pointerEvents: isVisible ? 'auto' : 'none',
                                    transform: `translate(-50%, -50%) scale(${isActive ? 1.1 : 1})`,
                                }}
                            >
                                <span
                                    className={`absolute -top-2 size-8 animate-ping rounded-full ${isActive ? 'bg-primary/20' : 'hidden'}`}
                                />
                                <span
                                    className="flex size-10 items-center justify-center rounded-xl bg-surface-container-lowest shadow-md ring-2"
                                    style={{
                                        color: stand.markerColor,
                                        borderColor: `${stand.markerColor}55`,
                                    }}
                                >
                                    <span className="material-symbols-outlined text-[20px]">
                                        {stand.markerIcon}
                                    </span>
                                </span>
                                <span
                                    className="-mt-1 size-2.5 rotate-45 shadow-sm"
                                    style={{
                                        backgroundColor: stand.markerColor,
                                    }}
                                />
                                <span className="mt-1 rounded-full bg-surface-container-lowest/95 px-2.5 py-1 text-center shadow-md">
                                    <span className="block font-headline text-[11px] leading-tight font-semibold text-on-surface">
                                        {stand.markerLabel}
                                    </span>
                                    <span className="font-label text-[9px] text-secondary">
                                        {stand.markerDetail}
                                    </span>
                                </span>
                            </button>
                        );
                    })}
                </div>
                <div className="absolute top-6 right-6 z-30 flex flex-col gap-2">
                    <div className="flex flex-col rounded-xl border border-outline-variant/30 bg-surface-container-lowest/95 p-1 shadow-lg backdrop-blur-md">
                        <FeriaIconButton
                            type="button"
                            onClick={() =>
                                setZoom((value) =>
                                    Math.min(
                                        2.2,
                                        Number((value + 0.25).toFixed(2)),
                                    ),
                                )
                            }
                            aria-label="Acercar mapa"
                        >
                            <span className="material-symbols-outlined">
                                add
                            </span>
                        </FeriaIconButton>
                        <FeriaIconButton
                            type="button"
                            onClick={() =>
                                setZoom((value) =>
                                    Math.max(
                                        0.8,
                                        Number((value - 0.25).toFixed(2)),
                                    ),
                                )
                            }
                            aria-label="Alejar mapa"
                        >
                            <span className="material-symbols-outlined">
                                remove
                            </span>
                        </FeriaIconButton>
                        <div className="my-0.5 h-px bg-outline-variant/30" />
                        <FeriaIconButton
                            type="button"
                            onClick={() => {
                                setZoom(1);
                                setPan({ x: 0, y: 0 });
                            }}
                            aria-label="Restaurar mapa"
                        >
                            <span className="material-symbols-outlined text-primary">
                                center_focus_strong
                            </span>
                        </FeriaIconButton>
                    </div>
                    <div className="flex size-11 items-center justify-center rounded-xl border border-outline-variant/30 bg-surface-container-lowest/95 font-headline text-xs font-bold text-tertiary shadow-lg">
                        N
                    </div>
                </div>
                <div className="absolute bottom-6 left-6 z-30 hidden max-w-sm md:block">
                    <div className="flex flex-col gap-3 rounded-2xl border border-outline-variant/30 bg-surface-container-lowest/95 p-4 shadow-xl backdrop-blur-md">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center gap-2">
                                <span className="size-2.5 rounded-full bg-tertiary" />
                                <span className="font-label-sm text-label-sm font-bold tracking-wider text-on-surface uppercase">
                                    {activeDistrict.title}
                                </span>
                            </div>
                            <span className="rounded bg-surface-container px-2 py-0.5 font-label-sm text-label-sm text-secondary">
                                {visibleStands.length} talleres
                            </span>
                        </div>
                        <div className="max-h-44 space-y-1.5 overflow-y-auto pr-1">
                            {visibleStands.length === 0 ? (
                                <p className="p-2 font-label-sm text-label-sm text-outline">
                                    No hay talleres coincidentes en esta zona.
                                </p>
                            ) : (
                                visibleStands.map((stand) => (
                                    <button
                                        key={stand.id}
                                        type="button"
                                        onClick={() => onStandSelect(stand.id)}
                                        className={`flex w-full items-center justify-between rounded-lg p-2 text-left transition-colors ${stand.id === activeStandId ? 'border border-primary/20 bg-primary/10' : 'bg-surface-container-lowest hover:bg-surface-container'}`}
                                    >
                                        <span className="flex min-w-0 items-center gap-2">
                                            <span
                                                className={`font-label-sm text-label-sm font-bold ${stand.id === activeStandId ? 'text-primary' : 'text-secondary'}`}
                                            >
                                                #{stand.id}
                                            </span>
                                            <span className="truncate font-body-sm text-body-sm font-medium text-on-surface">
                                                {stand.name}
                                            </span>
                                        </span>
                                        <span className="ml-2 font-label-sm text-label-sm whitespace-nowrap text-emerald-700">
                                            {stand.inventoryStatus}
                                        </span>
                                    </button>
                                ))
                            )}
                        </div>
                        <div className="flex items-center justify-between border-t border-outline-variant/20 pt-2 font-label-sm text-label-sm text-outline">
                            <span>Haz clic en un marcador o taller</span>
                            <button
                                type="button"
                                onClick={() => {
                                    onDistrictSelect('all');
                                    setQuery('');
                                }}
                                className="font-bold text-primary hover:underline"
                            >
                                Ver todos
                            </button>
                        </div>
                    </div>
                </div>
                {activeStand && (
                    <aside className="absolute top-16 right-1/2 z-40 w-[92%] translate-x-1/2 rounded-2xl border border-outline-variant/30 bg-surface-container-lowest/98 p-5 shadow-2xl backdrop-blur-xl md:top-20 md:right-16 md:w-[390px] md:translate-x-0">
                        <div className="flex items-start justify-between gap-3 pb-3">
                            <div className="flex items-center gap-3">
                                <div className="relative">
                                    <img
                                        src={activeStand.avatar}
                                        alt={`Retrato de ${activeStand.artisan}`}
                                        className="size-12 rounded-full object-cover ring-2 ring-primary-container/30"
                                    />
                                    <span className="absolute -right-1 -bottom-1 flex size-4 items-center justify-center rounded-full bg-primary text-on-primary">
                                        <span className="material-symbols-outlined text-[10px]">
                                            verified
                                        </span>
                                    </span>
                                </div>
                                <div>
                                    <span className="font-label-sm text-label-sm font-bold tracking-wider text-tertiary uppercase">
                                        {activeStand.role}
                                    </span>
                                    <h2 className="font-headline-sm text-headline-sm font-bold text-on-surface">
                                        {activeStand.name}
                                    </h2>
                                    <span className="font-body-sm text-body-sm text-secondary">
                                        {activeStand.location}
                                    </span>
                                </div>
                            </div>
                            <FeriaIconButton
                                type="button"
                                onClick={() => setActiveStandId(null)}
                                aria-label="Cerrar ficha de stand"
                            >
                                <span className="material-symbols-outlined">
                                    close
                                </span>
                            </FeriaIconButton>
                        </div>
                        <p className="my-2 rounded-xl bg-surface-container-low px-3 py-2.5 font-body-sm text-body-sm text-on-surface-variant italic">
                            {activeStand.quote}
                        </p>
                        <div className="flex items-center justify-between py-2 font-body-sm text-body-sm">
                            <span className="flex items-center gap-1">
                                <span className="material-symbols-outlined text-tertiary icon-filled">
                                    star
                                </span>
                                <strong>{activeStand.rating}</strong>
                                <span className="text-outline">
                                    {activeStand.reviews}
                                </span>
                            </span>
                            <span className="font-label-sm text-label-sm text-emerald-700">
                                {activeStand.inventory}
                            </span>
                        </div>
                        <div className="my-3 grid grid-cols-2 gap-2.5">
                            {activeStand.products.map((product) => (
                                <div
                                    key={product.title}
                                    className="rounded-xl bg-surface-container-low p-2"
                                >
                                    <img
                                        src={product.image}
                                        alt={product.title}
                                        className="h-24 w-full rounded-lg object-cover"
                                    />
                                    <span className="mt-1 block font-label-sm text-label-sm text-tertiary">
                                        {product.tag}
                                    </span>
                                    <h3 className="truncate font-title-md text-title-md text-on-surface">
                                        {product.title}
                                    </h3>
                                    <span className="font-label-sm text-label-sm font-bold text-primary">
                                        {product.price}
                                    </span>
                                </div>
                            ))}
                        </div>
                        <FeriaButton
                            type="button"
                            size="block"
                            onClick={() => undefined}
                        >
                            Entrar al Stand #{activeStand.id}
                            <span className="material-symbols-outlined text-base">
                                arrow_forward
                            </span>
                        </FeriaButton>
                    </aside>
                )}
            </div>
        </section>
    );
}

function MapDistrictLabels({ district }: { district: DistrictId }) {
    const labels = [
        [
            'top-[28%] left-[11%]',
            'Sector I · Alfarería Ancestral',
            'Distrito del Fuego y Barro',
            'Hornos de leña & ceniza volcánica',
            'text-tertiary',
            'barro',
        ],
        [
            'top-[8%] left-[48%] -translate-x-1/2 items-center text-center',
            'Sector II · Urdimbres',
            'Barrio del Telar & Fibras',
            'Lino orgánico y tintes',
            'text-primary',
            'telar',
        ],
        [
            'top-[22%] right-[12%] items-end text-right',
            'Sector III · Talleres Nobles',
            'Paseo de Ebanistas & Forja',
            'Raulí, cepillo, yunque & fuego',
            'text-[#735338]',
            'ebanistas',
        ],
        [
            'top-[48%] left-[54%]',
            'Ágora Central',
            'Distrito Digital & Saberes',
            'Manuales y tipos de autor',
            'text-primary',
            'digital',
        ],
        [
            'right-[20%] bottom-[10%]',
            'Sector V · Herbarios',
            'Jardín Botánico & Joyería',
            'Plata 950 y flores secas',
            'text-[#3e6843]',
            'botanica',
        ],
    ] as const;
    return labels.map(([position, sector, title, description, color, id]) => (
        <div
            key={id}
            className={`pointer-events-none absolute flex flex-col ${position}`}
            style={{ opacity: district === 'all' || district === id ? 1 : 0.2 }}
        >
            <span
                className={`font-label-sm text-label-sm font-bold tracking-[0.25em] ${color} uppercase`}
            >
                {sector}
            </span>
            <span className="font-headline-sm text-headline-sm">{title}</span>
            <span className="font-body-sm text-body-sm text-secondary">
                {description}
            </span>
        </div>
    ));
}
