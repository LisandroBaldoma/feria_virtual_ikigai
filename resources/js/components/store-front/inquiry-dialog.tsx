import { X } from 'lucide-react';
import { useState } from 'react';
import type { FormEvent } from 'react';

import { storeImages } from '@/components/store-front/data';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { Dialog, DialogContent, DialogTitle } from '@/components/ui/dialog';
import { FeriaButton } from '@/components/ui/feria-button';
import { FeriaIconButton } from '@/components/ui/feria-icon-button';

interface InquiryDialogProps {
    open: boolean;
    onOpenChange: (open: boolean) => void;
    onSubmit: () => void;
}

export function InquiryDialog({
    open,
    onOpenChange,
    onSubmit,
}: InquiryDialogProps) {
    const [fields, setFields] = useState({ name: '', email: '', message: '' });
    function submit(event: FormEvent<HTMLFormElement>) {
        event.preventDefault();
        setFields({ name: '', email: '', message: '' });
        onSubmit();
    }

    return (
        <Dialog open={open} onOpenChange={onOpenChange}>
            <DialogContent
                className="w-full max-w-lg rounded-2xl border-0 p-6 shadow-2xl sm:p-8"
                overlayClassName="bg-on-surface/40 backdrop-blur-sm"
                showCloseButton={false}
            >
                <div className="flex items-center justify-between">
                    <div className="flex items-center gap-3">
                        <Avatar className="size-10">
                            <AvatarImage
                                alt="Valentina"
                                src={storeImages.pitcher}
                            />
                            <AvatarFallback>VL</AvatarFallback>
                        </Avatar>
                        <div>
                            <DialogTitle className="font-headline text-base font-semibold text-on-surface">
                                Mensaje al Taller de Valentina
                            </DialogTitle>
                            <p className="flex items-center gap-1 font-label text-[11px] text-emerald-800">
                                <span className="size-1.5 rounded-full bg-emerald-600" />
                                Suele responder en menos de 4 horas
                            </p>
                        </div>
                    </div>
                    <FeriaIconButton
                        aria-label="Cerrar consulta"
                        onClick={() => onOpenChange(false)}
                        variant="action"
                    >
                        <X className="size-4" />
                    </FeriaIconButton>
                </div>
                <form className="space-y-4" onSubmit={submit}>
                    <label className="block text-xs font-medium text-on-surface">
                        Tu nombre o estudio
                        <input
                            className="mt-1 w-full rounded-xl bg-surface-container-low px-3.5 py-2.5 text-xs ring-primary/40 outline-none focus:ring-2"
                            onChange={(event) =>
                                setFields({
                                    ...fields,
                                    name: event.target.value,
                                })
                            }
                            placeholder="Ej. Camila Valenzuela"
                            required
                            value={fields.name}
                        />
                    </label>
                    <label className="block text-xs font-medium text-on-surface">
                        Correo para recibir la respuesta
                        <input
                            className="mt-1 w-full rounded-xl bg-surface-container-low px-3.5 py-2.5 text-xs ring-primary/40 outline-none focus:ring-2"
                            onChange={(event) =>
                                setFields({
                                    ...fields,
                                    email: event.target.value,
                                })
                            }
                            placeholder="tu-correo@ejemplo.com"
                            required
                            type="email"
                            value={fields.email}
                        />
                    </label>
                    <label className="block text-xs font-medium text-on-surface">
                        Tu consulta
                        <textarea
                            className="mt-1 w-full rounded-xl bg-surface-container-low px-3.5 py-2.5 text-xs ring-primary/40 outline-none focus:ring-2"
                            onChange={(event) =>
                                setFields({
                                    ...fields,
                                    message: event.target.value,
                                })
                            }
                            placeholder="Hola Valentina, me gustaría saber..."
                            required
                            rows={4}
                            value={fields.message}
                        />
                    </label>
                    <div className="flex justify-end gap-3 pt-2">
                        <FeriaButton
                            onClick={() => onOpenChange(false)}
                            size="compact"
                            type="button"
                            variant="secondary"
                        >
                            Cancelar
                        </FeriaButton>
                        <FeriaButton size="compact" type="submit">
                            Enviar mensaje directo
                        </FeriaButton>
                    </div>
                </form>
            </DialogContent>
        </Dialog>
    );
}
