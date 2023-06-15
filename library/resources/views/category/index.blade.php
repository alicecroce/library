<x-main>

    @if (session('success'))
        <div class="col-md-6">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <ul>
        @foreach ($category as $cat)
            <li>
                <a href="{{ route('category.show', ['category' => $cat['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $cat['name'] }}
                </a>

                <a href="{{ route('category.edit', ['category' => $cat['id']]) }}">
                    <button>Modifica</button>
                </a>

                <form action="{{ route('category.delete', ['category' => $cat['id']]) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <!--button -->
                    <button type="submit">Elimina</button>

                </form>

            </li>
        @endforeach
    </ul>

</x-main>
