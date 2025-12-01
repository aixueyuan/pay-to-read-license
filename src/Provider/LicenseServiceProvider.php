<?php

namespace Xypp\PayToReadLicense\Provider;

use Illuminate\Support\ServiceProvider;

class LicenseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // 空壳：未来需要再添加逻辑
    }

    public function boot(): void
    {
        // 防止 Flarum 安装时报错
    }
}
