import {
    Bell,
    Check,
    Heart,
    MapPin,
    MessageCircle,
    Share2,
} from 'lucide-react';

import { storeImages } from '@/components/store-front/data';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';

interface StoreFrontHeroProps {
    following: boolean;
    onFollowToggle: () => void;
    onInquiryOpen: () => void;
    onShare: () => void;
}

export function StoreFrontHero({
    following,
    onFollowToggle,
    onInquiryOpen,
    onShare,
}: StoreFrontHeroProps) {
    return (
        <>
            <section className="bg-surface-container-low py-3">
                <div className="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 font-label text-xs lg:px-12">
                    <p className="text-on-surface-variant">
                        Feria Ikigai <span className="px-2">/</span> Stands y
                        Tiendas <span className="px-2">/</span>{' '}
                        <strong className="text-on-surface">
                            Taller Barro Mestizo (Stand #48)
                        </strong>
                    </p>
                    <FeriaBadge variant="live">
                        <span className="size-2 animate-pulse rounded-full bg-emerald-600" />
                        STAND EN VIVO · ABIERTO
                    </FeriaBadge>
                </div>
            </section>
            <header className="bg-surface-container-lowest">
                <div className="relative h-56 overflow-hidden bg-surface-container sm:h-72">
                    <img
                        alt="Taller de cerámica Barro Mestizo"
                        className="size-full scale-105 object-cover opacity-40 mix-blend-multiply"
                        src={storeImages.workshop}
                    />
                    <div className="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-surface-container-lowest/30 to-transparent" />
                    <div className="absolute top-6 right-6 hidden text-right sm:block lg:right-12">
                        <p className="font-label text-xs font-bold tracking-widest text-primary-container uppercase">
                            Espacio Oficial
                        </p>
                        <p className="font-headline text-3xl font-bold tracking-tighter text-on-surface lg:text-4xl">
                            STAND #48
                        </p>
                    </div>
                </div>
                <div className="relative z-10 mx-auto -mt-20 max-w-7xl px-6 pb-12 lg:px-12">
                    <div className="flex flex-col items-start justify-between gap-8 md:flex-row">
                        <div className="flex flex-col items-start gap-6 sm:flex-row sm:items-end">
                            <div className="relative">
                                <Avatar className="size-28 rounded-2xl shadow-xl ring-4 ring-surface-container-lowest sm:size-36">
                                    <AvatarImage
                                        alt="Valentina Lagos en su taller"
                                        className="object-cover"
                                        src={storeImages.pitcher}
                                    />
                                    <AvatarFallback>VL</AvatarFallback>
                                </Avatar>
                                <span className="absolute -right-2 -bottom-2 rounded-full bg-primary p-1.5 text-on-primary">
                                    <Check className="size-4" />
                                </span>
                            </div>
                            <div className="space-y-1.5">
                                <div className="flex flex-wrap items-center gap-2">
                                    <FeriaBadge
                                        className="bg-primary-fixed text-on-primary-fixed-variant"
                                        variant="compactSurface"
                                    >
                                        Maestra Artesana Verificada
                                    </FeriaBadge>
                                    <span className="font-label text-xs text-on-surface-variant">
                                        Stand #48
                                    </span>
                                </div>
                                <h1 className="font-headline text-3xl font-semibold tracking-tight text-on-surface sm:text-4xl lg:text-5xl">
                                    Taller Barro Mestizo
                                </h1>
                                <p className="flex items-center gap-1.5 text-sm font-medium text-primary-container">
                                    <MapPin className="size-4" />
                                    Pucón, Región de la Araucanía, Chile ·
                                    Cerámica & Gres de Alta Temperatura
                                </p>
                            </div>
                        </div>
                        <div className="flex w-full flex-wrap items-center gap-3 sm:w-auto">
                            <FeriaButton
                                className={
                                    following
                                        ? 'bg-surface-container-highest text-on-surface hover:bg-surface-variant'
                                        : ''
                                }
                                onClick={onFollowToggle}
                                size="compact"
                            >
                                <>
                                    {following ? (
                                        <Heart className="size-4 fill-current" />
                                    ) : (
                                        <Bell className="size-4" />
                                    )}
                                    {following
                                        ? 'Siguiendo Stand #48'
                                        : 'Seguir este Stand'}
                                </>
                            </FeriaButton>
                            <FeriaButton
                                onClick={onInquiryOpen}
                                size="compact"
                                variant="secondary"
                            >
                                <MessageCircle className="size-4" />
                                <span className="hidden sm:inline">
                                    Consultar a la artesana
                                </span>
                            </FeriaButton>
                            <FeriaIconButton
                                aria-label="Compartir puesto"
                                onClick={onShare}
                                variant="navigation"
                            >
                                <Share2 className="size-4" />
                            </FeriaIconButton>
                        </div>
                    </div>
                    <div className="mt-8 max-w-3xl">
                        <p className="font-headline text-lg leading-relaxed text-on-surface/90 italic sm:text-xl">
                            «Moldeamos a mano en torno con arcillas
                            sedimentarias del sur de Chile y cenizas vivas del
                            volcán Villarrica. Cada pieza es horneada en leña a
                            1.250°C respetando el ritmo pausado de la materia.»
                        </p>
                        <p className="mt-2 font-label text-xs font-medium tracking-widest text-secondary uppercase">
                            Dirección y creación por Valentina Lagos · Taller
                            fundado en 2017
                        </p>
                    </div>
                    <div className="mt-8 grid grid-cols-2 gap-4 rounded-2xl bg-surface-container-low p-5 md:grid-cols-4">
                        {[
                            ['8 años', 'De oficio continuo en torno'],
                            ['428 piezas', 'Enviadas sin intermediarios'],
                            ['5.0 ★★★★★', '142 valoraciones verificadas'],
                            ['100%', 'Embalajes recibidos intactos'],
                        ].map(([value, label]) => (
                            <div key={label}>
                                <p className="font-headline text-2xl font-bold text-on-surface">
                                    {value}
                                </p>
                                <p className="font-label text-xs text-on-surface-variant">
                                    {label}
                                </p>
                            </div>
                        ))}
                    </div>
                </div>
            </header>
        </>
    );
}
