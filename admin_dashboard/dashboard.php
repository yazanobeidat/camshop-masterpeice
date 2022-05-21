<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="dashboard.css">k
  <title>Document</title>
</head>
<body>
  <!--Main Navigation-->
  <header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                  <a href="user_dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>User dashboard</span>
                  </a>
                  <a href="product_dashboard.php" class="list-group-item list-group-item-action py-2 ripple ">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>product dashboard</span>
                  </a>
                  <a href="category_dashboard.php" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Catagory dashboard</span></a>
                  
                </div>
              </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                  <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="25" alt="MDB Logo"
                    loading="lazy" />
                </a>
              
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
              

                  <!-- Icon -->
                  <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                      <i class="fas fa-fill-drip"></i>
                    </a>
                  </li>
                  <!-- Icon -->
                  <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                      <i class="fab fa-github"></i>
                    </a>
                  </li>

                

                  <!-- Avatar -->
                 
                    <a class="nav-link  hidden-arrow d-flex align-items-center" href="#"
                      id="navbarDropdownMenuLink" role="button"  aria-expanded="false">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                        height="22" alt="Avatar" loading="lazy" />
                    </a>
                  
               
              </div>
              <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
          </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4"></div>
          </main>
          <!--Main layout-->
  
  <br>
</body>
</html>