<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Home</title>
        <link rel="icon" type="image/x-icon" href="/Images/Logo-favicon.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <?php include 'Header.php'; ?>
            <main class="container m-auto p-auto">
                <div class="bg-light p-5 rounded">
                    <h1>Escola Superior Tecnologia e Gestão do Instituto Politécnico de Portalegre</h1>
                    <p class="lead">Estudar na Escola Superior de Tecnologia e Gestão (ESTG) do Politécnico de Portalegre significa viver uma experiência académica que se define por um ensino próximo e focado no progresso do aluno.</p>
                    <p class="lead">Na vanguarda de algumas áreas do conhecimento, a ESTG afirma-se como uma escola em que o estímulo à inovação, criatividade e o empreendedorismo fazem toda a diferença no percurso do aluno e posteriormente na sua entrada no mercado de trabalho. E as provas estão dadas.</p>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/IPOG-5-tendências-tecnológicas.jpg" class="d-block w-100" alt="...">                       
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-warning" >Programação</h5>
                                <p class="text-warning">O Futuro está nas tuas mãos!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/eg.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-warning">Engenharia Informática</h5>
                                <p class="text-warning">O Curso do Passado,Presente e do Futuro!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Images/cursoctesp.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-warning">Desenvolvimento para a Web e Dispositivos Móveis</h5>
                                <p class="text-warning">Não conseguiste a nota do exame,não tem preocupes, o teu futuro ainda está ao teu alcance!</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>  
            </main>
            <?php include 'footer.php'; ?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    </body>
</html>
