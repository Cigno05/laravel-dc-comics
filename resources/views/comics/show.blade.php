@extends('layouts.app')

@section('pageTitle')

Home

@endsection

@section('content')
<main>
    <section>
        <div class="container">
            <h1>Detteaglio del tuo comic</h1>
            <h2>{{ $comic->title }}</h2>
            <h5>Descrizione: <br> {{ $comic->description }}</h5>
            <h4>Prezzo: {{ $comic->price }}</h4>
            <div class="d-flex gap-1">
            <button href="{{ route('comics.edit', $comic) }}" class="btn btn-link link-primary text-right">Modifica Comic</button>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-link link-danger text-right">Cancella Comic</button>
                </form>
            </div>

        </div>
    </section>
</main>


@endsection