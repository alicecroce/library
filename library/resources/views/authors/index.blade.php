<x-main>
    @if (session('success'))
        <!-- se la sezione è stata un "successo" mi passi questo msg-->
        <p>
            {{ session('success') }}
        </p>
    @endif

    <ul>
        @foreach ($authors as $author)
            <li>
                <a href="{{ route('authors.show', ['author' => $author['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $author['name'] }}-{{ $author['surname'] }}-{{ $author['birth'] }}
                </a>
                <a href="{{ route('authors.edit', ['author' => $author['id']]) }}">
                    <button>Modifica</button>
                </a>

                <form action="{{ route('authors.destroy', ['author' => $author['id']]) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <!--button -->
                    <button type="submit">Elimina</button>

                </form>

            </li>
        @endforeach
    </ul>



</x-main>
