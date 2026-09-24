import { cn } from '@/lib/utils';

import { FeriaBadge } from './feria-badge';
import { FeriaIconButton } from './feria-icon-button';

type ProductType = 'physical' | 'digital';
type ProductAvailabilityTone = 'muted' | 'secondary' | 'tertiary';

interface ProductCardImage {
    src: string;
    alt: string;
}

interface ProductCardBaseProps {
    image: ProductCardImage;
    productType: ProductType;
    badgeLabel: string;
    seller: string;
    title: string;
    price: string;
    className?: string;
}

interface FeaturedProductCardProps extends ProductCardBaseProps {
    variant: 'featured';
    description: string;
    actionIcon: string;
    favoriteLabel: string;
    actionLabel: string;
}

interface CatalogProductCardProps extends ProductCardBaseProps {
    variant: 'catalog';
    availability: {
        label: string;
        tone: ProductAvailabilityTone;
    };
}

type ProductCardProps = FeaturedProductCardProps | CatalogProductCardProps;

function ProductCard(props: ProductCardProps) {
    const badgeVariant =
        props.variant === 'featured'
            ? props.productType === 'physical'
                ? 'productSurface'
                : 'productSecondary'
            : props.productType === 'physical'
              ? 'compactSurface'
              : 'compactSecondary';

    return (
        <article
            className={cn(
                'flex flex-col overflow-hidden rounded-2xl bg-surface-container-lowest shadow-sm transition-all duration-300 hover:shadow-xl',
                props.className,
            )}
        >
            <div
                className={cn(
                    'relative aspect-square overflow-hidden',
                    props.variant === 'featured'
                        ? 'bg-surface-container-high'
                        : 'bg-surface-container',
                )}
            >
                <img
                    src={props.image.src}
                    alt={props.image.alt}
                    className="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                />
                <FeriaBadge
                    variant={badgeVariant}
                    className="absolute top-3 left-3"
                >
                    {props.variant === 'featured' && (
                        <span
                            className={cn(
                                'material-symbols-outlined text-xs',
                                props.productType === 'physical'
                                    ? 'text-primary'
                                    : 'text-on-secondary-container',
                            )}
                        >
                            {props.productType === 'physical'
                                ? 'handyman'
                                : 'download_for_offline'}
                        </span>
                    )}
                    {props.badgeLabel}
                </FeriaBadge>
                {props.variant === 'featured' && (
                    <FeriaIconButton
                        variant="favorite"
                        aria-label={props.favoriteLabel}
                        className="absolute top-3 right-3"
                    >
                        <span className="material-symbols-outlined text-base">
                            favorite
                        </span>
                    </FeriaIconButton>
                )}
            </div>
            {props.variant === 'featured' ? (
                <div className="flex flex-1 flex-col justify-between gap-4 p-5">
                    <div className="flex flex-col gap-1">
                        <span className="font-label-sm text-label-sm font-medium text-secondary">
                            {props.seller}
                        </span>
                        <h3 className="line-clamp-1 font-headline-sm text-headline-sm font-semibold text-on-surface">
                            {props.title}
                        </h3>
                        <p className="line-clamp-2 font-body-sm text-body-sm text-on-surface-variant">
                            {props.description}
                        </p>
                    </div>
                    <div className="flex items-center justify-between pt-2">
                        <span className="font-title-lg text-title-lg text-on-surface">
                            {props.price}
                        </span>
                        <FeriaIconButton
                            variant="action"
                            aria-label={props.actionLabel}
                        >
                            <span className="material-symbols-outlined text-base">
                                {props.actionIcon}
                            </span>
                        </FeriaIconButton>
                    </div>
                </div>
            ) : (
                <div className="flex flex-1 flex-col justify-between gap-3 p-4">
                    <div>
                        <p className="font-label-sm text-label-sm text-on-surface-variant">
                            {props.seller}
                        </p>
                        <h3 className="font-title-md text-title-md text-on-surface">
                            {props.title}
                        </h3>
                    </div>
                    <div className="flex items-center justify-between">
                        <span className="font-title-md text-title-md font-bold text-primary">
                            {props.price}
                        </span>
                        <span
                            className={cn(
                                'font-body-sm text-body-sm',
                                props.availability.tone === 'muted' &&
                                    'text-on-surface-variant',
                                props.availability.tone === 'secondary' &&
                                    'font-semibold text-secondary',
                                props.availability.tone === 'tertiary' &&
                                    'font-semibold text-tertiary',
                            )}
                        >
                            {props.availability.label}
                        </span>
                    </div>
                </div>
            )}
        </article>
    );
}

export { ProductCard };
export type {
    ProductCardProps,
    ProductCardImage,
    ProductType,
    ProductAvailabilityTone,
};
