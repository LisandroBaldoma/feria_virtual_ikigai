<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class StoreController extends Controller
{
    public function create(Request $request): Response|RedirectResponse
    {
        if ($request->user()->store()->exists()) {
            return to_route('stores.edit');
        }

        return Inertia::render('stores/create', [
            'categories' => Category::query()
                ->orderBy('name')
                ->get(['id', 'name']),
        ]);
    }

    public function store(StoreStoreRequest $request): RedirectResponse
    {
        $attributes = $request->safe()->except('profile_image');

        if ($request->hasFile('profile_image')) {
            /** @var UploadedFile $profileImage */
            $profileImage = $request->file('profile_image');

            $attributes['profile_image_path'] = Storage::disk('public')->putFileAs(
                'stores/profile-images',
                $profileImage->getPathname(),
                $profileImage->hashName(),
            );
        }

        $request->user()->store()->create($attributes);

        Inertia::flash('toast', ['type' => 'success', 'message' => 'Tienda creada. Quedará pendiente de aprobación para publicarse.']);

        return to_route('stores.edit');
    }

    public function edit(Request $request): Response|RedirectResponse
    {
        $store = $request->user()->store()->with('category')->first();

        if ($store === null) {
            return to_route('stores.create');
        }

        return Inertia::render('stores/edit', [
            'store' => [
                'title' => $store->title,
                'description' => $store->description,
                'subdomain' => $store->subdomain,
                'type' => $store->type,
                'category' => $store->category->name,
                'profileImageUrl' => $store->profile_image_path === null
                    ? null
                    : Storage::disk('public')->url($store->profile_image_path),
            ],
        ]);
    }

    public function update(UpdateStoreRequest $request): RedirectResponse
    {
        $store = $request->user()->store()->firstOrFail();

        $store->fill($request->safe()->except('profile_image'));

        if ($request->hasFile('profile_image')) {
            Storage::disk('public')->delete($store->profile_image_path);

            /** @var UploadedFile $profileImage */
            $profileImage = $request->file('profile_image');

            $store->profile_image_path = Storage::disk('public')->putFileAs(
                'stores/profile-images',
                $profileImage->getPathname(),
                $profileImage->hashName(),
            );
        }

        $store->save();

        Inertia::flash('toast', ['type' => 'success', 'message' => 'Información de tienda actualizada.']);

        return to_route('stores.edit');
    }
}
