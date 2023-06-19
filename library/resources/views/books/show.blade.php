<x-main>

    <div class="col-md-6">
        <img src="{{ empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image) }}"
            alt="...">
        <!-- //l'operatore binario mi dice che:quando image è vuoto-> se l'img è empty allora metto l'img di default, altrimenti quella caricata -->
    </div>
    <div class="antialiased">
        <h2>Dettagli</h2>
        <h4>Titolo: {{ $book->title }}</h4>
        <p>Autore: {{ $book->author->name }} {{ $book->author->surname }} </p>
        <p>Numero Pagine: {{ $book->pages }} </p>
    </div>

</x-main>
