<?php

namespace Modules\ValidationClient\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider {

    public function boot() {
        View::composer('validationclient::documentation', 'Modules\Portal\Http\ViewComposers\Parameters\EventValidationComposer');
    }

    public function register() {}

}
