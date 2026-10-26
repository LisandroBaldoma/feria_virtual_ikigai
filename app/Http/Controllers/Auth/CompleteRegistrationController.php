<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CompleteRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CompleteRegistrationController extends Controller
{
    public function edit(Request $request): Response|RedirectResponse
    {
        if ($request->user()->hasCompletedProfile()) {
            return to_route('dashboard');
        }

        return Inertia::render('auth/complete-registration', [
            'profile' => $request->user()->only(['name', 'last_name', 'username']),
        ]);
    }

    public function update(CompleteRegistrationRequest $request): RedirectResponse
    {
        $request->user()->update($request->validated());

        return to_route('dashboard');
    }
}
