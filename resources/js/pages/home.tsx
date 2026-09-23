import HeroSection from '@/components/hero-section';
import MainLayout from '@/layouts/main-layout';

export default function Home() {
    return (
        <MainLayout>
            <div className="flex w-full flex-col">
                <HeroSection />
            </div>
        </MainLayout>
    );
}
