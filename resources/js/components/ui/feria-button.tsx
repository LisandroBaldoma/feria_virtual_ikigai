import { Slot } from '@radix-ui/react-slot';
import { cva, type VariantProps } from 'class-variance-authority';
import type { ComponentProps } from 'react';

import { cn } from '@/lib/utils';

const feriaButtonVariants = cva(
    'inline-flex items-center justify-center gap-space-sm font-title-md text-title-md transition-all',
    {
        variants: {
            variant: {
                primary:
                    'rounded-xl bg-primary text-on-primary shadow-md hover:bg-primary-container hover:shadow-xl',
                secondary:
                    'rounded-xl bg-surface-container-highest text-on-surface hover:bg-surface-variant',
                surface:
                    'rounded-xl bg-surface-container text-on-surface hover:bg-primary hover:text-on-primary transition-colors',
                subtle:
                    'rounded-lg bg-surface-container-lowest text-on-surface shadow-sm hover:bg-surface-bright transition-colors',
            },
            size: {
                compact: 'px-space-md py-space-sm',
                default: 'px-space-lg py-4',
                wide: 'px-space-xl py-4',
                block: 'w-full py-3 text-center',
            },
        },
        defaultVariants: {
            variant: 'primary',
            size: 'default',
        },
    },
);

interface FeriaButtonProps
    extends ComponentProps<'button'>,
        VariantProps<typeof feriaButtonVariants> {
    asChild?: boolean;
}

function FeriaButton({
    className,
    variant,
    size,
    asChild = false,
    ...props
}: FeriaButtonProps) {
    const Component = asChild ? Slot : 'button';

    return (
        <Component
            className={cn(feriaButtonVariants({ variant, size }), className)}
            {...props}
        />
    );
}

export { FeriaButton, feriaButtonVariants };
export type { FeriaButtonProps };
