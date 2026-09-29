import { useState } from 'react';
import { toast } from 'sonner';

import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';

const inclusions = [
    {
        description:
            'Índice clickeable, modo lectura noche y alta resolución tipográfica.',
        icon: 'picture_as_pdf',
        title: 'E-book interactivo de 84 páginas',
    },
    {
        description:
            'Para Procreate, Adobe Photoshop e Illustrator con códigos HEX.',
        icon: 'palette',
        title: 'Set de Paletas de Color (.swatches y .ase)',
    },
    {
        description:
            'Listas para encuadernar o plastificar en tu mesón de teñido.',
        icon: 'print',
        title: '12 Fichas de Recetas Imprimibles (PDF A4)',
    },
];

const trustSignals = [
    {
        icon: 'sync_saved_locally',
        label: 'Descargas ilimitadas desde tu biblioteca de usuario de Feria Ikigai.',
    },
    {
        icon: 'support_agent',
        label: 'Soporte directo con Estudio Telar & Bosque para consultas técnicas.',
    },
    {
        icon: 'lock',
        label: 'Pago cifrado seguro con Webpay Plus, MercadoPago y tarjetas globales.',
    },
];

export default function ProductPurchasePanel() {
    const [isFavorite, setIsFavorite] = useState(false);
    const [isAddedToCart, setIsAddedToCart] = useState(false);

    function toggleFavorite() {
        const nextValue = !isFavorite;

        setIsFavorite(nextValue);
        toast(
            nextValue
                ? 'Guardado en tus favoritos de la feria.'
                : 'Eliminado de tus favoritos.',
        );
    }

    function addToCart() {
        setIsAddedToCart(true);
        toast('Guía Maestra añadida a tu cesta de la feria.');

        window.setTimeout(() => setIsAddedToCart(false), 2500);
    }

    return (
        <div className="flex flex-col gap-6 rounded-2xl bg-surface-container-lowest p-6 shadow-[0_8px_30px_rgba(0,0,0,0.04)] sm:p-8">
            <div className="flex flex-col gap-2.5">
                <div className="flex items-center justify-between">
                    <span className="font-label text-[12px] font-bold tracking-wider text-tertiary uppercase">
                        Edición Ampliada 2025 · 2ª Tirada Digital
                    </span>
                    <FeriaIconButton
                        aria-label="Guardar en favoritos"
                        aria-pressed={isFavorite}
                        className="size-9 rounded-full bg-surface-container text-on-surface-variant transition-all hover:bg-error-container/30 hover:text-error"
                        variant="favorite"
                        onClick={toggleFavorite}
                    >
                        <span
                            className="material-symbols-outlined text-[19px]"
                            style={{
                                fontVariationSettings: isFavorite
                                    ? "'FILL' 1"
                                    : "'FILL' 0",
                            }}
                        >
                            {isFavorite ? 'favorite' : 'favorite_border'}
                        </span>
                    </FeriaIconButton>
                </div>
                <h1 className="font-headline text-[26px] leading-[1.25] font-semibold text-on-surface sm:text-[30px]">
                    Guía Maestra de Tintes Naturales: Del Bosque Nativo a la
                    Lana
                </h1>
                <div className="flex items-center gap-3 pt-1">
                    <div className="flex items-center text-[14px] text-tertiary">
                        {Array.from({ length: 5 }, (_, index) => (
                            <span
                                key={index}
                                className="material-symbols-outlined text-[18px]"
                                style={{ fontVariationSettings: "'FILL' 1" }}
                            >
                                star
                            </span>
                        ))}
                    </div>
                    <span className="font-body text-[13px] font-semibold text-on-surface">
                        5.0
                    </span>
                    <a
                        className="font-body text-[13px] text-on-surface-variant underline decoration-outline-variant hover:text-primary"
                        href="#resenas"
                    >
                        48 reseñas de artesanos
                    </a>
                </div>
            </div>
            <div className="flex items-baseline justify-between rounded-xl bg-surface-container-low p-4">
                <div>
                    <span className="font-headline text-[32px] font-bold tracking-tight text-on-surface">
                        $16.500
                    </span>
                    <span className="ml-1 font-label text-[13px] font-medium text-on-surface-variant">
                        CLP
                    </span>
                </div>
                <div className="text-right">
                    <FeriaBadge
                        className="rounded bg-tertiary-container/30 px-2 py-0.5 font-label text-[11px] font-semibold tracking-wider text-tertiary uppercase"
                        variant="compactSurface"
                    >
                        Pago Único
                    </FeriaBadge>
                    <p className="mt-0.5 font-body text-[11px] text-outline">
                        IVA incluido · Factura electrónica
                    </p>
                </div>
            </div>
            <div className="flex flex-col gap-2.5">
                <span className="font-label text-[11px] font-bold tracking-wider text-outline uppercase">
                    El archivo descargable incluye:
                </span>
                <div className="space-y-2 text-[13px] text-on-surface">
                    {inclusions.map((inclusion) => (
                        <div
                            key={inclusion.title}
                            className="flex items-start gap-2.5 rounded-lg bg-surface-container p-2.5"
                        >
                            <span className="material-symbols-outlined mt-0.5 shrink-0 text-[20px] text-primary">
                                {inclusion.icon}
                            </span>
                            <div>
                                <strong className="font-medium text-on-surface">
                                    {inclusion.title}
                                </strong>
                                <p className="text-[12px] text-on-surface-variant">
                                    {inclusion.description}
                                </p>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
            <div className="flex flex-col gap-3 pt-2">
                <FeriaButton
                    className="w-full rounded-xl bg-gradient-to-r from-primary to-primary-container px-6 py-4 font-body text-[15px] font-semibold text-on-primary shadow-[0_8px_20px_rgba(9,76,178,0.28)] hover:shadow-[0_10px_26px_rgba(9,76,178,0.38)] hover:brightness-105 active:scale-[0.99]"
                    size="block"
                    type="button"
                    onClick={() =>
                        toast(
                            'Iniciando pasarela de descarga directa segura...',
                        )
                    }
                >
                    <span className="material-symbols-outlined text-[20px]">
                        download
                    </span>
                    Comprar ahora con descarga instantánea
                </FeriaButton>
                <FeriaButton
                    className="w-full rounded-xl bg-surface-container-high px-6 py-3 font-body text-[14px] font-semibold text-primary hover:bg-surface-container-highest"
                    size="block"
                    type="button"
                    onClick={addToCart}
                >
                    <span className="material-symbols-outlined text-[19px]">
                        add_shopping_cart
                    </span>
                    {isAddedToCart
                        ? '¡Agregado a la cesta!'
                        : 'Agregar a la cesta de la feria'}
                </FeriaButton>
            </div>
            <div className="flex flex-col gap-3 border-t border-surface-container pt-4 text-[12px] text-on-surface-variant">
                {trustSignals.map((signal) => (
                    <div key={signal.icon} className="flex items-center gap-2">
                        <span className="material-symbols-outlined text-[17px] text-tertiary">
                            {signal.icon}
                        </span>
                        <span>{signal.label}</span>
                    </div>
                ))}
            </div>
        </div>
    );
}
