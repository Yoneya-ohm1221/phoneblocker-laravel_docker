<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href= "image/logo.png" />
    <title>PHONEBLOCKER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
    <!-- สร้างเมนู -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
   
            <a href="" class="navbar-brand">PHONEBLOCKER</a>
            <img src="image/logo.png" width="50" height="50"  alt="center" >
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar1" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                                      
                        
                        <a href="login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                    <a href="register" class="nav-link">register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">เกี่ยวกับเรา</a>
                        <div class="container">
  <!--
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">ติดต่องาน</a>
                    </li>
-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- การสร้าง Slider 
    <section id="slider">
         <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
             <ol class="carousel-indicators">
                 <button data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="1"></button>
                 <button data-bs-target="#mySlider" data-bs-slide-to="2"></button>
             </ol>
             <div class="carousel-inner">
                 <div class="carousel-item carousel-image-1 active">
                     <div class="container">
                         <div class="carousel-caption d-none d-sm-block">
                             <h1 class="display-3">พระอาทิตย์ตกดิน</h1>
                             <p>test1</p>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item carousel-image-2 ">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block">
                            <h1 class="display-3">ดอกทานตะวัน</h1>
                            <p>test2</p>
                        </div>
                    </div>
                 </div>
                
                 <button class="carousel-control-prev" data-bs-target="#mySlider" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                 </button>
                 <button class="carousel-control-next" data-bs-target="#mySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
             </div>
         </div>
    </section>
-->
    <!-- Service Section -->
    <br>
    <br><br>
    <br><br>
    
    <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-4">

                
                <img src="image/blocked.png" width= "80" height="100" class="img-fluid">
                    <!--<i class="fas fa-user-tie fa-3x mb-2"></i>-->
                    <h2>บล็อกเบอร์</h2>
                    <p>สามารถบล็อกเบอร์โทรศัพท์และกดรายงานได้</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1688/1688988.png" width= 80 height=100 class="img-fluid">

                    <h2>ฐานข้อมูลหมายเลข</h2>
                    <p>สามารถอัปเดทข้อมูลหมายเลขได้ด้วยตนเอง</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                <img src="image/sign.png" width= "80" height="100" class="img-fluid">
                    <h2>บล็อกข้อความ</h2>
                    <p>สามารถบล็อกข้อความได้</p>
                </div>
            </div>
        </div>
    </section>
   


    <!-- gallary -->
    <section id="gallary" class="p-5">
        <div class="container">
            
            <h1 class="text-center">ผลงานของเรา</h1>
            <p class="text-center">ภาพประกอบ</p>
            <br><br>
            <!-- Image -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://img.lovepik.com/photo/50062/6892.jpg_wh860.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/01/27/07/19/book-5953965__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/10/13/20/wren-6002068__340.jpg" class="img-fluid">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/02/21/20/sea-5975484__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/08/15/02/mountains-5995081__340.jpg" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2021/02/07/19/57/gazelle-5992510__340.jpg" class="img-fluid">
                </div>
            </div>
           
        </div>

 <!-- about -->


 <section id="about" class="p-5">
        <div class="dark-overlay">
            <div class="row">
                <div class="col">
                    <div class="container text-center pt-5">
                        <h1>เกี่ยวกับเรา</h1>
                        <p>บล็อกเบอร์โทรและข้อความ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>
    <!-- Footer -->
    <footer class="text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; Comsci Rmutto 2021</p>
                </div>
            </div>
        </div>
    </footer>

  
            </div>
        </div>
    </div>
</body>
</html>