<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('settings')) {
            $sharedData['settings'] = Setting::getSettings();

            view()->share($sharedData);

            Blade::directive('company', function () {
                return Setting::where('id', '=', 1)->get()[0]->companyName;
            });
            Blade::directive('copyright', function () {
                return 'This System has been developed by Momentum Web Solutions Limited';
            });
        }

        Blade::directive(
            'money',
            function ($money) {
                return "Kshs. <?php echo number_format($money, 2); ?>";
}
);
}
}