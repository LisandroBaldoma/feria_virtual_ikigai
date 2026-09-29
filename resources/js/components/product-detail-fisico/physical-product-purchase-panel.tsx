import { useState } from 'react';

import { FeriaButton } from '@/components/ui/feria-button';
import { RatingStars } from '@/components/ui/rating-stars';

const finishes = [
    {
        color: '#bfab49',
        label: 'Ocre Mineral',
        name: 'Esmalte Ocre Mineral',
        stock: 'En stock (3)',
    },
    {
        color: '#42474b',
        label: 'Ahumado Mate',
        name: 'Barro Ahumado Mate',
        stock: 'Bajo pedido (5d)',
    },
    {
        color: '#dfe3e8',
        label: 'Arena & Cuarzo',
        name: 'Arena y Cuarzo Crudo',
        stock: 'En stock (1)',
    },
];

const shippingOptions = {
    araucania: {
        label: 'Costo estimado Araucanía:',
        value: '$3.800 CLP',
    },
    metropolitana: {
        label: 'Costo despacho Santiago:',
        value: '$4.900 CLP',
    },
    pickup: {
        label: 'Retiro presencial en taller:',
        value: 'Gratuito',
    },
    regiones: {
        label: 'Costo despacho Regiones:',
        value: '$5.600 CLP',
    },
};

interface PhysicalProductPurchasePanelProps {
    onNotify: (message: string) => void;
}

export default function PhysicalProductPurchasePanel({
    onNotify,
}: PhysicalProductPurchasePanelProps) {
    const [finish, setFinish] = useState(0);
    const [isFavorite, setIsFavorite] = useState(false);
    const [quantity, setQuantity] = useState(1);
    const [shippingDestination, setShippingDestination] =
        useState<keyof typeof shippingOptions>('araucania');
    const shipping = shippingOptions[shippingDestination];

    function updateQuantity(change: number) {
        const nextQuantity = quantity + change;

        if (nextQuantity >= 1 && nextQuantity <= 2) {
            setQuantity(nextQuantity);
        }
    }

    function toggleWishlist() {
        const nextFavorite = !isFavorite;

        setIsFavorite(nextFavorite);

        if (nextFavorite) {
            onNotify('Guardado en tus piezas favoritas de la feria');
        }
    }

    return (
        <div className="flex flex-col gap-6">
            <div className="flex flex-col gap-2">
                <div className="flex items-center justify-between">
                    <a
                        className="font-label text-[12px] font-bold tracking-wider text-primary uppercase hover:underline"
                        data-path="stands-y-tiendas"
                        href="#"
                    >
                        Taller Barro Mestizo · Stand #48
                    </a>
                    <span className="font-body text-[12px] text-outline">
                        Ref: BM-PUC-24
                    </span>
                </div>
                <h1 className="font-headline text-[30px] leading-[1.2] font-semibold text-on-surface sm:text-[34px]">
                    Jarra Escultórica en Gres: Colección Ceniza &amp; Arcilla
                </h1>
                <div className="flex items-center gap-3 pt-1">
                    <RatingStars iconClassName="text-[18px]" rating={5} />
                    <span className="font-body text-[13.5px] font-semibold text-on-surface">
                        5.0
                    </span>
                    <span className="text-[13px] text-on-surface-variant">
                        (32 reseñas verificadas de compradores)
                    </span>
                </div>
            </div>
            <div className="flex items-baseline justify-between rounded-xl bg-surface-container p-4">
                <div className="flex items-baseline gap-2">
                    <span className="font-headline text-[32px] font-bold tracking-tight text-on-surface">
                        $28.000
                    </span>
                    <span className="font-label text-[13px] font-semibold text-secondary">
                        CLP
                    </span>
                </div>
                <span className="font-body text-[12px] text-on-surface-variant">
                    IVA incluido · Boleta o Factura
                </span>
            </div>
            <div className="flex items-center gap-2.5 rounded-lg bg-error-container/30 px-3.5 py-2.5 font-body text-[13px] text-on-error-container">
                <span className="size-2 animate-ping rounded-full bg-error" />
                <span>
                    Pieza en custodia: <strong>Solo quedan 3 piezas</strong>{' '}
                    listas para embalaje inmediato.
                </span>
            </div>
            <div className="flex flex-col gap-3">
                <label className="font-label text-[12px] font-bold tracking-wider text-on-surface-variant uppercase">
                    Acabado Mineral:{' '}
                    <span className="font-semibold text-on-surface lowercase first-letter:uppercase">
                        {finishes[finish].name}
                    </span>
                </label>
                <div className="grid grid-cols-3 gap-2.5">
                    {finishes.map((item, index) => (
                        <button
                            key={item.name}
                            className={`flex flex-col rounded-lg bg-surface-container-low p-3 text-left transition-all hover:bg-surface-container ${
                                finish === index ? 'ring-2 ring-primary' : ''
                            }`}
                            type="button"
                            onClick={() => setFinish(index)}
                        >
                            <span
                                className="mb-2 size-4 rounded-full shadow-inner"
                                style={{ backgroundColor: item.color }}
                            />
                            <span
                                className={`font-body text-[12.5px] leading-tight text-on-surface ${
                                    finish === index
                                        ? 'font-semibold'
                                        : 'font-medium'
                                }`}
                            >
                                {item.label}
                            </span>
                            <span className="mt-0.5 font-body text-[11px] text-on-surface-variant">
                                {item.stock}
                            </span>
                        </button>
                    ))}
                </div>
            </div>
            <div className="flex flex-col gap-3 pt-2">
                <div className="flex items-center gap-3">
                    <div className="flex items-center rounded-lg border border-outline-variant/30 bg-surface-container-lowest p-1 shadow-sm">
                        <button
                            aria-label="Restar una unidad"
                            className="flex size-8 items-center justify-center rounded text-on-surface transition-colors hover:bg-surface-container"
                            type="button"
                            onClick={() => updateQuantity(-1)}
                        >
                            <span className="material-symbols-outlined text-[16px]">
                                remove
                            </span>
                        </button>
                        <span className="w-10 text-center font-headline text-[15px] font-semibold text-on-surface">
                            {quantity}
                        </span>
                        <button
                            aria-label="Sumar una unidad"
                            className="flex size-8 items-center justify-center rounded text-on-surface transition-colors hover:bg-surface-container"
                            type="button"
                            onClick={() => updateQuantity(1)}
                        >
                            <span className="material-symbols-outlined text-[16px]">
                                add
                            </span>
                        </button>
                    </div>
                    <span className="font-body text-[12px] text-secondary">
                        Máximo 2 piezas por pedido por resguardo artesanal
                    </span>
                </div>
                <FeriaButton
                    className="w-full rounded-lg bg-gradient-to-r from-primary to-primary-container px-6 py-3.5 font-body text-[15px] font-semibold text-on-primary shadow-[0_4px_16px_rgba(9,76,178,0.25)] hover:opacity-95 active:scale-[0.99]"
                    size="block"
                    type="button"
                    onClick={() =>
                        onNotify(
                            `Jarra agregada a tu canasta (${quantity} unidad/es)`,
                        )
                    }
                >
                    <span className="material-symbols-outlined text-[20px]">
                        shopping_bag
                    </span>
                    <span>Agregar a la cesta de la feria</span>
                </FeriaButton>
                <FeriaButton
                    className="w-full rounded-lg bg-surface-container-high px-6 py-3.5 font-body text-[14.5px] font-semibold text-primary hover:bg-surface-container-highest"
                    size="block"
                    variant="secondary"
                    type="button"
                    onClick={() =>
                        onNotify(
                            'Iniciando pasarela de pago seguro con despacho directo...',
                        )
                    }
                >
                    <span className="material-symbols-outlined text-[18px]">
                        bolt
                    </span>
                    <span>Comprar ahora con envío directo</span>
                </FeriaButton>
                <div className="flex items-center justify-center pt-1">
                    <button
                        className="inline-flex items-center gap-2 font-body text-[13px] text-on-surface-variant transition-colors hover:text-primary"
                        type="button"
                        onClick={toggleWishlist}
                    >
                        <span
                            className={`material-symbols-outlined text-[18px] ${
                                isFavorite ? 'text-primary icon-filled' : ''
                            }`}
                        >
                            {isFavorite ? 'bookmark' : 'bookmark_border'}
                        </span>
                        <span>
                            {isFavorite
                                ? 'Guardado en tu bitácora'
                                : 'Guardar en mi bitácora de deseos'}
                        </span>
                    </button>
                </div>
            </div>
            <div className="flex flex-col gap-3 rounded-xl bg-surface-container-low p-4">
                <span className="flex items-center gap-1.5 font-headline text-[14px] font-semibold text-on-surface">
                    <span className="material-symbols-outlined text-[18px] text-primary">
                        local_shipping
                    </span>
                    Calcular envío y método de entrega
                </span>
                <div className="flex gap-2">
                    <select
                        className="flex-1 rounded-lg border border-outline-variant/30 bg-surface-container-lowest px-3 py-2 text-[13px] text-on-surface focus:ring-1 focus:ring-primary focus:outline-none"
                        value={shippingDestination}
                        onChange={(event) =>
                            setShippingDestination(
                                event.target
                                    .value as keyof typeof shippingOptions,
                            )
                        }
                    >
                        <option value="metropolitana">
                            Región Metropolitana (Stgo) — 2 a 3 días
                        </option>
                        <option value="araucania">
                            Región de la Araucanía (Local) — 24 a 48 hrs
                        </option>
                        <option value="regiones">
                            Otras Regiones de Chile (Starken/Correos) — 3 a 5
                            días
                        </option>
                        <option value="pickup">
                            Retiro en Taller Pucón (Gratis)
                        </option>
                    </select>
                </div>
                <div className="flex items-center justify-between font-body text-[12.5px] text-on-surface-variant">
                    <span>{shipping.label}</span>
                    <strong
                        className={
                            shippingDestination === 'pickup'
                                ? 'font-semibold text-primary'
                                : 'font-semibold text-on-surface'
                        }
                    >
                        {shipping.value}
                    </strong>
                </div>
                <p className="text-[11.5px] leading-snug text-secondary">
                    Cada pieza viaja suspendida en viruta de madera chilena y
                    caja doble corrugada certificada para resistir caídas de
                    hasta 1.5 metros.
                </p>
            </div>
        </div>
    );
}
