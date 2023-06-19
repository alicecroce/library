<x-main>

    <div class="antialiased">
        <h2>Dettagli</h2>
        <h4>Nome: {{ $author->name }}</h4>
        <p>Cognome: {{ $author->surname }} </p>
        <p>Data di nascita: {{ $author->birth->format('d-m-y') }} </p>


        @forelse ($author->books as $book)
            <div class="col-md-6">
                <img src="{{ empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image) }}"
                    alt="Immagine di copertina">
            @empty
                Nessun libro aggiunto
        @endforelse

    </div>

</x-main>
