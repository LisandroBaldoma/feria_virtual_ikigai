import { SpecificationCard } from '@/components/ui/specification-card';

const specifications = [
    {
        description:
            'Capacidad útil de 1.2 litros. Cuello estrecho para vertido controlado y antigoteo.',
        icon: 'straighten',
        label: 'Dimensiones & Capacidad',
        value: '22 cm × 14 cm',
    },
    {
        description:
            'Gres de alta densidad que otorga centro de gravedad bajo y balance seguro al servir.',
        icon: 'scale',
        label: 'Peso & Estabilidad',
        value: '850 gramos',
    },
    {
        description:
            'Ceniza volcánica del Villarrica fusionada a 1.250°C formando vidrio mineral natural.',
        icon: 'volcano',
        label: 'Materialidad Orgánica',
        value: 'Gres & Cenizas',
    },
    {
        description:
            '100% seguro para alimentos y bebidas frías o calientes. Evitar shock térmico directo en llama.',
        icon: 'restaurant',
        label: 'Uso & Mantención',
        value: 'Apto Lavavajillas',
    },
];

export default function PhysicalProductTechnicalDetails() {
    return (
        <section className="w-full py-14">
            <div className="mx-auto flex max-w-7xl flex-col gap-10 px-6 lg:px-12">
                <div className="flex max-w-2xl flex-col gap-2">
                    <span className="font-label text-[11px] font-bold tracking-wider text-primary uppercase">
                        Ficha de conservación &amp; técnica
                    </span>
                    <h2 className="font-headline text-[26px] font-semibold text-on-surface lg:text-[30px]">
                        Anatomía y características físicas de la jarra
                    </h2>
                    <p className="font-body text-[14px] text-on-surface-variant">
                        Cada especificación ha sido calibrada para combinar
                        belleza escultural con solidez funcional en el uso
                        cotidiano.
                    </p>
                </div>
                <div className="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    {specifications.map((specification) => (
                        <SpecificationCard
                            key={specification.label}
                            {...specification}
                            variant="physical"
                        />
                    ))}
                </div>
                <div className="mt-4 flex flex-col gap-3">
                    <details
                        className="group cursor-pointer rounded-xl bg-surface-container-lowest p-5 [&_summary::-webkit-details-marker]:hidden"
                        open
                    >
                        <summary className="flex items-center justify-between font-headline text-[16px] font-semibold text-on-surface">
                            <span className="flex items-center gap-3">
                                <span className="material-symbols-outlined text-[20px] text-primary">
                                    architecture
                                </span>
                                El proceso de elaboración: Del torno a la
                                reducción a leña
                            </span>
                            <span className="material-symbols-outlined text-[20px] text-secondary transition-transform duration-300 group-open:-rotate-180">
                                expand_more
                            </span>
                        </summary>
                        <div className="mt-3 grid grid-cols-1 gap-6 border-t border-surface-container-high/40 pt-4 font-body text-[14px] leading-relaxed text-on-surface-variant md:grid-cols-3">
                            <div>
                                <strong className="mb-1 block text-on-surface">
                                    1. Torneado en reposo
                                </strong>
                                <p>
                                    Torneado alzado lentamente durante 40
                                    minutos en rueda tradicional. Secado en
                                    sombra durante 12 días para evitar tensiones
                                    moleculares en el barro.
                                </p>
                            </div>
                            <div>
                                <strong className="mb-1 block text-on-surface">
                                    2. Formulación de esmalte
                                </strong>
                                <p>
                                    Cenizas de leña nativa recolectada y ceniza
                                    volcánica lavada tres veces en agua de
                                    vertiente para eliminar sales solubles antes
                                    de la suspensión vítrea.
                                </p>
                            </div>
                            <div>
                                <strong className="mb-1 block text-on-surface">
                                    3. Cocción de 36 horas
                                </strong>
                                <p>
                                    Horno de tiro invertido a leña con monitoreo
                                    constante de conos pirométricos Orton 8
                                    (1.250°C), permitiendo que la llama pinte la
                                    jarra de forma azarosa.
                                </p>
                            </div>
                        </div>
                    </details>
                    <details className="group cursor-pointer rounded-xl bg-surface-container-lowest p-5 [&_summary::-webkit-details-marker]:hidden">
                        <summary className="flex items-center justify-between font-headline text-[16px] font-semibold text-on-surface">
                            <span className="flex items-center gap-3">
                                <span className="material-symbols-outlined text-[20px] text-primary">
                                    shield
                                </span>
                                Protocolo de embalaje blindado &amp; Política de
                                llegada intacta
                            </span>
                            <span className="material-symbols-outlined text-[20px] text-secondary transition-transform duration-300 group-open:-rotate-180">
                                expand_more
                            </span>
                        </summary>
                        <div className="mt-3 flex flex-col gap-2 border-t border-surface-container-high/40 pt-4 font-body text-[14px] leading-relaxed text-on-surface-variant">
                            <p>
                                Sabemos el valor de una pieza única. Por ello,
                                empleamos un sistema de suspensión en doble caja
                                de cartón corrugado Kraft reciclado y
                                amortiguación de viruta de álamo natural
                                biodegradable.
                            </p>
                            <p>
                                <strong>Garantía Ikigai:</strong> Si la pieza
                                sufre algún daño durante el transporte, basta
                                con enviarnos una fotografía en las primeras 48
                                horas tras la entrega y Valentina elaborará una
                                nueva jarra prioritaria o te reembolsaremos el
                                100% de inmediato.
                            </p>
                        </div>
                    </details>
                    <details className="group cursor-pointer rounded-xl bg-surface-container-lowest p-5 [&_summary::-webkit-details-marker]:hidden">
                        <summary className="flex items-center justify-between font-headline text-[16px] font-semibold text-on-surface">
                            <span className="flex items-center gap-3">
                                <span className="material-symbols-outlined text-[20px] text-primary">
                                    workspace_premium
                                </span>
                                Certificado de autenticidad y número de horneada
                            </span>
                            <span className="material-symbols-outlined text-[20px] text-secondary transition-transform duration-300 group-open:-rotate-180">
                                expand_more
                            </span>
                        </summary>
                        <div className="mt-3 border-t border-surface-container-high/40 pt-4 font-body text-[14px] leading-relaxed text-on-surface-variant">
                            <p>
                                Cada jarra incluye una tarjeta botánica de papel
                                de algodón confeccionado a mano, firmada por la
                                autora Valentina Lagos, detallando la fecha
                                exacta de salida de horno, la procedencia del
                                lote de arcilla y el número de serie de la
                                edición.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </section>
    );
}
