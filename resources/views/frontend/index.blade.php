@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach ($sliders as $key => $sliderItem)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    @if ($sliderItem['image'])
                        <img src="{{ asset($sliderItem['image']) }}" class="d-block w-100" alt="Slider Image" style="width: 100%; height: 500px;">
                    @endif
                    <div class="carousel-caption d-none d-md-block text-dark" style="font-size: 1.2rem;"> <!-- Adjusted font-size -->
                        <h5>{{ $sliderItem['title'] }}</h5>
                        <p>{{ $sliderItem['description'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
