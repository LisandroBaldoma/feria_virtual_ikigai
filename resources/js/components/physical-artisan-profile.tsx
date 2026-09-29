import { Avatar, AvatarImage } from '@/components/ui/avatar';
import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';

export default function PhysicalArtisanProfile() {
    return (
        <section className="w-full bg-surface-container-low py-14">
            <div className="mx-auto max-w-7xl px-6 lg:px-12">
                <div className="flex flex-col items-center gap-8 rounded-2xl bg-surface-container-lowest p-8 shadow-sm md:flex-row md:items-start lg:gap-12 lg:p-10">
                    <div className="relative shrink-0">
                        <Avatar className="size-32 shadow-md ring-4 ring-surface-container md:size-40">
                            <AvatarImage
                                alt="Valentina Lagos, maestra ceramista en su taller de Pucón"
                                className="object-cover"
                                src="https://lh3.googleusercontent.com/aida/AEtjO1UpXNIdIGORa3VDdJHp0E__OxrGMgPf6QhOOL0IKt4XueOeZOmemsQqO2-23KaVDykay1pFbcT_NPJwIveiOPZuRpcrEHlMLEQic3dIp1zlzbjB4R4vIASAo75L_wCMvQpxyUU3DZIPOTj01ApBmnX7cEIVwtva0JUF7vPYF09eE5rOfra9dBYchWoIVrkl-V1lUebNIIlJWMdTQq_50BSAQldEpvlDlMOUzbpOvUR6Ro-a-k3duAjIlh-B"
                            />
                        </Avatar>
                        <span
                            className="absolute right-2 bottom-2 rounded-full bg-primary p-1.5 text-on-primary shadow-sm"
                            title="Artesana verificada Ikigai"
                        >
                            <span className="material-symbols-outlined block text-[16px]">
                                verified
                            </span>
                        </span>
                    </div>
                    <div className="flex flex-1 flex-col gap-3 text-center md:text-left">
                        <div className="flex flex-wrap items-center justify-center gap-2.5 md:justify-start">
                            <FeriaBadge
                                className="rounded bg-tertiary-fixed/60 px-2.5 py-0.5 font-label text-[11px] font-bold tracking-wider text-tertiary uppercase"
                                variant="category"
                            >
                                Maestra Ceramista
                            </FeriaBadge>
                            <span className="text-[13px] text-outline">·</span>
                            <span className="flex items-center gap-1 font-body text-[13px] text-on-surface-variant">
                                <span className="material-symbols-outlined text-[16px] text-primary">
                                    location_on
                                </span>
                                Pucón, Región de la Araucanía, Chile
                            </span>
                        </div>
                        <h2 className="font-headline text-[24px] font-semibold text-on-surface lg:text-[28px]">
                            Valentina Lagos · Taller Barro Mestizo
                        </h2>
                        <blockquote className="my-1 border-l-2 border-primary/40 py-1 pl-4 font-headline text-[15px] leading-relaxed text-secondary italic lg:text-[16px]">
                            "Moldeamos a mano en torno con arcillas sedimentarias
                            del sur de Chile y cenizas vivas del volcán
                            Villarrica. La cocción en leña a 1.250°C hace que cada
                            huella y soplo de fuego quede cristalizado para
                            siempre."
                        </blockquote>
                        <div className="flex flex-wrap items-center justify-center gap-6 pt-2 text-[13px] text-on-surface-variant md:justify-start">
                            <div>
                                <strong className="font-headline text-[16px] text-on-surface">
                                    8 años
                                </strong>{' '}
                                de oficio en torno
                            </div>
                            <span className="text-outline-variant">/</span>
                            <div>
                                <strong className="font-headline text-[16px] text-on-surface">
                                    428
                                </strong>{' '}
                                piezas enviadas
                            </div>
                            <span className="text-outline-variant">/</span>
                            <div>
                                <strong className="font-headline text-[16px] text-on-surface">
                                    100%
                                </strong>{' '}
                                entregas intactas
                            </div>
                        </div>
                        <div className="flex flex-wrap items-center justify-center gap-3 pt-3 md:justify-start">
                            <FeriaButton
                                asChild
                                className="rounded-lg bg-surface-container px-5 py-2.5 font-body text-[13.5px] font-semibold text-on-surface hover:bg-surface-container-high"
                                size="compact"
                                variant="surface"
                            >
                                <a data-path="stands-y-tiendas" href="#">
                                    <span className="material-symbols-outlined text-[18px]">
                                        storefront
                                    </span>
                                    <span>Visitar Stand (#48)</span>
                                </a>
                            </FeriaButton>
                            <FeriaButton
                                className="rounded-lg border border-outline-variant/40 bg-surface-container-lowest px-5 py-2.5 font-body text-[13.5px] font-medium text-primary hover:bg-surface-container"
                                size="compact"
                                variant="subtle"
                                type="button"
                                onClick={() =>
                                    window.alert(
                                        'Abriendo canal directo de mensajería con el taller de Valentina Lagos.',
                                    )
                                }
                            >
                                <span className="material-symbols-outlined text-[18px]">
                                    chat_bubble_outline
                                </span>
                                <span>Consultar a la artesana</span>
                            </FeriaButton>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
