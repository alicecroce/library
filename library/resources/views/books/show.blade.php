<x-main>

    <div class="col-md-6">
        <h1 class="display-5 fw-bolder">{{ $book->title }}</h1>
        <p>Autore: {{ $book->author }} </p>
        <p>Numero Pagine: {{ $book->pages }} </p>
    </div>

</x-main>
