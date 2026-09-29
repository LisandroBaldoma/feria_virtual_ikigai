import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogTitle,
} from '@/components/ui/dialog';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';

interface ProductPreviewDialogProps {
    open: boolean;
    onOpenChange: (open: boolean) => void;
    onPurchase: () => void;
}

export default function ProductPreviewDialog({
    open,
    onOpenChange,
    onPurchase,
}: ProductPreviewDialogProps) {
    return (
        <Dialog open={open} onOpenChange={onOpenChange}>
            <DialogContent
                className="relative flex w-full max-w-2xl flex-col gap-6 rounded-2xl border-0 p-6 shadow-2xl duration-300 sm:p-8"
                overlayClassName="bg-black/60 backdrop-blur-sm"
                showCloseButton={false}
            >
                <div className="flex items-center justify-between border-b border-surface-container pb-4">
                    <div>
                        <span className="font-label text-[11px] font-bold tracking-wider text-tertiary uppercase">
                            Muestra Editorial Libre
                        </span>
                        <DialogTitle className="font-headline text-[20px] font-semibold text-on-surface">
                            Guía Maestra de Tintes (Extracto 5 Págs)
                        </DialogTitle>
                    </div>
                    <FeriaIconButton
                        asChild
                        aria-label="Cerrar muestra editorial"
                        className="size-8 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high"
                    >
                        <DialogClose>
                            <span className="material-symbols-outlined text-[18px]">
                                close
                            </span>
                        </DialogClose>
                    </FeriaIconButton>
                </div>
                <div className="relative flex aspect-[16/10] w-full items-center justify-center overflow-hidden rounded-xl bg-surface-container">
                    <img
                        alt="Visualizador de muestra de libro digital"
                        className="h-full w-full object-cover"
                        data-alt="Digital PDF viewer preview inside a sleek tablet reader displaying page four of the dye recipe book with step by step illustrations and fabric swatch samples"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6pCu0Ucg_BxYKTVyEebU3DphcK-oxYslQ8ctt00dC4juyPPB9j_uMT_bR29JS0zLjUJJFWVO7yMFgotTdL61z6A6R4yA3B6OJ8BZufmFgMujf2EVYyRpnvden4ghQJRJTBeJrZbLSnHOyImPH7jMMJ8Hjkl_lX58b1GjdIh92dlKYiiswWRNgvcFVb8Ke8yyvtpsdo6vwhID3qOQTof1YX6oiZP7Ih_UD7vTFGfVcvDvMbb4Ll5mXxw"
                    />
                    <div className="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-transparent to-transparent p-5 text-white">
                        <div>
                            <span className="font-label text-[11px] tracking-wider uppercase opacity-80">
                                Vista previa interactiva de muestra
                            </span>
                            <p className="font-headline text-[15px]">
                                Capítulo 2: Principios Básicos de Extracción en
                                Frío y Caliente.
                            </p>
                        </div>
                    </div>
                </div>
                <div className="flex items-center justify-between gap-4 pt-2">
                    <span className="font-body text-[13px] text-on-surface-variant">
                        ¿Te gusta la muestra? El archivo completo incluye 84
                        páginas + 12 fichas.
                    </span>
                    <FeriaButton
                        asChild
                        className="shrink-0 bg-primary px-5 py-2.5 font-body text-[13px] font-semibold hover:bg-primary-container"
                        size="compact"
                    >
                        <DialogClose type="button" onClick={onPurchase}>
                            Adquirir Completa ($16.500)
                        </DialogClose>
                    </FeriaButton>
                </div>
            </DialogContent>
        </Dialog>
    );
}
