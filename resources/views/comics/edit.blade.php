@extends('layouts.app')

@section('pageTitle')

Home

@endsection

@section('content')
<main>
    <section>
        <div class="container">
            <h5>Siamo nel comic.store</h5>
            <h1>Modifica il tuo Comic</h1>
            <form action="{{ route('comics.update', $comic) }}" method="POST">

                <!-- Cross Site Request Forgering -->
                @csrf
                @method('PUT')
                
                <div class="d-flex flex-column gap-4">
                    <div>
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$comic->title}}">
                    </div>
                    
                    <div>
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{$comic->price}}">
                    </div>
                    
                    <div>
                    <label for="type" class="form-label">Tipo:</label>
                    <input type="text" name="type" class="form-control" id="type" value="{{$comic->type}}">
                </div>
                
                <div>
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" name="series" class="form-control" id="series" value="{{$comic->series}}">
                </div>
                
                <div>
                    <label for="sale_date" class="form-label">Data di Pubblicazione:</label>
                    <input type="text" name="sale_date" class="form-control" id="sale_date"
                    value="{{$comic->sale_date}}">
                </div>
                
                <div>
                    <label for="thumb" class="form-label">Immagine:</label>
                    <input type="text" name="thumb" class="form-control" id="thumb"
                    placeholder="Inserisci il link dell'immagine..." value="{{$comic->thumb}}">
                </div>
                
                <div>
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" class="form-control" id="description"
                    placeholder="Inserisci una descrizione...">{{$comic->description}}</textarea>
                </div>
                
            </div>
            <button class="btn btn-primary mt-5">Modifica</button>
                
            </form>
            
        </div>
    </section>
</main>


@endsection