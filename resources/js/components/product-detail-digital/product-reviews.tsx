import { ReviewCard } from '@/components/ui/review-card';

const reviews = [
    {
        avatar: {
            alt: 'Margarita V.',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDN28xREzkdJeVsOP1lSaaR8ck2MYDMc-TCFowrZJow98NJ1lTKW6U_Dn3hzcX18ZLjqZVr20oZjb8oQGGod4gX6hO4NZgJ5QjdOU4l6PYMM2jiUPNlpF7lBJ0ZPx5y_OmxDi2CaO7AuhKL_eiO5nDguXjBfJbuJ2BdNi7TlxOXNuvCV9InrJTEoDzi9KtbyYdhjoQ-gaXbkfuHfNGq28QWY9wcAZr4wfkNOx7VeHtHYKBkRjrQpJZdBA',
        },
        name: 'Margarita Vial',
        quote: '"Una joya editorial. Las fichas de cálculo de mordentado me ahorraron meses de prueba y error. Pude teñir mi primera partida de vellón merino con corteza de espino y el tono ocre dorado es impecable."',
        rating: 5,
        subtitle: 'Compradora Verificada · Taller Hebra Viva',
        time: 'Hace 4 días',
    },
    {
        avatar: {
            alt: 'Claudio R.',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAS2nAXOKxpSM4HrJVsnJ_llJ-vgcOvEovbm23LFuJIEOEyn9Zv-YLtnFW0RmgXs1W2X8buC2ose9OmVrEauoauOYzf5EZDlRoSfYjoRfhQe3Rxf_ntD6CFnFYtx3rOas7qFcZNmw3dyDquAeAsjHVJUhMWuG-BSyPjwzXzZGQwhH0HLRx0buJAHsrE9qItdT-1CwAfwq5afa1roItH4AzKgSM_IzHu0R7Op6BrQeCINZdrjdClHAY8xg',
        },
        name: 'Claudio Riquelme',
        quote: '"La integración con la paleta de Procreate es algo que no esperaba de un taller tradicional. Puedo diseñar el boceto de mis tapices con los colores químicos exactos que luego obtengo en las ollas."',
        rating: 5,
        subtitle: 'Comprador Verificado · Diseñador Gráfico',
        time: 'Hace 2 semanas',
    },
    {
        avatar: {
            alt: 'Elena S.',
            src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAVUQZR3tb30kU5huK95GMOL5Pml1UqS2nErSJtGUqTPwe05Fp2UYaJYPiLm5oidHWFPz9g2ksJC32l5YMRmJMTP7MuJ5N2riO30hGVHo0rpQOvvbIbiwTrio0LLFaNsJGlMCe-lWFgabjmF8JMqZtunmYL6e_ig9o-6GCktMcOugseXl3bBrNxdLXwWL7yPIYYBgvgDJjxtAv_nwCWjG-_mffxw6ykxGlbf9QXIin9c51kpStIGJh74Q',
        },
        name: 'Elena Sandoval',
        quote: '"La descargué en menos de dos segundos tras el pago. Imprimí las 12 fichas en papel kraft grueso y son la base de mi laboratorio textil diario. Rigor científico con alma poética."',
        rating: 5,
        subtitle: 'Compradora Verificada · Hilandera',
        time: 'Hace 1 mes',
    },
];

export default function ProductReviews() {
    return (
        <section
            className="w-full bg-surface-container-lowest px-6 py-16 lg:px-12"
            id="resenas"
        >
            <div className="mx-auto flex max-w-7xl flex-col gap-10">
                <div className="flex flex-col justify-between gap-6 border-b border-surface-container pb-6 md:flex-row md:items-end">
                    <div>
                        <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                            Comunidad de Teñido
                        </span>
                        <h2 className="mt-1 font-headline text-[28px] font-semibold text-on-surface">
                            Valoraciones de Creadores
                        </h2>
                    </div>
                    <div className="flex items-center gap-4 rounded-xl bg-surface-container-low px-5 py-3">
                        <div className="flex flex-col">
                            <span className="font-headline text-[28px] leading-none font-bold text-on-surface">
                                5.0
                            </span>
                            <span className="mt-1 font-label text-[11px] text-on-surface-variant">
                                de 5.0 estrellas
                            </span>
                        </div>
                        <div className="h-8 w-px bg-surface-container-highest" />
                        <div className="text-[13px] text-on-surface-variant">
                            <strong>100%</strong> de satisfacción reportada
                            <br />
                            (48 compras verificadas)
                        </div>
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
                    {reviews.map((review) => (
                        <ReviewCard key={review.name} {...review} />
                    ))}
                </div>
            </div>
        </section>
    );
}
