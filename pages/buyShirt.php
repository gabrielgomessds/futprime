<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FutPrime - Comprar Camisa</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
</head>

<body>
  <!-- ============================ CONTEUDO DO TOPO =======================================  -->
  <div class="container_top">

    <b class="bar_ad text-uppercase"><span><a href="#"><i class="bi bi-megaphone-fill"></i> FutPrime - Seja único, seja
          prime</a></span> </b>
  </div>
  <!-- ============================ CONTEUDO DO TOPO 2 ====================================== -->
  <nav class="navbar navbar-expand-lg content_bar p-3">
    <div class="d-flex w-100 justify-content-center align-items-center content_top">

      <div class="logo d-flex justify-content-between align-items-center">

        <div class="navbar-brand d-flex">
          <img src="../assets/images/logo.png" alt="" width="50" height="54" class="d-inline-block align-text-top">
          <span class="fs-3 d-flex align-items-center fw-bold text-light">FutPrime</span>
        </div>

        <div class="">
          <span><i class="bi bi-list icon_menu"></i></span>
        </div>

      </div>

      <div class="input-group input_search">
        <input type="text" class="form-control p-2 shadow-none" id="basic-url"
          placeholder="Qual camisa você está buscando?" aria-describedby="basic-addon3">
        <span class="input-group-text bg_darkorange border-0 input-search" id="basic-addon3" title="Buscar"><i
            class='bx bx-search text-light fs-4'></i></span>
      </div>


      <div class=" fs-2 text-light icons_top d-flex">
        <i class='bx bx-moon icon_top theme-button' title="Modo Noturno"></i>
        <i class='bx bx-user icon_top item_mobile' data-bs-toggle="modal" data-bs-target="#exampleModal"
          title="Fazer Login"></i>
        <span class="position-relative">
          <i class='bx bx-cart-alt icon_top' data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" title="Carrinho de compras"></i>
          <span class="fs-6 position-absolute top-0 end-0 bg-danger rounded-circle bagde  px-2">0</span>
        </span>
      </div>

    </div>
  </nav>
  <!-- ============================ MENU =============================================== -->
  <nav class="menu_home">
    <ul class="nav nav-pills justify-content-center p-3 list_menu">
      <li class="nav-item  ">
        <a class="nav-link item_mobile" href="../../index.html"><i class='bx bx-home'></i> <span>Home</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active item_mobile" href="../../index.html#cards-shirts"><i class='bx bxs-t-shirt'></i>
          <span>Camisas</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  item_mobile" href="cadastroCliente.html"><i class='bx bxs-user-circle'></i>
          <span>Cadastro</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link item_mobile" href="../../index.html#form-contact"><i class='bx bxs-envelope'></i>
          <span>Contato</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link item_mobile" href="#"><i class='bx bx-user'></i> <span>Login</span></a>
      </li>

    </ul>
  </nav>

  <!-- ============================= MENU RESPONSIVO ===================================== -->
  <nav class="menu_mobile">
    <ul class="nav flex-column  ">
      <span class="ms-1"><i class="bi bi-x close_menuMobile"></i> </span>
      <li class="nav-item  ">
        <a class="nav-link item_mobile" href="../../index.html"><i class='bx bx-home'></i> <span>Home</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active item_mobile" href="../../index.html#cards-shirts"><i class='bx bxs-t-shirt'></i>
          <span>Camisas</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  item_mobile " href="cadastroCliente.html"><i class='bx bxs-user-circle'></i>
          <span>Cadastro</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link item_mobile" href="../../index.html#form-contact"><i class='bx bxs-envelope'></i>
          <span>Contato</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  item_mobile" href="#"><i class='bx bx-user'></i> <span>Login</span></a>
      </li>
    </ul>
  </nav>

  <!-- ========================== ÁREA DE COMPRA DA CAMISA =====================================  -->
  <div class="row w-100 mt-5 d-flex customizeAreaShirt">
    <div class="col-6 ">
      <div class="areaImgShirts">

        <div class="me-2 ms-1">

          <div class="positionShirts">

            <input type="radio" class="btn-check options_shirt optionSymbolShirt" name="btnradio" id="btnradioz1"
              autocomplete="off" checked>
            <label class="btn shadow-none mb-2" for="btnradioz1"><img
                src="../assets/images/camisas/257139328_126851229744515_2923407250030929456_n.webp.jpg" width="100px"
                class="shirt_selected symbol_shirt" alt="Simbolo da camisa do PSG branca"></label>


            <input type="radio" class="btn-check options_shirt optionFrontShirt" name="btnradio" id="btnradioz2"
              autocomplete="off">
            <label class="btn shadow-none mb-2" for="btnradioz2"><img
                src="../assets/images/camisas/257556054_315549836775038_351872282606601384_n.webp.jpg" width="100px"
                class="shirt_selected front_shirt" alt="Frente da camisa do PSG branca"></label>


            <input type="radio" class="btn-check options_shirt optionBackShirt" name="btnradio" id="btnradioz3"
              autocomplete="off">

            <label class="btn shadow-none" for="btnradioz3">
              <img src="../assets/images/camisas/257319967_4559412084179019_4385809750441870019_n.webp.jpg"
                width="100px" class="shirt_selected back_shirt " alt="Costas da camisa do PSG branca">
            </label>


            <input type="radio" class="btn-check options_shirt optionSideShirt" name="btnradio" id="btnradioz4"
              autocomplete="off">
            <label class="btn shadow-none mb-2" for="btnradioz4"> <img
                src="../assets/images/camisas/257729070_609410260102614_1992093247128615083_n.webp.jpg" width="100px"
                class="shirt_selected side_shirt" alt="Lateral da camisa do PSG branca"></label>

          </div>

        </div>

        <div class="areaEditShirt">

          <div class="customizeShirt">
            <div class="edit_up"></div>
            <div class="edit_center"></div>
            <div class="edit_down"></div>
          </div>

          <img src="../assets/images/camisas/257139328_126851229744515_2923407250030929456_n.webp.jpg" class="img_shirt"
            alt="">

        </div>

      </div>

    </div>

    <div class="col-6 mt-2 product-under">
      <div class="info_shirt d-flex flex-column justify-content-center align-items-center">

        <div class="name_shirt text-center mt-4 fs-4 fw-bold">
          Camisa do Paris San-German Branca
        </div>

        <div class="price_shirt mt-1 fw-bold fs-4">
          <i class="bi bi-tags-fill"></i> Preço: R$ 120,00
          <input type="hidden" class="valueShirt" value="120,00">
        </div>
        <input type="hidden" class="idShirt" value="1">
        <div class="border_line"></div>

        <p class="fs-4 fw-bold">Escolha o Tamanho:</p>

        <form action="">

          <div class="d-flex flex-column align-items-center">
            <div class="d-flex flex-row justify-content-center" title="Não temos o tamanho GG" role="group">
              <input type="radio" class="btn-check size_shirt" name="btnradio" id="btnradio1" checked>
              <label class="btn btn_size_shirt shadow-none ms-2" for="btnradio1">P</label>

              <input type="radio" class="btn-check size_shirt" name="btnradio" id="btnradio2">
              <label class="btn btn_size_shirt  shadow-none ms-2" for="btnradio2">M</label>

              <input type="radio" class="btn-check size_shirt" name="btnradio" id="btnradio3">
              <label class="btn btn_size_shirt shadow-none ms-2" for="btnradio3">G</label>

              <input type="radio" class="btn-check size_shirt" name="btnradio" id="btnradio4">
              <label class="btn btn_size_shirt shadow-none ms-2" for="btnradio4">GG</label>
            </div>

          </div>
      </div>


      <div class="border_line ms-4"></div>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed shadow-none open_customize" type="button"
              data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Customizar Camisa -> + R$30,00
              <input type="hidden" class="addValueCustomizeShirt" value="30,00">
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="mb-3 row">
                <label for="cima" class="col-sm-2 col-form-label">Em cima:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control textUpShirt inputCustomShirt" id="cima"
                    placeholder="Nome na parte de cima da camisa">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="numero" class="col-sm-2 col-form-label">Número</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control textCenterShirt inputCustomShirt"
                    placeholder="Digite o número da camisa" id="numero">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="embaixo" class="col-sm-2 col-form-label">Embaixo: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control textDownShirt inputCustomShirt"
                    placeholder="Nome na parte de baixo da camisa" id="embaixo">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="embaixo" class="col-sm-2 col-form-label">Cor: </label>
                <div class="col-sm-10">
                  <input type="color" class="form-control colorTextShirt form-control-color" id="exampleColorInput"
                    value="#232f3e" title="Choose your color">
                </div>
              </div>

              <div class="mt-4 mb-3 row ">
                <label class="label_checkbox">Adicionar customização
                  <input type="checkbox" class="checkedCustomize" name="custom_shirt" disabled
                    onclick="shirtPriceAdjustment();">
                  <span class="checkmark"></span>
                </label>

              </div>



              <div class="form-text text_defualt">* A customização é apenas um exemplo e não ficará 100% igual ao que é
                mostrado.</div>
              <div class="form-text text_defualt">* A cor escolhida não é a mesma adicionada a camisa. <span
                  data-bs-toggle="modal" data-bs-target="#saibaMais" class="link_text">Saiba mais <i
                    class="bi bi-info-circle"></i></span></div>
            </div>

          </div>

        </div>


        <div class="border_line ms-4"></div>

        <div class="row g-3 justify-content-center align-items-center mb-4">
          <div class="col-auto">
            <label for="inputQuantity" class="col-form-label text_defualt ">Quantidade</label>
          </div>
          <div class="col-auto">
            <input type="number" id="inputQuantity" class="shadow-none input_form inputFormDefault quantityShirt"
              min="1" value="1">
          </div>
          <div class="form-text text-center mt-4">Para editar quantas camisas serão customizadas clique <a
              class="link_text" href="#formQuantCustomize" data-bs-toggle="collapse" role="button" aria-expanded="false"
              aria-controls="formQuantCustomize">aqui</a></div>

          <div class="collapse formQuant" id="formQuantCustomize">
            <div class="card card-body cardQuantCustomize">
              <div class="form-check">
                <input class="form-check-input select_radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                  checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Adicionar a customização em todas as camisas
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input select_radio" type="radio" name="flexRadioDefault"
                  id="flexRadioDefault2">
                <label class="form-check-label d-flex flex-row" for="flexRadioDefault2">
                  <span>Adicionar a customização em apenas </span>
                  <input type="number" value="1" min="1" disabled
                    class="form-control shadow-none inputCustomizeOnly inputFormDefault">
                  <span> camisas</span>
                </label>
              </div>

            </div>

          </div>
        </div>

        <div class="fs-2 text-center fw-bold text_defualt">Total: R$<span class="valueEndShirt"></span></div>
        <input type="hidden" class="totalValueShirt">
        <div class="d-flex justify-content-center mt-5">
          <button type="button" class="btn button_default me-3 btnAreaCustomize fw-bold">Comprar </button>
          
          <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            class="btn button_gold shadow-none btnShoppingCart btnAreaCustomize fw-bold">Adicionar ao
            carrinho <i class="bi bi-cart-plus-fill"></i></button>
        </div>

        </form>
      </div>
    </div>



    <!-- =============================== RODAPÉ ==================================== -->
    <footer class="footer mt-5">

      <div class="pt-4 ms-3 d-flex flex-row justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img src="../assets/images/logo.png" alt="">
          <h3 class="fs-3 ms-1 color_orange fw-bold ms-2">FutPrime</h3>
        </div>

        <div class="icons_footer d-flex flex-row me-4">
          <a href="https://www.instagram.com/futprimebr/" data-bs-toggle="tooltip" data-bs-placement="bottom"
            title="Instagram" target="_blank"><i class='bx bxl-instagram fs-2 me-2'></i></a>
          <a href="https://www.facebook.com/futprimebr-101494751385035/" data-bs-toggle="tooltip"
            data-bs-placement="bottom" title="Facebook" target="_blank"><i class='bx bxl-facebook fs-2 me-2'></i></a>
          <a href="https://api.whatsapp.com/send?phone=5588997984033" target="_blank" data-bs-toggle="tooltip"
            data-bs-placement="bottom" title="Whatsapp"><i class='bx bxl-whatsapp fs-2 me-2'></i></a>
        </div>

      </div>


      <div class="container justify-content-center ">
        <div class="d-flex flex-wrap mt-5  justify-content-center ">

          <div class="">

            <nav class="menu_footer">
              <ul class="text-center">
                <li class="fw-bold color_orange fs-5">Camisas Brasileiras</li>
                <li><a href="" class="text-light">Flamengo</a></li>
                <li><a href="" class="text-light">Corinthias</a></li>
                <li><a href="" class="text-light">São Paulo</a></li>
                <li><a href="" class="text-light">Palmeiras</a></li>
                <li><a href="" class="text-light">Ceará</a></li>
                <li><a href="" class="text-light">Fortaleza</a></li>
              </ul>
            </nav>

          </div>


          <div class="">
            <nav class="menu_footer">
              <ul class="text-center">
                <li class="fw-bold color_orange fs-5">Camisas Europeias</li>
                <li><a href="" class="text-light">Barcelona</a></li>
                <li><a href="" class="text-light">Real Madrid</a></li>
                <li><a href="" class="text-light">Ajax</a></li>
                <li><a href="" class="text-light">Borussia</a></li>
                <li><a href="" class="text-light">City</a></li>
                <li><a href="" class="text-light">Liverpool</a></li>
              </ul>
            </nav>
          </div>


          <div class="">
            <nav class="menu_footer">
              <ul class="text-center">
                <li class="fw-bold color_orange fs-5">Camisas de Seleções</li>
                <li><a href="" class="text-light">Brasil</a></li>
                <li><a href="" class="text-light">França</a></li>
                <li><a href="" class="text-light">Alemanha</a></li>
                <li><a href="" class="text-light">Argentina</a></li>
                <li><a href="" class="text-light">Italia</a></li>
                <li><a href="" class="text-light">Espanha</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center text-light me-1">

        <div class="d-flex flex-column align-items-center mt-5">
          <h4 class="fw-bold">Formas de Pagamento</h4>
          <div class="d-flex align-items-center mt-2 forma_pagamento">
            <i class="bi bi-x-diamond-fill fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom"
              title="PIX"></i>
            <i class="bi bi-cash-coin fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom"
              title="Dinheiro"></i>
            <i class="bi bi-credit-card-2-back fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom"
              title="Cartão"></i>

          </div>
        </div>

      </div>

      <div class="text-light fs-6 ps-3 mt-5 fw-bold fst-italic">
        Gomess Produções - Todos os direitos reservados
      </div>
    </footer>

    <!-- ================================= JANELA MODAL SAIBA MAIS============================================= -->

    <div class="modal fade" id="saibaMais" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Mais Infomações</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            A cor que você escolhe na custamização não é a mesma que é aplicada a camisa. A cor é a mesma apresentada
            nas letras na frente da camisa a razão para adicionarmos a opção de cor é para facilitar na hora de ver
            quando adicionando o texto.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg_darkorange text-light" data-bs-dismiss="modal">Entendi</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ==================================== CARRINHO DE COMPRAS =================================== -->

    <div class="offcanvas offcanvas-end areaShoppingCart" tabindex="-1" id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h4 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel"><i class="bi bi-cart4"></i> Carrinho de Compras
         
        </h4>
        <button type="button" class="text-reset closeAreaShoppingCart" data-bs-dismiss="offcanvas" aria-label="Close"><i
            class="bi bi-x"></i></button>
      </div>
      <span data-bs-toggle="modal" data-bs-target="#leiaimportante" class="link_text">Leia Importante <i
        class="bi bi-info-circle"></i></span>
        <hr />
      <div class="offcanvas-body cart_body">
        <a href="" class="container_card_product">
     
          <div class=" d-flex">
            <div class="cart_img_product"><img
                src="../assets/images/camisas/257139328_126851229744515_2923407250030929456_n.webp.jpg" alt=""></div>
            <div class="cart_info_product">

              <div class="cart_name_product">Camisa do Paris San-German Branca</div>
              <div class="cart_price_product">Preço: 120,00</div>
              <a href="" class="link_text">Remover</a>
            </div>
          </div>
        </a>

        <hr />
      </div>
    </div>

    <!-- ================================= JANELA MODAL LEIA IMPORTANTE============================================= -->

    <div class="modal fade" id="leiaimportante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Leia Importante</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Parece que você não está logado, por isso, os produtos no carrinho podem ficar desatualizados ou
            serem perdidos caso algo acontaça com o seu computador. Aconselhamos que você faço login clicando 
            <a href="" class="link_text">aqui</a> e caso não tenha uma conta clique <a href="" class="link_text">aqui</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg_darkorange text-light" data-bs-dismiss="modal">Entendi</button>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/shopping_cart.js"></script>
    <script src="../assets/js/settingsShirt.js"></script>
</body>

</html>