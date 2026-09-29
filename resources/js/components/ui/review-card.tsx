import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { cn } from '@/lib/utils';

import { RatingStars } from './rating-stars';

interface ReviewCardBaseProps {
    className?: string;
    name: string;
    quote: string;
    rating: number;
    subtitle: string;
}

interface StandardReviewCardProps extends ReviewCardBaseProps {
    avatar: {
        alt: string;
        src: string;
    };
    time: string;
    variant?: 'default';
}

interface PhysicalReviewCardProps extends ReviewCardBaseProps {
    initials: string;
    variant: 'physical';
}

type ReviewCardProps = StandardReviewCardProps | PhysicalReviewCardProps;

function ReviewCard(props: ReviewCardProps) {
    if (props.variant === 'physical') {
        return (
            <article
                className={cn(
                    'flex flex-col justify-between gap-5 rounded-xl bg-surface-container-lowest p-6 shadow-sm',
                    props.className,
                )}
            >
                <div className="flex flex-col gap-3">
                    <RatingStars rating={props.rating} />
                    <p className="font-body text-[13.5px] leading-relaxed text-on-surface-variant">
                        {props.quote}
                    </p>
                </div>
                <div className="flex items-center gap-3 border-t border-surface-container-high/40 pt-2">
                    <Avatar className="size-9">
                        <AvatarFallback className="bg-surface-container font-headline text-[14px] font-semibold text-primary">
                            {props.initials}
                        </AvatarFallback>
                    </Avatar>
                    <div className="flex flex-col">
                        <span className="font-body text-[13px] font-semibold text-on-surface">
                            {props.name}
                        </span>
                        <span className="text-[11.5px] text-secondary">
                            {props.subtitle}
                        </span>
                    </div>
                </div>
            </article>
        );
    }

    return (
        <article
            className={cn(
                'flex flex-col justify-between gap-4 rounded-2xl bg-surface-container-low p-6',
                props.className,
            )}
        >
            <div className="flex flex-col gap-3">
                <div className="flex items-center justify-between">
                    <RatingStars rating={props.rating} />
                    <span className="font-label text-[11px] text-outline">
                        {props.time}
                    </span>
                </div>
                <p className="font-body text-[13.5px] leading-relaxed text-on-surface">
                    {props.quote}
                </p>
            </div>
            <div className="flex items-center gap-3 pt-2">
                <Avatar className="size-9">
                    <AvatarImage
                        alt={props.avatar.alt}
                        className="object-cover"
                        src={props.avatar.src}
                    />
                </Avatar>
                <div>
                    <span className="block font-body text-[13px] font-semibold text-on-surface">
                        {props.name}
                    </span>
                    <span className="font-label text-[11px] text-tertiary">
                        {props.subtitle}
                    </span>
                </div>
            </div>
        </article>
    );
}

export { ReviewCard };
export type { ReviewCardProps };
