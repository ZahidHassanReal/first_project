@extends('master')

@section('content')

<h1>{{ $page_name }}</h1>


       @forelse($products as $key => $product )
       @if ($loop->first)
       @continue

       @endif
           <ul class="">
                    <li>{{ $key }}</li>
        <li>{{ $product['name'] }}</li>
        <li>{{ $product['color'] }}</li>
        <li>{{ $product['price'] }}</li>
       </ul>
 @empty
 <p>No products fouend</p>
@endforelse



@endsection










{{-- @if ($product_count < 5)
<p>please refele</p>

@else
<p> product count : {{ $product_count }}</p>

@endif

@endsection --}}
