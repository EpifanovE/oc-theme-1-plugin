<?php

namespace EEV\Theme1;

use EEV\Theme1\Classes\ThemeStyles;
use Illuminate\Support\Facades\Event;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot()
    {
        Event::listen('eev.core.inlineStyles', function ($styles) {
            $themeStylesManager = new ThemeStyles();

            return array_merge($styles, $themeStylesManager->getStyles());
        });

        parent::boot();
    }
}