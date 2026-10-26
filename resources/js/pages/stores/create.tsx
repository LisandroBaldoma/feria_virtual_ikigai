import { Form, Head } from '@inertiajs/react';
import StoreController from '@/actions/App/Http/Controllers/StoreController';
import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { create } from '@/routes/stores';

type Category = {
    id: number;
    name: string;
};

type Props = {
    categories: Category[];
};

export default function CreateStore({ categories }: Props) {
    return (
        <>
            <Head title="Crear tienda" />

            <div className="mx-auto max-w-2xl space-y-8">
                <div className="space-y-2">
                    <p className="text-sm font-medium text-primary">
                        Tu espacio en Feria Ikigai
                    </p>
                    <h1 className="text-3xl font-semibold tracking-tight">
                        Creá tu tienda
                    </h1>
                    <p className="text-muted-foreground">
                        El subdominio y el tipo de tienda quedarán definidos de
                        forma permanente al crearla.
                    </p>
                </div>

                <Form
                    {...StoreController.store.form()}
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
                                    autoComplete="organization"
                                    placeholder="Ej.: Taller Raíz"
                                />
                                <InputError message={errors.title} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="description">Descripción</Label>
                                <textarea
                                    id="description"
                                    name="description"
                                    maxLength={2000}
                                    rows={5}
                                    className="border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 w-full rounded-md border bg-background px-3 py-2 text-sm shadow-xs outline-none focus-visible:ring-[3px]"
                                    placeholder="Contá qué hace especial a tu tienda."
                                />
                                <InputError message={errors.description} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="subdomain">Subdominio</Label>
                                <Input
                                    id="subdomain"
                                    name="subdomain"
                                    required
                                    minLength={3}
                                    maxLength={63}
                                    pattern="[a-z0-9]([a-z0-9-]*[a-z0-9])?"
                                    placeholder="taller-raiz"
                                />
                                <p className="text-muted-foreground text-sm">
                                    Usá letras minúsculas, números y guiones. No
                                    podrás cambiarlo después.
                                </p>
                                <InputError message={errors.subdomain} />
                            </div>

                            <div className="grid gap-2">
                                <Label htmlFor="category_id">Categoría</Label>
                                <select
                                    id="category_id"
                                    name="category_id"
                                    required
                                    defaultValue=""
                                    className="border-input focus-visible:border-ring focus-visible:ring-ring/50 h-9 w-full rounded-md border bg-background px-3 text-sm shadow-xs outline-none focus-visible:ring-[3px]"
                                >
                                    <option value="" disabled>
                                        Seleccioná una categoría
                                    </option>
                                    {categories.map((category) => (
                                        <option
                                            key={category.id}
                                            value={category.id}
                                        >
                                            {category.name}
                                        </option>
                                    ))}
                                </select>
                                <InputError message={errors.category_id} />
                            </div>

                            <fieldset className="grid gap-3">
                                <legend className="text-sm font-medium">
                                    Tipo de tienda
                                </legend>
                                <p className="text-muted-foreground text-sm">
                                    Esta elección es permanente.
                                </p>
                                <label className="flex cursor-pointer items-start gap-3 rounded-lg border p-4">
                                    <input
                                        type="radio"
                                        name="type"
                                        value="physical"
                                        required
                                        className="mt-1"
                                    />
                                    <span>
                                        <span className="block font-medium">
                                            Productos físicos
                                        </span>
                                        <span className="text-muted-foreground text-sm">
                                            Para piezas que requieren entrega o
                                            retiro.
                                        </span>
                                    </span>
                                </label>
                                <label className="flex cursor-pointer items-start gap-3 rounded-lg border p-4">
                                    <input
                                        type="radio"
                                        name="type"
                                        value="digital"
                                        required
                                        className="mt-1"
                                    />
                                    <span>
                                        <span className="block font-medium">
                                            Productos digitales
                                        </span>
                                        <span className="text-muted-foreground text-sm">
                                            Para recursos descargables.
                                        </span>
                                    </span>
                                </label>
                                <InputError message={errors.type} />
                            </fieldset>

                            <div className="grid gap-2">
                                <Label htmlFor="profile_image">
                                    Imagen de perfil
                                </Label>
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

                            <Button disabled={processing} size="lg">
                                Crear tienda
                            </Button>
                        </>
                    )}
                </Form>
            </div>
        </>
    );
}

CreateStore.layout = {
    breadcrumbs: [
        {
            title: 'Crear tienda',
            href: create(),
        },
    ],
};
