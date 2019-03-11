@extends('design.main')

@section('content')
    <div class="container">
        <div class="row">


            <div class="span12">

                shops

                <div class="row">
                    @foreach($shops as $shop)
                        {{$shop->shop_name}}<br>
                        {{$shop->shop_address}}<br>
                        {{$shop->shop_town}}
                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection