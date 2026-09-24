import { cva, type VariantProps } from 'class-variance-authority';
import type { ComponentProps } from 'react';

import { cn } from '@/lib/utils';

const feriaBadgeVariants = cva(
    'inline-flex items-center gap-1 font-label-sm text-label-sm',
    {
        variants: {
            variant: {
                category:
                    'rounded-full bg-surface-container-lowest/90 px-space-sm py-1 font-semibold text-on-surface backdrop-blur',
                productSurface:
                    'rounded-md bg-surface-container-lowest/95 px-space-sm py-1 font-semibold text-on-surface shadow-sm backdrop-blur',
                productSecondary:
                    'rounded-md bg-secondary-container/95 px-space-sm py-1 font-semibold text-on-secondary-container shadow-sm backdrop-blur',
                compactSurface:
                    'rounded-md bg-surface-container-lowest/90 px-2 py-0.5 text-on-surface',
                compactSecondary:
                    'rounded-md bg-secondary-container px-2 py-0.5 text-on-secondary-container',
                location:
                    'rounded-full bg-surface-container px-2 py-0.5 text-on-surface-variant',
                live: 'rounded-full bg-secondary-container px-space-sm py-1 font-semibold text-on-secondary-container',
            },
        },
        defaultVariants: {
            variant: 'category',
        },
    },
);

interface FeriaBadgeProps
    extends ComponentProps<'span'>,
        VariantProps<typeof feriaBadgeVariants> {}

function FeriaBadge({ className, variant, ...props }: FeriaBadgeProps) {
    return (
        <span
            className={cn(feriaBadgeVariants({ variant }), className)}
            {...props}
        />
    );
}

export { FeriaBadge, feriaBadgeVariants };
export type { FeriaBadgeProps };
