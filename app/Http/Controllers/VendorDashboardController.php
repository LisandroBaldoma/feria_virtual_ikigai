<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class VendorDashboardController extends Controller
{
    public function __invoke(Request $request): Response|RedirectResponse
    {
        $store = $request->user()->store()->with('category')->first();

        if ($store === null) {
            return to_route('stores.create');
        }

        return Inertia::render('vendor-dashboard', [
            'store' => [
                'title' => $store->title,
                'subdomain' => $store->subdomain,
                'type' => $store->type,
                'category' => $store->category->name,
                'isApproved' => $store->approved_at !== null,
                'profileImageUrl' => $store->profile_image_path === null
                    ? null
                    : Storage::disk('public')->url($store->profile_image_path),
            ],
        ]);
    }
}
