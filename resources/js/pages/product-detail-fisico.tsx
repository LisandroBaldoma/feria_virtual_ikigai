import { useRef, useState } from 'react';

import PhysicalArtisanProfile from '@/components/product-detail-fisico/physical-artisan-profile';
import PhysicalProductDetailContext from '@/components/product-detail-fisico/physical-product-detail-context';
import PhysicalProductMediaGallery from '@/components/product-detail-fisico/physical-product-media-gallery';
import PhysicalProductPurchasePanel from '@/components/product-detail-fisico/physical-product-purchase-panel';
import PhysicalProductReviews from '@/components/product-detail-fisico/physical-product-reviews';
import PhysicalProductTechnicalDetails from '@/components/product-detail-fisico/physical-product-technical-details';
import PhysicalRelatedProductsSection from '@/components/product-detail-fisico/physical-related-products-section';
import MainLayout from '@/layouts/main-layout';

export default function ProductDetailFisico() {
    const [isToastVisible, setIsToastVisible] = useState(false);
    const [toastMessage, setToastMessage] = useState(
        'Pieza agregada a la cesta de la feria.',
    );
    const toastTimeout = useRef<number | null>(null);

    function showToast(message: string) {
        setToastMessage(message);
        setIsToastVisible(true);

        if (toastTimeout.current !== null) {
            window.clearTimeout(toastTimeout.current);
        }

        toastTimeout.current = window.setTimeout(() => {
            setIsToastVisible(false);
        }, 2800);
    }

    return (
        <MainLayout>
            <div className="flex w-full flex-col">
                <PhysicalProductDetailContext />
                <section className="w-full py-10 lg:py-14">
                    <div className="mx-auto max-w-7xl px-6 lg:px-12">
                        <div className="grid grid-cols-1 items-start gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="flex flex-col gap-5 lg:col-span-7">
                                <PhysicalProductMediaGallery />
                            </div>
                            <div className="flex flex-col gap-6 lg:sticky lg:top-24 lg:col-span-5">
                                <PhysicalProductPurchasePanel
                                    onNotify={showToast}
                                />
                            </div>
                        </div>
                    </div>
                </section>
                <PhysicalArtisanProfile />
                <PhysicalProductTechnicalDetails />
                <PhysicalProductReviews />
                <PhysicalRelatedProductsSection onNotify={showToast} />
                <div
                    className={`pointer-events-none fixed right-6 bottom-6 z-50 transition-all duration-300 ${
                        isToastVisible
                            ? 'translate-y-0 opacity-100'
                            : 'translate-y-20 opacity-0'
                    }`}
                >
                    <div className="flex items-center gap-3 rounded-xl bg-on-surface px-5 py-3.5 text-surface shadow-xl">
                        <span className="material-symbols-outlined text-[20px] text-tertiary-fixed">
                            check_circle
                        </span>
                        <span className="font-body text-[13.5px]">
                            {toastMessage}
                        </span>
                    </div>
                </div>
            </div>
        </MainLayout>
    );
}
