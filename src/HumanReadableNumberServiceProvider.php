<?php

namespace Zhanang19\HumanReadableNumber;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class HumanReadableNumberServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once(__DIR__ . '/Helpers.php');

        Blade::directive('readableNumber', function ($expression) {
            return "<?php echo \Zhanang19\HumanReadableNumber\HumanReadableNumber::format($expression); ?>";
        });
    }

    public function register()
    {
        //
    }
}
