<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Milvoz - ONGA</title>
        
        <!--Styles-->
        <link rel="stylesheet" href="./styles/geral.css">
        <link rel="stylesheet" href="./styles/apadrinhar.css">
        
        
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
            <div class="modal-header castanho-background" style=" padding-top: 120px;">
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
                        <dd class="infoMenu" style="font-size: 16px;"> Ser sócio</dd>
                    </a>
                    </dl>
                    <br>
                    <dl>
                    <a href="actuacao.html">
                        <dt> <h2>ACTIVIDADES</h2></dt>
                        <dd class="infoMenu" style="font-size: 16px;"> Gestão Ecológica</dd>
                        <dd class="infoMenu" style="font-size: 16px;"> Educação Ambiental</dd>
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
                        <dt> <h2>SÊ MAIS <br> UMA VOZ</h2></dt>
                            <dd class="infoMenu" style="font-size: 16px;">Ser sócio</dd>
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
                        <dd  class="infoMenu" style="font-size: 16px;">Mamíferosa</dd>
                        <dd class="infoMenu" style="font-size: 16px;">Anfíbios</dd>
                        <dd class="infoMenu" style="font-size: 16px;">Répteis</dd>
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
    <div class="apadrinharIntro d-flex justify-content-center align-items-sm-end align-items-start">
                <div class="container" >
                        <div class="col-md-6 m-sm-0 m-5 mx-5 introMargem">
                            <h1 style="text-shadow: 1px 1px 3px #000000;">APADRINHAR <br> UM ANIMA<span style='border-bottom:9px #f6ecd1 solid; margin-top: -50rem;box-shadow: 0px 2px rgba(0, 0, 0, 0.1)'>L &nbsp</span></h1>
                            <p class="mt-4 amareloEscuro">As nossas bio-reservas possuem inúmeras espécies que necessitam de proteção e de segurança na conservação dos seus habitat. A melhor forma que nos pode ajuda é apadrinhando um animal .                                 
                            </p>
                        </div>
                        <div class="col-md-6">
                        </div> 
                </div>  
    </div>

            
    <div class="gradiente py-5"> <!--após a introdução este gradiente acompanha p resto da página -->
                
                <div class="container"> <!--acompanha até ao fim dos cartoes com animais para garantir as margens-->
                    <!--COMO FUNCIONA-->
                    <div class="row py-5 m-3 m-md-0">
                        <div class="col-12 col-md-6 py-md-5 p-0">
                            <h1>Como funciona?</h1>
                            <p>Ao apadrinhar um animal ganhará um cerificado digital de apadrinhamento
                                e uma menção honrosa nas nossas redes sociais (se assim o desejar).</p>
                        </div>
                        <div class="col-6">     
                        </div>
                    </div>
                    <div class="row py-5 m-3 m-md-0">
                        <div class="col-12 col-md-6">
                            <h1>Como apadrinhar?</h1>
                            <p>1. Fazer a transferência de 25€ por MBWay ou IBAN e guardar comprovativo.<br>
                                2. Clicar abaixo no animal que deseja adoptar. <br>
                                3. Preencher formulário e anexar comprovativo de transferência.<br>
                                4. Se não desejar a menção honrosa basta assinala essa opção no formulário.</p>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-end align-items-md-end px-md-5 px-0">  
                            <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/mbIcon.svg" alt="icone MBWay"> <span> MBWAY	&#8594; </span>   9120 123 123</p>
                                    <p><img src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/bankIcon.svg" alt="icone transferência bancária"> <span> IBAN MilVoz	&#8594; </span>   PT50-0033-0000-45568966521-05</p>   
                        </div>  
                    </div>

                    <!--primeira linha de animais-->
                    <div id="wrapAnimal" class=" row d-flex flex-row">
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid" src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/gineta.png?raw=true" alt="gineta">
                            <p class=" text-center">Gineta</p>
                        </div>
                        <div class=" p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/javali.png?raw=true" alt="javali">
                            <p class="text-center">Javali</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/texugo.png?raw=true" alt="texugo">
                            <p class="text-center">Texugo</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/sacarrabos.png?raw=true" alt="sacarrabos">
                            <p class="text-center">Sacarrabos</p>
                        </div>   
                    </div>

                    <!--segunda linha de animais-->
                    <div class="row d-flex flex-row">
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid" src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/doninha.png?raw=true" alt="doninha">
                            <p class="text-center">Doninha</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/salamandraPintasAmarelas.png?raw=true" alt="Salamandra Pintas Amarelas">
                            <p class="text-center">Salamandra Pintas Amarelas</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/escaravelho.png?raw=true" alt="Escaravelho">
                            <p class="text-center">Escaravelho</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/tritao.png?raw=true" alt="tritão">
                            <p class="text-center">Tritão</p>
                        </div>   
                    </div>

                    <!--terceira linha de animais-->
                    <div class="row d-flex flex-row">
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid" src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/veado.png?raw=true" alt="Veado">
                            <p class="text-center">Veado</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/corco.png?raw=true" alt="Corço">
                            <p class="text-center">Corço</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/ourico.png?raw=true" alt="Ouriço">
                            <p class="text-center">Ouriço</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/salamandraLusitana.png?raw=true" alt="Salamandra Lusitânica">
                            <p class="text-center">Salamandra Lusitânica</p>
                        </div>   
                    </div>

                    <!--quarta linha de animais-->
                    <div class="row d-flex flex-row">
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid" src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/raVerda.png?raw=true" alt="Rã Verde">
                            <p class="text-center">Rã Verde</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/raIberica.png?raw=true" alt="Rã Ibérica">
                            <p class="text-center">Rã Ibérica</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/sapoParteiro.png?raw=true" alt="Sapo Parteiro">
                            <p class="text-center">Sapo Parteiro</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/noitiboCinzento.png?raw=true" alt="Pisco de Peito Ruivo">
                            <p class="text-center">Nóitibo Cinzento</p>
                        </div>   
                    </div>

                    <!--quinta linha de animais-->
                    <div class="row d-flex flex-row">
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid" src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/chapimMascarilha.png?raw=true" alt="Chapim Mascarilha">
                            <p class="text-center">Chapim Marcarilha</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/domFafe.png?raw=true" alt="Dom FAfe">
                            <p class="text-center">Dom Fafe</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/picaPau.png?raw=true" alt="Pica Pau">
                            <p class="text-center">Pica Pau</p>
                        </div>
                        <div class="p-4 col-6 col-md-3">
                            <img class="animal img-fluid"  src="https://github.com/filipa-bastos/milVoz/blob/main/recursos/galeriaApadrinhar/piscoDePeitoRuivo.png?raw=true" alt="Pisco de Peito Ruivo">
                            <p class="text-center">Pisco de Peito Ruivo</p>
                        </div>   
                    </div>

                    <!-- Trigger/Open The Modal AVALIAR SE NECESSARIO
                    <button id="myBtn">Open Modal</button>
                        -->


                    <!-- The Modal -->
                    <div id="formApadrinharDisplay" class="modalFormApadrinhar">

                        <!-- Modal content -->
                        <div class="modalFormApadrinhar-content">
                            
                            <!--SER SOCIO FORMULARIO EM MODAL-->
                            <div class="gradiente p-5">     
                                <div class="container-fluid p-5"> 
                                    <span class="close">&times;</span>
                                    <h4>ʕ◕ᴥ◕ʔ <br> Obrigada </h4>
                                        <div class="row gx-5">
                                            <div class="col-12 c pDirApoiar">                        
                                                <p>Obrigada por apoiar a nossa causa. <br>Para completar o processo de apadrinhamento basta preencher o formulário abaixo e anexar o comprovativo de pagamento. <br> Recordamos que  poderá realizar a sua tranferência optando por um dos seguintes métodos:</p>
                                                <p>&#8226;
                                                    <img height="20px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/mbIcon.svg" alt="icone MBWay"> 
                                                    <span> MBWAY	&#8594; </span>   
                                                    9120 123 123 
                                                    <br> &#8226; 
                                                    <img height="17px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/bankIcon.svg" alt="icone transferência bancária"> 
                                                    <span> IBAN MilVoz	&#8594; </span>   PT50-0033-0000-45568966521-05</p>
                                                <hr class="linhaApoiar">
                                                
                                                

                                            </div>
                                        
                                            <div class="col-12 ">
                                            <form method="post">
                                                <div class="row">
                                                <div class="col-sm-6 col-12 ">
                                                    <!--formulario de ser socio-->
                                                    <form>
                                                        <div class="d-flex flex flex-column justify-content-end mb-3">
                                                            <!--nome completo-->
                                                            <label for="nome">Nome Completo:</label>
                                                            <input type="text" id="nome" name="nomecompleto" />
                                                            <!--nome no cartao de socio-->
                                                            <label class="mt-3" for="nome">Nome para o seu cartão de sócio:</label>
                                                            <input type="text" id="nome" name="nomecartaosocio" />
                                                            <!--morada-->
                                                            <label class="mt-3" for="nome">Morada:</label>
                                                            <input type="text" id="nome" name="morada" />
                                                            <!--telefone-->
                                                            <label class="mt-3" for="nome">Telefone:</label>
                                                            <input type="text" id="nome" name="telefone" />
                                                            <!--numero de cc BI-->
                                                            <label class="mt-3" for="nome">Número CC/BI:</label>
                                                            <input type="text" id="nome" name="numerocc" />
                                                            <!--comprovativo-->
                                                            <p class="mt-3" style="font-size: 13px;"><img class="mr-4" height="40px" src="https://raw.githubusercontent.com/filipa-bastos/milVoz/1ddb2396d7b2ca8b462e103e1bf4bc36f0b1b9e4/recursos/icons/downloadIcon.svg" alt="icone download">&nbsp; anexar comprovativo de pagamento </p>   
                                                        </div>
                                                </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="d-flex flex flex-column mb-3">
                                                            <!--sexo-->
                                                            <label for="nome">Sexo:</label>
                                                            <input type="text" id="nome" name="sexo" />
                                                            <!--data de nascimento-->
                                                            <label class="mt-3" for="nome">Data de Nascimento:</label>
                                                            <input type="text" id="nome" name="datanascimento" />
                                                            <!--codigo postal-->
                                                            <label class="mt-3" for="nome">Código Postal:</label>
                                                            <input type="text" id="nome" name="codigopostal" />
                                                            <!--email-->
                                                            <label class="mt-3" for="nome">E-mail:</label>
                                                            <input type="text" id="nome" name="email" />
                                                            <!--nif-->
                                                            <label class="mt-3" for="nome">NIF:</label>
                                                            <input type="text" id="nome" name="nif" />
                                                            <!--radio button-->
                                                            <label class="mt-3" for="nome">Quer menção honrosa nas redes sociais?</label>
                                                            <div class="d-flex align-items-center ">
                                                                <input type="radio" id="sim" name="resposta" value="sim">
                                                                <label  style="margin-left: 2px" for="sim">Sim</label><br>
                                                                <input  style="margin-left: 20px" type="radio" id="nao" name="resposta" value="nao" >
                                                                <label style="margin-left: 2px"  for="nao">Não</label><br>
                                                            </div>
                                                            
                                                        </div>
                                                        <!--botão enviar-->
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
                                                    $nomecompleto =  $_POST['nomecompleto'];
                                                    $nomecartaosocio = $_POST['nomecartaosocio'];
                                                    $morada =  $_POST['morada'];
                                                    $telefone = $_POST['telefone'];
                                                    $numerocc = $_POST['numerocc'];
                                                    $sexo =  $_POST['sexo'];
                                                    $datanascimento = $_POST['datanascimento'];
                                                    $codigopostal =  $_POST['codigopostal'];
                                                    $email = $_POST['email'];
                                                    $nif = $_POST['nif'];
                
                                                    // Conexão
                                                    $servernamea = "10.10.0.120";
                                                    $usernamea = "a2019135496";
                                                    $passworda = "Charuto123";
                                                    $db_namea = "a2019135496";
                    
                                                    $connecta = mysqli_connect($servernamea, $usernamea, $passworda, $db_namea);
                    
                                                    if(mysqli_connect_error()):
                                                        echo "Falha na conexão: ".mysqli_connect_error();
                                                    endif;
                    
                                                    $selecaoadd = "INSERT INTO apadrinhar
                                                    VALUES (NULL, '$nomecompleto', '$nomecartaosocio', '$morada', '$telefone', '$numerocc', '$sexo', '$datanascimento', '$codigopostal', '$email', '$nif');";
                                                    $resultadoadd = $connecta->query($selecaoadd);
                                                    alert("Submetido com sucesso! ");                
                                                
                                                endif;
                                            ?>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
    </div>

   <!--Footer-->
<footer class="castanho-background dNoneTel ">
  <div class="margemLateral ">
      <div class="row d-flex justify-content-center py-5">
          <div class="col-12 col-lg-3 mb-lg-0 footerLeft">
              <img class="mDir logotipoFooter"
              src="https://raw.githubusercontent.com/filipa-bastos/milVoz/9f0693cc584aae18b998e19f9d0571ab2cd99506/recursos/icons/milVoz-logoFonte.svg"
              alt="Milvoz Logotipo">
              <p class="mt-xl-3 mDir py-3" style="font-size:16px"> MILVOZ, desde 2009 a dar voz às faunas e floras de áreas com elevado valor ecológico. Pretendemos valorizar a floresta nativa bem como toda a biodiversidade dela dependente, para isso dinamizamos atividades nas quais convidamos a comunidade local a participar. </p>
              <hr  class="d-lg-none d-block">
          </div>
          <div class="col-12 col-lg-9 pEsq">
              <div class="row d-flex align-content-center">

                  <div class="col-6 col-md-4 d-flex flex-column ">
                      <dl>
                        <a href="sobre.html">
                          <dt>ONGA</dt>
                          <dd  style="font-size: 16px;">&#8226 Quem somos?</dd>
                          <dd  style="font-size: 16px;">&#8226 Ser sócio</dd>
                        </a>
                      </dl>

                      <dl>
                        <a href="actuacao.html">
                          <dt>ACTIVIDADES</dt>
                          <dd style="font-size: 16px;">&#8226 Gestão Ecológica</dd>
                          <dd  style="font-size: 16px;">&#8226 Educação Ambiental</dd>
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
                              <dd  style="font-size: 16px;">&#8226 40°07'20.8"N  8°23'20.5"W</dd>
                          </a>
                      </dl>
                  </div>
                  <div class="col-12 col-md-4 d-flex flex-column">
                      <div class="row">
                              <div class="col-6 col-md-12">
                                <a href="contactos.php">
                                  <dt>MORADA</dt>
                                  <dd style="font-size: 16px;">&#8226 Rua da Calçada Antiga nº1 <br>
                                      Assafarge / Coimbra<br>
                                      3040-657</dd>
                                  </a>
                              </div>

                              <div class="col-6 col-md-12">
                                  <p class="mt-3" style="font-weight: 800;"> SÊ MAIS UMA VOZ</p>  
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

    <!--script da pagina apadrinhar-->
    <script type="text/javascript" src="./javascript/apadrinhar.js"></script>
    <!-- SCRIPT DA BOOTSTRAP-->
  <!-- jQuery, Popper.js e Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="./javascript/index.js"></script>
</body>
</html>
