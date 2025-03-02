<div class="filter filter-category">
    <h3 class="filtertitle">Categories</h3>
    <ul class="filter-content js-filter-menu">
        <li>
            <a href="#" wire:click.prevent="$set('selectedCategory', null)">All</a>
        </li>
        @foreach($categoriesGroup as $categoryGroup)
            <li>
                <a href="#" wire:click.prevent="$set('selectedCategory', {{ $categoryGroup->id }})">
                    {{ $categoryGroup->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
