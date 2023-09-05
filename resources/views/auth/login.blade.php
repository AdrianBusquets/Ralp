<x-layout>
    <x-slot name="title">Ralp - Inicio de sesión</x-slot>

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
            <div class="row g-0">
                <div class="container mx-auto my-5 col-auto">
                <div class="py-5 px-md-5 Log">
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
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" data-rule="minlen:4" data-msg="Por favor, pon al menos 4 caracteres"/>
                    <label class="form-label" for="form2Example1">Email</label>
                    <div class="validate"></div>
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Contraseña</label>
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
    
                    <div class="col text-center">
                    <span>¿Aún no eres de los nuestros?</span><br>
                    <a href="{{ route('register') }}">Registrate</a>
                    </div>
                </div>
    
                <!-- Submit button -->
                <button type="button" class="btn btn-block mb-4">Entrar</button>
    
                </form>
    
            </div>
            </div>
        </div>
        </div>
    </section>



</x-layout>