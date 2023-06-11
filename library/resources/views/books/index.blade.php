<x-main>

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $book['author'] }}-{{ $book['title'] }}-{{ $book['pages'] }}-{{ $book['year'] }}
                </a>
            </li>
        @endforeach
    </ul>



</x-main>
