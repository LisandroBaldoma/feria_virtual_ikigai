import { toast } from 'sonner';

import { ProductCard } from '@/components/ui/product-card';

const relatedProducts = [
    {
        badge: 'Digital',
        image: {
            alt: 'Colección Pinceles Botánicos',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuChXLxN5Gzaz-5JTcGi6FNT4uy8ieH5_4B0cPTJQfYjanLiTEa6v7hdSCRG2jexWImcGmYtqVeaoks4pTYMSb5C4KgnmMWgqkqC-uo9RTAv8D4vYCuv5Lb9avJuZq48o5fPwln1QqUsnhzZ8mPsHSsyYIifyqF5lqh1T6_r17emkQ0GCceUiNUJu9C-743UUZfB6peS9MJggpuP2Btmh5eJPEwGayUPUf8iB4fXMfmgbPF5cH-xoa9E6g',
        },
        name: 'Pinceles Procreate',
        price: '$11.900 CLP',
        productType: 'digital' as const,
        seller: 'Estudio Telar & Bosque',
        title: 'Pinceles & Texturas de Pigmento Natural para Procreate',
    },
    {
        badge: 'Físico · Pieza Única',
        image: {
            alt: 'Madeja de Lana Teñida a Mano',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFK0eayGtKCGW86cByyzLJ66vF8yhITUe9zECJA6lQ_Pfnmw_J7XaG7d1HH_A3cRdGPLluOo95FtoJq6aG1yqT_hmI0cFDkTVletewFk9N0NmR36TdbKChrU-GY2kamC6e1FNYvLBr_ORYsZiajNGo3LwRbLT4J0rSjsQpeTjGIFmDaTvBPMLTzTv-FSzxotRdcftY8WSvCZNsu0duoRMfZCJJKetBP3IfKFvDjJyMEIG0mZUSU1E0Fg',
        },
        name: 'Madeja Merino Roble',
        price: '$22.000 CLP',
        productType: 'physical' as const,
        seller: 'Estudio Telar & Bosque',
        title: 'Madeja de Lana Merino teñida con Corteza de Roble (200g)',
    },
    {
        badge: 'Digital',
        image: {
            alt: 'Plantilla Cuaderno de Campo',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDAJyIynhcK6VgcJDuVVClaNxW5JG-YzoL1k8v7LCxzHklJxTwMa9fXRhPN6csceqiSvv_styAMan5ZY7XBTYnXBHtkm3l_VFU6x-_TJ9BO0ErCu2Y9TOFcCxb24Y1uXqvniTjXws5PftWcd2cjQKP-yluLR9MpXWLaUofWj9iuGfcdjxmc0ttgAswSBW23GNjAxd2hmofcNGEKdODVNpLJ5ZMLowTPff2uE_PwnArhWzUNdUwJcEdqRA',
        },
        name: 'Cuaderno de Campo',
        price: '$8.500 CLP',
        productType: 'digital' as const,
        seller: 'Taller Botánica Austral',
        title: 'Cuaderno Digital de Campo & Herbario para iPad (PDF)',
    },
    {
        badge: 'Digital · Video 4K',
        image: {
            alt: 'Masterclass en Video',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDlAB-aTzDViscD3mmhhgvEe_j68iwFVH3uThrEZS-jgOadrTT38OxxVCiHxB2Qu7EpXPBw4c8NCTKRwJs-qba5hCR3K84KTJBTR3TEM11HtNmrlLW10REXnz0uVRak7JGdApQLf_gXvRXCC7QhHj9M4AFNri04haOwfHC6x3RLk-TXPCENyz8R-5_cqrCswrueu20tcePjJ30zq90BSFWZHVHiAGhtGz0v6U3PtFt-80tN2kSgqPHu6w',
        },
        name: 'Masterclass Caldero',
        price: '$24.000 CLP',
        productType: 'digital' as const,
        seller: 'Estudio Telar & Bosque',
        title: 'Masterclass Grabada: Alquimia de Tintes en Caldero de Cobre',
    },
];

export default function RelatedProductsSection() {
    return (
        <section className="w-full bg-surface px-6 py-16 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col gap-10">
                <div className="flex items-end justify-between">
                    <div>
                        <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                            Taller &amp; Comunidad
                        </span>
                        <h2 className="mt-1 font-headline text-[26px] font-semibold text-on-surface">
                            Más del Creador y Recursos Afines
                        </h2>
                    </div>
                    <a
                        className="hidden items-center gap-1 font-label text-[13px] font-semibold text-primary hover:underline sm:inline-flex"
                        data-path="stands-y-tiendas"
                        href="#"
                    >
                        Explorar todo el stand #18
                        <span className="material-symbols-outlined text-[16px]">
                            arrow_forward
                        </span>
                    </a>
                </div>
                <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    {relatedProducts.map((product) => (
                        <ProductCard
                            key={product.title}
                            actionIcon="add"
                            actionLabel={`Agregar ${product.name} a la cesta`}
                            badgeLabel={product.badge}
                            image={product.image}
                            price={product.price}
                            productType={product.productType}
                            seller={product.seller}
                            title={product.title}
                            variant="related"
                            onAction={() =>
                                toast(
                                    `${product.name} (${product.price}) agregado a la cesta.`,
                                )
                            }
                        />
                    ))}
                </div>
            </div>
        </section>
    );
}
