import { cn } from '@/lib/utils';

import { FeriaBadge } from './feria-badge';
import { FeriaButton } from './feria-button';
import { FeriaIconButton } from './feria-icon-button';

interface StoreCardImage {
    src: string;
    alt: string;
}

interface StoreCardBaseProps {
    name: string;
    description: string;
    href: string;
    className?: string;
}

interface FeaturedStoreCardProps extends StoreCardBaseProps {
    variant: 'featured';
    banner: StoreCardImage;
    avatar: StoreCardImage;
    location: string;
    productPreviews: StoreCardImage[];
}

interface RankedStoreCardProps extends StoreCardBaseProps {
    variant: 'ranked';
    rank: number;
    thumbnail: StoreCardImage;
    verified: boolean;
    shipmentsLabel: string;
    ratingLabel: string;
}

type StoreCardProps = FeaturedStoreCardProps | RankedStoreCardProps;

function StoreCard(props: StoreCardProps) {
    if (props.variant === 'ranked') {
        return (
            <article
                className={cn(
                    'flex items-center gap-space-md rounded-2xl bg-surface-container-lowest p-5 shadow-sm transition-all hover:shadow-md',
                    props.className,
                )}
            >
                <span className="w-8 shrink-0 text-center font-display-hero text-headline-lg font-bold text-outline-variant/60">
                    {props.rank}
                </span>
                <div className="size-20 shrink-0 overflow-hidden rounded-xl bg-surface-container">
                    <img
                        src={props.thumbnail.src}
                        alt={props.thumbnail.alt}
                        className="h-full w-full object-cover"
                    />
                </div>
                <div className="flex min-w-0 flex-1 flex-col">
                    <div className="flex items-center gap-2">
                        <h3 className="truncate font-title-lg text-title-lg text-on-surface">
                            {props.name}
                        </h3>
                        {props.verified && (
                            <span
                                className="material-symbols-outlined text-sm text-secondary"
                                title="Artesano Verificado"
                            >
                                verified
                            </span>
                        )}
                    </div>
                    <p className="truncate font-body-sm text-body-sm text-on-surface-variant">
                        {props.description}
                    </p>
                    <div className="mt-2 flex items-center gap-4 font-label-sm text-label-sm text-secondary">
                        <span className="flex items-center gap-1">
                            <span className="material-symbols-outlined text-xs">
                                package_2
                            </span>
                            {props.shipmentsLabel}
                        </span>
                        <span className="flex items-center gap-1 text-tertiary">
                            <span className="material-symbols-outlined text-xs">
                                star
                            </span>
                            {props.ratingLabel}
                        </span>
                    </div>
                </div>
                <FeriaIconButton
                    asChild
                    variant="navigation"
                    aria-label={`Abrir ${props.name}`}
                    className="shrink-0"
                >
                    <a href={props.href}>
                        <span className="material-symbols-outlined text-lg">
                            arrow_forward
                        </span>
                    </a>
                </FeriaIconButton>
            </article>
        );
    }

    return (
        <article
            className={cn(
                'flex flex-col overflow-hidden rounded-2xl bg-surface-container-lowest shadow-sm transition-all duration-300 hover:shadow-xl',
                props.className,
            )}
        >
            <div className="relative h-36 w-full bg-surface-container">
                <img
                    src={props.banner.src}
                    alt={props.banner.alt}
                    className="h-full w-full object-cover"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent" />
                <div className="absolute -bottom-6 left-6 size-14 overflow-hidden rounded-full bg-surface shadow-md">
                    <img
                        src={props.avatar.src}
                        alt={props.avatar.alt}
                        className="h-full w-full object-cover"
                    />
                </div>
            </div>
            <div className="flex flex-1 flex-col justify-between gap-6 pt-8 pr-6 pb-6 pl-6">
                <div className="flex flex-col gap-1">
                    <div className="flex items-center justify-between">
                        <h3 className="font-headline-sm text-headline-sm font-semibold text-on-surface">
                            {props.name}
                        </h3>
                        <FeriaBadge variant="location">
                            {props.location}
                        </FeriaBadge>
                    </div>
                    <p className="font-body-sm text-body-sm text-on-surface-variant">
                        {props.description}
                    </p>
                </div>
                <div className="flex flex-col gap-2">
                    <span className="font-label-sm text-label-sm uppercase tracking-wider text-outline">
                        En exhibición:
                    </span>
                    <div className="grid grid-cols-3 gap-2">
                        {props.productPreviews.map((preview) => (
                            <div
                                key={preview.src}
                                className="aspect-square overflow-hidden rounded-lg bg-surface-container"
                            >
                                <img
                                    src={preview.src}
                                    alt={preview.alt}
                                    className="h-full w-full object-cover"
                                />
                            </div>
                        ))}
                    </div>
                </div>
                <FeriaButton asChild variant="surface" size="block">
                    <a href={props.href}>Entrar al stand</a>
                </FeriaButton>
            </div>
        </article>
    );
}

export { StoreCard };
export type { StoreCardProps, StoreCardImage };
