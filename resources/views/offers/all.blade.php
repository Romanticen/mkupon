@extends('design.main')

@section('content')
    <div class="container">
        <div class="row">


            <div class="span12">

                <div class="row" style="margin-left: 0">
                    <!-- categories filter START -->
                    <ul class="filter">
                        <li class="all active"><a href="#">All categories</a></li>
                        <li class=""><a href="#">Web design</a></li>
                        <li class="brand"><a href="#">Brand identity</a></li>
                        <li class="graphic"><a href="#">Graphic design</a></li>

                    </ul>
                    <!-- /categories filter END -->
                </div>

                <div class="row">
                    @foreach($offers as $offer)
                        @include('offers.single-thumb')
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection