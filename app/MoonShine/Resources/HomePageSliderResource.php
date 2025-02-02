<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\HomePageSlider;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<HomePageSlider>
 */
class HomePageSliderResource extends ModelResource
{
    protected string $model = HomePageSlider::class;

    protected string $title = 'HomePageSliders';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Title', 'title'),
            Checkbox::make('Active', 'isActive'),
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
                Text::make('Title', 'title'),
                Image::make('Image', 'img')
                    ->allowedExtensions(['jpeg', 'png', 'WebP', 'JPG']),
                Checkbox::make('Active', 'isActive'),
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
            Text::make('Title', 'title'),
            Image::make('Image', 'img'),
            Checkbox::make('Active', 'isActive'),
        ];
    }

    /**
     * @param HomePageSlider $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
