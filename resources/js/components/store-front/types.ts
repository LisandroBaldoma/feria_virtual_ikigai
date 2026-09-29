export type ProductCategory =
    'all' | 'physical' | 'digital' | 'limited' | 'custom-order';
export type PriceFilter = 'all' | 'under15' | '15to30' | 'over30';
export type SortOption = 'recent' | 'price-asc' | 'price-desc' | 'popular';

export interface StoreProduct {
    id: string;
    category: 'physical' | 'digital';
    isLimited: boolean;
    title: string;
    detail: string;
    description: string;
    price: number;
    popularity: number;
    availability: string;
    image: string;
}

export interface ToastMessage {
    message: string;
    icon: 'check_circle' | 'notifications_off' | 'content_copy';
}
