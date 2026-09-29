import { useEffect, useState } from 'react';

import { StoreCatalog } from '@/components/store-front/catalog';
import { products } from '@/components/store-front/data';
import { InquiryDialog } from '@/components/store-front/inquiry-dialog';
import { StoreFrontHero } from '@/components/store-front/store-front-hero';
import {
    StoreFrontPolicies,
    StoreFrontTraceability,
} from '@/components/store-front/store-front-policies';
import type {
    PriceFilter,
    ProductCategory,
    SortOption,
    ToastMessage,
} from '@/components/store-front/types';
import MainLayout from '@/layouts/main-layout';

export default function StoreFront() {
    const [following, setFollowing] = useState(false);
    const [inquiryOpen, setInquiryOpen] = useState(false);
    const [category, setCategory] = useState<ProductCategory>('all');
    const [query, setQuery] = useState('');
    const [priceFilter, setPriceFilter] = useState<PriceFilter>('all');
    const [sort, setSort] = useState<SortOption>('recent');
    const [toast, setToast] = useState<ToastMessage | null>(null);

    useEffect(() => {
        if (!toast) {
            return;
        }

        const timeout = window.setTimeout(() => setToast(null), 3200);

        return () => window.clearTimeout(timeout);
    }, [toast]);

    const visibleProducts = products
        .filter((product) => {
            const searchable =
                `${product.title} ${product.detail} ${product.description}`.toLowerCase();
            const categoryMatches =
                category === 'all' ||
                (category === 'limited'
                    ? product.isLimited
                    : product.category === category);
            const priceMatches =
                priceFilter === 'all' ||
                (priceFilter === 'under15'
                    ? product.price < 15000
                    : priceFilter === '15to30'
                      ? product.price <= 30000 && product.price >= 15000
                      : product.price > 30000);

            return (
                categoryMatches &&
                priceMatches &&
                searchable.includes(query.trim().toLowerCase())
            );
        })
        .sort((first, second) =>
            sort === 'price-asc'
                ? first.price - second.price
                : sort === 'price-desc'
                  ? second.price - first.price
                  : sort === 'popular'
                    ? second.popularity - first.popularity
                    : 0,
        );

    function showToast(
        message: string,
        icon: ToastMessage['icon'] = 'check_circle',
    ) {
        setToast({ message, icon });
    }
    function toggleFollowing() {
        const next = !following;
        setFollowing(next);
        showToast(
            next
                ? 'Ahora sigues a Taller Barro Mestizo. Recibirás avisos de nuevas hornadas.'
                : 'Has dejado de seguir el stand.',
            next ? 'check_circle' : 'notifications_off',
        );
    }
    function share() {
        if (!navigator.clipboard) {
            showToast('Comparte el enlace de esta página desde tu navegador.');

            return;
        }

        navigator.clipboard
            .writeText(window.location.href)
            .then(() =>
                showToast(
                    'Enlace directo del stand copiado al portapapeles',
                    'content_copy',
                ),
            )
            .catch(() =>
                showToast(
                    'Comparte el enlace de esta página desde tu navegador.',
                ),
            );
    }

    return (
        <MainLayout>
            <StoreFrontHero
                following={following}
                onFollowToggle={toggleFollowing}
                onInquiryOpen={() => setInquiryOpen(true)}
                onShare={share}
            />
            <StoreFrontTraceability />
            <StoreCatalog
                category={category}
                onAction={showToast}
                onCategoryChange={setCategory}
                onPriceFilterChange={setPriceFilter}
                onQueryChange={setQuery}
                onSortChange={setSort}
                priceFilter={priceFilter}
                query={query}
                sort={sort}
                visibleProducts={visibleProducts}
            />
            <StoreFrontPolicies />
            <InquiryDialog
                onOpenChange={setInquiryOpen}
                onSubmit={() => {
                    setInquiryOpen(false);
                    showToast(
                        'Tu mensaje fue enviado a Valentina. Recibirás respuesta por email.',
                    );
                }}
                open={inquiryOpen}
            />
            {toast && (
                <div
                    className="fixed right-6 bottom-6 z-50 flex items-center gap-2 rounded-xl bg-inverse-surface px-4 py-3 font-label text-xs text-inverse-on-surface shadow-xl"
                    role="status"
                >
                    <span className="material-symbols-outlined text-emerald-400">
                        {toast.icon}
                    </span>
                    {toast.message}
                </div>
            )}
        </MainLayout>
    );
}
