<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Sobre nós</title>
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
            <main>
                <div>
                    <p class="about_color">No Campus Politécnico encontra-se um moderno Complexo desportivo, proporcionando aos alunos a possibilidade de realização de atividades desportivas, lúdicas e culturais. Integrada no Instituto Politécnico de Portalegre, a Escola Superior de Tecnologia e Gestão, numa situação de proximidade com o meio empresarial e industrial, forma profissionais qualificados em áreas tão distintas como as ciências económicas e das organizações, tecnologias e engenharia, e design, artes e animação.</p>
                </div>
                <div class="container-fluid">              
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Localização</h3>                                      
                            <iframe class="embed-responsive-item" id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12355.551232011412!2d-7.4427984!3d39.2681121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8aa5650cc7973838!2sEscola%20Superior%20Tecnologia%20e%20Gest%C3%A3o%20do%20Instituto%20Polit%C3%A9cnico%20de%20Portalegre!5e0!3m2!1spt-PT!2spt!4v1642064041149!5m2!1spt-PT!2spt" style="border:0;" allowfullscreen=""></iframe>                                                                  
                        </div>                  
                        <div class="col-sm-6">
                            <h3>Vem visitar-nos</h3>
                            <video class="embed-responsive-item" id="video" controls>
                                <source src="video/ESTG_vid.mp4" type="video/mp4">
                            </video>                            
                        </div>
                    </div>
                </div>

            </main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="bg-light">
                            <h2 class="text-warning">Contatos</h2>
                            <p>Escola Superior de Tecnologia e Gestão do Instituto Politécnico de Portalegre</p>
                            <p class="contact">Morada:</p>
                            <p>Campus Politécnico n. 10   7300-555 Portalegre</p>
                            <p class="contact">Telefone/Fax:</p>
                            <p>Tlf. 245 300 200 | Fax. 245 300 230</p>
                            <p class="contact">Para obter informações mais detalhadas sobre cursos ou candidaturas é favor contactar:</p>
                            <p>s.alunos.estg@ipportalegre.pt ou servicos.academicos@ipportalegre.pt</p>
                            <p class="contact">Para marcação de visitas é favor contactar o Gabinete de Comunicação e Imagem:</p>
                            <p>gci.estg@ipportalegre.pt </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light">                      
                            <h2 class="text-warning">Serviços Académicos</h2>
                            <p>Matrículas, inscrições, processos individuais dos estudantes, pagamento de propinas, reconhecimentos de graus estrangeiros, entre muitos outros assuntos são tratados pelos Serviços Académicos.</p>
                            <p class="mb-0">Estamos nos Serviços Centrais do IPPortalegre, mas também em cada uma das escolas de modo a prestar um melhor atendimento aos alunos. </p><br>                         
                            <p class="contact">Email:</p>
                            <p>servicos.academicos@ipportalegre.pt</p>
                            <p class="contact">Telefone:</p>
                            <p>+351 245 301 533</p>
                            <p>Caso o atendimento presencial seja absolutamente imprescindível, poderá efetuar a marcação para o serviço pretendido, em data e hora que estiver disponível através do serviço online.</p>

                        </div>
                    </div>
                    <?php include 'footer.php'; ?>
                </div>
            </div>



        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    </body>
</html>
