import EditorialSection from '@/components/home/editorial-section';
import FeaturedStores from '@/components/home/featured-stores';
import HeroSection from '@/components/home/hero-section';
import ProductExplorer from '@/components/home/product-explorer';
import SellerCTA from '@/components/home/seller-cta';
import SellerFeaturedProducts from '@/components/home/seller-featured-products';
import StoreCategories from '@/components/home/store-categories';
import TopSellingStores from '@/components/home/top-selling-stores';
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
