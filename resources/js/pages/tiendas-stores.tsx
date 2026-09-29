import { useRef, useState } from 'react';

import { EditorialHeader } from '@/components/tiendas-stores/editorial-header';
import { InteractiveMap } from '@/components/tiendas-stores/interactive-map';
import { OpenStandCta } from '@/components/tiendas-stores/open-stand-cta';
import { TrendingStoresCatalog } from '@/components/tiendas-stores/trending-stores-catalog';
import type {
    District,
    DistrictId,
    Stand,
} from '@/components/tiendas-stores/types';
import MainLayout from '@/layouts/main-layout';

const imageUrls = {
    ceramic:
        'https://lh3.googleusercontent.com/aida-public/AB6AXuDGjSjVbTEdahHZcO7oR1lrSixfcudbp8oN5Ux55XorayJqrGcRDVxaodbcL4IH6vVug0XZAFqpsBxuFsTSdA7eioO7zAqGc7_BeSyYa7lO_kz0hqTH8l-QFtsbaebs989hCnABxR79d-Ci-FuaHn-6vpG5gPd-XPr7mDZ3gRGdeG_DfMP8N9aeffAsQKvxWCV63kSYi8e7XSwuBAvvlWjOEje5L8t_2OdgQ0Yp5YX6OCRAUOk7Rhq-hA',
    textile:
        'https://lh3.googleusercontent.com/aida-public/AB6AXuBa4jWIpFsnkiLNUo39RXm7oa8fLRFRJsu3bvf_1SIgGGNG8UGfjulj3qfiFwyuXSeMuBp4qAsHqEeLewQbGMPJck8JRO4RWF5ki1SuXQRXHA6KiESaYvDhz3hxYuAzzQDrWCEbvNx2eHP5foJFnV3lhMXegY5hAKEf8Eq-TrplQ0M8AV_2tKC_WehXeNsLU3xC_T6WxMAVzF-J0mBjKmVHwzk8R5S8OuvdS8i67HVIgM-pmKUO8LjSg',
    wood: 'https://lh3.googleusercontent.com/aida-public/AB6AXuA6GisGkqqfQ6RdOlHYpi26DrdrXcuuBptRLYCIy4lZTjBgeRNKJpYuWXzVD_B6oLDDxfiXH-YGJ7dj1GdVfrQI-lbXXtic2YcJKiBhKVULzMoAuMvNsBbW-xsUfegsJmr0o29LxRdRJaTq-d5q-5yYlACN8JxSnIhXlh93qxJ-t0mb2bYVTuSVo7wfjspoAnEjkcuiDFuxn8BIiGCLGTzliczibSiwug8x3jwqoDSieEEzp2jSLeRkbA',
    digital:
        'https://lh3.googleusercontent.com/aida-public/AB6AXuDnnS_x4aPVIiAT2vzcqtoi6cjPpQH9fuLOnVCNJjWx0B-W2xnY8wYXaD9p1GBVoAm9GW3V-XCAUnMw5n72cJsV2t9mi2U2O4raZMv1QdOXMneKi4F4GJSEiD9xAdSPMlyej-jU7huh2IDrLzBuyIrrWxicOxONCdo_9Pu6H7BEiRqyTatgoKYMw_Cy89OCljeKaiX33oFwni33lUy85tb5A4R-lwwbGtIqXR0pT7Y3SIRRHhULp9edGQ',
};

const stands: Stand[] = [
    {
        id: '48',
        district: 'barro',
        name: 'Taller Barro Mestizo',
        artisan: 'Valentina Lagos',
        role: 'Maestra Artesana · Stand #48',
        location: 'Cerámica & Gres · Pucón, Chile',
        quote: '“Piezas esculpidas a mano en torno de pie y horneadas a leña a 1.280°C con mezclas de ceniza volcánica del Villarrica y arenas ribereñas.”',
        rating: '5.0',
        reviews: '(142 reseñas de coleccionistas)',
        inventory: '12 piezas listas',
        inventoryStatus: 'Torno activo',
        markerLabel: 'Stand #48 · Valentina Lagos',
        markerDetail: 'En vivo',
        markerIcon: 'potted_plant',
        markerColor: '#094cb2',
        position: { x: 22, y: 38 },
        avatar: imageUrls.ceramic,
        products: [
            {
                title: 'Jarra Escultórica en Gres',
                tag: 'Pieza Única',
                price: '$28.000 CLP',
                image: imageUrls.ceramic,
            },
            {
                title: 'Guía: Cenizas & Vidriado',
                tag: 'Activo Digital',
                price: '$12.500 CLP',
                image: imageUrls.digital,
            },
        ],
    },
    {
        id: '18',
        district: 'telar',
        name: 'Estudio Telar & Bosque',
        artisan: 'Amalia Quintriqueo',
        role: 'Maestra Tejedora · Stand #18',
        location: 'Lino & Lanas Merinas · Curarrehue, Chile',
        quote: '“Mantas pesadas y bufandones tejidos en telar de cuatro lizos con lana de oveja hilada a mano y teñida con cortezas de maqui y barro.”',
        rating: '4.9',
        reviews: '(98 reseñas de coleccionistas)',
        inventory: '6 mantas listas',
        inventoryStatus: 'En telar',
        markerLabel: 'Telar & Bosque #18',
        markerDetail: 'En telar',
        markerIcon: 'texture',
        markerColor: '#094cb2',
        position: { x: 45, y: 18 },
        avatar: imageUrls.textile,
        products: [
            {
                title: 'Manta Telar Austral Cuatro Lizos',
                tag: 'Lana Pura',
                price: '$64.000 CLP',
                image: imageUrls.textile,
            },
            {
                title: 'Bufandón Merina & Tintes',
                tag: 'Edición Otoño',
                price: '$34.000 CLP',
                image: imageUrls.textile,
            },
        ],
    },
    {
        id: '09',
        district: 'ebanistas',
        name: 'Taller Raíz Austral',
        artisan: 'Mateo Cárdenas',
        role: 'Maestro Ebanista · Stand #09',
        location: 'Tornería en Raulí & Forja · Puerto Varas, Chile',
        quote: '“Madera noble recuperada de galpones centenarios torneada con gubia tradicional y sellada con cera virgen de abeja y aceites orgánicos.”',
        rating: '4.95',
        reviews: '(114 reseñas de coleccionistas)',
        inventory: '8 fuentes listas',
        inventoryStatus: 'Cepillo activo',
        markerLabel: 'Raíz Austral #09',
        markerDetail: 'Mesas de autor',
        markerIcon: 'carpenter',
        markerColor: '#735338',
        position: { x: 84, y: 34 },
        avatar: imageUrls.wood,
        products: [
            {
                title: 'Fuente Esculpida en Raulí Vivo',
                tag: 'Madera Reciclada',
                price: '$45.000 CLP',
                image: imageUrls.wood,
            },
            {
                title: 'Cucharas de Autor Forjadas',
                tag: 'Juego de 2',
                price: '$18.000 CLP',
                image: imageUrls.wood,
            },
        ],
    },
    {
        id: '24',
        district: 'digital',
        name: 'Bitácora Digital & Saberes',
        artisan: 'Tomás Silva',
        role: 'Diseñador & Tipógrafo · Stand #24',
        location: 'Herramientas de Taller · Valparaíso, Chile',
        quote: '“Diseño editorial, sistemas Notion para inventario de creadores y familias tipográficas inspiradas en antiguos letreros de oficios porteños.”',
        rating: '4.88',
        reviews: '(205 descargas)',
        inventory: '8 guías descargables',
        inventoryStatus: 'Disponible 24/7',
        markerLabel: 'Bitácora #24',
        markerDetail: '3 Manuales hoy',
        markerIcon: 'menu_book',
        markerColor: '#094cb2',
        position: { x: 49, y: 58 },
        avatar: imageUrls.digital,
        products: [
            {
                title: 'Sistema Notion: Costos & Taller',
                tag: 'Plantilla Notion',
                price: '$9.900 CLP',
                image: imageUrls.digital,
            },
            {
                title: 'Tipografía Porteña: OTF',
                tag: 'Licencia Estudio',
                price: '$16.500 CLP',
                image: imageUrls.digital,
            },
        ],
    },
    {
        id: '07',
        district: 'botanica',
        name: 'Botánica Silvestre & Joyería',
        artisan: 'Camila Montecinos',
        role: 'Orfebre Botánica · Stand #07',
        location: 'Plata 950 & Flores Secas · Curacaví, Chile',
        quote: '“Fundición a la cera perdida con hojas nativas reales recolectadas en el bosque esclerófilo e hidrolatos destilados en alambique de cobre.”',
        rating: '4.92',
        reviews: '(87 reseñas de coleccionistas)',
        inventory: '14 piezas de plata',
        inventoryStatus: 'Hidrolatos frescos',
        markerLabel: 'Botánica #07',
        markerDetail: 'Aromas nativos',
        markerIcon: 'spa',
        markerColor: '#3e6843',
        position: { x: 82, y: 80 },
        avatar: imageUrls.ceramic,
        products: [
            {
                title: 'Anillo Textura Quillay Plata 950',
                tag: 'Plata Fina',
                price: '$36.000 CLP',
                image: imageUrls.ceramic,
            },
            {
                title: 'Hidrolato Nativo Destilado',
                tag: 'Aroma Vivo',
                price: '$14.000 CLP',
                image: imageUrls.textile,
            },
        ],
    },
    {
        id: '32',
        district: 'barro',
        name: 'Gres Vulcano Villarrica',
        artisan: 'Rodrigo Baeza',
        role: 'Alfarero de Alta Temperatura · Stand #32',
        location: 'Gres de Alta Temperatura · Villarrica, Chile',
        quote: '“Teteras kyusu andinas y cuencos de té cocidos con leña nativa en atmósfera reductora con pastas silíceas de gran resistencia térmica.”',
        rating: '4.89',
        reviews: '(63 reseñas de coleccionistas)',
        inventory: '5 teteras listas',
        inventoryStatus: 'Hornada lista',
        markerLabel: 'Gres Vulcano #32',
        markerDetail: 'Teteras de fuego',
        markerIcon: 'local_fire_department',
        markerColor: '#6d5e00',
        position: { x: 12, y: 64 },
        avatar: imageUrls.ceramic,
        products: [
            {
                title: 'Tetera Kyusu en Gres Oscuro',
                tag: 'Edición Fuego',
                price: '$42.000 CLP',
                image: imageUrls.ceramic,
            },
            {
                title: 'Set 2 Chawan de Té Volcánico',
                tag: 'Gres 1280°C',
                price: '$22.000 CLP',
                image: imageUrls.ceramic,
            },
        ],
    },
];

const districts: District[] = [
    {
        id: 'all',
        label: 'Toda la Ciudad',
        title: 'Toda la Ciudad Ferial',
        focus: [1, 0, 0],
    },
    {
        id: 'barro',
        label: 'Fuego y Barro (Cerámica)',
        title: 'Distrito del Fuego y Barro',
        focus: [1.25, 180, 0],
    },
    {
        id: 'telar',
        label: 'Telar & Fibras',
        title: 'Barrio del Telar & Fibras',
        focus: [1.3, 0, 120],
    },
    {
        id: 'ebanistas',
        label: 'Ebanistas & Forja',
        title: 'Paseo de Ebanistas & Forja',
        focus: [1.25, -180, 20],
    },
    {
        id: 'digital',
        label: 'Distrito Digital',
        title: 'Distrito Digital & Saberes',
        focus: [1.3, -40, -80],
    },
    {
        id: 'botanica',
        label: 'Botánica & Joyería',
        title: 'Jardín Botánico & Joyería',
        focus: [1.25, -140, -140],
    },
];

export default function TiendasStores() {
    const viewportRef = useRef<HTMLDivElement>(null);
    const [zoom, setZoom] = useState(1);
    const [pan, setPan] = useState({ x: 0, y: 0 });
    const [dragStart, setDragStart] = useState<{ x: number; y: number } | null>(
        null,
    );
    const [district, setDistrict] = useState<DistrictId>('all');
    const [query, setQuery] = useState('');
    const [activeStandId, setActiveStandId] = useState<string | null>('48');

    const normalizedQuery = query.trim().toLowerCase();
    const visibleStands = stands.filter((stand) => {
        const matchesDistrict =
            district === 'all' || stand.district === district;
        const searchable =
            `${stand.id} ${stand.name} ${stand.artisan} ${stand.location}`.toLowerCase();

        return (
            matchesDistrict &&
            (!normalizedQuery || searchable.includes(normalizedQuery))
        );
    });
    const activeStand =
        stands.find((stand) => stand.id === activeStandId) ?? null;
    const activeDistrict =
        districts.find((item) => item.id === district) ?? districts[0];

    function selectDistrict(nextDistrict: DistrictId) {
        const next =
            districts.find((item) => item.id === nextDistrict) ?? districts[0];
        const [nextZoom, x, y] = next.focus;

        setDistrict(nextDistrict);
        setZoom(nextZoom);
        setPan({ x, y });
    }

    function selectStand(id: string, scrollToMap = false) {
        setActiveStandId(id);

        if (scrollToMap) {
            viewportRef.current?.scrollIntoView({
                behavior: 'smooth',
                block: 'center',
            });
        }

        if (window.innerWidth >= 768 && zoom < 1.1) {
            setZoom(1.15);
        }
    }

    function updateSearch(value: string) {
        setQuery(value);
        const search = value.trim().toLowerCase();

        if (search.length >= 3) {
            const matchingStand = stands.find((stand) =>
                `${stand.name} ${stand.artisan}`.toLowerCase().includes(search),
            );

            if (matchingStand) {
                setActiveStandId(matchingStand.id);
            }
        }
    }

    return (
        <MainLayout>
            <EditorialHeader
                activeDistrict={activeDistrict}
                district={district}
                districts={districts}
                onDistrictSelect={selectDistrict}
                onSearchChange={updateSearch}
                query={query}
                visibleStandsCount={visibleStands.length}
                zoom={zoom}
            />

            <InteractiveMap
                activeDistrict={activeDistrict}
                activeStand={activeStand}
                activeStandId={activeStandId}
                district={district}
                dragStart={dragStart}
                onDistrictSelect={selectDistrict}
                onStandSelect={selectStand}
                pan={pan}
                setActiveStandId={setActiveStandId}
                setDragStart={setDragStart}
                setPan={setPan}
                setQuery={setQuery}
                setZoom={setZoom}
                stands={stands}
                viewportRef={viewportRef}
                visibleStands={visibleStands}
                zoom={zoom}
            />

            <TrendingStoresCatalog
                onStandSelect={selectStand}
                stands={stands}
            />
            <OpenStandCta />
        </MainLayout>
    );
}
