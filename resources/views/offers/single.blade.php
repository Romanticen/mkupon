@extends('design.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="span6">
                <div class="offer-image-single">
                    <img src="/products/547154_239385522829829_1176238841_n.jpg">
                </div>

                <div class="offer-title">
                    <h5><strong>{{ strip_tags($offer->title)}}</strong></h5></a>
                </div>
                <div class="offer-description-single">
                    <p>{{ strip_tags($offer->description)}}</p>
                </div>

                <div class="coupon-shop-place">
                    <i class="icon-map-marker"> </i>{{-- strip_tags($shop->shop_name)--}} ds |
                    <i class="icon-shopping-cart"> </i>BMG Universe <br>

                    {{--printanje zvezdicki (rating)--}}
                    <?php for ($i=1; $i<=5; $i++){
                        echo '<i class="icon-star"></i>';
                    }
                    ?>   {{-- broj na ratings --}}(14) |
                    Нарачки: 24
                </div>
            </div>

            <div class="span6">
                <aside>
                    <div class="widget">
                        <h4>{{ strip_tags($offer->title)}}</h4>
                        <ul class="project-detail">
                            <li>
                                <label>Опис: </label>
                                Мал опис
                            </li>
                            <li>
                                <label>Категорија: </label>
                                Категорија број (понатаму ќе биде со текст): {{ strip_tags($offer->category_id)}}
                            </li>
                            <li>
                                <label>Количина: </label>
                                Број на производи кои ги добивате за цената: 88
                            </li>
                            <li>
                                <label>Цена: </label>
                                <h4>{{ strip_tags($offer->price)}} денари</h4>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>

        </div>
    </div>
    </div>

@endsection