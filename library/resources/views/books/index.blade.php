<x-main>
    @if (session('success'))
        <!-- se la sezione è stata un "successo" mi passi questo msg-->
        <p>
            {{ session('success') }}
        </p>
    @endif

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $book['author_id'] }}-{{ $book['title'] }}-{{ $book->author->name . ' ' . $book->author->surname }}-{{ $book['pages'] }}-{{ $book['year'] }}
                </a>

                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <button>Visualizza</button>
                </a>

                <a href="{{ route('books.edit', ['book' => $book['id']]) }}">
                    <button>Modifica</button>
                </a>

                <form action="{{ route('books.delete', ['book' => $book['id']]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Elimina</button>

                </form>

            </li>
        @endforeach
    </ul>



</x-main>
