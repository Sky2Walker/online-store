<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryGroup;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Boolean;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<CategoryGroup>
 */
class CategoriesGroupsResource extends ModelResource
{
    protected string $model = CategoryGroup::class;

    protected string $title = 'Під категорії';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name', 'name'),
            Checkbox::make('Активно', 'is_active'),
            Checkbox::make('On home page', 'is_on_main_menu'),
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
                Text::make('Name', 'name'),
                BelongsTo::make('Sub Category', 'categories', 'name', resource: CategoryResource::class)
                    ->searchable(),
                Image::make('Зображення категорії', 'img')->removable()
                    ->disk('public')
                    ->dir('upload/images'),
                Checkbox::make('Активно', 'is_active'),
                Slug::make('Slug', 'slug')->from('name')->readonly(),
                Checkbox::make('On home page', 'is_on_main_menu'),

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
            Text::make('Name', 'name'),
            BelongsTo::make('Sub Category', 'categories', 'name', resource: CategoryResource::class)
                ->searchable(),
            Image::make('Зображення категорії', 'img')->removable()
                ->disk('public')
                ->dir('upload/images'),
            Checkbox::make('Активно', 'is_active'),
            Slug::make('Slug', 'slug')->from('name')->readonly(),
            Checkbox::make('On home page', 'is_on_main_menu'),
        ];
    }

    /**
     * @param CategoryGroup $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
