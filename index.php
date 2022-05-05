<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>Escola Superior Tecnologia e Gestão do Instituto Politécnico de Portalegre</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
    <body class="text-center">
        <main class="form-signin">
            <form id="form-signin">
                <img class="mb-4" src="Images/logo.png" alt="" width="72" height="57">        
                <h1 class="h3 mb-3 fw-warning"> ESTG Login</h1>

                <div class="form-floating">
                    <input type="text" class="form-control text-warning" id="floatingInput" placeholder="Nome de Utilizador">
                    <label for="floatingInput">Nome de Utilizador</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control text-warning" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-warning" type="submit">Iniciar Sessão</button>
                <p class="mt-5 mb-3 text-muted">&copy;  ESTG 2022</p>
            </form>
        </main>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            $(document).ready(function () {

                document.getElementById("form-signin").addEventListener("submit", onSignIn);

            });

            function onSignIn(e) {

                e.preventDefault();

                var user = document.getElementById("floatingInput").value;
                var password = document.getElementById("floatingPassword").value;

                if (user === 'estgp' && password === '2022') {
                    window.location.href = "inicio.php";
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Insira os dados corretamente'
                    });
                }

            }
        </script>
    </body>
</html>
