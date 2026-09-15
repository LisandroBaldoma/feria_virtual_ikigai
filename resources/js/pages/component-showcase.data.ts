import type { CategoryCardProps } from '@/components/ui/category-card';
import type { ProductCardProps } from '@/components/ui/product-card';
import type { StoreCardProps } from '@/components/ui/store-card';

export const showcaseCategories: CategoryCardProps[] = [
    {
        href: '#',
        image: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDVtSOobOrQVnRc2dFgMkf0a0htmbN_BYDjKtDvYkV9lAQYvX1QEaJyUPFcq0jEhTCAeJC1WO9S0nAW20Wl4cvSmwRwyYfffUd8ZJ-Na13nuRtAj2KOgg3V82Z1xImC1uu87AJDRkMgyh6QbJp_SBWK-agAk3FLJ9wlHZ17Zbmac35pulpCEv8Dp-EXSeOusgg-XomxgfEAcA3Dj1wSPcWVkMgOOA6h9eYd5nglJpb899I1KMH0FC5SrQ',
            alt: 'Cerámica artesanal sobre una mesa de lino',
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
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBUsmTCAk34tDCAyjQ07dJBKbVjfgNWrQtl7X9FVS9sh1i7NH01n45WSa9m_iniz239MReCcn2PYNcbIN9VKQQBVL4zfJWB3N01iTw-BPTJTCXYS8mOy_4pCdV6kZGsqdoJ6lbTuCmC9kcOv1wLYDc_vhLEf8pey6SepdCLZyv1hxQ6DdCDMtfOvxieyIWp6VCfRcEXo2KH_FqamwVe8j06KoW98S35ZmC1rmMkwe71TP-Z-w95aLM_xw',
            alt: 'Papelería botánica artesanal',
        },
        standCount: 19,
        icon: 'spa',
        title: 'Estudios Botánicos & Papelería',
        description:
            'Prensas botánicas de madera nativa, libretas cosidas a mano y láminas botánicas de autor.',
        accent: 'secondary',
    },
];

export const showcaseProducts: ProductCardProps[] = [
    {
        variant: 'featured',
        image: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuARxgw_QkHSUNsIL4bYB5rVzPY-N4ogB7Dzb3YJoNSxb9TeV4PMLZJgTi2dmmZKxdtOJzpqr8yfsd-s-vrA8IedQQFQR8hLvoR9oEDlU9DWadH74ZXTMN_-fPzVrP8QZc3J3clsjbZmHR3QWWmNDT-H-X_NZfpLRgnREk-ebB4dahV1zCXjf9JY7eTIcOaikRj9A-kaxJ2kSMh6X-8wKCaBw23ZaWLtgWKf-_3eWJnDvdtpL3zkAZQ1tQ',
            alt: 'Jarra de terracota hecha a mano',
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
        variant: 'catalog',
        image: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAfUQO3dZRXwWi1bFU2vvj19taYzHuOpBvlXKrvRiT3XkDpDPlrtAEdvpS8_c3pSALdTwxJOuOCAJlUYeCwZoPQKNbmFL7kHBBM0ncwF94jjWJ_X40XNwkGiwjEisMZp5anUjkt9AgTFzSwysYbFwF6qw9P03Jte8fbgh7atBj8ZVn1i3oQAbX7rJRpd_Tmwi-TiD28pTZb4P-_LuC7dJXqXjOJcbWdG-J4OugT6oRJtMX2BmMQ_OFvNg',
            alt: 'Calendario botánico imprimible',
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
];

export const showcaseStores: StoreCardProps[] = [
    {
        variant: 'featured',
        name: 'Casa Arcilla',
        description:
            'Vajilla de gres utilitaria pensada para rituales cotidianos de té y café.',
        href: '#',
        banner: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD2DdEANh2KxOFVD33Wbok3P4_c18woUJu2__Hrw8tQhltgI0hmz8tvAlGVumEwZ_wmh-X8jP-OBzxs79zxDzlrAs8dfdxpVnUGXj5rX9SdWMJllWqCc95HycsRCxHSQEKBLYpZbTCg2xYHpxcSOPo9pYCwJlwMo8a0pGjsr4ZL1GTJQRGYMM2JKFzeBopgNoCW4yyyLnIAkubjcS4CKYqnCIZZwOMUbhPNbSComtuOaXBPr62DsPUtgA',
            alt: 'Taller de cerámica con vajilla secándose',
        },
        avatar: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA8FolXJmlwuihJlV-TaW6bwjCl8l96GaXkzr0VxPjNxO2PKU_i8wIRcbev-SPfWTaM0BJzWPnySKHYk8RfuimKUhNRaJjWwg6O8dnenbpurl7BDa0NweCW8QS_w9Ubw2XXT8neLjKZ1sfT8DQ67cDcc0XLBDAL_VKmjsnCijgZBYm1zUqSfAaiGQvH72NrUATq2mZjr8EuXcXjtCWf78gpFoQ5mbo4RDSae7RZo0v2-YAQ_YcjWW5Irg',
            alt: 'Ceramista en su taller',
        },
        location: 'Valparaíso',
        productPreviews: [
            {
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAlXb5bGAECBk_aYiHrdrHh0soD8pVpKpRyNx9sHwDH3PmMpUGRD83BxLaMneG59qHR62-UC6DVFSWp8ea9OTIJZ6z5CzXxCXJ5US_sYH9NDIYnVJ_xHJ9wQFgpmeqGDgH_hi8aLIlbuKuPvrmDnJkZ0hZFcxr_3hY_hWVmIzFvNgZ3DoPe6ZsMeOKw_DwozJ7ck-Z9fs0sMkzzJDSZhQUHtDoYCs04W0uTDvXcMfNhXumwFkZSio4Kqw',
                alt: 'Taza de espresso de cerámica',
            },
            {
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBHLwSBvG7oN2kdWgyBZuLEhximmr4yntokG9UCZZsnyYPz1odIhXkfzAjALZ2W7NpwTxvihnOz9EcrNkEO14zkcefwafWKClDX-FR4nfValw6p-qUoj2PXx5esGMuxeWKqSax_u2SaXcdtL3qHTuMrCCNkRQHPD-xdvNFFS_frsEN19CCZMAk1V-bvuyPYS01fK0fc8VSSSWITGtRfEhl3wwOAWETG6BrmwJG6lYNOGNN4ZzmwHcC1-Q',
                alt: 'Cuenco de gres',
            },
            {
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDcnQxcWrLudQWyh837daZ1ArHqqbzpw0C-MiU9rdNNHO0kI12UsZG1CXmtWVKfrKiKWH31Q5yGefERSRWVpnbx04D8md9r7hLAZWLD07TV3CdAia9FlUEPsC_dUAeuoTtt7sMw999TbnfkgLhOXj9ZAWRFS7nuUM-hyxHfqHKy4jpDbB20-IaF0jHJqi0HC846KKiVF2Uo6qlUoK_arq8s4o_CM0VFPtIW9E_vq2tdRW_Aexg3iIMTBg',
                alt: 'Jarro de arcilla con asa',
            },
        ],
    },
    {
        variant: 'ranked',
        name: 'Botica de los Andes',
        description: 'Cosmética sólida y herbolaria pura',
        href: '#',
        rank: 1,
        thumbnail: {
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCzQXLwqq0tZVQ5t_z0o73TUraCThI0gnUqXTJ8bmwVw9lSjMzf7m7fJgikt3VGjtTi83LwzrXn4fCpwlawH6_g6SKX3QvfZCxQ4Ucg8PvSyGOVf3NGCSGV0wdD-bKhU9rzFAbzl2f7JrhnCIt-liuv8aUHQ_L2LJA-mRACpcKqR7weXLvKdb0_oS9IPWu5C98d-YkdAsqmSzjTlUOLHDhYP9stdGKJI4p_QhhmgyqB0ZyUTr9U3q8WXg',
            alt: 'Jabones artesanales y aceites esenciales',
        },
        verified: true,
        shipmentsLabel: '480+ envíos felices',
        ratingLabel: '5.0 (132)',
    },
];
