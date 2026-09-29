import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb';
import { FeriaBadge } from '@/components/ui/feria-badge';

export default function ProductDetailContext() {
    return (
        <>
            <section className="w-full bg-surface-container-low px-6 py-5 lg:px-12">
                <div className="mx-auto flex max-w-7xl flex-col justify-between gap-4 md:flex-row md:items-center">
                    <Breadcrumb className="font-label text-[13px] text-on-surface-variant">
                        <BreadcrumbList className="flex-wrap gap-2 text-on-surface-variant sm:gap-2">
                            <BreadcrumbItem className="gap-1.5">
                                <BreadcrumbLink
                                    className="flex items-center gap-1.5 text-on-surface-variant hover:text-primary"
                                    data-path="recorrer-feria"
                                    href="#"
                                >
                                    <span className="material-symbols-outlined text-[16px]">
                                        storefront
                                    </span>
                                    <span>Feria Ikigai</span>
                                </BreadcrumbLink>
                            </BreadcrumbItem>
                            <BreadcrumbSeparator className="text-outline-variant">
                                /
                            </BreadcrumbSeparator>
                            <BreadcrumbItem>
                                <BreadcrumbLink
                                    className="text-on-surface-variant hover:text-primary"
                                    data-path="categorias"
                                    href="#"
                                >
                                    Activos Digitales &amp; Recursos
                                </BreadcrumbLink>
                            </BreadcrumbItem>
                            <BreadcrumbSeparator className="text-outline-variant">
                                /
                            </BreadcrumbSeparator>
                            <BreadcrumbItem className="min-w-0">
                                <BreadcrumbPage className="max-w-[260px] truncate font-semibold text-on-surface sm:max-w-md">
                                    Guía Maestra de Tintes Naturales
                                </BreadcrumbPage>
                            </BreadcrumbItem>
                        </BreadcrumbList>
                    </Breadcrumb>
                    <FeriaBadge
                        className="self-start rounded-full bg-primary/10 px-3.5 py-1.5 font-label text-[12px] font-semibold tracking-wider text-primary uppercase md:self-auto"
                        variant="category"
                    >
                        <span className="material-symbols-outlined text-[16px]">
                            bolt
                        </span>
                        Activo Digital · Descarga Instantánea
                    </FeriaBadge>
                </div>
            </section>
            <section className="w-full bg-surface-container-lowest px-6 py-3.5 lg:px-12">
                <div className="mx-auto flex max-w-7xl items-center justify-between gap-4">
                    <div className="flex flex-wrap items-center gap-3 text-[13px] text-on-surface">
                        <span className="flex items-center gap-1.5 font-medium text-tertiary">
                            <span className="material-symbols-outlined text-[18px]">
                                verified
                            </span>
                            Acceso instantáneo de por vida + Actualizaciones
                            libres
                        </span>
                        <span className="hidden text-outline-variant sm:inline">
                            •
                        </span>
                        <span className="hidden items-center gap-1.5 text-on-surface-variant sm:flex">
                            <span className="material-symbols-outlined text-[18px]">
                                package_2
                            </span>
                            Sin costo de envío ni esperas logísticas
                        </span>
                        <span className="hidden text-outline-variant lg:inline">
                            •
                        </span>
                        <span className="hidden items-center gap-1.5 text-on-surface-variant lg:flex">
                            <span className="material-symbols-outlined text-[18px]">
                                devices
                            </span>
                            Apto para iPad, GoodNotes, Tabletas y Lectores de
                            PDF
                        </span>
                    </div>
                    <a
                        className="shrink-0 font-label text-[12px] font-semibold tracking-wide text-primary uppercase hover:underline"
                        href="#especificaciones"
                    >
                        Ver Fichas Técnicas
                    </a>
                </div>
            </section>
        </>
    );
}
