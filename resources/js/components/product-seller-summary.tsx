import { toast } from 'sonner';

import { Avatar, AvatarImage } from '@/components/ui/avatar';
import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';

export default function ProductSellerSummary() {
    return (
        <div className="mt-4 flex flex-col items-start justify-between gap-5 rounded-2xl bg-surface-container-low p-6 sm:flex-row sm:items-center">
            <div className="flex items-start gap-4">
                <div className="relative shrink-0">
                    <Avatar className="size-14 shadow-sm ring-2 ring-surface-container-lowest">
                        <AvatarImage
                            alt="Estudio Telar & Bosque"
                            className="object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdn5OfU43NC5nXMevRyshpMy8c7PNWBRoJJJCxuc-G8RMt0tKImL5LNDQghu6cKQ9yArfKUvWaGSaYDYMa7aTfxRhBD6RIRTV0YOkyrNfrWfQCFrUCVkWPp7u9JQCzKmLbclmdyqUh7EB7Zi-ssbdp2LEApwNGykN4bexMQc6JYGn6C9svbTdBDhrUWfD3HyPtpmg9yCir736XYEidhk4GZ45lmxXaspqty3ZdAbzr0Sts_KuB0qH-AQ"
                        />
                    </Avatar>
                    <span
                        className="absolute -right-1 -bottom-1 flex size-5 items-center justify-center rounded-full bg-tertiary text-[11px] text-on-tertiary"
                        title="Taller Destacado"
                    >
                        <span className="material-symbols-outlined text-[13px]">
                            verified
                        </span>
                    </span>
                </div>
                <div>
                    <div className="flex flex-wrap items-center gap-2">
                        <h3 className="font-headline text-[17px] font-semibold text-on-surface">
                            Estudio Telar &amp; Bosque
                        </h3>
                        <FeriaBadge
                            className="rounded-full bg-surface-container px-2 py-0.5 font-label text-[11px] font-medium text-on-surface-variant"
                            variant="location"
                        >
                            Stand #18 · Valdivia
                        </FeriaBadge>
                    </div>
                    <p className="mt-1 line-clamp-2 max-w-md font-body text-[13px] text-on-surface-variant">
                        Taller botánico e hilandería ancestral dedicado a
                        preservar el oficio del teñido pausado con corteza,
                        hojas nativas y líquenes caídos.
                    </p>
                </div>
            </div>
            <div className="flex w-full shrink-0 items-center gap-2.5 sm:w-auto">
                <FeriaButton
                    asChild
                    className="flex-1 rounded-lg bg-surface-container-high px-4 py-2 font-body text-[13px] font-medium text-primary hover:bg-surface-container-highest sm:flex-none"
                    size="compact"
                >
                    <a data-path="stands-y-tiendas" href="#">
                        Visitar Stand (18)
                    </a>
                </FeriaButton>
                <FeriaIconButton
                    aria-label="Contactar Estudio Telar y Bosque"
                    className="bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface"
                    onClick={() =>
                        toast(
                            'Abriendo canal directo con Creador: Estudio Telar & Bosque',
                        )
                    }
                    title="Contactar taller"
                >
                    <span className="material-symbols-outlined text-[20px]">
                        chat
                    </span>
                </FeriaIconButton>
            </div>
        </div>
    );
}
