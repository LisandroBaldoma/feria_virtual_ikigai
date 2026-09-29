export type DistrictId =
    'all' | 'barro' | 'telar' | 'ebanistas' | 'digital' | 'botanica';

export interface ProductPreview {
    title: string;
    tag: string;
    price: string;
    image: string;
}

export interface Stand {
    id: string;
    district: Exclude<DistrictId, 'all'>;
    name: string;
    artisan: string;
    role: string;
    location: string;
    quote: string;
    rating: string;
    reviews: string;
    inventory: string;
    inventoryStatus: string;
    markerLabel: string;
    markerDetail: string;
    markerIcon: string;
    markerColor: string;
    position: { x: number; y: number };
    avatar: string;
    products: [ProductPreview, ProductPreview];
}

export interface District {
    id: DistrictId;
    label: string;
    title: string;
    focus: [number, number, number];
}
