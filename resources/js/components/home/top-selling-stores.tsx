import { StoreCard } from '@/components/ui/store-card';
import type { StoreCardProps } from '@/components/ui/store-card';

const topSellingStores: StoreCardProps[] = [
    {
        variant: 'ranked',
        href: '#',
        rank: 1,
        name: 'Botica de los Andes',
        description: 'Cosmética sólida y herbolaria pura',
        verified: true,
        shipmentsLabel: '480+ envíos felices',
        ratingLabel: '5.0 (132)',
        thumbnail: {
            alt: 'Organic soaps, essential oils and wooden soap dishes on a shelf',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCzQXLwqq0tZVQ5t_z0o73TUraCThI0gnUqXTJ8bmwVw9lSjMzf7m7fJgikt3VGjtTi83LwzrXn4fCpwlawH6_g6SKX3QvfZCxQ4Ucg8PvSyGOVf3NGCSGV0wdD-bKhU9rzFAbzl2f7JrhnCIt-liuv8aUHQ_L2LJA-mRACpcKqR7weXLvKdb0_oS9IPWu5C98d-YkdAsqmSzjTlUOLHDhYP9stdGKJI4p_QhhmgyqB0ZyUTr9U3q8WXg',
        },
    },
    {
        variant: 'ranked',
        href: '#',
        rank: 2,
        name: 'Greda Sur Taller',
        description: 'Pocillos y tazas moldeadas a torno',
        verified: true,
        shipmentsLabel: '390+ envíos felices',
        ratingLabel: '4.9 (98)',
        thumbnail: {
            alt: 'Clay cups in earthy glaze being packed inside corrugated boxes with dry lavender sprigs',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFvzXwyLITH_9AHeKXBFxMgQj9MwgmfAUpuTb_VErpudK-8IF9yuoKWM0qCuTNe71fkmaz3vu3QE94z9I5fn3m5r96h6Sd8pmux9QrHN_WNFKSoFzC4sjxNs5Qb-avp2MUtEFJ4lRlCPIH8mPzp8lXYjg8f2K7OC90SkPuCf6wbOOa-06GHf9CusEVZZM_m4NqwdlCKN2gqOvDmfr_QePDhEahuPfvTqTGT_86oOLvQyULJsEjY6R91A',
        },
    },
    {
        variant: 'ranked',
        href: '#',
        rank: 3,
        name: 'Telares de la Cuenca',
        description: 'Mantas en telar mapuche y lana merino',
        verified: true,
        shipmentsLabel: '315+ envíos felices',
        ratingLabel: '4.9 (76)',
        thumbnail: {
            alt: 'Warm wool blankets in mustard yellow and sage green folded neatly on rustic bench',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQHEdq-saTIvIYR5OuukUPzzaRsxeYJqk1IX9doAXiduC7C7Cqi119-WY0Uq-8ddV9_UDlb9WyACP0Ux6uZg2Lfyvo-7EOfe0UT9JR5eBpFtGltGsYBJTDPrX6s24-yojjT0WOdNmgfR6vYMoe17ARV7nafmOoO0hsHTmZW2EUyFkq8mNX0Ptj2jZ9KCxRMV1uinUfznewO4r9WMSogqWhEFeabdEPfItyQWUtO_JOkffP18-e9S--yA',
        },
    },
    {
        variant: 'ranked',
        href: '#',
        rank: 4,
        name: 'Cuadernos Ámbar',
        description: 'Encuadernación japonesa & bitácoras de viaje',
        verified: true,
        shipmentsLabel: '270+ envíos felices',
        ratingLabel: '5.0 (89)',
        thumbnail: {
            alt: 'Stationery designer hand-binding leather traveler notebook journals with thread',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCvX8eD2_HZYiS_J0Wtzakz2qS-mfvqOkdxejBD8AqjjzVJQpsrCx5xj7qYzsov7AUCHpjdowG0h8zPG_osmDaN7b2THyLlkZ7FqD80BbL2x4KlPz5OqsUQl5H4bjjJtuBQUkuotV2Zb2HqloKfwPhkPR0aEy9v-rHPjphizgn94um1YbtbNmOWZxXdiYIbnCBeaaIQ3SiSmO4W0HwdtkGYzdzG8A7BBo-Bp161lc23-_DC64pYSNTzow',
        },
    },
];

export default function TopSellingStores() {
    return (
        <section className="w-full bg-surface-container-low px-6 py-20 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col gap-12">
                <div className="flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div>
                        <span className="font-label-sm text-label-sm font-bold tracking-widest text-secondary uppercase">
                            Preferidos del público
                        </span>
                        <h2 className="font-headline-lg text-headline-lg text-on-surface">
                            Las más visitadas por la comunidad
                        </h2>
                        <p className="font-body-md text-body-md text-on-surface-variant">
                            Stands destacados por su constancia, valoración de
                            envíos y atención humana.
                        </p>
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-6 md:grid-cols-2">
                    {topSellingStores.map((store) => (
                        <StoreCard key={store.name} {...store} />
                    ))}
                </div>
            </div>
        </section>
    );
}
