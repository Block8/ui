<?php

namespace Block8\UI;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    protected $assets = ['js' => [], 'css' => []];

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'material');
    }
}
