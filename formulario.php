<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulário</title>
        <link rel="icon" type="image/x-icon" href="/Images/Logo-favicon.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    </head>
    <body>
        <?php include 'Header.php'; ?>
        <main>
            <div class="container my-5 py-5 align-items-center">
                <h1 class="my-5 text-center text-warning">Formulário ESTGP</h1>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card h-100">
                            <div class="card-header bg-warning text-white">
                                <h6 class="text-center">Formulário de Registo</h6>    
                            </div>
                            <div class="card-body">
                                <form id="registration_form">
                                    <div class="mb-3">
                                        <label for="inputName">Nome:</label>
                                        <input type="text" class="form-control" id="inputName"  placeholder="Introduza nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputBirthdate">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="inputBirthdate">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmail">Email:</label>
                                        <input type="email" class="form-control" id="inputEmail"  placeholder="Introduza email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPhone">Telefone:</label>
                                        <input type="number" class="form-control" id="inputPhone"  placeholder="Introduza telefone">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning">Submeter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="card h-100">
                            <div class="card-header bg-warning text-white">
                                <h6 class="text-center">Registos efetuados</h6>    
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-striped" style="width:100%"></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




        <script>

            var dataSet = [];
            var table;
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

                document.getElementById("registration_form").addEventListener("submit", onRegistrationSubmit);

                table = $('#example').DataTable({
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
                    },
                    searching: true,
                    ordering: true,
                    data: dataSet,
                    columns: [
                        {title: 'Nome', data: 'name'},
                        {title: 'Data Nascimento', data: 'birthdate'},
                        {title: 'Email', data: 'email'},
                        {title: 'Telefone', data: 'phone'}
                    ]
                });
            });

            function onRegistrationSubmit(e) {

                e.preventDefault();

                var registration = new Object();

                registration.name = document.getElementById("inputName").value;
                registration.birthdate = document.getElementById("inputBirthdate").value;
                registration.email = document.getElementById("inputEmail").value;
                registration.phone = document.getElementById("inputPhone").value;

                dataSet.push(registration);

                table.clear().rows.add(dataSet).draw();

                Toast.fire({
                    icon: 'success',
                    title: 'Registo inserido com sucesso'
                });

            }
        </script>

    </body>
</html>
