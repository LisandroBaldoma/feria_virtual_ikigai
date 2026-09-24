export default function EditorialSection() {
    return (
        <section className="mx-auto w-full max-w-7xl px-6 py-24 lg:px-12">
            <div className="relative overflow-hidden rounded-3xl bg-surface-container-high p-8 lg:p-16">
                <div className="absolute -right-16 -bottom-16 h-80 w-80 rounded-full bg-primary/10 blur-2xl" />
                <div className="relative z-10 grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
                    <div className="flex flex-col gap-space-lg lg:col-span-7">
                        <div className="flex items-center gap-space-xs text-primary">
                            <span className="material-symbols-outlined text-xl">
                                auto_stories
                            </span>
                            <span className="font-label-sm text-label-sm font-bold tracking-widest uppercase">
                                Voz de los Creadores
                            </span>
                        </div>
                        <blockquote className="font-headline-lg text-headline-lg leading-snug text-on-surface">
                            “En Ikigai no competimos por algoritmos ni precios
                            de remate; construimos vínculos reales con personas
                            que aprecian el tiempo, los errores hermosos y el
                            alma detrás de cada creación.”
                        </blockquote>
                        <div className="flex items-center gap-space-md">
                            <div className="h-12 w-12 shrink-0 overflow-hidden rounded-full bg-surface">
                                <img
                                    className="h-full w-full object-cover"
                                    data-alt="Portrait of Camila Valenzuela, a textile designer from Valparaiso smiling gently in her sunny textile studio"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDk83qD0GOJ4shijEKumWp0shll2dTj3PlVxAPbEPF9mnaeHuCaKb8bWdDBdKI4Dkf1JV-qvb2KaFSrVs8GhBD05Ja97mFa6YRuP2YlG2QOXLOtba2Z_3DESrzMK8RUITaSdXtw-dzvDy0NBYsbm2pWOS1fCWPfu8HrTWVCYD_WZrBfPi82jNKtWnQX2oz9g0vK0Es2BrQLVdTUFAKTJLSDA1rb6PY516IU0EZo2cKxh83lKQx8pNPrjw"
                                />
                            </div>
                            <div>
                                <p className="font-title-md text-title-md text-on-surface">
                                    Camila Valenzuela
                                </p>
                                <p className="font-body-sm text-body-sm text-on-surface-variant">
                                    Fundadora de Taller Hilandera · Stand #24
                                </p>
                            </div>
                        </div>
                        <div className="pt-2">
                            <a
                                className="inline-flex items-center gap-2 rounded-lg bg-surface-container-lowest px-space-md py-3 font-title-md text-title-md text-on-surface shadow-sm transition-colors hover:bg-surface-bright"
                                href="#"
                            >
                                <span>Leer el manifiesto de la feria</span>
                                <span className="material-symbols-outlined text-base text-primary">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                    <div className="flex flex-col gap-4 lg:col-span-5">
                        <div className="h-72 w-full overflow-hidden rounded-2xl bg-surface shadow-lg">
                            <img
                                className="h-full w-full object-cover"
                                data-alt="Detailed close-up hands weaving raw undyed wool on a wooden traditional frame loom with soft natural shadows"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAei6lyQVUKYntG52FcZdUHEA9Ks8BrVSksJn1w7Nhh0PXXO_E4Q95lLOOuTbpP-4lriWXHFiEuroJkVG2cBTyUzi8OREZq1DyaYTfHgCQVgGtGB0HBSQY8yuvFqVM_73M6l7BopPHbbdEpF3rsxmB7pN2PdV9QNvckrKIPztUqaT7hgR6LODH80x8ju-lF5yMkNEqMCk_qPZDTVoyqTLgd3BO8kOkb0eXq9DgN5E63SIMD5RHLOiho7A"
                            />
                        </div>
                        <div className="flex items-center justify-between rounded-xl bg-surface-container-lowest/80 p-4 backdrop-blur">
                            <div className="flex items-center gap-3">
                                <span className="material-symbols-outlined text-2xl text-secondary">
                                    eco
                                </span>
                                <div>
                                    <p className="font-label-md text-label-md font-semibold text-on-surface">
                                        Trazabilidad Total
                                    </p>
                                    <p className="font-body-sm text-body-sm text-on-surface-variant">
                                        Conoce el origen de materias primas de
                                        cada taller.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
