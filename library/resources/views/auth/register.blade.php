<x-main headerTitle="Registrati">

    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">


                    <!-- post del form -->
                    <form action="{{ route('register') }}" method="POST">
                        @method('POST')
                        @csrf
                        <!-- token per la protezione dei dati -->

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

                        <!-- name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome utente</label>
                            <input class="form-control" id="name" name="name" type="text" required>
                        </div>
                        <!-- mail -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email utente</label>
                            <input class="form-control" id="email" name="email" type="text" required>
                        </div>
                        <!-- password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" id="password" name="password" type="password" required>
                        </div>
                        <!-- conferma password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma password</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation"
                                type="password" required>
                        </div>

                        <!--button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Registrati!</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>

    </section>






</x-main>
