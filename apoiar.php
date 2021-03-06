<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Milvoz - ONGA</title>
        
        <!--Styles-->
        <link rel="stylesheet" href="./styles/geral.css">
        <link rel="stylesheet" href="./styles/apoiar.css">
        
        <!--STYLE BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!--STYLE FONT AWESOME-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <!--FONTE POPPINS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,200;1,300;1,700;1,800&display=swap" rel="stylesheet">
        <!--FONTE AXIA -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,200;1,300;1,700;1,800&display=swap" rel="stylesheet">
    
    </head>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0F0701" >
    <!-- Container wrapper  -->
    <div class="container-fluid mt-3 mb-3">
      <!-- Navbar brand -->
      <a class="navbar-brand ms-5" href="index.html">
        <img
          src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
          height="38px"
          width="120px"
          alt="Milvoz Logotipo"
          loading="lazy">
      </a>
  
      <!-- Toggle button -->
      <!-- ABRIR A CLASSE MODAL 
      <div class="menu-btn">
        <button type="button" class="btn menu-btn__burger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </button>
      </div>-->
      <button
        class="navbar-toggler btn"
        type="button"
        data-mdb-toggle="collapse"
        data-bs-target="#exampleModal"
        data-bs-toggle="modal"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars cor-primaria"></i>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        
        <!-- Left links .-->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item me-2 ms-3 facebook">
            <a class="nav-link" href="https://www.facebook.com/MilVozNatureza" target="_blank">
              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/facebook-logo.svg" alt="facebook logo">
            </a>
          </li>
          <li class="nav-item me-2 ">
            <a class="nav-link instagram" href="https://www.instagram.com/milvoznatureza/" target="_blank">
              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/insta-logo.svg" alt="instagram logo">
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link youtube" href="https://www.youtube.com/channel/UC5Esvsda5kJlR0U10wdHVTw" target="_blank">
              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/youtube-logo.svg" alt="youtube logo">
            </a>
          </li>
          
        </ul>
        <!-- Right links -->
        <div class="d-flex align-items-center ">
            <a href="apadrinhar.php" type="button" class="botao me-3 apadrinhar">
                APADRINHAR
            </a>
            <a href="apoiar.php" type="button" class="botao me-3 apoiar">
            APOIAR
            </a>
          
             <!-- ABRIR A CLASSE MODAL -->
             <div class="menu-btn">
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-bars cor-primaria" style="font-size:30px"></i>
              </button>
            </div>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper --> 
  </nav>
  <!-- Navbar -->

  <!--MENU-->
  <!--MODAL -->
  <!-- Full screen modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header castanho-background" style=" padding-top: 180px;">
          <a class="navbar-brand ms-5" href="index.html">
            <img
              src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
              height="48px"
              width="124px"
              alt="Milvoz Logotipo"
              loading="lazy">
          </a>
          <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close" style=" margin-right: 150px;"><i class="fas fa-times" style="background-color:none !important; font-size:30px"></i></button>
        </div>
        <div class="modal-body castanho-background conteudoMenu">
          
            <div class="row ">
              <div class="col-12 col-md-4">
                <dl>
                  <a href="sobre.html">
                    <dt> <h2>ONGA</h2></dt>
                    <dd class="infoMenu" style="font-size: 16px;"> Quem somos?</dd>
                    <dd class="infoMenu" style="font-size: 16px;"> Ser s??cio</dd>
                  </a>
                </dl>
                <br>
                <dl>
                  <a href="actuacao.html">
                    <dt> <h2>ACTIVIDADES</h2></dt>
                    <dd class="infoMenu" style="font-size: 16px;"> Gest??o Ecol??gica</dd>
                    <dd class="infoMenu" style="font-size: 16px;"> Educa????o Ambiental</dd>
                    <dd class="infoMenu" style="font-size: 16px;"> Aconselhamentos</dd>
                  </a>
                </dl>
                <br>
              </div>
              
              <div class="col-12 col-md-4">
                <dl>
                  <a href="bioreservas.html">
                    <dt> <h2>BIO-RESERVAS</h2></dt>
                    <dd class="infoMenu" style="font-size: 16px;"> Nossa Senhora da Alegria</dd>
                    <dd class="infoMenu" style="font-size: 16px;"> Serra da Pescaria</dd>
                  </a>
                </dl>
                <br>
                <dl>
                  <a href="apoiar.php">
                    <dt> <h2>S?? MAIS <br> UMA VOZ</h2></dt>
                        <dd class="infoMenu" style="font-size: 16px;">Ser s??cio</dd>
                        <dd class="infoMenu" style="font-size: 16px;">Doar</dd>
                        <dd class="infoMenu" style="font-size: 16px;">Voluntariar</dd>
                    </a>
                </dl>
                <br>
              </div>
              <div class="col-12 col-md-4">
                <dl>
                  <a href="biodiversidade.html">
                    <dt> <h2>BIODIVERSIDADE</h2></dt>
                    <dd  class="infoMenu" style="font-size: 16px;">Mam??ferosa</dd>
                    <dd class="infoMenu" style="font-size: 16px;">Anf??bios</dd>
                    <dd class="infoMenu" style="font-size: 16px;">R??pteis</dd>
                    <dd class="infoMenu" style="font-size: 16px;">Aves</dd>
                    <dd class="infoMenu" style="font-size: 16px;">Plantas</dd>
                  </a>
                </dl>
                <br>
                <dl>
                  <a href="contactos.php">
                    <dt><h2>CONTACTOS</h2></dt>
                    </a>
                </dl>
                <br>
                <dl>
                  <a href="apadrinhar.php">
                    <dt><h2>APADRINHAR</h2></dt>
                    </a>
                </dl>
                <br>
                <dl>
                  <a href="jogo.html">
                    <dt> <h2>JOGO</h2></dt>
                  </a>
                </dl>

              </div>
              <!--fim de row-->
            </div>
          
        <!--fim de contento do modal-->
        </div>
        <!--<div class="modal-footer castanho-background">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>-->
      </div>
    </div>
  </div>
    
        <!--INTRO FULL BOOTSTRAP com, background image -->
        <div class="apoiarIntro d-flex justify-content-center align-items-sm-end align-items-start">
            <div class="container" >
                    <div class="col-md-6 m-sm-0 m-5 mx-5 introMargem">
                        <h1 style="text-shadow: 1px 1px 3px #000000;">S?? MAIS UMA VO<span style='border-bottom:9px #f6ecd1 solid; margin-top: -50rem;box-shadow: 0px 2px rgba(0, 0, 0, 0.1)'>Z &nbsp</span></h1>
                        <p class="mt-4 amareloEscuro">Estamos profundamente agradecidos a toda comunidade que quer fazer parte deste projeto e com a qual trabalhamos para que cada semente caia em terreno f??rtil.
                        <p>
                        <p>CONHE??A AS TR??S FORMAS PARA APOIAR <span style="font-size:30px">&#x21b4;</span></p>
                    </div>
                    <div class="col-md-6">
                    </div> 
            </div>  
        </div>

        <!--SER SOCIO-->
        <div class="gradiente p-5">     
            <div class="container-fluid p-5"> 
                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/2peopleIcon.svg" alt="icone de duas pessoas">
                <h1>SER S??CIO</h1>
                    <div class="row gx-5">
                        <div class="col-12 col-lg-6 pDirApoiar">                        
                            <p>Cada novo s??cio MilVoz permite ?? associa????o crescer, levar a cabo novos projetos, trazendo a consci??ncia ambiental para a ordem do dia. Para se tornar s??cio basta pagar o valor de quota anual  e preencher o formull??rio ao lado (m??n. 20??? associado individual / 60??? associado coletivo / crian??as at?? aos 12 anos s??o isentas do pagamento de quota) </p>
                            <hr class="linhaApoiar">
                            <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/mbIcon.svg" alt="icone MBWay"> <span> MBWAY	&#8594; </span>   9120 123 123</p>
                            <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/bankIcon.svg" alt="icone transfer??ncia banc??ria"> <span> IBAN MilVoz	&#8594; </span>   PT50-0033-0000-45568966521-05</p>

                        </div>
                       
                        <div class="col-12 col-lg-6">
                            <div class="row">
                            <div class="col-sm-6 col-12 ">
                                <!--formulario de ser socio-->
                                <form method="post">
                                    <div class="d-flex flex flex-column justify-content-end mb-3">
                                        <!--nome completo-->
                                        <label for="nome">Nome Completo:</label>
                                        <input type="text" id="nome" name="socio_nome" />
                                        <!--nome no cartao de socio-->
                                        <label class="mt-3" for="nomec">Nome para o seu cart??o de s??cio:</label>
                                        <input type="text" id="nomec" name="socio_nomecart" />
                                        <!--morada-->
                                        <label class="mt-3" for="morada">Morada:</label>
                                        <input type="text" id="morada" name="socio_morada" />
                                        <!--telefone-->
                                        <label class="mt-3" for="telm">Telefone:</label>
                                        <input type="text" id="telm" name="socio_tel" />
                                        <!--numero de cc BI-->
                                        <label class="mt-3" for="nrcc">N??mero CC/BI:</label>
                                        <input type="text" id="nrcc" name="socio_nrcc" />
                                        <!--comprovativo-->
                                        <p class="mt-3" style="font-size: 13px;"><img class="mr-4" height="40px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/downloadIcon.svg" alt="icone download">&nbsp; anexar comprovativo de pagamento </p>   
                                    </div>
                            </div>
                                <div class="col-sm-6 col-12">
                                    <div class="d-flex flex flex-column mb-3">
                                        <!--sexo-->
                                        <label for="sexo">Sexo:</label>
                                        <input type="text" id="sexo" name="socio_sexo" />
                                        <!--data de nascimento-->
                                        <label class="mt-3" for="dn">Data de Nascimento:</label>
                                        <input type="text" id="dn" name="socio_dn" />
                                        <!--codigo postal-->
                                        <label class="mt-3" for="cp">C??digo Postal:</label>
                                        <input type="text" id="cp" name="socio_cp" />
                                        <!--email-->
                                        <label class="mt-3" for="mail">E-mail:</label>
                                        <input type="text" id="mail" name="socio_mail" />
                                        <!--nif-->
                                        <label class="mt-3" for="nif">NIF:</label>
                                        <input type="text" id="nif" name="socio_nif" />
                                        <!--radio button-->
                                        <label class="mt-3" for="nome">Quer men????o honrosa nas redes sociais?</label>
                                        <div class="d-flex align-items-center ">
                                            <input type="radio" id="sim" name="resposta" value="sim">
                                            <label  style="margin-left: 2px" for="sim">Sim</label><br>
                                            <input  style="margin-left: 20px" type="radio" id="nao" name="resposta" value="nao" >
                                            <label style="margin-left: 2px"  for="nao">N??o</label><br>
                                        </div>
                                        
                                    </div>
                                    <!--bot??o enviar-->
                                    <div class="d-flex justify-content-end ">
                                        <button  class="botao d-inline-block" name="sub" type="submit">Enviar </button>
                                    </div>
                                </div>
                        </div>
                        </div>
                        </form>
                        <?php
                            function alert($msg) {
                                echo "<script type='text/javascript'>alert('$msg');</script>";
                            }

                            if(isset($_POST['sub'])):
                                $nomecompleto =  $_POST['socio_nome'];
                                $nomecartaosocio = $_POST['socio_nomecart'];
                                $morada =  $_POST['socio_morada'];
                                $telefone = $_POST['socio_tel'];
                                $numerocc = $_POST['socio_nrcc'];
                                $sexo =  $_POST['socio_sexo'];
                                $datanascimento = $_POST['socio_dn'];
                                $codigopostal =  $_POST['socio_cp'];
                                $email = $_POST['socio_mail'];
                                $nif = $_POST['socio_nif'];

                                // Conex??o
                                $servernamea = "10.10.0.120";
                                $usernamea = "a2019135496";
                                $passworda = "Charuto123";
                                $db_namea = "a2019135496";

                                $connecta = mysqli_connect($servernamea, $usernamea, $passworda, $db_namea);

                                if(mysqli_connect_error()):
                                    echo "Falha na conex??o: ".mysqli_connect_error();
                                endif;


                                $selecaoadd = "INSERT INTO `sersocio` (`nomecompleto`, `nomecartao`, `morada`, `telefone`, `nrcc`, `sexo`, `dn`, `codpostal`, `mail`, `nif`, `idsocio`) 
                                                VALUES ('$nomecompleto', '$nomecartaosocio', '$morada', '$telefone', '$numerocc', '$sexo', '$datanascimento', '$codigopostal', '$email', '$nif', NULL);";
                                $resultadoadd = $connecta->query($selecaoadd);
                                alert("Submetido com sucesso! ");                
                            
                            endif;
                        ?>
                    </div>
            </div>
        </div>

        <div id="separadorApoiar1"></div>

        <!--DOAR-->
        <div class="gradiente p-5">     
            <div class="container-fluid p-5"> 
                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/2peopleIcon.svg" alt="icone de duas pessoas">
                <h1>DOAR</h1>
                    <div class="row gx-5">
                        <div class="col-12 col-lg-6 pDirApoiar">                        
                            <p>A compra de terrenos para serem convertidos em Bio-Reservas, o material necess??rio para a gest??o e divulga????o ambiental e as atividades levadas a cabo pela MilVoz implicam algum investimento, sendo a ajuda dos cidad??os imprescind??vel. Na impossibilidade de se tornar s??cio, ou caso n??o o deseje, pode ajudar a associa????o ao doar uma quantia facultativa. </p>
                            <hr class="linhaApoiar">
                            <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/mbIcon.svg" alt="icone MBWay"> <span> MBWAY	&#8594; </span>   9120 123 123</p>
                            <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/bankIcon.svg" alt="icone transfer??ncia banc??ria"> <span> IBAN MilVoz	&#8594; </span>   PT50-0033-0000-45568966521-05</p>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                               
                            <div class="col-sm-6 col-12 ">
                            <form method="post"> 
                                <!--formulario de ser socio-->
                               
                                    <div class="d-flex flex flex-column justify-content-end mb-3">
                                        <!--nome completo-->
                                        <label for="dnome">Nome Completo:</label>
                                        <input type="text" id="dnome" name="dnome" />
                                        <!--morada-->
                                        <label class="mt-3" for="dmorada">Morada:</label>
                                        <input type="text" id="dmorada" name="dmorada" />
                                        <!--telefone-->
                                        <label class="mt-3" for="dtel">Telefone:</label>
                                        <input type="text" id="dtel" name="dtel" />
                                        <!--comprovativo-->
                                        <p class="mt-3" style="font-size: 13px;"><img class="mr-4" height="40px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/downloadIcon.svg" alt="icone download">&nbsp; anexar comprovativo de pagamento </p>   
                                    </div>
                                
                            </div>
                            <div class="col-sm-6 col-12">
                                    <div class="d-flex flex flex-column mb-3">
                                        <!--codigo postal-->
                                        <label class="mt-3" for="dcp">C??digo Postal:</label>
                                        <input type="text" id="dcp" name="dcp" />
                                        <!--nif-->
                                        <label class="mt-3" for="nomednif">NIF:</label>
                                        <input type="text" id="nomednif" name="dnif" />
                                         <!--email-->
                                         <label class="mt-3" for="dmail">E-mail:</label>
                                         <input type="text" id="dmail" name="dmail" />
                                    </div>
                                    <!--bot??o enviar-->
                                    <div class="d-flex justify-content-end ">
                                        <button  class="botao d-inline-block" name="subdoar" type="submit">Enviar </button>
                                    </div>
                            </div>
                            </form>
                        <?php
                            if(isset($_POST['subdoar'])):
                                $dnome =  $_POST['dnome'];
                                $dmorada = $_POST['dmorada'];
                                $dtel =  $_POST['dtel'];
                                $dcp = $_POST['dcp'];
                                $dnif = $_POST['dnif'];
                                $dmail =  $_POST['dmail'];

                                // Conex??o
                                $servernamea = "10.10.0.120";
                                $usernamea = "a2019135496";
                                $passworda = "Charuto123";
                                $db_namea = "a2019135496";

                                $connecta = mysqli_connect($servernamea, $usernamea, $passworda, $db_namea);

                                if(mysqli_connect_error()):
                                    echo "Falha na conex??o: ".mysqli_connect_error();
                                endif;


                                $selecaoadd = "INSERT INTO `doar` (`iddoar`, `nome`, `morada`, `tel`, `codigopostal`, `nif`, `mail`) 
                                                VALUES (NULL, '$dnome', '$dmorada', '$dtel', '$dcp', '$dnif', '$dmail');";
                                $resultadoadd = $connecta->query($selecaoadd);
                                alert("Submetido com sucesso! ");                
                            
                            endif;
                        ?>
                        </div>
                        </div>
                    </div>
            </div>
        </div>

        <div id="separadorApoiar2"></div>

        <!--VOLUNTARIO-->
        <div class="gradiente p-5">     
                    <div class="container-fluid p-5"> 
                        <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/2peopleIcon.svg" alt="icone de duas pessoas">
                        <h1>SER VOLUNT??RIO</h1>
                            <div class="row gx-5">
                                <div class="col-12 col-lg-6 pDirApoiar">                        
                                    <p>Temos muito orgulho em todo o valor que conseguimos gerar no ainda curto tempo de vida da MilVoz. Ver a evolu????o da nossa primeira Bio-Reserva, fruto de v??rios meses de trabalho, a aproximar-se do que idealiz??mos ao in??cio, ?? extremamente gratificante. Se quiser partilhar estas experi??ncias connosco, passar bons momentos ao ar livre, apreciando a beleza dos carvalhos e castanheiros, ser?? sempre bem-vindo! </p>
                                    <hr class="linhaApoiar">
                                    <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/mbIcon.svg" alt="icone MBWay"> <span> MBWAY	&#8594; </span>   9120 123 123</p>
                                    <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/bankIcon.svg" alt="icone transfer??ncia banc??ria"> <span> IBAN MilVoz	&#8594; </span>   PT50-0033-0000-45568966521-05</p>
        
                                </div>
                                <div class="col-12 col-lg-6">
                                    <form method="post">
                                        <div class="d-flex mb-5">
                                            <div class="d-flex flex flex-column">
                                                <label for="vnome">Nome:</label>
                                                <input type="text" id="vnome" name="vnome" />
                                            </div>
                                            <div class="d-flex flex flex-column px-5">
                                                <label for="vemail">E-mail:</label>
                                                <input type="email" id="vemail" name="vmail" />
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-column">
                                            <label for="vmsg">Mensagem:</label>
                                            <textarea id="vmsg" name="vmsg"></textarea>
                                        </div>
                                    
                                        <div class="d-flex justify-content-end mt-5">
                                            <button  class="botao d-inline-block" name="subvol" type="submit">Enviar</button>
                                        </div>
                                    </form>
                        <?php
                            if(isset($_POST['subvol'])):
                                $vnome =  $_POST['vnome'];
                                $vmail = $_POST['vmail'];
                                $vmsg =  $_POST['vmsg'];

                                // Conex??o
                                $servernamea = "10.10.0.120";
                                $usernamea = "a2019135496";
                                $passworda = "Charuto123";
                                $db_namea = "a2019135496";

                                $connecta = mysqli_connect($servernamea, $usernamea, $passworda, $db_namea);

                                if(mysqli_connect_error()):
                                    echo "Falha na conex??o: ".mysqli_connect_error();
                                endif;


                                $selecaoadd = "INSERT INTO `voluntarios` (`idvoluntario`, `nome`, `mail`, `mensagem`) VALUES (NULL, '$vnome', '$vmail', '$vmsg');";
                                $resultadoadd = $connecta->query($selecaoadd);
                                alert("Submetido com sucesso! ");                
                            
                            endif;
                        ?>
                                </div>
                            </div>
                    </div>
        </div>
        
        <div id="separadorApoiar3"></div>

    <!--Footer-->
    <footer class="castanho-background dNoneTel ">
      <div class="margemLateral ">
          <div class="row d-flex justify-content-center py-5">
              <div class="col-12 col-lg-3 mb-lg-0 footerLeft">
                  <img class="mDir logotipoFooter"
                  src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
                  alt="Milvoz Logotipo">
                  <p class="mt-xl-3 mDir py-3" style="font-size:16px"> MILVOZ, desde 2009 a dar voz ??s faunas e floras de ??reas com elevado valor ecol??gico. Pretendemos valorizar a floresta nativa bem como toda a biodiversidade dela dependente, para isso dinamizamos atividades nas quais convidamos a comunidade local a participar. </p>
                  <hr  class="d-lg-none d-block">
              </div>
              <div class="col-12 col-lg-9 pEsq">
                  <div class="row d-flex align-content-center">

                      <div class="col-6 col-md-4 d-flex flex-column ">
                          <dl>
                              <a href="sobre.html">
                              <dt>ONGA</dt>
                              <dd  style="font-size: 16px;">&#8226 Quem somos?</dd>
                              <dd  style="font-size: 16px;">&#8226 Ser s??cio</dd>
                              </a>
                          </dl>

                          <dl>
                              <a href="actuacao.html">
                              <dt>ACTIVIDADES</dt>
                              <dd style="font-size: 16px;">&#8226 Gest??o Ecol??gica</dd>
                              <dd  style="font-size: 16px;">&#8226 Educa????o Ambiental</dd>
                              <dd  style="font-size: 16px;">&#8226 Aconselhamentos</dd>
                              </a>
                          </dl>

                      </div>

                      <div class="col-6 col-md-4 ">
                          <dl>
                              <a href="bioreservas.html">
                              <dt>BIO-RESERVAS</dt>
                              <dd style="font-size: 16px;">&#8226 Nossa Senhora da Alegria</dd>
                              <dd  style="font-size: 16px;">&#8226 Serra da Pescaria</dd>
                              </a>
                          </dl>

                          <dl>
                              <a href="contactos.php">
                              <dt>CONTACTOS</dt>
                                  <dd style="font-size: 16px;">&#8226 geral@milvoz.pt</dd>
                                  <dd  style="font-size: 16px;">&#8226 913 123 132</dd>
                                  <dd  style="font-size: 16px;">&#8226 40??07'20.8"N  8??23'20.5"W</dd>
                              </a>
                          </dl>
                      </div>
                      <div class="col-12 col-md-4 d-flex flex-column">
                          <div class="row">
                                  <div class="col-6 col-md-12">
                                      <a href="contactos.php">
                                      <dt>MORADA</dt>
                                      <dd style="font-size: 16px;">&#8226 Rua da Cal??ada Antiga n??1 <br>
                                          Assafarge / Coimbra<br>
                                          3040-657</dd>
                                      </a>
                                  </div>

                                  <div class="col-6 col-md-12">
                                      <p class="mt-3" style="font-weight: 800;"> S?? MAIS UMA VOZ</p>  
                                      <div class="d-flex justify-content-start " >
                                          <a class="p-2 facebook" href="https://www.facebook.com/MilVozNatureza" target="_blank">
                                              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/facebook-logo.svg" alt="facebook logo">
                                          </a>

                                          <a  class="p-2 instagram"href="https://www.instagram.com/milvoznatureza/" target="_blank">
                                              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/insta-logo.svg" alt="instagram logo">
                                          </a>
                                          <a class="p-2 youtube" href="https://www.youtube.com/channel/UC5Esvsda5kJlR0U10wdHVTw" target="_blank">
                                              <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/youtube-logo.svg" alt="youtube logo">
                                          </a>
                                      </div>
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </footer>

     <!-- SCRIPT DA BOOTSTRAP-->
  <!-- jQuery, Popper.js e Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="./javascript/index.js"></script>
</body>
</html>