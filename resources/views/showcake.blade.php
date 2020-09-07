@extends('layouts.storeitemslayout')
        <!-- show Cake -->
        
        @for( $i = 0; $i<count($cakename); $i++)
            @section('image'.$i)
                <!-- store  items-->
                <img src="{{asset('img/'.$cakename[$i].'.jpeg/')}}" class="card-img-top store-img" alt="">

            @endsection
            @section('name_price'.$i)
            <h5 id="store-item-name">{{$cakename[$i]}}</h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">{{(5*($i+1))}}</strong></h5>
            @endsection
        @endfor
  
                    
