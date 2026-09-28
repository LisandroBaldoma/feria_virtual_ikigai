import { Avatar, AvatarImage } from '@/components/ui/avatar';
import { cn } from '@/lib/utils';

interface ReviewCardProps {
    avatar: {
        alt: string;
        src: string;
    };
    className?: string;
    name: string;
    quote: string;
    rating: number;
    subtitle: string;
    time: string;
}

function ReviewCard({
    avatar,
    className,
    name,
    quote,
    rating,
    subtitle,
    time,
}: ReviewCardProps) {
    return (
        <article
            className={cn(
                'flex flex-col justify-between gap-4 rounded-2xl bg-surface-container-low p-6',
                className,
            )}
        >
            <div className="flex flex-col gap-3">
                <div className="flex items-center justify-between">
                    <div className="flex items-center text-tertiary">
                        {Array.from({ length: rating }, (_, index) => (
                            <span
                                key={index}
                                className="material-symbols-outlined text-[16px]"
                                style={{ fontVariationSettings: "'FILL' 1" }}
                            >
                                star
                            </span>
                        ))}
                    </div>
                    <span className="font-label text-[11px] text-outline">
                        {time}
                    </span>
                </div>
                <p className="font-body text-[13.5px] leading-relaxed text-on-surface">
                    {quote}
                </p>
            </div>
            <div className="flex items-center gap-3 pt-2">
                <Avatar className="size-9">
                    <AvatarImage
                        alt={avatar.alt}
                        className="object-cover"
                        src={avatar.src}
                    />
                </Avatar>
                <div>
                    <span className="block font-body text-[13px] font-semibold text-on-surface">
                        {name}
                    </span>
                    <span className="font-label text-[11px] text-tertiary">
                        {subtitle}
                    </span>
                </div>
            </div>
        </article>
    );
}

export { ReviewCard };
export type { ReviewCardProps };
