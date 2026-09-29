import { useState } from 'react';

import { ToggleGroup, ToggleGroupItem } from '@/components/ui/toggle-group';

const modules = [
    {
        description:
            'Cómo identificar hojas caídas, líquenes de poda y cortezas desprendidas sin dañar árboles vivos. Calendario de floración y recolección para el Cono Sur.',
        number: '01',
        pages: 'Págs 06–22',
        title: 'Recolección Consciente & Calendario Estacional',
    },
    {
        description:
            'Diferenciación entre fibras proteicas (lana de oveja, alpaca, seda) y celulósicas (algodón, cáñamo, lino). Uso de alumbre de potasio, corteza de roble y vinagre de manzana.',
        number: '02',
        pages: 'Págs 23–44',
        title: 'Preparación de Fibras & Mordentado No Tóxico',
    },
    {
        description:
            'Proporciones exactas en gramos para amarillos de espino, verdes musgo con romero y cobre, rosas de piel de palta curada y ocres de corteza de avellano.',
        number: '03',
        pages: 'Págs 45–68',
        title: 'El Recetario: 24 Fórmulas Botánicas Precisas',
    },
    {
        description:
            'Protocolos de prueba ante rayos UV, pH de lavado y consejos de conservación para que los tonos mantengan su luminosidad durante décadas.',
        number: '04',
        pages: 'Págs 69–84',
        title: 'Fijación, Solidez a la Luz & Cuidado de Prendas',
    },
];

type Tab = 'contenido' | 'manifiesto' | 'licencia';

export default function ProductEditorialTabs() {
    const [activeTab, setActiveTab] = useState<Tab>('contenido');

    function selectTab(value: string) {
        if (value) {
            setActiveTab(value as Tab);
        }
    }

    return (
        <section className="w-full bg-surface px-6 py-16 lg:px-12">
            <div className="mx-auto flex max-w-4xl flex-col gap-10">
                <ToggleGroup
                    aria-label="Contenido editorial del producto"
                    className="mx-auto flex w-full max-w-lg items-center justify-center overflow-x-auto rounded-xl bg-surface-container p-1.5"
                    type="single"
                    value={activeTab}
                    onValueChange={selectTab}
                >
                    <ToggleGroupItem
                        className="flex-1 rounded-lg px-4 py-2 font-label text-[13px] font-medium text-on-surface-variant transition-all hover:text-on-surface data-[state=on]:bg-surface-container-lowest data-[state=on]:font-semibold data-[state=on]:text-primary data-[state=on]:shadow-sm"
                        value="contenido"
                    >
                        Índice &amp; Temario
                    </ToggleGroupItem>
                    <ToggleGroupItem
                        className="flex-1 rounded-lg px-4 py-2 font-label text-[13px] font-medium text-on-surface-variant transition-all hover:text-on-surface data-[state=on]:bg-surface-container-lowest data-[state=on]:font-semibold data-[state=on]:text-primary data-[state=on]:shadow-sm"
                        value="manifiesto"
                    >
                        Filosofía Botánica
                    </ToggleGroupItem>
                    <ToggleGroupItem
                        className="flex-1 rounded-lg px-4 py-2 font-label text-[13px] font-medium text-on-surface-variant transition-all hover:text-on-surface data-[state=on]:bg-surface-container-lowest data-[state=on]:font-semibold data-[state=on]:text-primary data-[state=on]:shadow-sm"
                        value="licencia"
                    >
                        Términos de Descarga
                    </ToggleGroupItem>
                </ToggleGroup>

                {activeTab === 'contenido' && (
                    <div className="flex flex-col gap-8">
                        <div className="mx-auto max-w-2xl text-center">
                            <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                                Estructura Pedagógica
                            </span>
                            <h2 className="mt-1 font-headline text-[28px] font-semibold text-on-surface">
                                Cinco módulos para dominar el color vivo
                            </h2>
                            <p className="mt-2 font-body text-[15px] text-on-surface-variant">
                                Desarrollada tras ocho años de experimentación
                                en los bosques húmedos valdivianos, esta guía
                                simplifica la química orgánica del teñido sin
                                sacrificar rigor.
                            </p>
                        </div>
                        <div className="space-y-4">
                            {modules.map((module) => (
                                <div
                                    key={module.number}
                                    className="rounded-xl bg-surface-container-low p-6 transition-all"
                                >
                                    <div className="flex items-start justify-between gap-4">
                                        <div className="flex items-start gap-3">
                                            <span className="font-headline text-[18px] font-semibold text-tertiary">
                                                {module.number}
                                            </span>
                                            <div>
                                                <h3 className="font-headline text-[17px] font-semibold text-on-surface">
                                                    {module.title}
                                                </h3>
                                                <p className="mt-1 font-body text-[13.5px] text-on-surface-variant">
                                                    {module.description}
                                                </p>
                                            </div>
                                        </div>
                                        <span className="shrink-0 font-label text-[11px] font-semibold text-outline uppercase">
                                            {module.pages}
                                        </span>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                )}

                {activeTab === 'manifiesto' && (
                    <div className="flex flex-col gap-6 rounded-2xl bg-surface-container-low p-8">
                        <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                            Manifiesto de Estudio Telar &amp; Bosque
                        </span>
                        <h2 className="font-headline text-[24px] leading-snug text-on-surface">
                            "El color verdadero no proviene de un laboratorio
                            sintético; respira con las estaciones."
                        </h2>
                        <p className="font-body text-[14px] leading-relaxed text-on-surface-variant">
                            Diseñamos este documento digital para que ningún
                            artesano dependa de colorantes petroquímicos dañinos
                            para las cuencas fluviales. Cada página fue
                            maquetada con márgenes generosos pensando en quien
                            la imprime sobre papeles reciclados o quien la
                            consulta en su mesa de trabajo salpicada de agua y
                            cortezas.
                        </p>
                        <div className="flex items-center gap-4 pt-2">
                            <div className="flex size-10 items-center justify-center rounded-full bg-primary/10 text-primary">
                                <span className="material-symbols-outlined text-[20px]">
                                    eco
                                </span>
                            </div>
                            <span className="font-body text-[13px] font-medium text-on-surface">
                                100% de lo recaudado financia la reforestación
                                de especies nativas tintóreas en Los Ríos,
                                Chile.
                            </span>
                        </div>
                    </div>
                )}

                {activeTab === 'licencia' && (
                    <div className="flex flex-col gap-4 rounded-2xl bg-surface-container-low p-8">
                        <h2 className="font-headline text-[20px] text-on-surface">
                            Condiciones de Uso &amp; Licenciamiento Digital
                        </h2>
                        <p className="font-body text-[14px] leading-relaxed text-on-surface-variant">
                            Al adquirir este archivo obtienes el derecho
                            indefinido de utilizar estas recetas para tu obra
                            personal, prendas de venta propia y piezas de
                            encargo. No está permitida la redistribución no
                            autorizada del PDF ni la venta de las paletas
                            digitales de manera aislada en otros marketplaces.
                        </p>
                        <div className="mt-2 rounded-xl bg-surface-container-lowest p-4">
                            <span className="font-label text-[12px] font-semibold text-primary">
                                ¿Tienes un taller comunitario?
                            </span>
                            <p className="mt-1 font-body text-[13px] text-on-surface-variant">
                                Escríbenos a través del stand virtual para
                                licencias colectivas y escuelas rurales.
                            </p>
                        </div>
                    </div>
                )}
            </div>
        </section>
    );
}
