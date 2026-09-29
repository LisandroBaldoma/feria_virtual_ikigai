import type { ComponentProps } from 'react';

import { cn } from '@/lib/utils';

interface RatingStarsProps extends ComponentProps<'div'> {
    rating: number;
    iconClassName?: string;
}

function RatingStars({
    className,
    iconClassName,
    rating,
    ...props
}: RatingStarsProps) {
    return (
        <div className={cn('flex text-tertiary', className)} {...props}>
            {Array.from({ length: rating }, (_, index) => (
                <span
                    key={index}
                    className={cn(
                        'material-symbols-outlined icon-filled text-[16px]',
                        iconClassName,
                    )}
                >
                    star
                </span>
            ))}
        </div>
    );
}

export { RatingStars };
export type { RatingStarsProps };
