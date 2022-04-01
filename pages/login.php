<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutPrime - LOGIN</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
</head>
<body>
      <!-- ============================ CONTEUDO DO TOPO =======================================  -->
  <div class="container_top">

    <b class="bar_ad text-uppercase"><span><a href="#"><i class="bi bi-megaphone-fill"></i> FutPrime - Seja único, seja prime</a></span> </b>
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

      <div class="input-group input_search" >
        <input type="text" class="form-control p-2" id="basic-url" placeholder="Qual camisa você está buscando?" aria-describedby="basic-addon3">
        <span class="input-group-text bg_darkorange border-0 input-search" id="basic-addon3" title="Buscar"><i class='bx bx-search text-light fs-4'></i></span>
      </div>
 
  
  <div class=" fs-2 text-light icons_top d-flex" >
    <i class='bx bx-moon icon_top theme-button' title="Modo Noturno"></i>
    <i class='bx bx-user icon_top item_mobile' data-bs-toggle="modal" data-bs-target="#exampleModal" title="Fazer Login"></i>
    <span class="position-relative">
        <i class='bx bx-cart-alt icon_top' title="Carrinho de compras"></i>  
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
        <a class="nav-link item_mobile" href="../../index.html#cards-shirts"><i class='bx bxs-t-shirt' ></i> <span>Camisas</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link item_mobile" href="cadastroCliente.html"><i class='bx bxs-user-circle' ></i> <span>Cadastro</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link item_mobile" href="../../index.html#form-contact"><i class='bx bxs-envelope' ></i> <span>Contato</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active item_mobile" href="#"><i class='bx bx-user' ></i> <span>Login</span></a>
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
              <a class="nav-link item_mobile" href="../../index.html#cards-shirts"><i class='bx bxs-t-shirt' ></i> <span>Camisas</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link  item_mobile " href="cadastroCliente.html"><i class='bx bxs-user-circle' ></i> <span>Cadastro</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link item_mobile" href="../../index.html#form-contact"><i class='bx bxs-envelope' ></i> <span>Contato</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active item_mobile" href="#"><i class='bx bx-user' ></i> <span>Login</span></a>
            </li>
          </ul>
        </nav>

    <!-- ========================== FORMULARIO DE LOGIN =====================================  -->
    <div class="container p-4 mt-4 mb-4 rounded form_signup" style="width: 500px;">
        <form>
            <legend class="color_orange text-center fs-4 fw-bold"> LOGIN</legend>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label label_form fw-bold">Digite sua email: </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label label_form fw-bold">Digite sua senha: </label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn bg_darkorange text-light">LOGIN</button>
        </form>
    </div>
    
 

  <!-- =============================== RODAPÉ ==================================== -->
  <footer class="footer mt-5" >

    <div class="pt-4 ms-3 d-flex flex-row justify-content-between align-items-center">
          <div class="d-flex align-items-center">
              <img src="../assets/images/logo.png" alt="">
              <h3 class="fs-3 ms-1 color_orange fw-bold ms-2">FutPrime</h3>  
         </div>

         <div class="icons_footer d-flex flex-row me-4">
                <a href="https://www.instagram.com/futprimebr/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"  target="_blank"><i class='bx bxl-instagram fs-2 me-2'></i></a> 
                <a href="https://www.facebook.com/futprimebr-101494751385035/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook" target="_blank"><i class='bx bxl-facebook fs-2 me-2'></i></a>
                <a href="https://api.whatsapp.com/send?phone=5588997984033" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp"><i class='bx bxl-whatsapp fs-2 me-2'></i></a>
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
            <i class="bi bi-x-diamond-fill fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="PIX"></i>
            <i class="bi bi-cash-coin fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dinheiro"></i>
            <i class="bi bi-credit-card-2-back fs-4 me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cartão"></i>
            
          </div>
        </div>
       
    </div>

    <div class="text-light fs-6 ps-3 mt-5 fw-bold fst-italic">
      Gomess Produções - Todos os direitos reservados
    </div>
  </footer>

    
  <script src="../assets/bootstrap/js/popper.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/script.js"></script>
</body>
</html>