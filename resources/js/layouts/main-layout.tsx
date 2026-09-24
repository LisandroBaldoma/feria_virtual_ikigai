import type { ReactNode } from 'react';

import MainFooter from '@/components/main-footer';
import MainHeader from '@/components/main-header';

export default function MainLayout({ children }: { children: ReactNode }) {
    return (
        <>
            <MainHeader />
            <main className="min-h-screen w-full bg-background pt-20">
                {children}
            </main>
            <MainFooter />
        </>
    );
}
