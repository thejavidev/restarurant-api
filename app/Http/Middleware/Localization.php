<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    protected const ALLOWED_LOCALIZATIONS = ['en', 'az', 'ru'];

    public function handle($request, Closure $next)
    {
        $localization = $request->header('Accept-Language');
        $localization = in_array($localization, self::ALLOWED_LOCALIZATIONS, true) ? $localization : 'az';
        app()->setLocale($localization);

        return $next($request);
    }
}
