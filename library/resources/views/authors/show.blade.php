<x-main>

    <div class="antialiased">
        <h2>Dettagli</h2>
        <h4>Nome: {{ $author->name }}</h4>
        <p>Cognome: {{ $author->surname }} </p>
        <p>Data di nascita: {{ $author->birth }} </p>
    </div>

</x-main>
