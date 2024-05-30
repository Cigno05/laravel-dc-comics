@extends('layouts.app')

@section('pageTitle')

Aggiungi Comic

@endsection

@section('content')
<maih>
    <section>
        <div class="container">
            <h5>Siamo nel comics.create</h5>
            <h1>Aggiungi un nuovo Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del Comic">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        placeholder="Aggiungi l'url della copertina">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price"
                        placeholder="Aggiungi il prezzo seguito" value="$">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie del Comic</label>
                    <input type="text" class="form-control" id="series" name="series"
                        placeholder="A quale serie appartiene">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date"
                        placeholder="Data di uscita">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di Comic</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia del Comic">
                </div>


                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>

        </div>
    </section>
</maih>

@endsection