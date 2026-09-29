import { FeriaButton } from '@/components/ui/feria-button';

export function OpenStandCta() {
    return (
        <section className="bg-surface-container-low px-6 py-16 lg:px-12">
            <div className="mx-auto flex max-w-7xl flex-col items-center justify-between gap-10 rounded-3xl bg-surface-container-lowest p-8 shadow-lg lg:flex-row lg:p-14">
                <div className="max-w-2xl">
                    <span className="inline-flex items-center gap-2 rounded-full bg-surface-container px-3 py-1 font-label-sm text-label-sm font-bold tracking-wider text-primary uppercase">
                        <span className="material-symbols-outlined text-base">
                            storefront
                        </span>
                        Convocatoria Abierta · Edición Continua
                    </span>
                    <h2 className="mt-4 font-headline-lg text-headline-lg text-on-surface">
                        ¿Creas con devoción y buscas un puesto en la Ciudad
                        Ferial?
                    </h2>
                    <p className="mt-4 font-body-md text-body-md text-on-surface-variant">
                        Abre tu puesto sin comisiones abusivas y con una vitrina
                        cartográfica que respeta el valor de tu tiempo.
                    </p>
                </div>
                <FeriaButton asChild size="wide">
                    <a href="#">
                        Postular para abrir mi Stand
                        <span className="material-symbols-outlined text-base">
                            north_east
                        </span>
                    </a>
                </FeriaButton>
            </div>
        </section>
    );
}
