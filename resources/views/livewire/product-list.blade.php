<div class="product-standard product-grid">
    <div class="tab-content">
        <div id="all" class="tab-pane fade in active">
            <div class="row">


                @foreach($products as $product)

                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product-item">
                        <div class="product-images">
                            <a href="#" class="hover-images effect"><img
                                    src="{{ asset('storage/' . $product->img) }}" alt="photo"
                                    class="img-reponsive"></a>
                            <a href="#" class="btn-add-wishlist ver2"><i class="icon-heart"></i></a>
                            <a href="#" class="btn-quickview">QUICK VIEW</a>
                        </div>
                        <div class="product-info-ver2">
                            <h3 class="product-title"><a href="#">{{$product->name}}</a></h3>
                            <div class="product-after-switch">
                                <div class="product-price">@if($product->variants->isNotEmpty())
                                        ${{ $product->variants[0]->price }}
                                    @else
                                        N/A
                                    @endif</div>
                                <div class="product-after-button">
                                    <a href="#" class="addcart">ADD TO CART</a>
                                </div>
                            </div>
                            <div class="rating-star">

                                @for($i = 0; $i<floor($product->ratings); $i++)

                                    <span class="star star-1"></span>
                                @endfor
                            </div>
                            <p class="product-desc">{{$product->description}}</p>
                            <div class="product-price">${{ $product->variants->first()?->price ?? 'N/A' }}
                                .00
                            </div>
                            <div class="button-group">
                                <a href="#" class="button add-to-cart">Add to cart</a>
                                <a href="#" class="button add-to-wishlist">Add to wishlist</a>
                                <a href="#" class="button add-view">Quick view</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="pagination-container pagination-blog button-v v2">
                <nav>
                    @if ($products->lastPage() > 1)
                        <ul class="pagination">
                            {{-- Кнопка "Назад" --}}
                            <li class="{{ $products->onFirstPage() ? 'disabled' : '' }}">
                                <a href="#" wire:click="previousPage" wire:loading.attr="disabled">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </li>

                            {{-- Цифры страниц --}}
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="{{ $products->currentPage() == $i ? 'active' : '' }}">
                                    <a href="#" wire:click="gotoPage({{ $i }})" wire:loading.attr="disabled">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Кнопка "Вперед" --}}
                            <li class="{{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                                <a href="#" wire:click="nextPage" wire:loading.attr="disabled">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</div>
