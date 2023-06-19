<x-main>

    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">

                    <!-- snippet per gli errori di validazione -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- post del form -->
                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <!-- token per la protezione dei dati -->

                        <!-- name -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Nome libro</label>
                            <input class="form-control" id="title" name="title" type="text"
                                value="{{ old('title') }}" placeholder="Inserisci nome del libro">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!--autore  -->
                        <div class="mb-3">
                            <label for="author_id">Nome Autore</label>
                            <select class="form-control" id="author_id" name="author_id">
                                @foreach ($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                                @endforeach
                            </select>

                            @error('author_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <!--  numero di pagine-->
                        <div class="mb-3">
                            <label for="pages">Numero pagine Libro</label>
                            <input class="form-control" id="pages" name="pages" type="text"
                                value="{{ old('pages') }}" placeholder="Inserisci numero di pagine">

                            @error('pages')
                                <span class="text-danger">
                                    Inserisci un valore numerico obbligatorio!
                                </span>
                            @enderror
                        </div>

                        <!-- anno-->
                        <div class="mb-3">
                            <label for="year">Anno di pubblicazione</label>
                            <input class="form-control" id="year" name="year" type="text"
                                value="{{ old('pages') }}" placeholder="Inserisci anno di pubblicazione">

                            @error('year')
                                <span class="text-danger">
                                    Inserisci un valore numerico obbligatorio!
                                </span>
                            @enderror
                        </div>

                        <!-- immagine-->
                        <div class="mb-3">
                            <label for="image">Anno di pubblicazione</label>
                            <input class="form-control" id="image" name="image" type="file"
                                value="{{ old('image') }}">
                        </div>

                        <!--button -->
                        <div class="d-grid gap-3">
                            <button class="btn btn-primary btn-lg p-2" type="submit">Inserisci!</button>
                            <button class="btn btn-danger btn-lg p-2" type="reset">Cancella</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>


</x-main>
