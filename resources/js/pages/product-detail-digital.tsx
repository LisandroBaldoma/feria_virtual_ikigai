import ProductDetailContext from '@/components/product-detail-digital/product-detail-context';
import ProductEditorialTabs from '@/components/product-detail-digital/product-editorial-tabs';
import ProductMediaGallery from '@/components/product-detail-digital/product-media-gallery';
import ProductPurchasePanel from '@/components/product-detail-digital/product-purchase-panel';
import ProductReviews from '@/components/product-detail-digital/product-reviews';
import ProductSellerSummary from '@/components/product-detail-digital/product-seller-summary';
import ProductTechnicalSpecs from '@/components/product-detail-digital/product-technical-specs';
import RelatedProductsSection from '@/components/product-detail-digital/related-products-section';
import MainLayout from '@/layouts/main-layout';

export default function ProductDetailDigital() {
    return (
        <MainLayout>
            <div className="flex w-full flex-col">
                <ProductDetailContext />
                <section className="w-full px-6 py-10 lg:px-12 lg:py-14">
                    <div className="mx-auto grid max-w-7xl grid-cols-1 items-start gap-10 lg:grid-cols-12 xl:gap-14">
                        <div className="flex flex-col gap-6 lg:col-span-7">
                            <ProductMediaGallery />
                            <ProductSellerSummary />
                        </div>
                        <div className="flex flex-col gap-6 lg:sticky lg:top-28 lg:col-span-5">
                            <ProductPurchasePanel />
                        </div>
                    </div>
                </section>
                <ProductTechnicalSpecs />
                <ProductEditorialTabs />
                <ProductReviews />
                <RelatedProductsSection />
            </div>
        </MainLayout>
    );
}
