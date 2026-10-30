import { Head, Link } from '@inertiajs/react';
import {
    BadgeCheck,
    ClipboardList,
    Crown,
    Eye,
    ReceiptText,
    Star,
    Store,
    Tags,
    Users,
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
import categories from '@/routes/categories';
import owner from '@/routes/owner';

type Props = {
    overview: {
        stores: number;
        approvedStores: number;
        providers: number;
        categories: number;
    };
};

const futureAreas = [
    {
        title: 'Tiendas y proveedores',
        description: 'Revisá, aprobá y administrá las tiendas del marketplace.',
        icon: Store,
    },
    {
        title: 'Categorías de tiendas',
        description:
            'Organizá las categorías globales disponibles para las tiendas.',
        icon: Tags,
    },
    {
        title: 'Pedidos',
        description:
            'Supervisá los pedidos y su operación en todas las tiendas.',
        icon: ClipboardList,
    },
    {
        title: 'Suscripciones',
        description: 'Configurá los planes y verificá los pagos recibidos.',
        icon: ReceiptText,
    },
    {
        title: 'Reseñas',
        description: 'Moderá las reseñas enviadas por compradores.',
        icon: BadgeCheck,
    },
    {
        title: 'Destacados',
        description: 'Seleccioná tiendas y supervisá productos destacados.',
        icon: Star,
    },
];

export default function PlatformOwnerDashboard({ overview }: Props) {
    const summary = [
        {
            label: 'Tiendas registradas',
            value: overview.stores,
            description: `${overview.approvedStores} aprobadas para publicación`,
            icon: Store,
        },
        {
            label: 'Proveedores',
            value: overview.providers,
            description: 'Con una tienda creada en la plataforma',
            icon: Users,
        },
        {
            label: 'Categorías',
            value: overview.categories,
            description: 'Disponibles para clasificar tiendas',
            icon: Tags,
        },
    ];

    return (
        <>
            <Head title="Panel de la plataforma" />

            <div className="mx-auto w-full max-w-6xl space-y-8 p-4 md:p-6">
                <section className="bg-card overflow-hidden rounded-2xl border shadow-sm">
                    <div className="bg-primary px-6 py-8 text-on-primary md:px-8">
                        <div className="flex max-w-2xl flex-col gap-4">
                            <div className="flex size-11 items-center justify-center rounded-xl bg-on-primary/15">
                                <Crown className="size-6" />
                            </div>
                            <div>
                                <p className="text-sm text-on-primary/75">
                                    Administración global
                                </p>
                                <h1 className="text-2xl font-semibold tracking-tight">
                                    Panel de la plataforma
                                </h1>
                                <p className="mt-2 text-on-primary/80">
                                    Supervisá el estado general del marketplace
                                    y prepará sus próximas operaciones.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-border grid gap-px md:grid-cols-3">
                        {summary.map(
                            ({ label, value, description, icon: Icon }) => (
                                <div key={label} className="bg-card px-6 py-5">
                                    <Icon className="size-5 text-primary" />
                                    <p className="mt-4 text-3xl font-semibold tracking-tight">
                                        {value}
                                    </p>
                                    <p className="mt-1 font-medium">{label}</p>
                                    <p className="text-muted-foreground mt-1 text-sm">
                                        {description}
                                    </p>
                                </div>
                            ),
                        )}
                    </div>
                </section>

                <section className="space-y-4">
                    <div>
                        <h2 className="text-xl font-semibold">
                            Administración
                        </h2>
                        <p className="text-muted-foreground">
                            Estas áreas se habilitarán a medida que se
                            incorporen sus funcionalidades operativas.
                        </p>
                    </div>
                    <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <Card className="gap-4">
                            <CardHeader>
                                <div className="flex items-start justify-between gap-4">
                                    <div className="flex size-10 items-center justify-center rounded-lg bg-primary/10">
                                        <Tags className="size-5 text-primary" />
                                    </div>
                                    <Badge>Disponible</Badge>
                                </div>
                                <CardTitle className="mt-2">
                                    Categorías de tiendas
                                </CardTitle>
                                <CardDescription>
                                    Organizá las categorías globales disponibles
                                    para las tiendas.
                                </CardDescription>
                            </CardHeader>
                            <CardContent>
                                <Button asChild>
                                    <Link href={categories.index()}>
                                        Administrar categorías
                                    </Link>
                                </Button>
                            </CardContent>
                        </Card>
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

                <section className="flex items-start gap-3 rounded-xl border border-primary/20 bg-primary/5 px-5 py-4 text-sm">
                    <Eye className="mt-0.5 size-5 shrink-0 text-primary" />
                    <p className="text-muted-foreground">
                        Esta vista reúne información global. No representa la
                        administración de una tienda en particular.
                    </p>
                </section>
            </div>
        </>
    );
}

PlatformOwnerDashboard.layout = {
    breadcrumbs: [
        {
            title: 'Panel de la plataforma',
            href: owner.dashboard(),
        },
    ],
};
