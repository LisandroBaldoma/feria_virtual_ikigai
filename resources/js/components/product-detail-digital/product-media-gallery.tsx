import { useRef, useState } from 'react';
import { toast } from 'sonner';

import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';

import ProductPreviewDialog from './product-preview-dialog';

const galleryItems = [
    {
        alt: 'Muestra de capítulo de mordentado',
        dataAlt:
            'Page spread mockup of chapter three showing chemical formulas for alum mordanting and natural tannin extraction with Chilean native flora illustrations in vintage botanical line art',
        label: 'Capítulos & Fórmulas',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAkkIQ4zXEUcqdsxfC79YYkyuT_HABgnW40Rd2AWKiUEdqDuSomaH_GZ8nO7QiYQrTvdjMzwehjKUcN1Jh3SutQK5j6m6P9X8v3cma2mHLgB6NZU26gQ3ZGkgbB0VD3zrtYOlW_UKQHFSp1ePBGatDDDV8x3Xk8tzhvbppkgCJ8GlzJHFk5hgTPw8luP-VfVqqyhGgHglNjo-gjQx0RIPG99jt-M-NYG9cCmR6RUgCOlDgzHMGqwqdEvA',
    },
    {
        alt: 'Paletas digitales Procreate y Photoshop',
        dataAlt:
            'Digital color swatches palette grid for Procreate and Photoshop inspired by Valdivian rainforest bark, moss, lichen, and native maqui berries with exact HEX and CMYK references',
        label: 'Paletas .SWATCHES',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDmQ2XJ7QjW-7Eg0vjmPJughoyK6Vg6cCQ66uUXaFMhEPneXuc2ixPQxt_S_NwvB6dSkUACGSNqqY9IbmZ-UD3IFzAdelEc7Uo-Ar4hE2_tfEd1W7pjZHQM9S9aHW6O20tl1oj34vF_o8G_pXKpHVDJZx9_H0IY3iGNr0eHOGB7EaLtLU4wGPurF30ahsDaexg3GjaiyXfhhwEoHeHVA5QTYf2grIP9nldAEUGkrByjsvaJgPxk5PKpaw',
    },
    {
        alt: 'Fichas de recetas imprimibles',
        dataAlt:
            'Printable laboratory recipe sheet cards on thick textured recycled paper with checkboxes for fiber weight, temperature, and sun curing times',
        label: '12 Fichas Imprimibles',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDGOo8kYtW5agcYETZQsRJrhU0yKGR62riQRvXhWaBik2U0T1IXMtCd3BgQAOQ-AOwZnfaNCaSi8vEXMA41BDHF85MYmYkjBfm47-Theiq_EGTJt31pDQkZeERfJpjrSUE_EOvIGUcjrpMPtRKnzOLZGzmgLCZpjr6YyYXnirkUo2tGW6YNblucuwZjVvZzRfRYeGVGj264SJAWPsWGxxbA-ij8JpkZDM95J56RInNLl5uviO6fRWpYzg',
    },
    {
        alt: 'Vista en GoodNotes e iPad',
        dataAlt:
            'An Apple iPad Pro displaying the natural dyeing e-book open in GoodNotes with hand-drawn annotations and highlighted herbarium index',
        label: 'Formato GoodNotes',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA74TtHl_GN_BmfXEXNY2LgII-2Z7Wlq0x5XpQjAAscWZZBD5zjPtPUfGqV_v8ep6nIUlOg2Tu3haXC7xebE6pEgvt1wMa___s_EGTJZ8d5PX-b6iQ8cu4gnTWsFBLYn7LJwMeezGgTIJott2z7fIedORRVyAzVchhdD1AFZJC_idZow5FoCWpAqhjzYwYx0Yd9TJJiDEs1ADVJZY6BzSSX7S1Il-F7rxNqlv_4pbdiw1m13xyW40nJew',
    },
];

const mainImage = {
    alt: 'Vista principal de la Guía Maestra de Tintes Naturales',
    dataAlt:
        'Editorial close-up flatlay of an open artisan guidebook on botanical natural dyes, featuring raw dyed wool skeins in ochre, forest green, and soft indigo, with handwritten mordanting formulas and dried native Chilean leaves on an organic linen desk under warm soft sunlight',
    src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCwmiFBgJ_-rIK_22H1A1VaS5J7VaRepHYbQmSxJ7tSaHiS-T3ue2Va9ULBxZ3hw5myAWXzYb_pGKjgYyDMMXb7s_o_Josu5Nz8mpJdHjrUW7EsGNtOJu1rB9_Zdh0ojNzAnmBTv7ioKvbmWHW3wuM3ugbWHsvN0GxwdmW_3veOhCoH6ihGT_YZJZoDKicornjzrrFGzghrWUIQNktYomU7UOg3EOzENYk7XmEiP5hPKg4Xv-LvSGHugQ',
};

export default function ProductMediaGallery() {
    const [activeIndex, setActiveIndex] = useState(0);
    const [isPreviewOpen, setIsPreviewOpen] = useState(false);
    const [isTransitioning, setIsTransitioning] = useState(false);
    const transitionTimeout = useRef<number | null>(null);

    function selectGalleryImage(index: number) {
        setActiveIndex(index);
        setIsTransitioning(true);

        if (transitionTimeout.current !== null) {
            window.clearTimeout(transitionTimeout.current);
        }

        transitionTimeout.current = window.setTimeout(() => {
            setIsTransitioning(false);
        }, 150);
    }

    return (
        <div className="flex flex-col gap-6">
            <div className="group relative aspect-[4/3] w-full overflow-hidden rounded-2xl bg-surface-container-low shadow-sm">
                <img
                    alt={mainImage.alt}
                    className="h-full w-full object-cover transition-all duration-500 ease-out"
                    data-alt={
                        galleryItems[activeIndex]?.dataAlt ?? mainImage.dataAlt
                    }
                    src={mainImage.src}
                    style={{ opacity: isTransitioning ? 0.4 : 1 }}
                />
                <FeriaBadge
                    className="absolute top-4 left-4 rounded-full bg-surface-container-lowest/90 px-3 py-1.5 font-label text-[11px] font-bold tracking-wider text-on-surface uppercase shadow-sm backdrop-blur-md"
                    variant="category"
                >
                    <span className="size-2 animate-pulse rounded-full bg-tertiary" />
                    Libro Interactivo + Archivo RAW
                </FeriaBadge>
                <FeriaButton
                    className="absolute right-4 bottom-4 rounded-lg bg-surface-container-lowest/95 px-4 py-2.5 font-body text-[13px] font-medium text-primary shadow-md hover:bg-surface-container-lowest hover:shadow-lg"
                    size="compact"
                    type="button"
                    onClick={() => setIsPreviewOpen(true)}
                >
                    <span className="material-symbols-outlined text-[18px]">
                        visibility
                    </span>
                    Muestra gratis (5 págs)
                </FeriaButton>
            </div>
            <div className="grid grid-cols-4 gap-3.5">
                {galleryItems.map((item, index) => (
                    <button
                        key={item.label}
                        className={`group relative aspect-[4/3] overflow-hidden rounded-xl bg-surface-container transition-all ${
                            activeIndex === index
                                ? 'ring-2 ring-primary'
                                : 'opacity-70 hover:opacity-100'
                        }`}
                        type="button"
                        onClick={() => selectGalleryImage(index)}
                    >
                        <img
                            alt={item.alt}
                            className="h-full w-full object-cover transition-transform group-hover:scale-105"
                            data-alt={item.dataAlt}
                            src={item.src}
                        />
                        <span className="absolute right-0 bottom-0 left-0 truncate bg-gradient-to-t from-black/60 via-transparent p-1.5 font-label text-[10px] text-white">
                            {item.label}
                        </span>
                    </button>
                ))}
            </div>
            <ProductPreviewDialog
                open={isPreviewOpen}
                onOpenChange={setIsPreviewOpen}
                onPurchase={() =>
                    toast('Iniciando pasarela de descarga directa segura...')
                }
            />
        </div>
    );
}
