@extends('layouts.app')

@section('content')
<div class="contentsArea">
       <div id="link01" class="carousel slide mainBunner" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('/image/bunner_01.jpg') }}" alt="">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('/image/bunner_02.jpg') }}" alt="">
                </div>
                <a class="carousel-control-prev" href="#link01" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#link01" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="">
            <div class="block01">
        
                    @foreach($stocks as $stock)

                            <div class="block01_item">
                                <img src="{{ asset('/image/'.$stock->imgpath) }}" alt="" class="block01_img" >
                                    <p>{{$stock->name}}</p>
                                    <p class="c-red">{{number_format($stock->price)}}円</p>
                                    <p class="mb20">{{$stock->detail}} </p>

                                    <form action="{{ route('shop.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                        <input type="submit" value="カートに入れる" class="btn-01">
                                    </form>
                            </div>

                    @endforeach                    
            </div>
            <div class="mt40">
            {{ $stocks->links() }} 
            </div>
        </div>
</div>
@endsection