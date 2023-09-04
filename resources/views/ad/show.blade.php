<x-layout>
    <x-slot name='title'>Ralp-{{ $ad->name }}</x-slot>
    <div class="container">
        <h1>{{ $ad->title }}</h1>
        <p>{{ $ad->description }}</p>
        <p>Precio por noche: ${{ $ad->price }}</p>

        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($ad->images as $key => $image)
                    <li data-target="#imageCarousel" data-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach ($ad->images as $key => $image)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100" alt="{{ $ad->title }}">
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</x-layout>