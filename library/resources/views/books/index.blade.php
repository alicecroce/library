<x-main>
    @if (session('success'))
        <!-- se la sezione è stata un "successo" mi passi questo msg-->
        <p>
            {{ session('success') }}
        </p>
    @endif

    <ul>
        @forelse($books as $book)
            <li>{{ $loop->iteration }}
                <!-- numerazione no id -->
                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $book['author_id'] }}-{{ $book['title'] }}-{{ $book->author->name . ' ' . $book->author->surname }}-{{ $book['pages'] }}-{{ $book['year'] }}
                </a>

                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <button>Visualizza</button>
                </a>

                @auth
                    <!-- direttiva blade che ti permette di sapere se qualcuno è autenticato o no, se no comparirà solo il tasto di visualizzazione -->
                    <a href="{{ route('books.edit', ['book' => $book['id']]) }}">
                        <button>Modifica</button>
                    </a>
                @endauth
                @guest
                    Sono un ospite
                @endguest

                @auth
                    <form action="{{ route('books.delete', ['book' => $book['id']]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Elimina</button>
                    </form>
                @endauth

            </li>
        @empty
            <p>Nessun libro</p>
        @endforelse
    </ul>



</x-main>
