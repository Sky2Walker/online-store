<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariant;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<ProductVariant>
 */
class ProductVariantResource extends ModelResource
{
    protected string $model = ProductVariant::class;

    protected string $title = 'ProductVariants';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                BelongsTo::make('Product', 'product', 'name', ProductResource::class),
                BelongsTo::make('Color', 'color', 'name', ColorResource::class),
                BelongsTo::make('Size', 'size', 'name', SizeResource::class),
                BelongsTo::make('Material', 'material', 'name', MaterialResource::class),
                Number::make('Quantity', 'quantity')->min(0)->max(100)->buttons(),
                Number::make('Price', 'price')->min(0),
                Text::make('SKU', 'sku'),

            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),

        ];
    }

    /**
     * @param ProductVariant $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
