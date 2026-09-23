import {
    ProductCard,
    type ProductCardProps,
} from '@/components/ui/product-card';

const featuredProducts: ProductCardProps[] = [
    {
        variant: 'featured',
        image: {
            alt: 'Handcrafted sculptural terracotta water pitcher with an organic curved handle against a clean warm ecru background',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuARxgw_QkHSUNsIL4bYB5rVzPY-N4ogB7Dzb3YJoNSxb9TeV4PMLZJgTi2dmmZKxdtOJzpqr8yfsd-s-vrA8IedQQFQR8hLvoR9oEDlU9DWadH74ZXTMN_-fPzVrP8QZc3J3clsjbZmHR3QWWmNDT-H-X_NZfpLRgnREk-ebB4dahV1zCXjf9JY7eTIcOaikRj9A-kaxJ2kSMh6X-8wKCaBw23ZaWLtgWKf-_3eWJnDvdtpL3zkAZQ1tQ',
        },
        productType: 'physical',
        badgeLabel: 'FÍSICO · Envío a mano',
        seller: 'Por Taller Lúcuma (Cerámica de Autor)',
        title: 'Jarra Escultórica Terracota',
        description:
            'Modelada con greda chilena de alta temperatura, apta para líquidos y decoración.',
        price: '$28.000 CLP',
        actionIcon: 'add_shopping_cart',
        favoriteLabel: 'Guardar Jarra Escultórica Terracota',
        actionLabel: 'Agregar Jarra Escultórica Terracota al carrito',
    },
    {
        variant: 'featured',
        image: {
            alt: 'Cover of an artisanal PDF digital handbook about natural plant dyes with clean editorial layout, swatch samples and botanical illustrations',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBnvvAwmHFLSp3sTBOPdHQ3uD4yLzUfuiOYnR0yK4A4KfGz6xmtqI_pIfT3oLpnS0Hj64s302_ITAG77z_E0Hw97fQmVRDi2FGktSBGzdohMarQgPgkiimTn9I9OiA8cTCPyXLp1rhP3H-ychw9-be1eJyAwIsXBc0oDyttQNoUM1ODBT6AURln5biPqUd1Ej65Sx6G1HefMtU6ruceqGDQaWB4ATI0WkZj8zNagOLmYycRYEM7rWBe1w',
        },
        productType: 'digital',
        badgeLabel: 'DIGITAL · Descarga inmediata',
        seller: 'Por Estudio Telar & Bosque',
        title: 'Guía Maestra de Tintes Naturales',
        description:
            '84 páginas en PDF interactivo con recetas, tiempos de mordentado y fichas de plantas.',
        price: '$16.500 CLP',
        actionIcon: 'bolt',
        favoriteLabel: 'Guardar Guía Maestra de Tintes Naturales',
        actionLabel: 'Descargar Guía Maestra de Tintes Naturales',
    },
    {
        variant: 'featured',
        image: {
            alt: 'Artisan silver molten textured ring with raw green tourmaline crystal photographed in macro shot over weathered dark wood',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCpJ50o6pkjdheMcxv7Vtydc3LlZQDgemg5H8jQ80e75m_kmQPAQIoAI5w1SbgL2owkGFVUs9TBvWXiIiOFxl966ziF4ar-ug4cxR643gSTF7VjmSF9bAN0OHuMh4Ga6kIYsa_u23UhqE7aOv6QyABJGzGIBM_d3vr1_o0djlL4UvmX1prDizz420Jvz5Oxc42nG_DJTzhDTsDNB6oBHDxJHH7VEtAzjxGA3ThVmGyGzfJr1Mol8L21Gw',
        },
        productType: 'physical',
        badgeLabel: 'FÍSICO · Pieza Única',
        seller: 'Por Orfebrería Cúmulo',
        title: 'Anillo Lava Plata Martillada',
        description:
            'Fundido a la cera perdida con plata 950 reciclada y pátina oxidada profunda.',
        price: '$42.000 CLP',
        actionIcon: 'add_shopping_cart',
        favoriteLabel: 'Guardar Anillo Lava Plata Martillada',
        actionLabel: 'Agregar Anillo Lava Plata Martillada al carrito',
    },
    {
        variant: 'featured',
        image: {
            alt: 'Digital illustration asset preview showing botanical leaves, paper textures and watercolor stamp brushes for creative software',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBHVELwyHy_TAiqQ1L92COOEX0ln3tUt3zUzN84GdaJIwv8wNygfFuI5ju_MWLrRXtmhAdxvIkRG_r2J4jwK8ALs2Yc2AwKswK1fcwVUzXFw30flObOW22rPuaaYyJL4zq5CixNDq3PSQYGu9yrwOyjD_W8awN4u3E9kq_YgN1KGTbVjEnFAWibmnidqJU_6gK5S-5bFCAodP5GMMYFtL3LgwZukmurMgZEIl0sj2NJk1RHclAN0CE0vg',
        },
        productType: 'digital',
        badgeLabel: 'DIGITAL · Pinceles & Texturas',
        seller: 'Por Estudio Gráfica Nómada',
        title: 'Colección Pinceles Herbarium',
        description:
            '45 pinceles artesanales para Procreate y Photoshop digitalizados desde tintas chinas.',
        price: '$14.000 CLP',
        actionIcon: 'bolt',
        favoriteLabel: 'Guardar Colección Pinceles Herbarium',
        actionLabel: 'Descargar Colección Pinceles Herbarium',
    },
];

export default function SellerFeaturedProducts() {
    return (
        <section className="w-full bg-surface-container px-6 py-20 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col gap-12">
                <div className="flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div>
                        <span className="font-label-sm text-label-sm font-bold tracking-widest text-primary uppercase">
                            Curaduría de la semana
                        </span>
                        <h2 className="font-headline-lg text-headline-lg text-on-surface">
                            Favoritos elegidos por los creadores
                        </h2>
                        <p className="mt-1 font-body-md text-body-md text-on-surface-variant">
                            Piezas insignia recomendadas y garantizadas
                            personalmente por quienes las diseñan y elaboran.
                        </p>
                    </div>
                    <a
                        className="inline-flex items-center gap-1 font-title-md text-title-md text-primary hover:underline"
                        href="#"
                    >
                        Ver todas las piezas
                        <span className="material-symbols-outlined text-base">
                            arrow_forward
                        </span>
                    </a>
                </div>
                <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    {featuredProducts.map((product) => (
                        <ProductCard key={product.title} {...product} />
                    ))}
                </div>
            </div>
        </section>
    );
}
