import type { SVGProps } from 'react';

type AppLogoIconProps = SVGProps<SVGSVGElement>;

export default function AppLogoIcon({
    'aria-hidden': ariaHidden,
    'aria-label': ariaLabel = 'Isotipo de Feria Virtual Ikigai',
    ...props
}: AppLogoIconProps) {
    const isDecorative = ariaHidden === true || ariaHidden === 'true';

    return (
        <svg
            aria-hidden={ariaHidden}
            aria-label={isDecorative ? undefined : ariaLabel}
            fill="none"
            role={isDecorative ? undefined : 'img'}
            viewBox="0 0 100 100"
            xmlns="http://www.w3.org/2000/svg"
            {...props}
        >
            <circle
                cx="50"
                cy="50"
                r="46"
                fill="#3366CC"
                fillOpacity="0.07"
                stroke="#3366CC"
                strokeDasharray="4 3"
                strokeOpacity="0.3"
                strokeWidth="1.5"
            />
            <path d="M 50 18 L 41 31 L 59 31 Z" fill="#3366CC" />
            <path
                d="M 35 23 C 42 28 46 32 50 32 C 54 32 58 28 65 23"
                stroke="#1E3A8A"
                strokeLinecap="round"
                strokeWidth="2.5"
            />
            <path
                d="M 30 39 C 30 34, 38 33, 50 33 C 62 33, 70 34, 70 39 C 72 49, 68 57, 66 59 L 34 59 C 32 57, 28 49, 30 39 Z"
                fill="#1E3A8A"
            />
            <path
                d="M 40 44 L 60 44 C 58 52 54 56 50 56 C 46 56 42 52 40 44 Z"
                fill="#FFFFFF"
            />
            <circle cx="50" cy="49" r="2.5" fill="#3366CC" />
            <path
                d="M 25 57 L 34 57 L 30 73 L 19 66 C 21 61 23 58 25 57 Z"
                fill="#3366CC"
                fillOpacity="0.85"
            />
            <path
                d="M 75 57 L 66 57 L 70 73 L 81 66 C 79 61 77 58 75 57 Z"
                fill="#3366CC"
                fillOpacity="0.85"
            />
            <path
                d="M 34 61 L 66 61 L 72 82 C 72 85 70 87 66 87 L 34 87 C 30 87 28 85 28 82 L 34 61 Z"
                fill="#0F172A"
            />
            <line
                x1="50"
                x2="50"
                y1="61"
                y2="85"
                stroke="#3366CC"
                strokeLinecap="round"
                strokeWidth="2"
            />
            <circle cx="50" cy="73" r="1.8" fill="#FFFFFF" />
        </svg>
    );
}
