@extends('layouts.app')

@section('pageTitle')

Home

@endsection

@section('content')

<div class="container">

    <h1>COMICS</h1>

    @foreach ($comics as $comic)
        <main>
            <section class="mb-5 py-1">
                <div class="container mt-4">
                    <div class="row g-5">
                        @foreach ($comics as $comic)                  <div class="col-12 col-xl-4 col-lg-6 card-group">
                                <div class="card">
                                    <img src="{{$comic->thumb}}" class="card-img-top img-micro align-self-center p-1" alt="...">
                                    <div class="card-body my-card-body">
                                        <a href="{{ route('comics.show', $comic) }}">
                                            <h4 class="card-title">{{$comic->title}}</h4>
                                        </a>
                                        <p class="card-text">Tratto dalla serie: {{$comic->series}}</p>
                                        <p class="card-text">Prezzo: {{$comic->price}}</p>
                                        <p class="card-text">Data di uscita: {{$comic->sale_date}}</p>
                                        <p class="card-text">Tipologia: {{$comic->type}}</p>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

    @endforeach

</div>

@endsection