import { ProductCard } from '@/components/ui/product-card';
import type { ProductCardProps } from '@/components/ui/product-card';

const explorerProducts: ProductCardProps[] = [
    {
        variant: 'catalog',
        image: {
            alt: 'Hand-poured beeswax candle in raw terracotta vessel on neutral background',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAYHPLJCvlv55soUhc7fYpbmvI_SXoGG5TrMYmh9huLb9Cae6AnpswpGy6drHZBDHpzVpVegOcorh5x_LRkQWpKipmSVbPwHf2ryhIkb0sFdIrZoKbmPzhmq-2SWoc8HLj25zYkcghFNMK2TT4yOTB3VxTUt6y89yFTcCAljcZAxAcKeMr1WxzhkTM91TKcaWhP567np8O-GRXhws2pWxr0GQuvs8YXnrpxXlwVwx1BJG-gmEP91P_brg',
        },
        productType: 'physical',
        badgeLabel: 'FÍSICO',
        seller: 'Por Cera Sagrada',
        title: 'Vela Cera de Abejas en Vasija',
        price: '$12.500 CLP',
        availability: {
            label: '5 disp.',
            tone: 'muted',
        },
    },
    {
        variant: 'catalog',
        image: {
            alt: 'Artistic botanical calendar illustration sheets mockup for desktop and print download',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAfUQO3dZRXwWi1bFU2vvj19taYzHuOpBvlXKrvRiT3XkDpDPlrtAEdvpS8_c3pSALdTwxJOuOCAJlUYeCwZoPQKNbmFL7kHBBM0ncwF94jjWJ_X40XNwkGiwjEisMZp5anUjkt9AgTFzSwysYbFwF6qw9P03Jte8fbgh7atBj8ZVn1i3oQAbX7rJRpd_Tmwi-TiD28pTZb4P-_LuC7dJXqXjOJcbWdG-J4OugT6oRJtMX2BmMQ_OFvNg',
        },
        productType: 'digital',
        badgeLabel: 'DIGITAL',
        seller: 'Por Estudio Bosquecillo',
        title: 'Calendario Botánico Imprimible',
        price: '$8.900 CLP',
        availability: {
            label: 'Descarga',
            tone: 'secondary',
        },
    },
    {
        variant: 'catalog',
        image: {
            alt: 'Handmade wool knit cozy balaclava in soft moss green wool lying on linen',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDokBelGPMsO4P9ayGaiNwDTPdiNBqPeZdIx-I4J9HHRC_00YFEV3tsvqZWmUCSI1bbZINru_bF3UovOkA809SRpBnboXgmgHg46eghPwlUsVEqZV3Y52_H7oCI6NnUNKL_iQkIv-XCBD6-RqkEuoJ4iO8lJ-QzieiSm4j19J4NcjzzLr1Qw-NBiDyUsFB8j_7JF4m6AAhOjcm96KYL_iI9c0U-AsgBTqMVB_Z85S_4XAhhJtj5Gbs2yA',
        },
        productType: 'physical',
        badgeLabel: 'FÍSICO',
        seller: 'Por Taller Oveja Negra',
        title: 'Balaclava Lana Merino Musgo',
        price: '$32.000 CLP',
        availability: {
            label: '2 disp.',
            tone: 'muted',
        },
    },
    {
        variant: 'catalog',
        image: {
            alt: 'Sculptural large ceramic floor vase in textured natural coarse clay',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCV5CfXRJfKinmdM1hBZhYF4wpCJEb4t3_xP92h-y_JaTKEAM-1xKjlRjQ3Gjamfe8Kn446Gk7Bo6EmctYO2SwFd8bmlrBNMuFDe_WxM-1h8eA_lB2qSq1lcKEOPQjA2PhEDBbqN4xavu7UmoJxf_0Hbif2SuvFb0Cqmtlof3ZIW5g09PqMuiXy-QnWp-lH-L8mtvPMLrCtw8ry9r7vataF7JnnssoScSDgXfUKUVJgexjNogu8GFzBFQ',
        },
        productType: 'physical',
        badgeLabel: 'FÍSICO',
        seller: 'Por Escultura Taller Sur',
        title: 'Vasija Gigante Ocre (Pieza #03)',
        price: '$85.000 CLP',
        availability: {
            label: 'Exclusiva',
            tone: 'tertiary',
        },
    },
];

export default function ProductExplorer() {
    return (
        <section className="mx-auto w-full max-w-7xl px-6 py-20 lg:px-12">
            <div className="flex flex-col gap-8">
                <div className="flex flex-col gap-2">
                    <span className="font-label-sm text-label-sm font-bold tracking-widest text-primary uppercase">
                        Catálogo Vivo
                    </span>
                    <h2 className="font-headline-lg text-headline-lg text-on-surface">
                        Explora piezas según tu presupuesto
                    </h2>
                    <p className="font-body-md text-body-md text-on-surface-variant">
                        Filtra obras por rango de valor y tipo de formato para
                        encontrar exactamente lo que resuena contigo.
                    </p>
                </div>
                <div className="flex flex-col items-start justify-between gap-4 rounded-2xl bg-surface-container-low p-4 lg:flex-row lg:items-center">
                    <div className="flex flex-wrap items-center gap-2">
                        <button className="rounded-full bg-on-surface px-4 py-2 font-title-md text-body-sm text-surface-container-lowest shadow-sm transition-all">
                            Todos los precios
                        </button>
                        <button className="rounded-full bg-surface-container-lowest px-4 py-2 font-title-md text-body-sm text-on-surface transition-all hover:bg-surface-container-high">
                            Menos de $15.000
                        </button>
                        <button className="rounded-full bg-surface-container-lowest px-4 py-2 font-title-md text-body-sm text-on-surface transition-all hover:bg-surface-container-high">
                            $15.000 - $35.000
                        </button>
                        <button className="rounded-full bg-surface-container-lowest px-4 py-2 font-title-md text-body-sm text-on-surface transition-all hover:bg-surface-container-high">
                            $35.000 - $70.000
                        </button>
                        <button className="rounded-full bg-surface-container-lowest px-4 py-2 font-title-md text-body-sm text-on-surface transition-all hover:bg-surface-container-high">
                            Colección +$70.000
                        </button>
                    </div>
                    <div className="flex items-center rounded-xl bg-surface-container-lowest p-1">
                        <button className="rounded-lg bg-surface-container px-3 py-1.5 font-label-md text-label-md text-on-surface">
                            Todos
                        </button>
                        <button className="rounded-lg px-3 py-1.5 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high">
                            Solo Físicos
                        </button>
                        <button className="rounded-lg px-3 py-1.5 font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high">
                            Solo Digitales
                        </button>
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    {explorerProducts.map((product) => (
                        <ProductCard key={product.title} {...product} />
                    ))}
                </div>
            </div>
        </section>
    );
}
