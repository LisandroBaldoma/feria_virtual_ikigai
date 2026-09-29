import { ProductCard } from '@/components/ui/product-card';

const relatedProducts = [
    {
        image: {
            alt: 'Tazas de té en gres',
            dataAlt:
                'Pair of minimalist handcrafted stoneware tea cups with volcanic ash glaze in subtle cream and ochre tones on clean white studio pedestal',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuALqIRQrtqWysd8yTgPpUMeofyxRVnQDNPUYQy8t54dNpacSgylODF6u8ysMwP6VGpvqxBplOHcpUlEHv3wBaFa3dwpPh52pms0nrT3bTgbkXZIsFpCdjMriAIUlMw7yTOrSoJ37sKClH1LQmJ9XXBscg2Z04VBYrzW4SY461P4GfTu2VZWslQ9xEcShxGllC5wp_7u5sd-huSkLhyhv4eoDGYCzpwkhYduuDBkfYpI3PlHmkR7-rmL_w',
        },
        name: 'Dúo Tazas de Té',
        price: '$16.500',
        title: 'Dúo Tazas de Té en Gres Volcánico',
    },
    {
        image: {
            alt: 'Florero Acanalado',
            dataAlt:
                'Sculptural tall ribbed stoneware vase with organic matte volcanic ash texture holding a dried branch, architectural lighting',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAYlSIBBiM3l7FXLwluZRVTWqswphSq8ClFW3nhlovPSAEJ2u1ArvfO8gbPFPRJWzBuloF39piaBZYV2GkYUxwb8pNQpKpiTJEyTg1OHw8rALZIKlgpzpQrSCi3kOksBz1JLN5gDJTggtCPhkvdXZGKxL_OKp49CRc8rqLqNdT9gA-LjnJONGSbMQXQsHz8q-nAo5goqhF_Wc1roX8ypeUIS9gSE9mQoaDOAgym8TApX5gEZZjK7crTEg',
        },
        name: 'Florero Escultórico',
        price: '$34.000',
        title: 'Florero Escultórico Acanalado',
    },
    {
        image: {
            alt: 'Cuenco Chawan para Matcha',
            dataAlt:
                'Traditional Japanese style chawan matcha bowl handcrafted in rough Chilean southern clay with ochre ash pooling in the interior',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCcVPMXo282Ebxi7XUlS5C-VBIgO3RsmeOm3gyvqDPYVjyfOKPp5WGhKvU434Ht9wesWPv510ar-oZ1uh-wgEolZjb7HMGVT7nl-H90qJP0MU01P424U4p5diu6DNVq3c03FmBdHgGsdI2rnW__iuCBaXtqqsOPDsmNg1sUXKmoh681Ula8DdPmtHJ6pb2G2nwkssJD5kacmt8dY8P250eYpycDb5RhkREtIf6SYghdE3JvxRWnrB9HSw',
        },
        name: 'Cuenco Chawan',
        price: '$22.000',
        title: 'Cuenco Chawan de Ceremonia',
    },
    {
        image: {
            alt: 'Bandeja de Arcilla y Cuarzo',
            dataAlt:
                'Oblong organic clay serving platter with raw edge and subtle mineral speckling, contemporary artisanal craft table setting',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC0w59GnAxKdAcU8eLp04EOAlFFZakRNPZCkqU5MaVb-PLUWufEal36FW4VE6wbUJ7Wv_TmKkE3FQEserxxoozgnc-RNkkmeXP2yAdwJSBlkkn481eqAMoEpZmA57m1sYrxlp_rsdRR8myzb7V0X7gUuzxgCTWqbRs_NPj7fL0T6-WA-3mmb1-5F5l1s42wb7nwKMt3nQ9Fy_-jiEVTQw9VRD_hHwJwycrgC6xk1EZ2x-OEwgHApePbBw',
        },
        name: 'Bandeja de Servicio',
        price: '$25.500',
        title: 'Bandeja de Servicio Arcilla & Cuarzo',
    },
];

interface PhysicalRelatedProductsSectionProps {
    onNotify: (message: string) => void;
}

export default function PhysicalRelatedProductsSection({
    onNotify,
}: PhysicalRelatedProductsSectionProps) {
    return (
        <section className="w-full py-16">
            <div className="mx-auto flex max-w-7xl flex-col gap-8 px-6 lg:px-12">
                <div className="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <span className="font-label text-[11px] font-bold tracking-wider text-primary uppercase">
                            Colección complementaria
                        </span>
                        <h2 className="font-headline text-[26px] font-semibold text-on-surface lg:text-[30px]">
                            Más piezas de este taller y cerámica afín
                        </h2>
                    </div>
                    <a
                        className="inline-flex items-center gap-1 font-body text-[13.5px] font-medium text-primary hover:underline"
                        data-path="stands-y-tiendas"
                        href="#"
                    >
                        <span>Ver catálogo completo del Stand #48</span>
                        <span className="material-symbols-outlined text-[16px]">
                            arrow_forward
                        </span>
                    </a>
                </div>
                <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    {relatedProducts.map((product) => (
                        <ProductCard
                            key={product.title}
                            actionIcon="add_shopping_cart"
                            actionLabel="Agregar a la cesta"
                            badgeLabel="Pieza Física"
                            currency="CLP"
                            image={product.image}
                            price={product.price}
                            productType="physical"
                            seller="Taller Barro Mestizo"
                            title={product.title}
                            variant="relatedPhysical"
                            onAction={() =>
                                onNotify(`${product.name} agregado a tu cesta`)
                            }
                        />
                    ))}
                </div>
            </div>
        </section>
    );
}
