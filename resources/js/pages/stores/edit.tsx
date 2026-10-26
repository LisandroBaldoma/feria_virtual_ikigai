import { Form, Head } from '@inertiajs/react';
import StoreController from '@/actions/App/Http/Controllers/StoreController';
import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { edit } from '@/routes/stores';

type Props = {
    store: {
        title: string;
        description: string | null;
        subdomain: string;
        type: 'physical' | 'digital';
        category: string;
        profileImageUrl: string | null;
    };
};

export default function EditStore({ store }: Props) {
    return (
        <>
            <Head title="Configuración de tienda" />

            <div className="mx-auto max-w-2xl space-y-8">
                <div className="space-y-2">
                    <p className="text-sm font-medium text-primary">
                        Configuración de tienda
                    </p>
                    <h1 className="text-3xl font-semibold tracking-tight">
                        {store.title}
                    </h1>
                    <p className="text-muted-foreground">
                        Actualizá la información que verán las personas que
                        visiten tu tienda.
                    </p>
                </div>

                <Form
                    {...StoreController.update.form()}
                    encType="multipart/form-data"
                    className="bg-card space-y-6 rounded-xl border p-6 shadow-sm"
                >
                    {({ errors, processing }) => (
                        <>
                            <div className="grid gap-2">
                                <Label htmlFor="title">
                                    Título de la tienda
                                </Label>
                                <Input
                                    id="title"
                                    name="title"
                                    required
                                    maxLength={120}
                                    defaultValue={store.title}
                                />
                                <InputError message={errors.title} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="description">Descripción</Label>
                                <textarea
                                    id="description"
                                    name="description"
                                    defaultValue={store.description ?? ''}
                                    maxLength={2000}
                                    rows={5}
                                    className="border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md border bg-background px-3 py-2 text-sm shadow-xs outline-none focus-visible:ring-[3px]"
                                />
                                <InputError message={errors.description} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="profile_image">
                                    Imagen de perfil
                                </Label>
                                {store.profileImageUrl && (
                                    <img
                                        src={store.profileImageUrl}
                                        alt="Imagen de perfil actual de la tienda"
                                        className="size-24 rounded-full object-cover"
                                    />
                                )}
                                <Input
                                    id="profile_image"
                                    name="profile_image"
                                    type="file"
                                    accept="image/jpeg,image/png,image/webp"
                                />
                                <p className="text-muted-foreground text-sm">
                                    JPG, PNG o WebP de hasta 2 MB.
                                </p>
                                <InputError message={errors.profile_image} />
                            </div>

                            <div className="bg-muted/50 grid gap-4 rounded-lg p-4 sm:grid-cols-3">
                                <div>
                                    <p className="text-muted-foreground text-sm">
                                        Subdominio
                                    </p>
                                    <p className="font-medium">
                                        {store.subdomain}
                                    </p>
                                </div>
                                <div>
                                    <p className="text-muted-foreground text-sm">
                                        Tipo
                                    </p>
                                    <p className="font-medium">
                                        {store.type === 'physical'
                                            ? 'Productos físicos'
                                            : 'Productos digitales'}
                                    </p>
                                </div>
                                <div>
                                    <p className="text-muted-foreground text-sm">
                                        Categoría
                                    </p>
                                    <p className="font-medium">
                                        {store.category}
                                    </p>
                                </div>
                            </div>

                            <Button disabled={processing} size="lg">
                                Guardar cambios
                            </Button>
                        </>
                    )}
                </Form>
            </div>
        </>
    );
}

EditStore.layout = {
    breadcrumbs: [
        {
            title: 'Mi tienda',
            href: edit(),
        },
    ],
};
