import {
    Bookmark,
    Download,
    PackageOpen,
    Plus,
    Search,
    ShoppingCart,
} from 'lucide-react';

import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';
import { products } from '@/components/store-front/data';
import type {
    PriceFilter,
    ProductCategory,
    SortOption,
    StoreProduct,
} from '@/components/store-front/types';
import { cn } from '@/lib/utils';

const formatPrice = (price: number) => `$${price.toLocaleString('es-CL')} CLP`;

interface StoreCatalogProps {
    category: ProductCategory;
    priceFilter: PriceFilter;
    query: string;
    sort: SortOption;
    visibleProducts: StoreProduct[];
    onCategoryChange: (category: ProductCategory) => void;
    onPriceFilterChange: (filter: PriceFilter) => void;
    onQueryChange: (query: string) => void;
    onSortChange: (sort: SortOption) => void;
    onAction: (message: string) => void;
}

function ProductCard({
    product,
    featured = false,
    onAction,
}: {
    product: StoreProduct;
    featured?: boolean;
    onAction: (message: string) => void;
}) {
    return (
        <article className="group flex flex-col overflow-hidden rounded-2xl bg-surface-container-lowest shadow-sm transition-shadow hover:shadow-xl">
            <div
                className={cn(
                    'relative aspect-square overflow-hidden bg-surface-container',
                    product.category === 'digital' && 'p-6',
                )}
            >
                <img
                    alt={product.title}
                    className={cn(
                        'size-full object-cover transition-transform duration-500 group-hover:scale-105',
                        product.category === 'digital' &&
                            'rounded-xl shadow-md',
                    )}
                    src={product.image}
                />
                <div className="absolute top-3 left-3 flex flex-col items-start gap-1">
                    <FeriaBadge
                        className={
                            product.category === 'digital'
                                ? 'bg-primary-fixed text-on-primary-fixed-variant'
                                : ''
                        }
                        variant="productSurface"
                    >
                        {product.category === 'digital'
                            ? 'Activo Digital'
                            : 'Pieza Física'}
                    </FeriaBadge>
                    {featured && (
                        <FeriaBadge
                            className="bg-tertiary-fixed text-on-tertiary-fixed-variant"
                            variant="compactSurface"
                        >
                            Pieza Destacada · Serie Limitada
                        </FeriaBadge>
                    )}
                </div>
                <FeriaIconButton
                    aria-label={`Guardar ${product.title}`}
                    className="absolute top-3 right-3"
                    onClick={() =>
                        onAction(
                            `${product.title} fue guardada en tu bitácora.`,
                        )
                    }
                    variant="favorite"
                >
                    <Bookmark className="size-4" />
                </FeriaIconButton>
            </div>
            <div
                className={cn(
                    'flex flex-1 flex-col justify-between gap-4 p-4',
                    featured && 'p-6',
                )}
            >
                <div>
                    <p className="font-label text-[11px] text-outline">
                        {product.detail}
                    </p>
                    <h3 className="font-headline text-base font-semibold text-on-surface transition-colors group-hover:text-primary">
                        {product.title}
                    </h3>
                    <p className="mt-1 line-clamp-2 text-xs text-on-surface-variant">
                        {product.description}
                    </p>
                </div>
                <div className="flex items-center justify-between border-t border-outline-variant/20 pt-3">
                    <div>
                        <p className="font-headline text-lg font-bold text-on-surface">
                            {formatPrice(product.price)}
                        </p>
                        <p
                            className={cn(
                                'font-label text-[10px]',
                                product.category === 'digital'
                                    ? 'text-primary-container'
                                    : 'text-emerald-800',
                            )}
                        >
                            {product.availability}
                        </p>
                    </div>
                    {featured ? (
                        <FeriaButton
                            onClick={() =>
                                onAction(
                                    `${product.title} fue añadida a tu cesta.`,
                                )
                            }
                            size="compact"
                        >
                            <ShoppingCart className="size-4" />
                            {product.category === 'digital'
                                ? 'Obtener'
                                : 'Añadir'}
                        </FeriaButton>
                    ) : (
                        <FeriaIconButton
                            aria-label={`Añadir ${product.title} a la cesta`}
                            onClick={() =>
                                onAction(
                                    `${product.title} fue añadida a tu cesta.`,
                                )
                            }
                            variant="navigation"
                        >
                            {product.category === 'digital' ? (
                                <Download className="size-4" />
                            ) : (
                                <Plus className="size-4" />
                            )}
                        </FeriaIconButton>
                    )}
                </div>
            </div>
        </article>
    );
}

export function StoreCatalog(props: StoreCatalogProps) {
    const categoryTabs: { id: ProductCategory; label: string }[] = [
        { id: 'all', label: 'Todas las creaciones (12)' },
        { id: 'physical', label: 'Piezas Físicas (9)' },
        { id: 'digital', label: 'Recursos y Guías Digitales (3)' },
        { id: 'limited', label: 'Series Limitadas (4)' },
        { id: 'custom-order', label: 'Piezas a Pedido (0)' },
    ];
    return (
        <>
            <section className="bg-surface-container-lowest py-16">
                <div className="mx-auto max-w-7xl space-y-8 px-6 lg:px-12">
                    <div className="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                        <div>
                            <p className="font-label text-xs font-bold tracking-widest text-tertiary uppercase">
                                Curaduría del Puesto
                            </p>
                            <h2 className="font-headline text-2xl font-semibold text-on-surface sm:text-3xl">
                                Piezas Insignia de la Temporada
                            </h2>
                        </div>
                        <p className="max-w-sm text-sm text-on-surface-variant">
                            Obras maestras horneadas en la última hornada
                            invernal junto a los manuales técnicos del taller.
                        </p>
                    </div>
                    <div className="grid gap-6 md:grid-cols-3">
                        {products
                            .slice(0, 2)
                            .concat(products[5])
                            .map((product) => (
                                <ProductCard
                                    featured
                                    key={product.id}
                                    onAction={props.onAction}
                                    product={product}
                                />
                            ))}
                    </div>
                </div>
            </section>
            <section className="bg-surface-container-low py-10">
                <div className="mx-auto max-w-7xl space-y-6 px-6 lg:px-12">
                    <div className="flex flex-col justify-between gap-4 border-b border-outline-variant/20 pb-4 lg:flex-row lg:items-center">
                        <div>
                            <h2 className="font-headline text-2xl font-semibold text-on-surface">
                                Catálogo del Puesto
                            </h2>
                            <p className="mt-0.5 font-label text-xs text-on-surface-variant">
                                Mostrando{' '}
                                <strong className="text-on-surface">
                                    {props.category === 'custom-order'
                                        ? 0
                                        : props.visibleProducts.length}{' '}
                                    creaciones
                                </strong>{' '}
                                disponibles en el stand
                            </p>
                        </div>
                        <label className="relative w-full lg:w-80">
                            <span className="sr-only">
                                Buscar en Taller Barro Mestizo
                            </span>
                            <Search className="absolute top-2.5 left-3 size-4 text-outline" />
                            <input
                                className="w-full rounded-xl bg-surface-container-lowest py-2.5 pr-4 pl-10 text-xs text-on-surface shadow-sm ring-primary/40 transition outline-none focus:ring-2"
                                onChange={(event) =>
                                    props.onQueryChange(event.target.value)
                                }
                                placeholder="Buscar en Taller Barro Mestizo..."
                                value={props.query}
                            />
                        </label>
                    </div>
                    <div className="flex flex-col justify-between gap-4 md:flex-row md:items-center">
                        <div className="flex flex-wrap gap-2">
                            {categoryTabs.map((tab) => (
                                <button
                                    className={cn(
                                        'rounded-xl px-4 py-2 font-label text-xs font-semibold transition',
                                        props.category === tab.id
                                            ? 'bg-primary text-on-primary shadow-sm'
                                            : 'bg-surface-container-lowest text-on-surface hover:bg-surface-container-high',
                                    )}
                                    key={tab.id}
                                    onClick={() =>
                                        props.onCategoryChange(tab.id)
                                    }
                                    type="button"
                                >
                                    {tab.label}
                                </button>
                            ))}
                        </div>
                        <div className="flex gap-3">
                            <select
                                aria-label="Rango de precio"
                                className="rounded-xl bg-surface-container-lowest px-3 py-2 text-xs text-on-surface shadow-sm ring-primary outline-none focus:ring-1"
                                onChange={(event) =>
                                    props.onPriceFilterChange(
                                        event.target.value as PriceFilter,
                                    )
                                }
                                value={props.priceFilter}
                            >
                                <option value="all">
                                    Rango de precio: Todos
                                </option>
                                <option value="under15">
                                    Menos de $15.000
                                </option>
                                <option value="15to30">
                                    $15.000 - $30.000
                                </option>
                                <option value="over30">Más de $30.000</option>
                            </select>
                            <select
                                aria-label="Ordenar catálogo"
                                className="rounded-xl bg-surface-container-lowest px-3 py-2 text-xs text-on-surface shadow-sm ring-primary outline-none focus:ring-1"
                                onChange={(event) =>
                                    props.onSortChange(
                                        event.target.value as SortOption,
                                    )
                                }
                                value={props.sort}
                            >
                                <option value="recent">Más recientes</option>
                                <option value="price-asc">
                                    Menor a mayor precio
                                </option>
                                <option value="price-desc">
                                    Mayor a menor precio
                                </option>
                                <option value="popular">Más populares</option>
                            </select>
                        </div>
                    </div>
                </div>
            </section>
            <section className="bg-surface-container-low pb-20">
                <div className="mx-auto max-w-7xl px-6 lg:px-12">
                    {props.category === 'custom-order' ? (
                        <div className="space-y-6 rounded-2xl bg-surface-container-lowest px-6 py-16 text-center">
                            <div className="mx-auto flex size-20 items-center justify-center rounded-full bg-surface-container text-primary-container">
                                <PackageOpen className="size-10" />
                            </div>
                            <div className="mx-auto max-w-md space-y-2">
                                <p className="font-label text-xs font-bold tracking-widest text-tertiary uppercase">
                                    Hornada en Preparación
                                </p>
                                <h3 className="font-headline text-2xl font-semibold text-on-surface">
                                    No hay piezas disponibles en esta categoría
                                    por el momento
                                </h3>
                                <p className="text-sm leading-relaxed text-on-surface-variant">
                                    Valentina está preparando una nueva hornada
                                    a leña en su taller de Pucón. Las piezas a
                                    pedido abren cupos cada mes según los
                                    tiempos sagrados de secado de la arcilla.
                                </p>
                            </div>
                            <div className="flex flex-wrap justify-center gap-3">
                                <FeriaButton
                                    onClick={() =>
                                        props.onAction(
                                            'Te avisaremos cuando salgan nuevas piezas del horno.',
                                        )
                                    }
                                    size="compact"
                                >
                                    Avisarme cuando haya nuevas piezas
                                </FeriaButton>
                                <FeriaButton
                                    onClick={() =>
                                        props.onCategoryChange('all')
                                    }
                                    size="compact"
                                    variant="secondary"
                                >
                                    Explorar otras categorías
                                </FeriaButton>
                            </div>
                        </div>
                    ) : props.visibleProducts.length === 0 ? (
                        <div className="rounded-2xl bg-surface-container-lowest py-16 text-center text-on-surface-variant">
                            No encontramos creaciones con esos filtros.
                        </div>
                    ) : (
                        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            {props.visibleProducts.map((product) => (
                                <ProductCard
                                    key={product.id}
                                    onAction={props.onAction}
                                    product={product}
                                />
                            ))}
                        </div>
                    )}
                </div>
            </section>
        </>
    );
}
