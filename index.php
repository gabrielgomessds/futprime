<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutPrime - Seja único, seja prime</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    
<div class="estrelas">
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
              <img src="assets/images/logo.png" alt="" width="50" height="54" class="d-inline-block align-text-top">
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
  <!-- ============================ BARRA DE BUSCA ==================================== -->
  <div class="fixed-top">
      <nav class="navbar bar_fixed navbar-expand-lg content_bar">
        <div class="row w-100 align-items-center">
    
    
          <div class=" d-flex justify-content-center align-items-center">
            <div class="input-group container">
              <input type="text" class="form-control p-2" id="basic-url" placeholder="Qual camisa você está buscando?" aria-describedby="basic-addon3">
              <span class="input-group-text bg_darkorange border-0 input-search" id="basic-addon3" title="Buscar"><i class='bx bx-search text-light fs-4'></i></span>
            </div>
    
            <div>
              <span><i class="bi bi-list icon_menu"></i></span>
            </div>
        </div>
        </div>
    
      </nav>

  </div>
  

  <!-- ============================ MENU =============================================== -->
 <nav class="menu_home">
  <ul class="nav nav-pills justify-content-center p-3 list_menu">
    <li class="nav-item  ">
      <a class="nav-link active item_mobile" href="#"><i class='bx bx-home'></i> <span>Home</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link item_mobile" href="#cards-shirts"><i class='bx bxs-t-shirt' ></i> <span>Camisas</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link item_mobile" href="pages/registerClient.html"><i class='bx bxs-user-circle' ></i> <span>Cadastro</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link item_mobile" href="#form-contact"><i class='bx bxs-envelope' ></i> <span>Contato</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link item_mobile"  href="pages/login.html"><i class='bx bx-user' ></i> <span>Login</span></a>
    </li>
    
  </ul>
 </nav>

 <!-- ============================= MENU RESPONSIVO ===================================== -->
      <nav class="menu_mobile">
        <ul class="nav flex-column  ">
          <span class="ms-1"><i class="bi bi-x close_menuMobile"></i> </span>
          <li class="nav-item  ">
            <a class="nav-link item_mobile" href="#"><i class='bx bx-home'></i> <span>Home</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link item_mobile" href="#cards-shirts"><i class='bx bxs-t-shirt' ></i> <span>Camisas</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link item_mobile" href="pages/registerClient.html"><i class='bx bxs-user-circle' ></i> <span>Cadastro</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link item_mobile" href="#form-contact"><i class='bx bxs-envelope' ></i> <span>Contato</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link item_mobile" href="pages/login.html"><i class='bx bx-user' ></i> <span>Login</span></a>
          </li>
        </ul>
      </nav>
        
  <!-- ============================ SLIDE SHOW ========================================== -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner p-4 pb-5 pt-5">
      
      <div class="carousel-item active">
        <div class="row align-items-center justify-content-center content_slide">
          <div class="col-5">
            <p class="text-center text-slide text_slide_first fw-bold" >As melhores camisas do seu time em um só lugar</p>
          </div>
          <div class="col-4">
            <img src="assets/images/camisas/camisa_paris.png" class="img-fluid img-slide " alt="Camisa do Barcelona">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row align-items-center justify-content-center content_slide">
          <div class="col-7">
            <p class="text-center text-slide fw-bold ">Vista a camisa do craque do seu time</p>
          </div>
          <div class="col-4">
            <img src="assets/images/camisas/2.png" class="img-fluid img-slide " alt="Camisa do Barcelona">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row align-items-center justify-content-center content_slide">
          <div class="col-7">
            <p class="text-center text-slide fw-bold">Os maiores lançamentos do seu time estão aqui</p>
          </div>
          <div class="col-4">
            <img src="assets/images/camisas/3.png" class="img-fluid img-slide" alt="Camisa do Barcelona">
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="color-orange icon-slide " aria-hidden="true"><i class='bx bx-chevron-left'></i></span>
      <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="color-orange icon-slide" aria-hidden="true"><i class='bx bx-chevron-right' ></i></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- =============================== ÁREA DOS CARDS ==================================== -->
  <div class="cards_area mt-4 " id="cards-shirts">

    <div class="d-flex flex-column align-items-center justify-content-center">
      <div class="line"></div>
      <p class="text-center fs-2 fw-bold color_orange">As melhores camisas</p>
    </div>
   
    <div class="d-flex flex-wrap justify-content-center align-items-center">

      <div class="card_product p-3 border-2 me-4 mb-3 card_content" >
        <div class="promotion">
            <span class="content_promotion d-none">-5%</span>
        </div>
        <img src="assets/images/camisas/camisa-milan.png" class="card_img" alt="Camisa do Milan">
        <div class="card-body">
          <p class="card-text card_info">Camisa do Milan</p>

          <div class="card_price d-flex flex-column">
              <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
              <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
          </div>
          
          <div class="d-grid gap-2">
            <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
          </div>
          
        </div>
        
    </div>
        
                 
    <div class="card_product p-3 border-2 me-4 mb-3 card_content" >
      <div class="promotion">
          <span class="content_promotion d-none">-5%</span>
      </div>
      <img src="assets/images/camisas/camisa_ajax.png" class="card_img" alt="Camisa do Ajax">
      <div class="card-body">
        <p class="card-text card_info">Camisa do Ajax Preta</p>
        <div class="card_price d-flex flex-column">
            <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
            <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
        </div>
        
        <div class="d-grid gap-2">
          <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
        </div>
        
      </div>
      
  </div>
      


  <div class="card_product p-3 border-2 me-4 mb-3 card_content" >
    <div class="promotion">
        <span class="content_promotion d-none">-5%</span>
    </div>
    <img src="assets/images/camisas/camisa_barcelona.jpg" class="card_img" alt="Camisa do Barcelona 2015">
    <div class="card-body">
      <p class="card-text card_info">Camisa do Barcelona 2015</p>
      <div class="card_price d-flex flex-column">
          <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
          <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
      </div>
      
      <div class="d-grid gap-2">
        <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
      </div>
      
    </div>
    
</div>
    


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_bayer.jpg" class="card_img" alt="Camisa do Bayer de Munique">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Bayer de Munique</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_borussia_preta.png" class="card_img" alt="Camisa do Borussia">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Borussia</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_chelse.png" class="card_img" alt="Camisa do Chelse">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Chelse</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_corinthias.png" class="card_img" alt="Camisa do Corinthias">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Corinthias</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_palmeiras.png" class="card_img" alt="Camisa do Palmeiras">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Palmeiras</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  


<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_sao_paulo.png" class="card_img" alt="Camisa do São Paulo">
  <div class="card-body">
    <p class="card-text card_info">Camisa do São Paulo</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  

<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_united.png" class="card_img" alt="Camisa do Manchester United">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Manchester United</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  

         
<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion d-none">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_paris.png" class="card_img" alt="Camisa do Paris">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Paris</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class="d-none"><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  

         
<div class="card_product p-3 border-2 me-4 mb-3 card_content" >
  <div class="promotion">
      <span class="content_promotion">-5%</span>
  </div>
  <img src="assets/images/camisas/camisa_flamengo.png" class="card_img" alt="...">
  <div class="card-body">
    <p class="card-text card_info">Camisa do Flamengo</p>
    <div class="card_price d-flex flex-column">
        <span class="card-text text-decoration-line-through text-muted fs-6 price_promotion"><p class=""><i class="bi bi-tags-fill"></i> R$ 170,00</p></span>
        <span class="card-text fs-5 fw-bold" ><i class="bi bi-tags-fill"></i> R$ 120,00</span>
    </div>
    
    <div class="d-grid gap-2">
      <button class="btn bg_darkorange fw-bold card_button">Ver mais </button>
    </div>
    
  </div>
  
</div>
  
         

        
    </div>
    

  </div>

  <!-- ============================= ÁREA DE CADASTRO DE E-MAIL ====================== -->
  <div class="container_email d-flex justify-content-center align-items-center">
    
      <div class="send_email">

        <div class="d-flex flex-column align-items-center">
          <i class='bx bx-mail-send icon_send'></i>
          <h2 class="text-center fw-bold" style="color: #f26100;">Receber novidades</h2>
          <p class="mb-4 fst-italic fw-bold" style="color: #f26100;">Receba informações de novos produtos, promoções e descontos no seu email</p>
        </div>

          <form action="" class="d-flex">
              <input type="text" class="input_send" placeholder="Digite seu email"><button class="button_send">Receber <i class='bx bx-paper-plane'></i></button>
          </form>

      </div>
      
    
  </div>

  <!-- ==================================== FORMULARIO DE CONTATO ============================= -->
  <div class="container mt-5" id="form-contact">
    <div class="d-flex flex-column justify-content-center align-items-center mb-4">
      <div class="line"></div>
      <p class="fs-2 color_orange fw-bold">Formulário para contato</p>
      <span class="fs-5 color_orange">Problemas, dúvidas ou sugestões? Nos envie uma mensagem e vamos conversar!</span>
    </div>
      
      <div class="d-flex justify-content-center align-items-center">

        <div class="img_contact">
          <img src="assets/images/illustrations/send_message.svg" alt="">
        </div>

        <div class="form_contact">
          <form action="" >
    
            <div class="mb-3 input_comment">
              <label for="formGroupExampleInput" class="form-label label_form">Digite seu nome:</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome completo">
            </div>
      
            <div class="mb-3 input_comment">
              <label for="formGroupExampleInput2" class="form-label label_form">Digite seu email: </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="exemplo@exemplo.com">
            </div>
      
            <div class="mb-3 input_comment">
              <label for="formGroupExampleInput2" class="form-label label_form">Digite seu telefone (Whatsapp): </label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(00) 0 0000-0000">
            </div>
      
            <div class="mb-3 input_comment">
              <label for="formGroupExampleInput2" class="form-label label_form">Digite sua mensagem: </label>
              <textarea  class="form-control" style="resize:none;height:200px;" placeholder="Digite sua mensagem"></textarea>
            </div>

            
            <button type="button" class="btn bg_darkorange text-light text-uppercase" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Enviar Mensagem</button>
          </form>
        </div>

      </div>
      
    </div>
    
 


  <!-- =============================== RODAPÉ ==================================== -->
  <footer class="footer mt-5" >

    <div class="pt-4 ms-3 d-flex flex-row justify-content-between align-items-center">
          <div class="d-flex align-items-center">
              <img src="assets/images/logo.png" alt="">
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


  <!-- ================================= JANELAS MODAIS ====================================== -->

  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class='bx bx-user' ></i> Fazer Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Digite seu email: </label>
                  <input type="email" class="form-control" placeholder="Digite seu email: exemplo@email.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Digite sua senha: </label>
                  <input type="password" class="form-control" placeholder="Digite sua senha" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn bg_darkorange text-light">Login</button>
              </form>
        </div>
        
      </div>
    </div>
  </div>

  <script src="assets/bootstrap/js/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>