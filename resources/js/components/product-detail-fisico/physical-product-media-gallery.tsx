import { useState } from 'react';

import { FeriaBadge } from '@/components/ui/feria-badge';

const mainImage = {
    alt: 'Jarra Escultórica en Gres',
    dataAlt:
        'High resolution studio photography of a handcrafted sculptural ceramic pitcher with an earthy sand texture, raw volcanic ash glaze gradient from warm ochre to charcoal matte, organic curved handle, soft directional daylight highlighting fine mineral specks, museum editorial quality',
    src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBXHv3D7RZl9XmB4XbdkX2IV6yWIxo_nX5iahpQ-5vV8QJ9BSgWDsrVaSzlqBbg9M1jTVJ8-J93OnmXNqWQh3TrZdNAjvVQe-bFw8Tzqb6oiRhetTXPBRFZVn8NUJ06AXcEP9K5eZgfPuhBMqNFSy_CznsaJwxaBJw8myRu_IBhRdfqve8n_4HuIB0PuXgP3Sx_l7D72Wp4I42foS4lZ7PKh6_vkz_puBH8QxTUFkLZPBkfNbpJtKsATA',
};

const thumbnails = [
    {
        alt: 'Jarra vista completa',
        dataAlt:
            'Studio shot of ceramic pitcher showing ergonomic hand-pulled handle and natural stoneware form',
        label: 'Vista frontal con asa ergonómica',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC8VMXn0Qq9a4Ge7xNFlBLqYsGziQs42wDwzHyyLIuJxE5oaD6I21CxKnPK04M87dU6KQMQewzqcCrPSBZUFz8WwMHjU0JhlhP1biX3xZ4RYce_cc6So3R_k43agEn7NJCP5SV_WtqgI1LRizMsylPvpDUkwmjTTOMfVO60JrtyL6-L-nSt8rCV22y-CAe3reaN1ul7Fy2M9c18Gqk0_dZWgolljtaMOECWVZIMvUmiNN3zKbETZQ8C1w',
    },
    {
        alt: 'Detalle de esmalte de cenizas',
        dataAlt:
            'Extreme macro close up of rough volcanic ash glaze showing crystalline ochre minerals and crackle texture on natural ceramic surface',
        label: 'Macro esmalte ceniza volcánica',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDG5udS_hB7sHXzNWMrs4opfqF-pR90SH3OnSHCtbX4ttL-g-bP9055QTwADJctCyb3Vvy8iGeRu0dawBLr5MVwijUNOdvsOa9BVwyqliINmaYPYIPtP3h-ijm3IUQ43b1lWVdMGjNwX3pO6w87onYs63BMXFymH1gGBysRtojSzoWg5kPV6_WHaFsPaknSeaLcVSc1Iomef0NVjTXsPZ42ZqR510k4ja8F9xn0Gwrr9vxiYJ84TT7O4A',
    },
    {
        alt: 'Jarra en uso con flores secas',
        dataAlt:
            'Earthy lifestyle editorial of the stoneware pitcher sitting on a rustic wooden dining table filled with wild dried Andean flowers, soft natural sunlight',
        label: 'Escala en mesa con flores secas',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAjK-DQ3GGI2HDdrs8VDvjyrB1neAakWMaU4ksGIVk74-FhkMefudRab0garDXEtNJgZxN0Wz5BmQM2NMXFNTLttNvQ-6hGVxmz1s55RSoMUlR8aDSkUn9eKsqq08jjR1mgeq-M94Klrc3jrdTV6MlQk3VQToZA1EtSZIDAO18Agh-qBvWvjUEmTP05wx-pQ4LmjdcDaXm-YMBp73zVK1Aa9YRFkahSEeQRppAeeiG6gqb-_Ahin0gsEg',
    },
    {
        alt: 'Sello del artesano en la base',
        dataAlt:
            'Close up of underside unglazed stoneware base showing hand-stamped potter chop mark of Taller Barro Mestizo and numbered edition mark',
        label: 'Sello del taller en base',
        src: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCX18VwClo0JFj9YHSJeRfzmqC325JUJME-hxO0Xp2iG5ZAc0DQ-5ZfsJu_-13q-kFMlaNM8gSRdoMcScCgMqKwSoYpbDDK597ubqQyqNGTJN06Uv5vVanqWJMhcm07SATi96FNGsy3cQLqELC5IVC-ySEa-PEoVzq_36IV26AtS914ulP9mYmpxK4cpS7gcpRTJE8vUtU_0ujRvp2Z6qUcwIgFJr5HeE8Vd5t209Y0RWDLl6JjPn6aow',
    },
];

export default function PhysicalProductMediaGallery() {
    const [activeThumbnail, setActiveThumbnail] = useState(0);
    const [selectedImage, setSelectedImage] = useState(mainImage);

    function selectThumbnail(index: number) {
        const thumbnail = thumbnails[index];

        setActiveThumbnail(index);
        setSelectedImage({
            alt: thumbnail.label,
            dataAlt: mainImage.dataAlt,
            src: 'placeholder',
        });
    }

    return (
        <div className="flex flex-col gap-5">
            <div className="group relative aspect-[4/5] w-full overflow-hidden rounded-xl bg-surface-container shadow-sm">
                <img
                    alt={selectedImage.alt}
                    className="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                    data-alt={selectedImage.dataAlt}
                    id="main-product-image"
                    src={selectedImage.src}
                />
                <div className="absolute top-4 left-4 flex flex-col gap-2">
                    <FeriaBadge
                        className="rounded-lg bg-surface-container-lowest/90 px-3 py-1.5 font-label text-[11px] font-bold tracking-wider text-on-surface uppercase shadow-sm backdrop-blur-md"
                        variant="category"
                    >
                        <span className="size-2 animate-pulse rounded-full bg-primary" />
                        Horneada N° 14 · Fuego de Roble
                    </FeriaBadge>
                </div>
                <div className="pointer-events-none absolute right-4 bottom-4 left-4 flex items-center justify-between">
                    <span className="pointer-events-auto flex items-center gap-1.5 rounded-lg bg-inverse-surface/80 px-3 py-1.5 font-body text-[12px] text-inverse-on-surface backdrop-blur-md">
                        <span className="material-symbols-outlined text-[15px]">
                            scatter_plot
                        </span>
                        Textura mineral al tacto
                    </span>
                    <button
                        className="pointer-events-auto inline-flex items-center gap-1.5 rounded-lg bg-surface-container-lowest/95 px-4 py-2 font-body text-[12.5px] font-medium text-on-surface shadow-md backdrop-blur-md transition-all hover:bg-surface-container-lowest active:scale-95"
                        type="button"
                        onClick={() =>
                            window.alert(
                                'Visor 360° interactivo cargado. Arrastre horizontalmente para girar la pieza.',
                            )
                        }
                    >
                        <span className="material-symbols-outlined text-[17px] text-primary">
                            360
                        </span>
                        Ver en 360° &amp; Escala real
                    </button>
                </div>
            </div>
            <div className="grid grid-cols-4 gap-3 sm:gap-4">
                {thumbnails.map((thumbnail, index) => (
                    <button
                        key={thumbnail.alt}
                        aria-label={`Ver ${thumbnail.label}`}
                        className={`relative aspect-square overflow-hidden rounded-lg bg-surface-container p-0.5 transition-all ${
                            activeThumbnail === index
                                ? 'ring-2 ring-primary'
                                : 'hover:opacity-90'
                        }`}
                        type="button"
                        onClick={() => selectThumbnail(index)}
                    >
                        <img
                            alt={thumbnail.alt}
                            className="h-full w-full rounded-md object-cover"
                            data-alt={thumbnail.dataAlt}
                            src={thumbnail.src}
                        />
                    </button>
                ))}
            </div>
            <div className="flex items-start gap-4 rounded-xl bg-surface-container-low p-5">
                <span className="material-symbols-outlined mt-0.5 text-[22px] text-tertiary">
                    handshake
                </span>
                <div className="flex flex-col gap-1 text-[13px] leading-relaxed">
                    <span className="font-headline text-[14px] font-semibold text-on-surface">
                        Nota del conservador sobre la materia viva
                    </span>
                    <p className="font-body text-on-surface-variant">
                        Al ser horneada en atmósfera reductora a 1.250°C, cada
                        jarra presenta variaciones irrepetibles en el depósito
                        de ceniza y gradación del ocre. Ninguna pieza es
                        idéntica a otra.
                    </p>
                </div>
            </div>
        </div>
    );
}
