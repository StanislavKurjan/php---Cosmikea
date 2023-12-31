<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        body{
            margin-top: 8rem;
            background-color: #8D482D;
            font-family: 'Poiret One', sans-serif;
            font-size: 1.3rem;
            font-weight: bolder;
            color: rgb(58, 58, 56);
        }

        .navMargins{
            margin-left: 3rem;
            margin-right: 3rem;
           
        }

        .footerPadding{
          padding-left: 4rem;
          padding-right: 4rem;
        }

        .companyLogo {
          
          font-family: 'Righteous', sans-serif;
          font-size: 2.5rem;
          color: rgb(58, 58, 56);
          
        }

        .dropMenuStyle {
            font-family: 'Poiret One', sans-serif;
            font-size: 1.3rem;
            font-weight: bolder;
            color: rgb(58, 58, 56);
        }

        .backGroundPic {
          height: 680px;
          background-image: url("Images/Interior_6.png") ;
          background-position-y: 45%;
          background-size: cover;
          border-radius: 2rem;
          
        }

        .inTextColor{
          color: rgb(95, 95, 95);
        } 

        .cardMargins {
          margin: 0rem 0.4rem 5rem 0.4rem;
          
        }
        

        .cardBorders{
          border-radius: 2rem;
        }

        .lightText{
          color: #efefef;
        }

        .buttonWidth{
          width: 100px;
        }

        @media only screen and (max-width: 768px) {
        .buttonWidth {
          width: 70px;
        }
        }

        .loginUser{
          font-family: 'Poiret One', sans-serif;
          font-size: 1.3rem;
          font-weight: bolder;
          color: rgb(58, 58, 56);
          margin-top: 0.45rem;
          margin-right: 1rem;
        }

        .logoutButton{
          margin-top: 0.35rem;
          height: 2.3rem;
          padding-left: 0.75rem;
          padding-right: 0.75rem;
        }

        

    </style>

</head>
<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <div class="container-fluid navMargins">
            <a class="navbar-brand companyLogo" href="./cosm_main.php">Cosmikea</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./cosm_main.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./cosm_delivery.php">Delivery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu dropMenuStyle">
                      <li><a class="dropdown-item " id="ddownAll" href="./cosm_allproducts.php" >All</a></li>
                      <li><a class="dropdown-item " id="ddownChairs" href="./cosm_pChairs.php" >Chairs</a></li>
                      <li><a class="dropdown-item " id="ddownSofas"  href="./cosm_pSofas.php" >Sofas</a></li>
                      <li><a class="dropdown-item " id="ddownTables" href="./cosm_pTables.php" >Tables</a></li>
                      <li><a class="dropdown-item " id="ddownLamps"  href="./cosm_pLamps.php" >Lamps</a></li>
                    </ul>
                </li>
              </ul>
              <form class="d-flex" action="dtb_logout.php" method="post" >
                <div class="loginUser">
                  Hello, <?php
                  echo $_SESSION["OnlyName"];?>
                </div>
                <button class="btn btn-outline-secondary logoutButton" type="submit">Log out</button>
              </form>
            </div>
          </div>
        </nav>
      </header>

      <div class="container">


       <!-- Vel paris teikumu -->

       <div class="px-4 py-5 mt-1 text-center">
        
        <h1 class="display-5 fw-bold lightText">Here you will find everything and more</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4 lightText" >Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class=" btn-group mb-3 " role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check " name="btnRadio" id="btnAll" autocomplete="off" onchange="productSeparator()" >
            <label class="btn btn-outline-light buttonWidth" for="btnAll">All</label>
          
            <input type="radio" class="btn-check " name="btnRadio" id="btnChairs" autocomplete="off" onchange="productSeparator()" >
            <label class="btn btn-outline-light buttonWidth" for="btnChairs">Chairs</label>
          
            <input type="radio" class="btn-check " name="btnRadio" id="btnSofas" autocomplete="off" onchange="productSeparator()" checked>
            <label class="btn btn-outline-light buttonWidth" for="btnSofas">Sofas</label>

            <input type="radio" class="btn-check " name="btnRadio" id="btnTables" autocomplete="off" onchange="productSeparator()" >
            <label class="btn btn-outline-light buttonWidth" for="btnTables">Tables</label>

            <input type="radio" class="btn-check " name="btnRadio" id="btnLamps" autocomplete="off" onchange="productSeparator()" >
            <label class="btn btn-outline-light buttonWidth" for="btnLamps">Lamps</label>
          </div>

        </div>
      </div>

       <!-- Kartites ar mebelem -->

       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 cardMargins allCards">
        <div class="col allFurniture onlyChairs d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Chair_1.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyChairs d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Chair_2.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyChairs d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Chair_3.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col allFurniture onlySofas">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Sofa_1.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlySofas">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Sofa_2.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlySofas">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Sofa_3.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
      
        <div class="col allFurniture onlyTables d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Table_1.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyTables d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Table_2.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyTables d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Table_3.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col allFurniture onlyLamps d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Lamp_1.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyLamps d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Lamp_2.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col allFurniture onlyLamps d-none">
          <div class="card shadow-sm cardBorders">
            <img class="bd-placeholder-img card-img-top cardBorders" src="./Shop_items/Lamp_3.png" alt="Placeholder: Thumbnail" width="100%" >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">1275 eur</small>
              </div>
            </div>
          </div>
        </div>
      </div>




    </div>


      
      
      <!-- Footer -->

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-4  mt-5 bg-light footerPadding">
          <div class="col-md-4 d-flex align-items-center ">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Cosmikea, Riga, Latvia.</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="grey" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            <use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="grey" class="bi bi-twitter-x" viewBox="0 0 16 16">
              <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
              <use xlink:href="#twitterx"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="grey" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            <use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
<script src="productsScript.js"></script>     
</body>
</html>