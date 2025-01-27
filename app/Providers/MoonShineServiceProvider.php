<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\CategoriesGroupsResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\SizeResource;
use App\MoonShine\Resources\ColorResource;
use App\MoonShine\Resources\MaterialResource;
use App\MoonShine\Resources\ProductVariantResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                CategoryResource::class,
                CategoriesGroupsResource::class,
                ProductResource::class,
                SizeResource::class,
                ColorResource::class,
                MaterialResource::class,
                ProductVariantResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
