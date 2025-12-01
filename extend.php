<?php

namespace Xypp\PayToReadLicense;

use Flarum\Extend;

return [
    (new Extend\ServiceProvider())
        ->register(Provider\LicenseServiceProvider::class),
];
