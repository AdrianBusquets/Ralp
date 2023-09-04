<x-layout>
    <x-slot name='title'>Ralp-{{ $city->name }}</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Alojamientos en {{ $city->name }}</h1>
            </div>
        </div>
        @foreach ($cities as $city)
            <h2>{{ $city->name }}</h2>
            <div class="row">
                @foreach ($city->ads as $ad)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $ad->image_url }}" class="card-img-top" alt="{{ $ad->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ad->title }}</h5>
                                <p class="card-text">{{ $ad->description }}</p>
                                <a href="{{ route('ads.show', $ad->id) }}" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>