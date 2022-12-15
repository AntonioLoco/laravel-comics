@extends('layouts.app')

{{-- Qui inseriamo il contenuto che andrà nello spazio riservato da yield nella app --}}
@section('content')
    <section class="banner">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        <div class="container">
            <div class="name-plate">
                <h4>CURRENT SERIE</h4>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="product-list">
                @foreach ($films as $film)
                    <div class="card-films">
                        <img src="{{ $film['thumb'] }}" alt="{{ $film['title'] }}">
                        <h4>{{ $film['title'] }}</h4>
                    </div>
                @endforeach
            </div>
            <button class="btn-more">LEAD MORE</button>
        </div>
    </section>
@endsection
