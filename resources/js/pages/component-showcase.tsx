import { Head } from '@inertiajs/react';

import { CategoryCard } from '@/components/ui/category-card';
import { FeriaBadge } from '@/components/ui/feria-badge';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';
import { FeriaSectionHeading } from '@/components/ui/feria-section-heading';
import { ProductCard } from '@/components/ui/product-card';
import { StoreCard } from '@/components/ui/store-card';

import {
    showcaseCategories,
    showcaseProducts,
    showcaseStores,
} from './component-showcase.data';

export default function ComponentShowcase() {
    return (
        <>
            <Head title="Component Showcase" />
            <main className="min-h-screen bg-background px-6 py-16 text-on-surface lg:px-12">
                <div className="mx-auto flex max-w-7xl flex-col gap-16">
                    <FeriaSectionHeading
                        eyebrow="Migración React"
                        title="Component Showcase"
                        description="Vista temporal para comparar los primitives y patrones de contenido extraídos de la Home."
                        spacing="tight"
                    />

                    <section className="flex flex-col gap-6">
                        <FeriaSectionHeading
                            title="UI primitives"
                            description="Variantes visuales presentes en la referencia Blade."
                            spacing="tight"
                        />
                        <div className="flex flex-wrap items-center gap-4 rounded-2xl bg-surface-container p-6">
                            <FeriaButton variant="primary" size="wide">
                                Acción primaria
                            </FeriaButton>
                            <FeriaButton variant="secondary">
                                Acción secundaria
                            </FeriaButton>
                            <FeriaButton variant="subtle" size="compact">
                                Acción sutil
                            </FeriaButton>
                            <FeriaIconButton
                                variant="favorite"
                                aria-label="Guardar muestra"
                            >
                                <span className="material-symbols-outlined text-base">
                                    favorite
                                </span>
                            </FeriaIconButton>
                            <FeriaIconButton
                                variant="action"
                                aria-label="Agregar muestra"
                            >
                                <span className="material-symbols-outlined text-base">
                                    add_shopping_cart
                                </span>
                            </FeriaIconButton>
                            <FeriaIconButton
                                variant="navigation"
                                aria-label="Abrir muestra"
                            >
                                <span className="material-symbols-outlined text-lg">
                                    arrow_forward
                                </span>
                            </FeriaIconButton>
                            <FeriaBadge variant="category">
                                28 Stands
                            </FeriaBadge>
                            <FeriaBadge variant="productSecondary">
                                DIGITAL
                            </FeriaBadge>
                            <FeriaBadge variant="location">
                                Valparaíso
                            </FeriaBadge>
                        </div>
                    </section>

                    <section className="flex flex-col gap-6">
                        <FeriaSectionHeading
                            title="CategoryCard"
                            description="Patrón repetido en las seis categorías de la feria."
                            spacing="tight"
                        />
                        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            {showcaseCategories.map((category) => (
                                <CategoryCard
                                    key={category.title}
                                    {...category}
                                />
                            ))}
                        </div>
                    </section>

                    <section className="flex flex-col gap-6">
                        <FeriaSectionHeading
                            title="ProductCard"
                            description="Variantes destacada y catálogo."
                            spacing="tight"
                        />
                        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                            {showcaseProducts.map((product) => (
                                <ProductCard key={product.title} {...product} />
                            ))}
                        </div>
                    </section>

                    <section className="flex flex-col gap-6">
                        <FeriaSectionHeading
                            title="StoreCard"
                            description="Variantes destacada y ranking."
                            spacing="tight"
                        />
                        <div className="grid grid-cols-1 gap-6 lg:grid-cols-2">
                            {showcaseStores.map((store) => (
                                <StoreCard key={store.name} {...store} />
                            ))}
                        </div>
                    </section>
                </div>
            </main>
        </>
    );
}
