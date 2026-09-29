import { RatingStars } from '@/components/ui/rating-stars';
import { ReviewCard } from '@/components/ui/review-card';

const reviews = [
    {
        initials: 'CR',
        name: 'Camila Riquelme',
        quote:
            '"Llegó a Santiago en 48 horas. El paquete olía a madera sureña y venía protegido como una reliquia. La textura de la ceniza al tacto tiene una calidez que ninguna foto alcanza a transmitir del todo."',
        rating: 5,
        subtitle: 'Compradora Verificada · Providencia, Santiago',
    },
    {
        initials: 'ME',
        name: 'Martín Edwards',
        quote:
            '"El asa es asombrosamente cómoda. Llena de agua tiene un equilibrio perfecto para servir en la mesa. Es utilitaria pero cuando no se usa funciona como una escultura en la repisa."',
        rating: 5,
        subtitle: 'Comprador Verificado · Zapallar',
    },
    {
        initials: 'FO',
        name: 'Francisca Olavarría',
        quote:
            '"El certificado firmado y la explicación de los minerales del volcán le dan un significado inmenso. Comprar en Feria Ikigai realmente se siente como visitar el taller en Pucón."',
        rating: 5,
        subtitle: 'Compradora Verificada · Concepción',
    },
];

export default function PhysicalProductReviews() {
    return (
        <section className="w-full bg-surface-container-low py-14">
            <div className="mx-auto flex max-w-7xl flex-col gap-8 px-6 lg:px-12">
                <div className="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <span className="font-label text-[11px] font-bold tracking-wider text-primary uppercase">
                            Experiencia tangible
                        </span>
                        <h2 className="font-headline text-[26px] font-semibold text-on-surface lg:text-[30px]">
                            Testimonios de quienes ya conviven con la pieza
                        </h2>
                    </div>
                    <div className="flex items-center gap-2">
                        <RatingStars iconClassName="text-[20px]" rating={5} />
                        <span className="font-headline text-[15px] font-semibold text-on-surface">
                            5.0 / 5.0
                        </span>
                        <span className="text-[13px] text-secondary">
                            (100% embalajes recibidos intactos)
                        </span>
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
                    {reviews.map((review) => (
                        <ReviewCard
                            key={review.name}
                            {...review}
                            variant="physical"
                        />
                    ))}
                </div>
            </div>
        </section>
    );
}
