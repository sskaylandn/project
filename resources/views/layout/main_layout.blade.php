<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Dinas Komunikasi dan Informasi Kabupaten Kudus</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <link rel="stylesheet" href="/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/css/owl-carousel.css">

    <link rel="stylesheet" href="/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">
            <img src="/images/LogoKominfo.jpg" alt="" width="50" height="auto" class="d-inline-block align-text-middle">
            DISKOMINFO KAB.KUDUS
          </a>

          <div class="d-flex">
            <a href="" class="text-primary pt-2 pe-3">Alur Pengajuan</a>
            <a href="/login" class="btn btn-primary px-4" >Login</a>
          </div>
          
        </div>
    </nav>
    <!-- ***** Header Area End ***** -->

    @yield('main_content')

     <!-- ***** Footer Start ***** -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Dinas Komunikasi dan Informatika Kabupaten Kudus  

                        <br>Copyright © 2024.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/accordions.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/scrollreveal.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imgfix.min.js"></script> 
    <script src="/js/slick.js"></script> 
    <script src="/js/lightbox.js"></script> 
    <script src="/js/isotope.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Global Init -->
    <script src="/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>