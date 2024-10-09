<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Models\Book;

class HandleInertiaRequests extends Middleware
{
    public function share(Request $request)
{
    return array_merge(parent::share($request), [
        'auth' => function () use ($request) {
            return [
                'user' => $request->user() ? $request->user()->only('id', 'name', 'email') : null,
            ];
        },
        'bookCollection' => function () {
            return [
                'books' => Book::all(), 
            ];
        },
    ]);
}
}