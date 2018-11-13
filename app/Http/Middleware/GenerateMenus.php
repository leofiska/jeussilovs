<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      \Menu::make('TheBestNavBar', function ($menu) {
        $menu->add('Home');
        $menu->add('Buscar Livros', 'read');
        $menu->add('Registrar Livro', 'create');
        $menu->add('Sobre', '#about');
      });

    return $next($request);

    }
}
