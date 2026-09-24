import type { SVGProps } from 'react';
import AppLogoIcon from './AppLogoIcon';

type AppLogoProps = SVGProps<SVGSVGElement>;

export default function AppLogo({
    'aria-hidden': ariaHidden,
    'aria-label': ariaLabel = 'Feria Virtual Ikigai',
    ...props
}: AppLogoProps) {
    const isDecorative = ariaHidden === true || ariaHidden === 'true';

    return (
        <svg
            aria-hidden={ariaHidden}
            aria-label={isDecorative ? undefined : ariaLabel}
            fill="none"
            role={isDecorative ? undefined : 'img'}
            viewBox="0 0 500 113"
            xmlns="http://www.w3.org/2000/svg"
            {...props}
        >
            <AppLogoIcon
                aria-hidden="true"
                height="100"
                width="100"
                x="10"
                y="8"
            />
            <line
                x1="126"
                x2="126"
                y1="20"
                y2="105"
                stroke="#CBD5E1"
                strokeWidth="1.2"
            />
            <text
                x="148"
                y="60"
                fill="#0F172A"
                fontFamily="'Noto Serif', Georgia, serif"
                fontSize="38"
                fontWeight="700"
                letterSpacing="-0.03em"
            >
                Ikigai
            </text>
            <text
                x="151"
                y="84"
                fill="#3366CC"
                fontFamily="Inter, ui-sans-serif, system-ui, sans-serif"
                fontSize="12"
                fontWeight="600"
                letterSpacing="0.26em"
            >
                FERIA VIRTUAL
            </text>
            <text
                x="151"
                y="102"
                fill="#64748B"
                fontFamily="Inter, ui-sans-serif, system-ui, sans-serif"
                fontSize="10.5"
                fontWeight="400"
            >
                Marketplace artesanal de creadores y oficios
            </text>
        </svg>
    );
}
