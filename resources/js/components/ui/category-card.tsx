import { cn } from '@/lib/utils';

import { FeriaBadge } from './feria-badge';

type CategoryAccent = 'primary' | 'secondary' | 'tertiary' | 'surface';

interface CategoryCardProps {
    href: string;
    image: {
        src: string;
        alt: string;
    };
    standCount: number;
    icon: string;
    title: string;
    description: string;
    accent: CategoryAccent;
    className?: string;
}

function CategoryCard({
    href,
    image,
    standCount,
    icon,
    title,
    description,
    accent,
    className,
}: CategoryCardProps) {
    return (
        <a
            href={href}
            className={cn(
                'group flex flex-col overflow-hidden rounded-2xl bg-surface-container-lowest shadow-sm transition-all duration-300 hover:shadow-xl',
                className,
            )}
        >
            <div className="relative h-48 w-full overflow-hidden bg-surface-container">
                <img
                    src={image.src}
                    alt={image.alt}
                    className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                />
                <FeriaBadge
                    variant="category"
                    className="absolute top-4 right-4"
                >
                    {standCount} Stands
                </FeriaBadge>
            </div>
            <div className="flex flex-col gap-space-xs p-6">
                <div
                    className={cn(
                        'flex items-center gap-2 font-title-md text-title-md',
                        accent === 'primary' && 'text-primary',
                        accent === 'secondary' && 'text-secondary',
                        accent === 'tertiary' && 'text-tertiary',
                        accent === 'surface' && 'text-on-surface',
                    )}
                >
                    <span className="material-symbols-outlined text-lg">
                        {icon}
                    </span>
                    <h3>{title}</h3>
                </div>
                <p className="font-body-sm text-body-sm text-on-surface-variant">
                    {description}
                </p>
            </div>
        </a>
    );
}

export { CategoryCard };
export type { CategoryCardProps, CategoryAccent };
