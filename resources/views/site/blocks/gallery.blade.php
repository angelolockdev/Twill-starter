@php( $image = $block->images('gallery', 'default'))
@if( $image && sizeof($image))
    <div class="gallery">
        <ul class="slides">
            @foreach ($images as $item)
                <li class="glide__slide">
                    <img src="{{ $item }}" alt="">
                </li>
            @endforeach
        </ul>
    </div>
@endif