</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Miresevjen : Mik/e"; 
         } 
          else
          { 
              echo "Miresevjen : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> artikuj
          </a>
        </div>
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Rregjistrohu</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">Llogaria Ime</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Kyçu</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Dil</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="images/logo1.png" alt="Special Card" width="150" height="10">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="../shop.php">
                Filloni blerjet
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../about.php">
                Rreth Nesh
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="#">
                Llogaria Ime
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Rregullime</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Lista e Dëshirave</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Porositë e mia</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Shiko Kartën</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Modifiko Llogarinë</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ndrysho Fjalëkalimin</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Pikët</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Fshi Llogarinë</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>