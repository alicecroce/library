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
                    <form action="{{ route('category.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <!-- token per la protezione dei dati -->

                        <!-- name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome categoria</label>
                            <input class="form-control" id="name" name="title" type="text"
                                value="{{ old('name') }}" placeholder="Inserisci il nome della categoria">

                        </div>

                        <!--button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Inserisci!</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>

    </section>









</x-main>
