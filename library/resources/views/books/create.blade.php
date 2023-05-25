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
                    <form action="{{ route('books.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <!-- token per la protezione dei dati -->

                        <!-- name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome libro</label>
                            <input class="form-control" id="name" name="title" type="text"
                                value="{{ old('name') }}" placeholder="Inserisci nome del libro">
                            @error('name')
                                <span class="text-danger">
                                    Titolo obbligatorio!
                                </span>
                            @enderror
                        </div>

                        <!--autore  -->
                        <div class="mb-3">
                            <label for="author">Nome Autore</label>
                            <input class="form-control" id="author" name="author" type="text"
                                value="{{ old('author') }}" placeholder="Inserisci nome autore">
                            @error('author')
                                <span class="text-danger">
                                    Autore obbligatorio!
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



                        <!--button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Salva!</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>

    </section>


</x-main>
