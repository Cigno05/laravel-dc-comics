@extends('layouts.app')

@section('pageTitle')

Home

@endsection

@section('content')
<main>
    <section>
        <div class="container">
            <h5>siamo nella pagina comics.show</h5>
            <h1>Detteaglio del tuo comic</h1>
            <h2>{{ $comic->title }}</h2>
            <h5>Descrizione: <br> {{ $comic->description }}</h5>
            <h4>Prezzo: {{ $comic->price }}</h4>
            <div class="d-flex gap-4">
            <a href="{{ route('comics.edit', $comic) }}" >Modifica Comic</a>
                <form action="{{route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-link link-danger text-right p-0">Cancella Comic</button>
                </form>
            </div>

        </div>
    </section>
</main>


@endsection