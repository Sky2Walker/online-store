<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Fields\Relationships\HasManyThrough;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Enum;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name', 'name')->sortable(),
            Text::make('Price', 'price'),
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
                Text::make('Name', 'name')->sortable(),
                Text::make('Description', 'description'),
                Textarea::make('Additional information', 'additional_information'),
                Slug::make('Slug', 'slug')->from('name')->readonly(),
                Text::make('SKU', 'sku'),

                Enum::make('Tags', 'tags')
                    ->options([
                        'Верх' => [
                            1 => 'Худі',
                            2 => 'Поло'
                        ],
                        'Низ' => [
                            3 => 'Джинси',
                            4 => 'Брюки'
                        ]])->searchable()->sortable(),
                Image::make('Зображення ', 'product_img')->removable()
                    ->disk('public')
                    ->dir('upload/images'),
                Text::make('Price', 'price'),

                BelongsTo::make('Підкатегорії ', 'category', 'name')->sortable()->searchable(),
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
            Text::make('Name', 'name')->sortable(),
            Text::make('Description', 'description'),
            Textarea::make('Additional information', 'additional_information'),
            Slug::make('Slug', 'slug')->from('name')->readonly(),
            Text::make('SKU', 'sku'),
            Enum::make('Tags', 'tags')
                ->options([
                    'Верх' => [
                        1 => 'Худі',
                        2 => 'Поло'
                    ],
                    'Низ' => [
                        3 => 'Джинси',
                        4 => 'Брюки'
                    ]])->searchable()->sortable(),
            Image::make('Зображення ', 'product_img')->removable()
                ->disk('public')
                ->dir('upload/images'),
            HasMany::make('Variants', 'variants', resource: ProductVariantResource::class),

            Text::make('Price', 'price'),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
