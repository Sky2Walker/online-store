<?php

namespace App\Observers;

use App\Models\CategoryGroup;
use Illuminate\Support\Facades\Cache;

class CategoryGroupObserver
{
    /**
     * Handle the CategoryGroup "created" event.
     */
    public function created(CategoryGroup $categoryGroup): void
    {
        Cache::forget('categoriesGroups:all');
    }

    /**
     * Handle the CategoryGroup "updated" event.
     */
    public function updated(CategoryGroup $categoryGroup): void
    {
        Cache::forget('categoriesGroups:all');

    }

    /**
     * Handle the CategoryGroup "deleted" event.
     */
    public function deleted(CategoryGroup $categoryGroup): void
    {
        Cache::forget('categoriesGroups:all');
    }

    /**
     * Handle the CategoryGroup "restored" event.
     */
    public function restored(CategoryGroup $categoryGroup): void
    {
        //
    }

    /**
     * Handle the CategoryGroup "force deleted" event.
     */
    public function forceDeleted(CategoryGroup $categoryGroup): void
    {
        //
    }
}
