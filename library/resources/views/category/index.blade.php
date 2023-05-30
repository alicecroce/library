<x-main>

    <ul>
        @foreach ($category as $cat)
            <li>
                <a href="{{ route('category.show', ['cat' => $cat['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $category['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-main>
