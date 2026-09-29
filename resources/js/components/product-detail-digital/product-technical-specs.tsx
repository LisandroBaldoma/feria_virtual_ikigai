const specifications = [
    {
        description:
            'Descarga dividida o completa según la velocidad de tu conexión.',
        icon: 'folder_zip',
        label: 'Peso Total',
        value: '240 MB (.ZIP)',
    },
    {
        description:
            'PDF interactivo + versión EPUB adaptada a e-readers de tinta electrónica.',
        icon: 'auto_stories',
        label: 'Volumen',
        value: '84 Páginas',
    },
    {
        description:
            'Compatible con GoodNotes, Notability, Acrobat, Windows, Mac, iPad y Android.',
        icon: 'devices_other',
        label: 'Entorno',
        value: 'Universal',
    },
    {
        description:
            'Autorizada para pequeños talleres y artesanos individuales (no masiva).',
        icon: 'gavel',
        label: 'Licencia',
        value: 'Uso en Taller',
    },
];

export default function ProductTechnicalSpecs() {
    return (
        <section
            className="w-full bg-surface-container-low px-6 py-14 lg:px-12"
            id="especificaciones"
        >
            <div className="mx-auto flex max-w-7xl flex-col gap-8">
                <div>
                    <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                        Arquitectura del Producto
                    </span>
                    <h2 className="mt-1 font-headline text-[26px] font-semibold text-on-surface">
                        Especificaciones Técnicas del Archivo
                    </h2>
                </div>
                <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    {specifications.map((specification) => (
                        <SpecificationCard
                            key={specification.label}
                            {...specification}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
}
import { SpecificationCard } from '@/components/ui/specification-card';
