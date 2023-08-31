<x-layout>
    <x-slot name="title">Ralp - Registrarse</x-slot>

<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    <style>
        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
    
        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
            border-top-right-radius: 0;
            }
    
            .rounded-bl-lg-5 {
            border-bottom-left-radius: 0.5rem;
            }
        }
        </style>
        <div class="mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
            <div class="py-5 px-md-5">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="/login" method="POST" role="form">
                @csrf
                <div class="form-outline mb-4">
                    <input type="name" id="name" class="form-control" data-rule="minlen:3" data-msg="Por favor, pon al menos 3 caracteres" />
                    <label class="form-label" for="form2Example1">Nombre</label>
                    <div class="validate"></div>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" data-rule="minlen:4" data-msg="Por favor, pon al menos 4 caracteres" />
                    <label class="form-label" for="form2Example1">Email</label>
                    <div class="validate"></div>
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Contraseña</label>
                    <div class="validate"></div>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password_confirmation" class="form-control" />
                    <label class="form-label" for="form2Example2">Repite contraseña</label>
                    <div class="validate"></div>
                </div>
    
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Recuerdame </label>
                    </div>
                    </div>
                </div>
                <div class="col text-center">
                    <span>¿Ya eres de los nuestros?</span><br>
                    <a href="{{ route('login') }}">Entra</a>
                    </div>
                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Registrarse</button>
    
                </form>
    
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->



</x-layout>