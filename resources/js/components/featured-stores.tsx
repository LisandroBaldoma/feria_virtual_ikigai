import { StoreCard } from '@/components/ui/store-card';
import type { StoreCardProps } from '@/components/ui/store-card';

const featuredStores: StoreCardProps[] = [
    {
        variant: 'featured',
        href: '#',
        name: 'Casa Arcilla',
        description:
            'Vajilla de gres utilitaria pensada para rituales cotidianos de té y café.',
        location: 'Valparaíso',
        banner: {
            alt: 'Artisan ceramic pottery workshop panoramic view with drying clay cups and sun rays through rustic window',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD2DdEANh2KxOFVD33Wbok3P4_c18woUJu2__Hrw8tQhltgI0hmz8tvAlGVumEwZ_wmh-X8jP-OBzxs79zxDzlrAs8dfdxpVnUGXj5rX9SdWMJllWqCc95HycsRCxHSQEKBLYpZbTCg2xYHpxcSOPo9pYCwJlwMo8a0pGjsr4ZL1GTJQRGYMM2JKFzeBopgNoCW4yyyLnIAkubjcS4CKYqnCIZZwOMUbhPNbSComtuOaXBPr62DsPUtgA',
        },
        avatar: {
            alt: 'Friendly male ceramist with dust on hands smiling at camera in his workshop',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA8FolXJmlwuihJlV-TaW6bwjCl8l96GaXkzr0VxPjNxO2PKU_i8wIRcbev-SPfWTaM0BJzWPnySKHYk8RfuimKUhNRaJjWwg6O8dnenbpurl7BDa0NweCW8QS_w9Ubw2XXT8neLjKZ1sfT8DQ67cDcc0XLBDAL_VKmjsnCijgZBYm1zUqSfAaiGQvH72NrUATq2mZjr8EuXcXjtCWf78gpFoQ5mbo4RDSae7RZo0v2-YAQ_YcjWW5Irg',
        },
        productPreviews: [
            {
                alt: 'Glazed ceramic espresso cup in speckled warm cream glaze',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAlXb5bGAECBk_aYiHrdrHh0soD8pVpKpRyNx9sHwDH3PmMpUGRD83BxLaMneG59qHR62-UC6DVFSWp8ea9OTIJZ6z5CzXxCXJ5US_sYH9NDIYnVJ_xHJ9wQFgpmeqGDgH_hi8aLIlbuKuPvrmDnJkZ0hZFcxr_3hY_hWVmIzFvNgZ3DoPe6ZsMeOKw_DwozJ7ck-Z9fs0sMkzzJDSZhQUHtDoYCs04W0uTDvXcMfNhXumwFkZSio4Kqw',
            },
            {
                alt: 'Stoneware small bowl with raw iron clay accents',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBHLwSBvG7oN2kdWgyBZuLEhximmr4yntokG9UCZZsnyYPz1odIhXkfzAjALZ2W7NpwTxvihnOz9EcrNkEO14zkcefwafWKClDX-FR4nfValw6p-qUoj2PXx5esGMuxeWKqSax_u2SaXcdtL3qHTuMrCCNkRQHPD-xdvNFFS_frsEN19CCZMAk1V-bvuyPYS01fK0fc8VSSSWITGtRfEhl3wwOAWETG6BrmwJG6lYNOGNN4ZzmwHcC1-Q',
            },
            {
                alt: 'Clay pouring vessel with organic handmade handle',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDcnQxcWrLudQWyh837daZ1ArHqqbzpw0C-MiU9rdNNHO0kI12UsZG1CXmtWVKfrKiKWH31Q5yGefERSRWVpnbx04D8md9r7hLAZWLD07TV3CdAia9FlUEPsC_dUAeuoTtt7sMw999TbnfkgLhOXj9ZAWRFS7nuUM-hyxHfqHKy4jpDbB20-IaF0jHJqi0HC846KKiVF2Uo6qlUoK_arq8s4o_CM0VFPtIW9E_vq2tdRW_Aexg3iIMTBg',
            },
        ],
    },
    {
        variant: 'featured',
        href: '#',
        name: 'Flora Silvestre',
        description:
            'Herbarios prensados en cristal y láminas giclée de flora nativa en peligro.',
        location: 'Frutillar',
        banner: {
            alt: 'Botanical illustration studio with watercolor pigments, dried eucalyptus hanging and art prints mounted on paper clips',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBYOS2p3RQqhNvkzILQ2FVIXvU1J1v3r-0i-7wNx3A-etTlQ9ADEkchGMAQc9_Wy4_xmCNIXzFMpfD4sF0A4YJKauR8o9cSmnS4ZjTN0pVSPdDQ0U1vW7ouO4pLMyPgtp19wDwP4rqDamQOf2Ja0QyIzZtcohUrgaR9190vJNDDkDppaK6avNDizs3wk4X7kqfZwsVGnGo_kxxjRoqhs4ln_OX3HMMb9nUi2kdy3E6r4FeqDSgF1I_BzA',
        },
        avatar: {
            alt: 'Botanical artist woman arranging dry pressed flowers with fine tweezers in bright room',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDSxJdyqK79wLFL4i7a1LWOgFSHSRi4QUlSuajhOwP7hWL3lI7B3r0JtQfLMBl8wTSpOXtsn6xEe99edVhqkFeXjSrp2Cm7b8SIoeOU7Zyve6aI5OAgSCFQfB1A4qAxCusEi-nhv35Wd7Cz9AFcJY8vhy1Kvdf72-go3z6XbuTCEcBcF5sdCW4GT6MpGoxsPxexVb8tdS_E5LSNG8Tm3LEKRBfAbBim3YVPoAVqv8Dsq6Rl0oSmJYR8Yg',
        },
        productPreviews: [
            {
                alt: 'Pressed fern framed between two clear glass panes with brass borders',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAK8LxynmTzyCz8Eu5B7MH0dyJlGrudL6iHt32dXMvM7uzCLA3JX_hVxIMILpx2RkX10gCm1Ic3RgCcGJUXZVKlfjYhb1zRe8fXOLXgvsCM10WGwFUkgRswJx7crGEOlD59ekI9HX7BUoo1O72tRdTJpCUIjfeEOm3tLFDZ_4S8kR4ykWhQvtlcx-CQLw7SDHI1BJvVV2R7UtpW_dvuxG5tlQDCm1YcKbhiQuZvwdeKp6C9H6MClxPpSQ',
            },
            {
                alt: 'High quality giclee print of native Patagonian wild mushrooms',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNsBvOhOlVkQp_ruIYlTfGmg9aQnYY0rw1iDGz18ax1aYX_61CBPWV9T56bXgr9rtuOatJbL99BkUulKcsi-JcuPTFvLhXWfXDLV2wT8LESgjPA7rLOFjRJPO-0G82_rW5J7p3QkyUC_U_8pwtcOxqhIhfiC2Mvh1SokS1oWC6lBjGal-P5KUpU0DMxOliMejzSzBOudOMc-FPOpX8jS7jMvVwnRgXxDikpbw4WWc8_QlKIgHhiq2d0g',
            },
            {
                alt: 'Mini wooden hand press for botanical field trips and flower pressing',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAYqtjKvc5Kow_qRlMEJVAvu9QoaLzVTPA8LcUWxxDr_CXxNqc08kHiTvErwoO0-jY5NaCOPZUwcrZ4-3CBZEzjG8k-eJh9WhZn3cPLCsFJWNsL8t7y4jbzamPmgzPrtlNmcg7rdZX12068klJ9AR9IlHFTG7Hn3b7sAGAEKQE7dXXVP6XvwRuoCU3gqvY6JFN7fbJZOMe5sIyghDn-Xy2wiIoAGxP2xtuePngvazWec0ZLiHNiIQo9Dg',
            },
        ],
    },
    {
        variant: 'featured',
        href: '#',
        name: 'Taller Bit & Papel',
        description:
            'Sistemas tipográficos artesanales y plantillas de productividad para creativos.',
        location: 'Digital · Remoto',
        banner: {
            alt: 'Digital designer creative nook with cozy warm desk lamp, graphics tablet and typography specimens',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDkbyZT1JXsm-11wmoy2nubjA7SY8_UrJebToZUaYUOgQGfdcQTbvm5Bov8Zep4Knus5QYjGMc7L-ZgwtQgH527Fzh1YSX1rG2Oa29rsQrQkOSqsLaiUUxjDD4AfCChEFbmQtFkjvemyrIDXSKqn57_5bZri2QLlgj3lYnAlrUyF8lQ3JmLzhz9d3zTtGilTmIuY8EuUO8hlkK1_Y6Q_FsMCAIO0MrXzJDKQgmYLgQR7D6uEzVwx5_Wfw',
        },
        avatar: {
            alt: 'Creative developer and graphic designer with glasses working on layout mockups',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQgxUNdCM49nfZoMx_WDJn2dwutXkgHrSBxEB-GXgUCpVwxEcupt_ZJtKspFBZv_Vqj6w1bCmtivw6PlJZBaekhtvIXfNv-W_06CjsfpJwlJ8JP-RNIOpCiCFs44inwQUi66g8adhKxSng1L5LtcF2Bzo35ohTA5KDb17gqKDhwPHmTQ70KFM8tnWqYmYmSq5GN1TkYi7SXhln_a3qEmJAaKZI_NTP5m7T5Xwdam-QnAHv2Y0iIyu41g',
        },
        productPreviews: [
            {
                alt: 'Minimalist Notion dashboard preview for artisan studios and sales tracking',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBeyrNddf_7kKoQ8NHUiPZysw9y-SISZokoz2hMI_cgm3ZV30K3P3CUz_z2uVhopU6EAC5HsLrSpziBKgJdwpCodhkLk532Oy-h1O9sJ_rxDUaHik_ontub1fz2H0Qk-A_KotZ2_h_WS9yoAot8tFxSvX1Mr-ynt6ERUQE6cgdruxKtVz5HlKOUiH3AHE81ktuzuN0MNQpT6Q-p61k2YgB68z2GdbdktQfDv-4ChTl69U8_5uwRdcjW7Q',
            },
            {
                alt: 'Handcrafted serif typography specimen sheet preview with glyph set',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBvJWPrXSpguyfsAiwD1z-GG2kZRxvT5Lu2hVc5pY4diQsiy_jr4W0Vchvv4m1zqUK-0emhyDBc-SPnc42R3SNnzU8aHhlpFKtp-ZYX6tLKd7uIoV3305HXO9tOf3ERcMRKXKMlIrSeZNc6KgfWa5pEGjTc6CghQxqK0O0g83FeLqpuO2QkQC_Iu1oJtqtaBx92Vn3qmgLqCGv7W_xztUx6IVfBCtAmM6ahJ6_yiztYDoQb8rlmlFYD1g',
            },
            {
                alt: 'Set of 12 natural paper texture overlays for digital artwork mockups',
                src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCWhQ10jIgup26DJZGGm8yKVZIyPI5BjDTlJVJAtcTO7T1sI1Ym-n2iYlchd7luvynaI56ecuqB6-bi4vluS45yGubKfJsc2w82EFjuO4PKXAN_xM76X6iwV_9fVG8I7lvrvH0umSG-FbwAjxhwBgU6SvGoO2u38tnygdKtqzY5C24vKylTcdF9AdWeEOrNfkEDjL6pdbuMNOGP4K_b4cZXDV38ZiVNaGp5YvIhnxrZXK3cHzytDNLtOA',
            },
        ],
    },
];

export default function FeaturedStores() {
    return (
        <section className="mx-auto w-full max-w-7xl px-6 py-16 lg:px-12">
            <div className="mb-12 flex flex-col justify-between gap-space-md md:flex-row md:items-end">
                <div>
                    <span className="font-label-sm text-label-sm font-bold tracking-widest text-primary uppercase">
                        Vitrina de Talleres
                    </span>
                    <h2 className="font-headline-lg text-headline-lg text-on-surface">
                        Stands destacados de la semana
                    </h2>
                    <p className="font-body-md text-body-md text-on-surface-variant">
                        Entra a los puestos virtuales, conversa con los
                        artesanos y revisa sus estantes curados.
                    </p>
                </div>
                <a
                    className="inline-flex items-center gap-2 font-title-md text-title-md text-primary hover:underline"
                    href="#"
                >
                    Explorar todos los 142 stands
                    <span className="material-symbols-outlined text-base">
                        store
                    </span>
                </a>
            </div>
            <div className="grid grid-cols-1 gap-8 lg:grid-cols-3">
                {featuredStores.map((store) => (
                    <StoreCard key={store.name} {...store} />
                ))}
            </div>
        </section>
    );
}
