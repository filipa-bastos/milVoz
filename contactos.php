<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Milvoz - ONGA</title>
        
        <!--Styles-->
        <link rel="stylesheet" href="./styles/geral.css">
        <link rel="stylesheet" href="./styles/contactos.css">
        
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
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #283A3F;" >
        <!-- Container wrapper  -->
        <div class="container-fluid mt-2 mb-2" style="background-color: #283A3F; " >
        <!-- Navbar brand -->
        <a class="navbar-brand ms-5" href="index.html">
            <img 
            src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
            height="24px"
            width="94px"
            alt="Milvoz Logotipo"
            loading="lazy">
        </a>
    
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample" 
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
                <div class="menu-btn__burger"></div>
                </div>
            </div>
        </div>
        <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper --> 
    </nav>

    <!--INTRO FULL BOOTSTRAP com, background image -->
    <div class="contactosIntro d-flex justify-content-center align-items-sm-end align-items-start">
        <div class="container" >
                <div class="col-md-6 m-sm-0 m-5 mx-5 introMargem">
                    <h1 style="text-shadow: 1px 1px 3px #000000;">DEIXE-NOS <br>UMA MENSAGE<span style='border-bottom:9px #f6ecd1 solid; margin-top: -50rem;box-shadow: 0px 2px rgba(0, 0, 0, 0.1)'>M &nbsp</span></h1>
                    <p class="mt-4 amareloEscuro">Tem ideias, sugestões ou mesmo uma denúncia que vai de encontro do nosso objetivo de preservar e proteger a floresta nativa e biodiversidade local? <br> ENVIE-NOS UMA MENSAGEM!
                    <p>
                </div>
                <div class="col-md-6">
                </div> 
        </div>  
    </div>

    <!--FORMULANIO DE CONTACTO-->
    <div class=" gradiente py-5">
        
            <div class="container py-5">
                <div class="row py-5 m-sm-0 m-5">
                        <!--formulario-->
                        <div class="col-12 col-md-8 px-5">
                            <h1 class="mb-5">Sua mensagem</h1>
                            <form method="post">
                                <div class="d-flex mb-5">
                                    <div class="d-flex flex flex-column">
                                        <label for="vnome">Nome:</label>
                                        <input type="text" id="vnome" name="vnome" />
                                    </div>
                                    <div class="d-flex flex flex-column px-5">
                                        <label for="vmail">E-mail:</label>
                                        <input type="email" id="vmail" name="vmail" />
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
                            function alert($msg) {
                                echo "<script type='text/javascript'>alert('$msg');</script>";
                            }
                            if(isset($_POST['subvol'])):
                                $vnome =  $_POST['vnome'];
                                $vmail = $_POST['vmail'];
                                $vmsg =  $_POST['vmsg'];

                                // Conexão
                                $servernamea = "10.10.0.120";
                                $usernamea = "a2019135496";
                                $passworda = "Charuto123";
                                $db_namea = "a2019135496";

                                $connecta = mysqli_connect($servernamea, $usernamea, $passworda, $db_namea);

                                if(mysqli_connect_error()):
                                    echo "Falha na conexão: ".mysqli_connect_error();
                                endif;


                                $selecaoadd = "INSERT INTO `mensagemcontactos` (`idmensagem`, `nome`, `mail`, `mensagem`) VALUES (NULL, '$vnome', '$vmail', '$vmsg');";

                                
                                $resultadoadd = $connecta->query($selecaoadd);
                                alert("Submetido com sucesso! ");                
                            
                            endif;
                        ?>
                        </div>
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-start">
                            <!--facebook-->
                            <a class="py-3" href="https://www.facebook.com/MilVozNatureza" target="_blank">
                                <img  height="30px"  src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/facebook-logo.svg" alt="facebook logo">
                                <span class="px-2">/MilVozNatureza</span>
                            </a>
                            <!--instagram-->
                            <a  class="py-3"href="https://www.instagram.com/milvoznatureza/" target="_blank">
                                <img height="30px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/insta-logo.svg" alt="instagram logo">
                                <span class="px-2">@milvoznatureza</span>
                            </a>
                            <!--youtube-->
                            <a class="py-3" href="https://www.youtube.com/channel/UC5Esvsda5kJlR0U10wdHVTw" target="_blank">
                                <img height="30px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/youtube-logo.svg" alt="youtube logo">
                                <span class="px-2">MilVoz Conservação da Natureza</span>
                            </a>
                           <!--email-->
                            <a class="py-3" href="https://www.youtube.com/channel/UC5Esvsda5kJlR0U10wdHVTw" target="_blank">
                                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/4dc30e3d3aa7860d1b3d52c39356b4bd60874fbb/recursos/icons/arrobaIcon.svg" alt="youtube logo">
                                <span class="px-2">geral@milvoz.pt</span>
                            </a>
                            <!--maps-->
                            <a class="py-3" href="#" target="_blank">
                                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/4dc30e3d3aa7860d1b3d52c39356b4bd60874fbb/recursos/icons/mapIcon.svg" alt="youtube logo">
                                <span class="px-2">Rua da Calçada Antiga, nº1 <br>
                                    <span class="px-3"></span>  Assafarge, 3040-657 Coimbra </span>
                                    
                            </a>
                        </div>
                </div>
            </div>
        
    </div>

    <div id="separadorContactos"></div>


    <!--FOOTER-->    
    <footer class="castanho-background dNoneTel">
        <div class="container margemLateral py-5">
            <div class="row ">
                <div class="col-12 col-lg-3 mb-lg-0 ">
                    <a href="index.html">
                    <img class="logotipoFooter"
                    src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
                    alt="Milvoz Logotipo">
                    </a>
                    <p class="mt-xl-3 mDir py-3" style="font-size:10px"> MILVOZ, desde 2009 a dar voz às faunas e floras de áreas com elevado valor ecológico. Pretendemos valorizar a floresta nativa bem como toda a biodiversidade dela dependente, para isso dinamizamos atividades nas quais convidamos a comunidade local a participar. </p>
                    <hr  class="d-lg-none d-block">
                </div>
                <div class="col-12 col-lg-9 pEsq">
                    <div class="row d-flex align-content-center">

                        <div class="col-6 col-md-4 d-flex flex-column ">
                            <dl>
                                <a href="sobre.html">
                                    <dt>ONGA</dt>
                                    <dd style="font-size: 13px;">&#8226 Quem somos?</dd>
                                </a>
                                <a href="apoiar.php">
                                    <dd  style="font-size: 13px;">&#8226 Ser sócio</dd>
                                </a>
                            </dl>

                            <dl>
                                <a href="actuacao.html">
                                <dt>ACTIVIDADES</dt>
                                    <dd style="font-size: 13px;">&#8226 Gestão Ecológica</dd>
                                    <dd  style="font-size: 13px;">&#8226 Educação Ambiental</dd>
                                    <dd  style="font-size: 13px;">&#8226 Aconselhamentos</dd>
                                </a>
                            </dl>
  
                        </div>

                        <div class="col-6 col-md-4 ">
                            <dl>
                                <a href="bioreservas.html">
                                    <dt>BIO-RESERVAS</dt>
                                    <dd style="font-size: 13px;">&#8226 Nossa Senhora da Alegria</dd>
                                    <dd  style="font-size: 13px;">&#8226 Serra da Pescaria</dd>
                                </a>
                            </dl>

                            <dl>
                                <a href="contactos.php">
                                <dt>CONTACTOS</dt>
                                    <dd style="font-size: 13px;">&#8226 geral@milvoz.pt</dd>
                                    <dd  style="font-size: 13px;">&#8226 913 123 132</dd>
                                    <dd  style="font-size: 13px;">&#8226 40°07'20.8"N  8°23'20.5"W</dd>
                                </a>
                            </dl>
                        </div>
                        <div class="col-12 col-md-4 d-flex flex-column">
                            <div class="row">
                                    <div class="col-6 col-md-12">
                                        <dt>MORADA</dt>
                                        <dd style="font-size: 13px;">&#8226 Rua da Calçada Antiga nº1 <br>
                                            Assafarge / Coimbra<br>
                                            3040-657</dd>
                                    </div>

                                    <div class="col-6 col-md-12">
                                        <p class="mt-3" style="font-weight: 800;"> SÊ MAIS UMA VOZ</p>  
                                        <div class="d-flex justify-content-start " >
                                            <a class="p-2" href="https://www.facebook.com/MilVozNatureza" target="_blank">
                                                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/facebook-logo.svg" alt="facebook logo">
                                            </a>

                                            <a  class="p-2"href="https://www.instagram.com/milvoznatureza/" target="_blank">
                                                <img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/146134f8c25d7939475c1dd5df9dfc6b0fdb2872/recursos/icons/insta-logo.svg" alt="instagram logo">
                                            </a>
                                            <a class="p-2" href="https://www.youtube.com/channel/UC5Esvsda5kJlR0U10wdHVTw" target="_blank">
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
</body>
</html>