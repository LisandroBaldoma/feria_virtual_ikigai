import {
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
    BreadcrumbList,
    BreadcrumbPage,
    BreadcrumbSeparator,
} from '@/components/ui/breadcrumb';
import { FeriaBadge } from '@/components/ui/feria-badge';

const guarantees = [
    {
        icon: 'inventory_2',
        label: 'Embalaje biodegradable reforzado',
        tone: 'text-primary',
    },
    {
        icon: 'local_shipping',
        label: 'Despacho 3–5 días desde Pucón',
        tone: 'text-primary',
    },
    {
        icon: 'workspace_premium',
        label: 'Certificado firmado por autora',
        tone: 'text-tertiary',
    },
    {
        icon: 'published_with_changes',
        label: 'Llegada intacta o reposición íntegra',
        tone: 'text-primary',
    },
];

export default function PhysicalProductDetailContext() {
    return (
        <>
            <section className="w-full border-b border-surface-container-high/60 bg-surface">
                <div className="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-3.5 lg:px-12">
                    <Breadcrumb>
                        <BreadcrumbList className="flex items-center gap-2 font-body text-[13px] text-on-surface-variant">
                            <BreadcrumbItem className="gap-2">
                                <BreadcrumbLink
                                    className="text-on-surface-variant transition-colors hover:text-primary"
                                    data-path="recorrer-feria"
                                    href="#"
                                >
                                    Feria Ikigai
                                </BreadcrumbLink>
                            </BreadcrumbItem>
                            <BreadcrumbSeparator className="font-light text-outline-variant">
                                /
                            </BreadcrumbSeparator>
                            <BreadcrumbItem className="gap-2">
                                <BreadcrumbLink
                                    className="text-on-surface-variant transition-colors hover:text-primary"
                                    data-path="categorias"
                                    href="#"
                                >
                                    Cerámica &amp; Barro
                                </BreadcrumbLink>
                            </BreadcrumbItem>
                            <BreadcrumbSeparator className="font-light text-outline-variant">
                                /
                            </BreadcrumbSeparator>
                            <BreadcrumbItem className="min-w-0">
                                <BreadcrumbPage className="max-w-[200px] truncate font-medium text-on-surface sm:max-w-none">
                                    Jarra Escultórica en Gres
                                </BreadcrumbPage>
                            </BreadcrumbItem>
                        </BreadcrumbList>
                    </Breadcrumb>
                    <div className="flex items-center gap-3">
                        <FeriaBadge
                            className="rounded-full bg-tertiary-fixed px-3 py-1 font-label text-[11px] font-bold tracking-wider text-on-tertiary-container uppercase"
                            variant="category"
                        >
                            <span className="material-symbols-outlined text-[14px]">
                                token
                            </span>
                            Pieza física artesanal · Serie limitada (1/8)
                        </FeriaBadge>
                        <span className="hidden items-center gap-1 font-body text-[12px] text-secondary sm:inline-flex">
                            <span className="material-symbols-outlined text-[15px] text-tertiary">
                                verified
                            </span>
                            Stand Oficial #48
                        </span>
                    </div>
                </div>
            </section>
            <section className="w-full bg-surface-container-low">
                <div className="mx-auto max-w-7xl px-6 py-3 lg:px-12">
                    <div className="grid grid-cols-2 gap-4 font-body text-[12.5px] text-on-surface-variant md:grid-cols-4">
                        {guarantees.map((guarantee) => (
                            <div
                                key={guarantee.label}
                                className="flex items-center gap-2"
                            >
                                <span
                                    className={`material-symbols-outlined text-[18px] ${guarantee.tone}`}
                                >
                                    {guarantee.icon}
                                </span>
                                <span>{guarantee.label}</span>
                            </div>
                        ))}
                    </div>
                </div>
            </section>
        </>
    );
}
