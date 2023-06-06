<x-main>

    <ul>
        @foreach ($category as $cat)
            <li>
                <a href="{{ route('category.show', ['category' => $cat['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $cat['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-main>
