<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = ['http://127.0.0.1:8000/create','http://127.0.0.1:8000/Bończak/54468/people','http://127.0.0.1:8000/Bończak/54468/people/create','http://127.0.0.1:8000/Bończak/54468/create-people','http://127.0.0.1:8000/Bończak/54468/people/{id}'
        
    ];
}