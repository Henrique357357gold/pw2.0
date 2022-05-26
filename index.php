<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Image and text -->
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                      <img src="img/tecnologia.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      Tecnology
                    </a>
                  </nav>
            </div>
          
              <nav>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php?op=1">Principal <span class="sr-only"></span></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Placa mãe
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?op=1">História</a>
                            <a class="dropdown-item" href="index.php?op=2">Componentes</a>
                            <a class="dropdown-item" href="index.php?op=3">CRLTC – Clear Crt Ram</a>
                            <a class="dropdown-item" href="index.php?op=4">A Evolução</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
        </div>
       
        <?php if(isset($_GET['op'])){ ?>
              <?php if($_GET['op'] == 1){ ?>
                <div class="row">
            <div class="col">
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/principal.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/tecnologia3.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/tecnologia4.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
            </div>
           <?php }else if($_GET['op'] == 2){ ?>
            <div class="row">
                <div class="col">
                    <img src="img/PLACA-MAE.jpg" class="d-block w-100" alt="" srcset="">
                    <h3>
                        A historia
                    </h3>
                    <h5>
                        A placa mãe
                    </h5>
                    <p>
                        A placa mãe é um componente de hardware que
liga todas as outras peças, fazendo a comunicação
entre elas. A primeira placa mãe surgiu inicialmente
em um computador da empresa IBM, no ano de
1982. O design das placas mãe continua
basicamente o mesmo das primeiras, até os dias
atuais. A placa da IBM assim como as sucessoras
tem portas e slots para vários tipos de Hardwares,
que são ligados nela para que a comunicação entre
os componentes seja possível. HD, Memória,
processador, Leitores Ópticos, Fontes, placas de
vídeo, tudo é conectado à placa Mãe.
                    </p>
            </div>
            <div class="col">
            <h3>
                Conteúdo Programático:
            </h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        História
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>O primeiro computador.</strong> Porém Os primeiros computadores não possuiam uma
                      placa mãe, toda parte física ficava organizada dentro de
                      salas enormes, os componentes do computador eram
                      disposto em blocos separados. Alem do mais a ultilização
                      do computador neste periodo voltava-se para o uso militar,
                      Esses computadores eram exclusividades de apenas
                      alguns paises .
                    </div>
                  </div>
                </div>
               
                  <div class="row">
                    <div class="col">
                      &nbsp;
                    </div>
                  </div>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-center ">
                            <a class="navbar-brand" href="#">
                              <img src="img/img9.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
                              Até a próxima!!!
                            </a>
                          </nav>
                    </div>
        <?php } ?>
        <?php } ?>
        <?php if(isset($_GET['op'])){ ?>
              <?php if($_GET['op'] == 3){ ?>
               
            <div class="row">
                <div class="col">
                    <img src="img/onboard.jpg" class="d-block w-100" alt="" srcset="">
                    <h3>
                      Componentes de uma Placa Mãe podem ser:
                    </h3>
                    <h5>
                      Onboard
                    </h5>
                    <p>
                      "Onboard" é o termo empregado para distinguir placasmãe que possuem um ou
                      mais dispositivos de expansão integrados.
                      “Offboard", não contém nenhum item integrado, isto é, no
                      máximo uma placa de som ou rede onboard.
                    </p>
            </div>
            <div class="col">
            <h3>
              COMPONENTES
            </h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      AT
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>AT = Advanced Technology </strong> Espaço interno reduzido facilitando a circulação de ar.
                      O conector de alimentação da fonte AT, é composto por dois
                      plugs semelhantes. Se estes conectores sejam invertidos e
                      a fonte de alimentação seja ligada, a placa-mãe será
                      queimará.
                      Necessecidade de desligar o computador pelo sistema
                      operacional, e esperar o aviso de que o computador já pode
                      ser desligado.
                      12 Pinos
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ATX
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>ATX = Advanced Tecnology Extendend.</strong> O maior espaço interno, proporcionando maior ventilação.
                      Conectores de unico encaixe paralelo.
                      20 a 24 Pinos.
                      4 Pinos explusivos para o processador.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      AT e ATX
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>A diferença basica</strong> A diferença basica entre a fonta AT e ATX é que a fonte ATX
                      oferece um recurso muito útil: o de desligamento automático.
                      Em outras palavras, é possível desligar o computador por
                      meio de software.
                      
                      
                    </div>
                  </div>
                </div>
                
              <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-center ">
                            <a class="navbar-brand" href="#">
                              <img src="img/img9.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
                              Até a próxima!!!
                            </a>
                          </nav>
                    </div>
                    </div>

        <?php }else if($_GET['op'] == 3){ ?>
          <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.html">Principal <span class="sr-only"></span></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Placa mãe
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="historia.html">História</a>
                            <a class="dropdown-item" href="componentes.html">Componentes</a>
                            <a class="dropdown-item" href="CRLTC.html">CRLTC – Clear Crt Ram</a>
                            <a class="dropdown-item" href="index2.html">A Evolução</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            <div class="row">
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="img/onboard.jpg" class="d-block w-100" alt="" srcset="">
                    <h3>
                      Componentes de uma Placa Mãe podem ser:
                    </h3>
                    <h5>
                      Onboard
                    </h5>
                    <p>
                      "Onboard" é o termo empregado para distinguir placasmãe que possuem um ou
                      mais dispositivos de expansão integrados.
                      “Offboard", não contém nenhum item integrado, isto é, no
                      máximo uma placa de som ou rede onboard.
                    </p>
            </div>
            <div class="col">
            <h3>
              COMPONENTES
            </h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      AT
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>AT = Advanced Technology </strong> Espaço interno reduzido facilitando a circulação de ar.
                      O conector de alimentação da fonte AT, é composto por dois
                      plugs semelhantes. Se estes conectores sejam invertidos e
                      a fonte de alimentação seja ligada, a placa-mãe será
                      queimará.
                      Necessecidade de desligar o computador pelo sistema
                      operacional, e esperar o aviso de que o computador já pode
                      ser desligado.
                      12 Pinos
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ATX
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>ATX = Advanced Tecnology Extendend.</strong> O maior espaço interno, proporcionando maior ventilação.
                      Conectores de unico encaixe paralelo.
                      20 a 24 Pinos.
                      4 Pinos explusivos para o processador.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      AT e ATX
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>A diferença basica</strong> A diferença basica entre a fonta AT e ATX é que a fonte ATX
                      oferece um recurso muito útil: o de desligamento automático.
                      Em outras palavras, é possível desligar o computador por
                      meio de software.
                      
                      
                    </div>
                  </div>
                </div>
                
              <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-center ">
                            <a class="navbar-brand" href="#">
                              <img src="img/img9.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
                              Até a próxima!!!
                            </a>
                          </nav>
                    </div>
                    </div>
                    <?php } else { ?>
                      <div class="row">
            <div class="col">
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/principal.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/tecnologia3.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/tecnologia4.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
            </div>
            <?php }  ?>
		<div class="row">
  <div class="col">
    &nbsp;
  </div>
</div>
      <div class="row">
        <div class="col-sm" style=" align-items: stretch; text-align:left;">
          <figure class="figure">
            <img style="height: 400px!important;" src="img/tecnologia5.png" widht="300" height="400" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption"></figcaption>
          </figure>
        </div>
        <div class="col-sm"style="text-align:center">
          <figure class="figure">
            <img style="height: 400px!important;" src="img/tecnologia6.png" widht="300" height="400" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption"></figcaption>
          </figure>
        </div>
        <div class="col-sm"style="text-align:right">
          <figure class="figure">
            <img style="height: 400px!important;" src="img/tecnologia7.jpg" widht="300" height="400" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption"></figcaption>
          </figure>
        </div>
    </div>
</body>
</html>
<?php } ?>