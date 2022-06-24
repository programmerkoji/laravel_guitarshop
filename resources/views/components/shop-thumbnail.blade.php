@if (empty($filename))
    <img src="{{ asset('images/no_image.png') }}" alt="no image">
@else
    <img src="{{ asset('storage/shops/' . $filename) }}" alt="">
@endif
