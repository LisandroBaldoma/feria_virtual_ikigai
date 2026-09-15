import { Slot } from '@radix-ui/react-slot';
import { cva, type VariantProps } from 'class-variance-authority';
import type { ComponentProps } from 'react';

import { cn } from '@/lib/utils';

const feriaIconButtonVariants = cva(
    'inline-flex items-center justify-center transition-colors',
    {
        variants: {
            variant: {
                favorite:
                    'size-8 rounded-full bg-surface-container-lowest/80 text-on-surface-variant backdrop-blur hover:bg-surface-container-lowest hover:text-primary',
                action:
                    'p-2 rounded-lg bg-surface-container hover:bg-primary hover:text-on-primary',
                navigation:
                    'p-2.5 rounded-xl bg-surface-container hover:bg-primary hover:text-on-primary',
            },
        },
        defaultVariants: {
            variant: 'action',
        },
    },
);

interface FeriaIconButtonProps
    extends ComponentProps<'button'>,
        VariantProps<typeof feriaIconButtonVariants> {
    'aria-label': string;
    asChild?: boolean;
}

function FeriaIconButton({
    className,
    variant,
    asChild = false,
    ...props
}: FeriaIconButtonProps) {
    const Component = asChild ? Slot : 'button';

    return (
        <Component
            className={cn(feriaIconButtonVariants({ variant }), className)}
            {...props}
        />
    );
}

export { FeriaIconButton, feriaIconButtonVariants };
export type { FeriaIconButtonProps };
