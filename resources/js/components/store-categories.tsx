import { CategoryCard } from '@/components/ui/category-card';
import type { CategoryCardProps } from '@/components/ui/category-card';

const storeCategories: CategoryCardProps[] = [
    {
        href: '#',
        image: {
            alt: 'Artisanal ceramic tableware, terracotta mugs and raw glazed bowls staged gracefully on a natural linen cloth with muted warm daylight',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDVtSOobOrQVnRc2dFgMkf0a0htmbN_BYDjKtDvYkV9lAQYvX1QEaJyUPFcq0jEhTCAeJC1WO9S0nAW20Wl4cvSmwRwyYfffUd8ZJ-Na13nuRtAj2KOgg3V82Z1xImC1uu87AJDRkMgyh6QbJp_SBWK-agAk3FLJ9wlHZ17Zbmac35pulpCEv8Dp-EXSeOusgg-XomxgfEAcA3Dj1wSPcWVkMgOOA6h9eYd5nglJpb899I1KMH0FC5SrQ',
        },
        standCount: 28,
        icon: 'water_drop',
        title: 'Cerámica & Barro',
        description:
            'Piezas modeladas al torno y horneadas a fuego lento con esmaltes minerales no tóxicos.',
        accent: 'primary',
    },
    {
        href: '#',
        image: {
            alt: 'Hand-bound botanical notebooks, pressed wildflower greeting cards, and fountain pens placed on an oak workbench',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBUsmTCAk34tDCAyjQ07dJBKbVjfgNWrQtl7X9FVS9sh1i7NH01n45WSa9m_iniz239MReCcn2PYNcbIN9VKQQBVL4zfJWB3N01iTw-BPTJTCXYS8mOy_4pCdV6kZGsqdoJ6lbTuCmC9kcOv1wLYDc_vhLEf8pey6SepdCLZyv1hxQ6DdCDMtfOvxieyIWp6VCfRcEXo2KH_FqamwVe8j06KoW98S35ZmC1rmMkwe71TP-Z-w95aLM_xw',
        },
        standCount: 19,
        icon: 'spa',
        title: 'Estudios Botánicos & Papelería',
        description:
            'Prensas botánicas de madera nativa, libretas cosidas a mano y láminas botánicas de autor.',
        accent: 'secondary',
    },
    {
        href: '#',
        image: {
            alt: 'Natural linen textiles, hand-dyed scarves with eucalyptus and onion skins, hung over a rustic timber wooden rack in sunlit atelier',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCEKSdu1JJ4lMPX0oZQAZXVEprWN3HBcxRnddamcQ1C1QfFD5o6k6vLBfjz4HLMIhq3ELYaywmfEbu4ze5UqLl_Zro1Zmp_hbl8bj_U4k1sXhtuDSqAmk-ozI1ulNLfRPzsvOQVKDB-RcKzLDNfGJTxdCqNocaTBHTHRowo-2QI_Su491dnRVBkv4SR-W0t8xJi8zrHwB-YMqHSnb5FNTiaqAY8izH_gHtVEQSkm3uVjjdVMmHlbRMa3g',
        },
        standCount: 24,
        icon: 'texture',
        title: 'Diseño Textil & Telar Consciente',
        description:
            'Prendas lentas, hilados de oveja libre de crueldad y tinturas con corteza y flora nativa.',
        accent: 'tertiary',
    },
    {
        href: '#',
        image: {
            alt: 'Minimalist creator workspace showing an iPad with Procreate botanical illustration brushes, typography swatches, and clean aesthetic workspace',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC_h8TD6PX-c30fO75URTfG3e_D44IF7nCV_fgM-ZMxrFNpmOsQxwJZfEPKySQw-9GWfrD8TQQvzaDzu3LsYBuToDahJlLkjBQHfM6YLJghDaKGCAtjpx-9po-eVALKCseavqn_zA9HcHAp4Eq-jqs-xRAJO3A1f4atBowXfzhtELI1smjsiN3fh96i8jLrMS8_epFvPyrKVoslQqZNCXxZ4vqkNboQqNPARKKHgu0o_FOdHg7cs-aZaw',
        },
        standCount: 32,
        icon: 'layers',
        title: 'Activos Digitales & Recursos',
        description:
            'Paletas de color de autor, pinceles Procreate artesanales, plantillas Notion y guías de oficio.',
        accent: 'primary',
    },
    {
        href: '#',
        image: {
            alt: "Handmade oxidized sterling silver rings, raw tourmaline stones, and goldsmith tools resting on leather jeweler's bench",
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC5BT1OvppoQ6WF0Zes8o-zEcQPWcD8Lzdt6iiDQr665ReFu8dwLlQII0lYCFCV4vPGQCpMoJ5t02qm00mjTP16pFfeZh1yo_k_bZn7JGFnRfJQb-14IuHCbz9I5mANEIUnB43EVrq1A-CNW1CZ6iF3VYFTG28kPFJMX9rObG6pxO8grbB69WbqDUNdNRpjkQC_DbDTsxos-RVhNe305zcc--yS2MKO7oUz0iBV37hthp09OV3lzO89xQ',
        },
        standCount: 21,
        icon: 'diamond',
        title: 'Joyería de Autor & Metales',
        description:
            'Plata 950 reciclada, piedras en bruto sin tallar y orfebrería de inspiración ancestral.',
        accent: 'surface',
    },
    {
        href: '#',
        image: {
            alt: 'Cold process organic soaps with rosemary sprigs, dark amber glass dropper bottles, and clay powder on a clean travertine stone slab',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA5DnR1i7IYlnSFt_BcnRwrHkYlXO8iHs5zDkQRS0GIBbIXIItjDDhe_d2Yrz2DadDQkHKMeS55-NhtIP_9AY70nPkEiWUnrtn_JwHsXR8w3vfZuMTRJ4zSjBB5oJPb-MdIiLPb6m-I_Fa2VL9uQ9QNsELe5FosVFZihWGiY7J4EVQBeGAcLWpx1gZ-Gf-nPavR1_8Y0ViCLcXpw2KKaqlIjLeKNyYWqori6y1dNpypHDn0dkhuX2e2Uw',
        },
        standCount: 18,
        icon: 'science',
        title: 'Cosmética Botánica & Alquimia',
        description:
            'Jabonería en frío, hidrolatos destilados en alambique de cobre y ungüentos orgánicos.',
        accent: 'secondary',
    },
];

export default function StoreCategories() {
    return (
        <section
            className="mx-auto w-full max-w-7xl px-6 py-20 lg:px-12"
            id="recorrer-puestos"
        >
            <div className="mb-12 flex flex-col justify-between gap-space-md md:flex-row md:items-end">
                <div className="flex flex-col gap-space-xs">
                    <span className="font-label-sm text-label-sm font-bold tracking-widest text-primary uppercase">
                        Pasear por oficio
                    </span>
                    <h2 className="font-headline-lg text-headline-lg text-on-surface">
                        Recorre por tipo de stand
                    </h2>
                    <p className="font-body-md text-body-md text-on-surface-variant">
                        Cada tienda virtual es un atelier independiente con su
                        propia voz, filosofía y ritmo de producción.
                    </p>
                </div>
                <div className="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
                    <span>6 categorías seleccionadas</span>
                    <span className="material-symbols-outlined text-base">
                        filter_vintage
                    </span>
                </div>
            </div>
            <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                {storeCategories.map((category) => (
                    <CategoryCard key={category.title} {...category} />
                ))}
            </div>
        </section>
    );
}
