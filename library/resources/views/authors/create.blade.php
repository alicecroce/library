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
                    <form action="{{ route('authors.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <!-- token per la protezione dei dati -->

                        <!-- name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome dell'autore</label>
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name') }}" placeholder="Inserisci il nome dell autore">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!--cognome  -->
                        <div class="mb-3">
                            <label for="surname">Cognome dell'autore</label>
                            <input class="form-control" id="surname" name="surname" type="text"
                                value="{{ old('surname') }}" placeholder="Inserisci il cognome dell'autore">
                            @error('surname')
                                <span class="text-danger">
                                    Inserisci il cognome dell'autore
                                </span>
                            @enderror
                        </div>


                        <!--  data di nascita-->
                        <div class="mb-3">
                            <label for="birth">Data di nascita</label>
                            <input class="form-control" id="birth" name="birth" type="date"
                                value="{{ old('birth') }}" placeholder="Inserisci la data di nascita">

                            @error('birth')
                                <span class="text-danger">
                                    Inserisci la data di nascita
                                </span>
                            @enderror
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
