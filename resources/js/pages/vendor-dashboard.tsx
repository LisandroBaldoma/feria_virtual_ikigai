import { Head, Link } from '@inertiajs/react';
import {
    Archive,
    ArrowRight,
    Boxes,
    CircleCheck,
    Clock3,
    FileText,
    Settings,
    ShieldCheck,
} from 'lucide-react';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';
import stores from '@/routes/stores';
import vendor from '@/routes/vendor';

type Props = {
    store: {
        title: string;
        subdomain: string;
        type: 'physical' | 'digital';
        category: string;
        isApproved: boolean;
        profileImageUrl: string | null;
    };
};

const futureAreas = [
    {
        title: 'Productos',
        description: 'Administrá tu catálogo y destacá tus productos.',
        icon: Boxes,
    },
    {
        title: 'Archivos',
        description: 'Gestioná los archivos de tus productos digitales.',
        icon: Archive,
    },
    {
        title: 'Ventas',
        description: 'Consultá pedidos, cobros y ventas de tu tienda.',
        icon: FileText,
    },
    {
        title: 'Verificación de pagos',
        description: 'Habilitá los medios de pago disponibles para tu tienda.',
        icon: ShieldCheck,
    },
];

export default function VendorDashboard({ store }: Props) {
    const storeType =
        store.type === 'physical' ? 'Productos físicos' : 'Productos digitales';

    return (
        <>
            <Head title="Panel de proveedor" />

            <div className="mx-auto w-full max-w-6xl space-y-8 p-4 md:p-6">
                <section className="bg-card overflow-hidden rounded-2xl border shadow-sm">
                    <div className="text-primary-foreground bg-primary px-6 py-8 md:px-8">
                        <div className="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                            <div className="flex items-center gap-4">
                                {store.profileImageUrl ? (
                                    <img
                                        src={store.profileImageUrl}
                                        alt="Imagen de perfil de la tienda"
                                        className="ring-primary-foreground/30 size-16 rounded-2xl object-cover ring-2"
                                    />
                                ) : (
                                    <div className="bg-primary-foreground/15 flex size-16 items-center justify-center rounded-2xl text-xl font-semibold">
                                        {store.title.slice(0, 1).toUpperCase()}
                                    </div>
                                )}
                                <div>
                                    <p className="text-primary-foreground/75 text-sm">
                                        Panel de proveedor
                                    </p>
                                    <h1 className="text-2xl font-semibold tracking-tight">
                                        {store.title}
                                    </h1>
                                    <p className="text-primary-foreground/75 text-sm">
                                        {store.subdomain}
                                    </p>
                                </div>
                            </div>
                            <Badge
                                variant={
                                    store.isApproved ? 'secondary' : 'outline'
                                }
                                className="border-primary-foreground/35 text-primary-foreground"
                            >
                                {store.isApproved ? (
                                    <CircleCheck />
                                ) : (
                                    <Clock3 />
                                )}
                                {store.isApproved
                                    ? 'Tienda aprobada'
                                    : 'Pendiente de aprobación'}
                            </Badge>
                        </div>
                    </div>

                    <div className="bg-border grid gap-px sm:grid-cols-3">
                        <div className="bg-card px-6 py-4">
                            <p className="text-muted-foreground text-sm">
                                Tipo de tienda
                            </p>
                            <p className="mt-1 font-medium">{storeType}</p>
                        </div>
                        <div className="bg-card px-6 py-4">
                            <p className="text-muted-foreground text-sm">
                                Categoría
                            </p>
                            <p className="mt-1 font-medium">{store.category}</p>
                        </div>
                        <div className="bg-card px-6 py-4">
                            <p className="text-muted-foreground text-sm">
                                Publicación
                            </p>
                            <p className="mt-1 font-medium">
                                {store.isApproved
                                    ? 'Visible para compradores'
                                    : 'Aún no pública'}
                            </p>
                        </div>
                    </div>
                </section>

                {!store.isApproved && (
                    <div className="rounded-xl border border-amber-500/40 bg-amber-500/10 px-5 py-4 text-sm text-amber-950 dark:text-amber-200">
                        Tu tienda fue creada correctamente. Estará disponible
                        públicamente cuando sea aprobada por la plataforma.
                    </div>
                )}

                <section className="space-y-4">
                    <div>
                        <h2 className="text-xl font-semibold">
                            Administración
                        </h2>
                        <p className="text-muted-foreground">
                            Configurá la información pública de tu tienda.
                        </p>
                    </div>
                    <Card className="gap-4">
                        <CardHeader>
                            <CardTitle className="flex items-center gap-2">
                                <Settings className="size-5 text-primary" />
                                Configuración de tienda
                            </CardTitle>
                            <CardDescription>
                                Actualizá el título, la descripción y la imagen
                                de perfil de tu tienda.
                            </CardDescription>
                        </CardHeader>
                        <CardContent>
                            <Button asChild>
                                <Link href={stores.edit()}>
                                    Administrar tienda
                                    <ArrowRight />
                                </Link>
                            </Button>
                        </CardContent>
                    </Card>
                </section>

                <section className="space-y-4">
                    <div>
                        <h2 className="text-xl font-semibold">Próximamente</h2>
                        <p className="text-muted-foreground">
                            Estas áreas se habilitarán en las siguientes etapas.
                        </p>
                    </div>
                    <div className="grid gap-4 sm:grid-cols-2">
                        {futureAreas.map(
                            ({ title, description, icon: Icon }) => (
                                <Card key={title} className="gap-4 opacity-75">
                                    <CardHeader>
                                        <div className="flex items-start justify-between gap-4">
                                            <div className="bg-muted flex size-10 items-center justify-center rounded-lg">
                                                <Icon className="text-muted-foreground size-5" />
                                            </div>
                                            <Badge variant="outline">
                                                Próximamente
                                            </Badge>
                                        </div>
                                        <CardTitle className="mt-2">
                                            {title}
                                        </CardTitle>
                                        <CardDescription>
                                            {description}
                                        </CardDescription>
                                    </CardHeader>
                                </Card>
                            ),
                        )}
                    </div>
                </section>
            </div>
        </>
    );
}

VendorDashboard.layout = {
    breadcrumbs: [
        {
            title: 'Panel de proveedor',
            href: vendor.dashboard(),
        },
    ],
};
