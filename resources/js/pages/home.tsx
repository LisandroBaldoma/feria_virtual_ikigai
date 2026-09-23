import EditorialSection from '@/components/editorial-section';
import FeaturedStores from '@/components/featured-stores';
import HeroSection from '@/components/hero-section';
import ProductExplorer from '@/components/product-explorer';
import SellerFeaturedProducts from '@/components/seller-featured-products';
import SellerCTA from '@/components/seller-cta';
import StoreCategories from '@/components/store-categories';
import TopSellingStores from '@/components/top-selling-stores';
import MainLayout from '@/layouts/main-layout';

export default function Home() {
    return (
        <MainLayout>
            <div className="flex w-full flex-col">
                <HeroSection />
                <StoreCategories />
                <SellerFeaturedProducts />
                <EditorialSection />
                <FeaturedStores />
                <TopSellingStores />
                <ProductExplorer />
                <SellerCTA />
            </div>
        </MainLayout>
    );
}
