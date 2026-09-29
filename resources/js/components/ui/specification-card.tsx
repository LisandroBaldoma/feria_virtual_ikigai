import type { ComponentProps } from 'react';

import { cn } from '@/lib/utils';

interface SpecificationCardProps extends ComponentProps<'article'> {
    description: string;
    icon: string;
    label: string;
    value: string;
    variant?: 'default' | 'physical';
}

function SpecificationCard({
    className,
    description,
    icon,
    label,
    value,
    variant = 'default',
    ...props
}: SpecificationCardProps) {
    if (variant === 'physical') {
        return (
            <article
                className={cn(
                    'flex flex-col justify-between gap-6 rounded-xl bg-surface-container-low p-6',
                    className,
                )}
                {...props}
            >
                <div className="flex size-10 items-center justify-center rounded-lg bg-surface-container text-primary">
                    <span className="material-symbols-outlined text-[22px]">
                        {icon}
                    </span>
                </div>
                <div>
                    <span className="font-label text-[11px] tracking-wider text-secondary uppercase">
                        {label}
                    </span>
                    <h3 className="mt-1 font-headline text-[18px] font-semibold text-on-surface">
                        {value}
                    </h3>
                    <p className="mt-1.5 font-body text-[13px] leading-snug text-on-surface-variant">
                        {description}
                    </p>
                </div>
            </article>
        );
    }

    return (
        <article
            className={cn(
                'flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-6 shadow-sm',
                className,
            )}
            {...props}
        >
            <div className="mb-4 flex items-center justify-between">
                <span className="material-symbols-outlined text-[28px] text-primary">
                    {icon}
                </span>
                <span className="font-label text-[11px] font-bold tracking-wider text-outline uppercase">
                    {label}
                </span>
            </div>
            <div>
                <h3 className="font-headline text-[18px] font-semibold text-on-surface">
                    {value}
                </h3>
                <p className="mt-1 font-body text-[13px] text-on-surface-variant">
                    {description}
                </p>
            </div>
        </article>
    );
}

export { SpecificationCard };
export type { SpecificationCardProps };
