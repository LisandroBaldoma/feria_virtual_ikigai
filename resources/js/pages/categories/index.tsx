import { Form, Head } from '@inertiajs/react';
import { Pencil, Plus, Store, Tags, Trash2 } from 'lucide-react';
import CategoryController from '@/actions/App/Http/Controllers/CategoryController';
import InputError from '@/components/input-error';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';
import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import categories from '@/routes/categories';
import owner from '@/routes/owner';

type Category = {
    id: number;
    name: string;
    slug: string;
    stores_count: number;
};

type Props = {
    categories: Category[];
};

function CategoryActions({ category }: { category: Category }) {
    const canDelete = category.stores_count === 0;

    return (
        <div className="flex items-center justify-end gap-2">
            <Dialog>
                <DialogTrigger asChild>
                    <Button variant="outline" size="sm">
                        <Pencil />
                        Editar
                    </Button>
                </DialogTrigger>
                <DialogContent>
                    <DialogHeader>
                        <DialogTitle>Editar categoría</DialogTitle>
                        <DialogDescription>
                            El identificador público se actualizará según el
                            nuevo nombre.
                        </DialogDescription>
                    </DialogHeader>
                    <Form
                        {...CategoryController.update.form(category.id)}
                        className="space-y-5"
                    >
                        {({ errors, processing }) => (
                            <>
                                <div className="grid gap-2">
                                    <Label htmlFor={`category-${category.id}`}>
                                        Nombre
                                    </Label>
                                    <Input
                                        id={`category-${category.id}`}
                                        name="name"
                                        defaultValue={category.name}
                                        required
                                        maxLength={80}
                                    />
                                    <InputError
                                        message={errors.name ?? errors.slug}
                                    />
                                </div>
                                <DialogFooter>
                                    <DialogClose asChild>
                                        <Button type="button" variant="outline">
                                            Cancelar
                                        </Button>
                                    </DialogClose>
                                    <Button disabled={processing}>
                                        Guardar
                                    </Button>
                                </DialogFooter>
                            </>
                        )}
                    </Form>
                </DialogContent>
            </Dialog>

            <Dialog>
                <DialogTrigger asChild>
                    <Button variant="outline" size="sm" disabled={!canDelete}>
                        <Trash2 />
                        Eliminar
                    </Button>
                </DialogTrigger>
                <DialogContent>
                    <DialogHeader>
                        <DialogTitle>Eliminar categoría</DialogTitle>
                        <DialogDescription>
                            Esta acción no se puede deshacer. Las categorías con
                            tiendas asociadas no se pueden eliminar.
                        </DialogDescription>
                    </DialogHeader>
                    <Form {...CategoryController.destroy.form(category.id)}>
                        {({ processing }) => (
                            <DialogFooter>
                                <DialogClose asChild>
                                    <Button type="button" variant="outline">
                                        Cancelar
                                    </Button>
                                </DialogClose>
                                <Button
                                    variant="destructive"
                                    disabled={processing}
                                >
                                    Eliminar categoría
                                </Button>
                            </DialogFooter>
                        )}
                    </Form>
                </DialogContent>
            </Dialog>
        </div>
    );
}

export default function CategoryIndex({ categories: categoryList }: Props) {
    return (
        <>
            <Head title="Categorías de tiendas" />

            <div className="mx-auto w-full max-w-5xl space-y-8 p-4 md:p-6">
                <div className="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p className="text-sm font-medium text-primary">
                            Administración global
                        </p>
                        <h1 className="mt-1 text-2xl font-semibold tracking-tight">
                            Categorías de tiendas
                        </h1>
                        <p className="text-muted-foreground mt-2">
                            Organizá las categorías disponibles para las tiendas
                            del marketplace.
                        </p>
                    </div>
                    <Badge variant="outline">
                        {categoryList.length} categorías
                    </Badge>
                </div>

                <Card>
                    <CardHeader>
                        <CardTitle className="flex items-center gap-2">
                            <Plus className="size-5 text-primary" />
                            Nueva categoría
                        </CardTitle>
                        <CardDescription>
                            El identificador público se genera automáticamente a
                            partir del nombre.
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Form
                            {...CategoryController.store.form()}
                            resetOnSuccess
                            className="flex flex-col gap-3 sm:flex-row sm:items-start"
                        >
                            {({ errors, processing }) => (
                                <>
                                    <div className="grid flex-1 gap-2">
                                        <Label htmlFor="name">Nombre</Label>
                                        <Input
                                            id="name"
                                            name="name"
                                            required
                                            maxLength={80}
                                            placeholder="Ej.: Cerámica y alfarería"
                                        />
                                        <InputError
                                            message={errors.name ?? errors.slug}
                                        />
                                    </div>
                                    <Button
                                        className="sm:mt-7"
                                        disabled={processing}
                                    >
                                        Crear categoría
                                    </Button>
                                </>
                            )}
                        </Form>
                    </CardContent>
                </Card>

                <section className="space-y-4">
                    <div>
                        <h2 className="text-xl font-semibold">
                            Categorías existentes
                        </h2>
                        <p className="text-muted-foreground">
                            Las categorías con tiendas asociadas se conservan
                            para mantener su clasificación.
                        </p>
                    </div>

                    {categoryList.length === 0 ? (
                        <Card>
                            <CardContent className="flex flex-col items-center gap-3 py-12 text-center">
                                <div className="bg-muted flex size-12 items-center justify-center rounded-xl">
                                    <Tags className="text-muted-foreground size-6" />
                                </div>
                                <div>
                                    <p className="font-medium">
                                        Todavía no hay categorías
                                    </p>
                                    <p className="text-muted-foreground mt-1 text-sm">
                                        Creá la primera categoría para que las
                                        nuevas tiendas puedan clasificar su
                                        actividad.
                                    </p>
                                </div>
                            </CardContent>
                        </Card>
                    ) : (
                        <div className="bg-card overflow-hidden rounded-xl border">
                            {categoryList.map((category) => (
                                <div
                                    key={category.id}
                                    className="flex flex-col gap-4 border-b p-4 last:border-b-0 sm:flex-row sm:items-center sm:justify-between"
                                >
                                    <div className="flex min-w-0 items-center gap-3">
                                        <div className="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                            <Tags className="size-5 text-primary" />
                                        </div>
                                        <div className="min-w-0">
                                            <p className="truncate font-medium">
                                                {category.name}
                                            </p>
                                            <p className="text-muted-foreground truncate text-sm">
                                                {category.slug}
                                            </p>
                                        </div>
                                    </div>
                                    <div className="flex flex-col gap-3 sm:flex-row sm:items-center">
                                        <Badge variant="secondary">
                                            <Store />
                                            {category.stores_count}{' '}
                                            {category.stores_count === 1
                                                ? 'tienda'
                                                : 'tiendas'}
                                        </Badge>
                                        <CategoryActions category={category} />
                                    </div>
                                </div>
                            ))}
                        </div>
                    )}
                </section>
            </div>
        </>
    );
}

CategoryIndex.layout = {
    breadcrumbs: [
        {
            title: 'Panel de la plataforma',
            href: owner.dashboard(),
        },
        {
            title: 'Categorías de tiendas',
            href: categories.index(),
        },
    ],
};
