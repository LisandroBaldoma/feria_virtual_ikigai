import { FeriaButton } from '@/components/ui/feria-button';

export default function HeroSection() {
    return (
        <section className="relative w-full overflow-hidden bg-surface-container-low px-6 py-16 lg:px-12 lg:py-24">
            <div className="pointer-events-none absolute top-0 right-0 -mt-24 -mr-24 h-96 w-96 rounded-full bg-primary/5 blur-3xl" />
            <div className="pointer-events-none absolute bottom-0 left-1/3 -mb-32 h-80 w-80 rounded-full bg-secondary/10 blur-3xl" />
            <div className="relative z-10 mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-16">
                <div className="flex flex-col items-start gap-space-lg lg:col-span-7">
                    <div className="inline-flex items-center gap-space-sm rounded-full bg-surface-container-lowest px-space-md py-space-xs shadow-sm">
                        <span className="h-2.5 w-2.5 animate-pulse rounded-full bg-primary" />
                        <span className="font-label-sm text-label-sm tracking-wider text-on-surface uppercase">
                            Edición de Otoño: 142 creadores activos este fin de
                            semana
                        </span>
                    </div>
                    <div className="flex flex-col gap-space-md">
                        <h1 className="font-display-hero text-display-hero leading-tight tracking-tight text-on-surface">
                            Una feria viva donde cada objeto tiene un{' '}
                            <span className="text-primary italic">creador</span>{' '}
                            y un propósito.
                        </h1>
                        <p className="max-w-xl font-body-lg text-body-lg text-on-surface-variant">
                            Pasea sin prisa entre talleres artesanales
                            independientes y estudios de diseño. Encuentra
                            cerámicas modeladas a mano, textiles de tintes
                            lentos, piezas de autor y herramientas digitales
                            creadas con devoción.
                        </p>
                    </div>
                    <div className="flex flex-wrap items-center gap-space-md pt-space-xs">
                        <FeriaButton asChild size="wide" className="group">
                            <a href="#recorrer-puestos">
                                <span className="material-symbols-outlined text-title-lg transition-transform group-hover:rotate-45">
                                    explore
                                </span>
                                Comenzar a recorrer la feria
                            </a>
                        </FeriaButton>
                        <FeriaButton asChild variant="secondary">
                            <a href="#abrir-tienda">
                                <span className="material-symbols-outlined text-title-lg text-secondary">
                                    storefront
                                </span>
                                Montar mi stand virtual
                            </a>
                        </FeriaButton>
                    </div>
                    <div className="flex items-center gap-8 pt-4">
                        <div className="flex flex-col">
                            <span className="font-headline-sm text-headline-sm text-on-surface">
                                1.8k+
                            </span>
                            <span className="font-label-sm text-label-sm tracking-wider text-on-surface-variant uppercase">
                                Obras únicas
                            </span>
                        </div>
                        <div className="h-8 w-px bg-outline-variant/40" />
                        <div className="flex flex-col">
                            <span className="font-headline-sm text-headline-sm text-on-surface">
                                100%
                            </span>
                            <span className="font-label-sm text-label-sm tracking-wider text-on-surface-variant uppercase">
                                Trato directo con el taller
                            </span>
                        </div>
                        <div className="h-8 w-px bg-outline-variant/40" />
                        <div className="flex flex-col">
                            <span className="font-headline-sm text-headline-sm text-on-surface">
                                4.9 / 5
                            </span>
                            <span className="font-label-sm text-label-sm tracking-wider text-on-surface-variant uppercase">
                                Comunidad de creadores
                            </span>
                        </div>
                    </div>
                </div>
                <div className="relative lg:col-span-5">
                    <div className="relative aspect-[4/5] w-full overflow-hidden rounded-2xl bg-surface-container shadow-xl">
                        <img
                            className="h-full w-full object-cover"
                            data-alt="Warm studio photo of an artisan ceramist shaping a terracotta clay vessel on a potter's wheel in natural soft morning light with dried eucalyptus in the background and earthy tones"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAfp0P0NO1pcz8UBSC6175smDKtfKq9Ajgym84fDFSxpy99zugRePrReCw0qC2qrA0kIRRPPFJ_lLaJ_UgimGN1t21ZAKNjSET4wS19kRY0lVUepVxgofBm_7q-B7Asby1OrYq9EXp48FD7DzAriOEU1rpWme-fu5jeqOjT6Ig296c5S8ISIU_ub2vE8DeypSi8JmPd3n4elg-7a8wJKeUQj3dDgCjYmTk_j2HMrzvHSMXVF33NyswlQ"
                        />
                        <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent" />
                        <div className="absolute right-6 bottom-6 left-6 flex items-center justify-between rounded-xl bg-surface/90 p-space-md shadow-md backdrop-blur-md">
                            <div className="flex min-w-0 items-center gap-space-sm">
                                <div className="h-11 w-11 shrink-0 overflow-hidden rounded-full bg-surface-container">
                                    <img
                                        className="h-full w-full object-cover"
                                        data-alt="Close-up portrait of a young artisan woman with apron smiling gently in an artisanal workshop with soft lighting"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuACDuGKhC-QA6h9abnFoDqE72UYQaFvpn4Wem0xhgHsbMjh_eHrBd1l1Fnij2Cxmz4DIWcSsoTQsQjd_pSi7lSvJXLDTJYMZ0WDWUZN18rbjLWl1DjFBo3g8nVR4pWLS6F_Eo0XN-iMYenN4PSWcWBysdb46Sy6Hignjk-MKa0ezzbYhm1ko6vHTunOOmtHGtTCNqa0UPAZuFoPaK4xJ_QTHZvMq-RCRJUyv6-LdIIf8QYoB7aCLJ3bTg"
                                    />
                                </div>
                                <div className="min-w-0">
                                    <p className="truncate font-title-md text-title-md text-on-surface">
                                        Taller Barro Mestizo
                                    </p>
                                    <p className="font-body-sm text-body-sm text-on-surface-variant">
                                        Pucón · 8 piezas disponibles
                                    </p>
                                </div>
                            </div>
                            <span className="rounded-full bg-secondary-container px-space-sm py-1 font-label-sm text-label-sm font-semibold text-on-secondary-container">
                                En Vivo
                            </span>
                        </div>
                    </div>
                    <div className="py- space-xs absolute -top-4 -left-6 flex items-center gap-2 rounded-xl bg-surface-container-lowest px-space-md py-2 shadow-lg">
                        <span className="material-symbols-outlined text-title-md text-primary">
                            local_fire_department
                        </span>
                        <span className="font-label-md text-label-md font-semibold text-on-surface">
                            Drop Especial #48
                        </span>
                    </div>
                </div>
            </div>
        </section>
    );
}
