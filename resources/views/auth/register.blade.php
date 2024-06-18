<!doctype html>
<html lang="es">

<head>
    <title>Registro</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/4+b6D6gR3RXVn6D0VuJnpz4T8PE1iFepjsPpZZ" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-4 text-center">
                            <div class="mb-4 mt-4">
                                <h2 class="fw-bold mb-3 text-uppercase">Registro</h2>
                                <p class="text-white-50 mb-4">¡Por favor, introduce tu información para registrarte!</p>

                                <!-- Formulario de registro -->
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form-outline form-white mb-3">
                                        <label for="name" class="form-label">{{ __('Nombre Completo') }}</label>
                                        <input id="name" type="text" class="form-control form-control-sm" name="name"
                                            value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Ingresa tu nombre completo">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-outline form-white mb-3">
                                        <label for="email" class="form-label">{{ __('Correo') }}</label>
                                        <input id="email" type="email" class="form-control form-control-sm" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa tu correo electronico">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="form-outline form-white mb-3">
                                        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                        <input id="password" type="password" class="form-control form-control-sm"
                                            name="password" required autocomplete="new-password" placeholder="Ingresa tu contraseña">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-outline form-white mb-3">
                                        <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                        <input id="password_confirmation" type="password" class="form-control form-control-sm"
                                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button class="btn" type="submit">{{ __('Registrar') }}</button>
                                </form>

                                <div class="d-flex justify-content-center text-center mt-3">
                                    <a href="#!" class="text-white" aria-label="Facebook"><i class="fab fa-facebook-f fa-sm"></i></a>
                                    <a href="#!" class="text-white" aria-label="Twitter"><i class="fab fa-twitter fa-sm mx-3"></i></a>
                                    <a href="#!" class="text-white" aria-label="Google"><i class="fab fa-google fa-sm"></i></a>
                                </div>

                                <div>
                                    <p class="mb-0">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Iniciar Sesión</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</body>

</html>
