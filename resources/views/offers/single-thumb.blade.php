<div style="float:left;">

    <ul class="portfolio-area da-thumbs">
        <li class="portfolio-item" data-id="id-0" data-type="{{ strip_tags($offer->category_id)}}">
            <div class="span3 margin-left-30">
                <a href="/offers/{{$offer->id}}" style="text-decoration: none">
                    <div class="thumbnail">
                        <div class="image-wrapp">


                                <img src="/products/547154_239385522829829_1176238841_n.jpg" alt="" title="" />

                        </div>
                        <div class="desc">
                            <div class="offer-title">
                                <h5><strong>{{ strip_tags($offer->title)}}</strong></h5></a>
                            </div>

                            <div class="offer-description">
                                <p>{{ strip_tags($offer->description)}}</p>

                                {{--<span class="coupon-time">Преостануваат 300 дена 20 часа и 15 минути</span>--}}
                            </div>

                            <hr class="ponuda">


                                {{--<span class="coupon-save">Заштеди {{$kupon->zasteduvate}} ден.</span>--}}

                                <div class="coupon-price">

                                    <span class="coupon-text-price">{{$offer->price}} денари</span>
                                    {{--<a href="/offers/{{$offer->id}}"><button class="btn btn-primary" style="font-weight:bold">Повеќе</button></a>--}}

                                </div>



                        </div>

                    </div>
                </a>
            </div>

        </li>
    </ul>

</div>