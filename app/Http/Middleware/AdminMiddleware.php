<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Vérifie que l'utilisateur connecté a le rôle admin ou superadmin.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user() || !$request->user()->hasAnyRole(['admin', 'superadmin'])) {
            abort(403, 'Accès non autorisé.');
        }

        return $next($request);
    }
}
