import type { ComponentProps, ReactNode } from 'react';

import { cn } from '@/lib/utils';

interface FeriaSectionHeadingProps
    extends Omit<ComponentProps<'header'>, 'title'> {
    eyebrow?: ReactNode;
    title: ReactNode;
    description?: ReactNode;
    tone?: 'primary' | 'secondary';
    align?: 'start' | 'center';
    spacing?: 'none' | 'tight' | 'relaxed';
}

function FeriaSectionHeading({
    eyebrow,
    title,
    description,
    tone = 'primary',
    align = 'start',
    spacing = 'none',
    className,
    ...props
}: FeriaSectionHeadingProps) {
    return (
        <header
            className={cn(
                'flex flex-col',
                spacing === 'tight' && 'gap-space-xs',
                spacing === 'relaxed' && 'gap-2',
                align === 'center' && 'items-center text-center',
                className,
            )}
            {...props}
        >
            {eyebrow && (
                <span
                    className={cn(
                        'font-label-sm text-label-sm font-bold uppercase tracking-widest',
                        tone === 'primary' ? 'text-primary' : 'text-secondary',
                    )}
                >
                    {eyebrow}
                </span>
            )}
            <h2 className="font-headline-lg text-headline-lg text-on-surface">
                {title}
            </h2>
            {description && (
                <p className="font-body-md text-body-md text-on-surface-variant">
                    {description}
                </p>
            )}
        </header>
    );
}

export { FeriaSectionHeading };
export type { FeriaSectionHeadingProps };
