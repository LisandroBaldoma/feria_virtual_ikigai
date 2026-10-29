<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class PlatformOwnerDashboardController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('platform-owner-dashboard', [
            'overview' => [
                'stores' => Store::count(),
                'approvedStores' => Store::whereNotNull('approved_at')->count(),
                'providers' => User::has('store')->count(),
                'categories' => Category::count(),
            ],
        ]);
    }
}
