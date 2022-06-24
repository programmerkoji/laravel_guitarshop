@php
    if($type === 'shops') {
        $path = 'storage/shops/';
    }
    if($type === 'products') {
        $path = 'storage/products/';
    }
@endphp

@if (empty($filename))
    <img src="{{ asset('images/no_image.png') }}" alt="no image">
@else
    <img src="{{ asset($path . $filename) }}" alt="">
@endif
