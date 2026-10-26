import { Form, Head } from '@inertiajs/react';
import CompleteRegistrationController from '@/actions/App/Http/Controllers/Auth/CompleteRegistrationController';
import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

type Props = {
    profile: {
        name: string | null;
        last_name: string | null;
        username: string | null;
    };
};

export default function CompleteRegistration({ profile }: Props) {
    return (
        <>
            <Head title="Completar registro" />
            <Form
                {...CompleteRegistrationController.update.form()}
                className="flex flex-col gap-6"
            >
                {({ processing, errors }) => (
                    <>
                        <div className="grid gap-2">
                            <Label htmlFor="name">Nombre</Label>
                            <Input
                                id="name"
                                name="name"
                                required
                                defaultValue={profile.name ?? ''}
                                autoComplete="given-name"
                            />
                            <InputError message={errors.name} />
                        </div>
                        <div className="grid gap-2">
                            <Label htmlFor="last_name">Apellido</Label>
                            <Input
                                id="last_name"
                                name="last_name"
                                required
                                defaultValue={profile.last_name ?? ''}
                                autoComplete="family-name"
                            />
                            <InputError message={errors.last_name} />
                        </div>
                        <div className="grid gap-2">
                            <Label htmlFor="username">Nombre de usuario</Label>
                            <Input
                                id="username"
                                name="username"
                                required
                                defaultValue={profile.username ?? ''}
                                minLength={3}
                                maxLength={50}
                            />
                            <InputError message={errors.username} />
                        </div>
                        <Button disabled={processing}>
                            Completar registro
                        </Button>
                    </>
                )}
            </Form>
        </>
    );
}

CompleteRegistration.layout = {
    title: 'Completa tu registro',
    description: 'Necesitamos algunos datos más para finalizar tu cuenta.',
};
