<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
        
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!--<title>Responsive Navigation Menu Bar</title>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="/">AhlinyaDokter</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="/">AhlinyaDokter</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links"  style="margin:auto;">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{url('myservice')}}">Services</a></li>
                    <li><a href="{{url('mydoctor')}}">Doctor</a></li>
                    <li><a href="{{url('myabout')}}">About</a></li>
                    <li><a href="{{url('mycontact')}}">contact</a></li>
                </ul>
            </div>

            @if(Route::has('login'))

           
            @auth

            <ul class="nav-item"><a href="{{url('myappointment')}}" style=" background-color:#a0ecdb; color:#fff; padding: 3px; 
            border: 1px solid #a0ecdb; ">Appointment</a></ul>


            <x-app-layout>
            </x-app-layout>


            @else

        <div class="login">
          <ul class="nav-linkss" style="margin:auto;">
            <li class="loginn"><a href="{{route('login')}}">login</a></li>
            <li class="loginn"><a href="{{route('register')}}">register</a></li>
        </ul>
        </div>

        @endauth

        @endif
            

            </div>
        </div>
    </nav>

  
  

  
    <h1 class="heading" align="center" style="margin-top:30px; font-size: 50px;  
    box-shadow: 0 10px 10px  #a0ecdb; text-shadow:0 3px 5px  #111;" >About Us</h1>
    
        <section class="about" id="about" style="margin-top:30px;">
       
            <img src="../assets/image/Screenshot (25).png " alt="">
            <div class="isi">
                <h2>we take care of your healthy</h2>
                <p>
                AhlinyaDokter was established to provide immediate care for people who are injured or sick. We feel that immediate medical care should have a no-wait policy; anyone who walks in should be seen right away. There will be rapid diagnostic tests and imaging and treatment on the spot. Observation is provided for those who need to be observed until they feel better and can go home. Those not healthy enough to go home will be transported
                 to the appropriate facility for further treatment.We are dedicated to providing you with prompt quality service and timely diagnoses . Our staff will work hard to get you back on the road to recovery as soon as possible.</p>
                    
                  <p>We will always put safety first and we will fight as hard as we can to heal all patients so that everyone feels happy</p>
            </div>
        </section>
    
        <section class="about" id="about">
            <div class="isi">
                <h2>we take care of your healthy</h2>
                <p>
                hope that we want everyone to feel happy,we will always work hard for everyone's happiness.so we will make all our patients healthy as much as possible because if we are healthy we can be happy 
                we will always prioritize patients.we want from creating this website so that everyone is faster to get help from the hospital</p>
                    
                    <p>we will provide health services plenary to everyone's community and as a place of referral for all health services in the world supported by professional Human Resources by specialist doctors / experts.</p>
                  
              </div>
        </section>
      
      
   

    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>AhlinyaDokter Is an Online-based hospital that will provide plenary health services to everyone's community and as a referral place for all health services in the world supported by professional human resources by specialist doctors / experts.</p>      </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Garut ,JL.Cimanuk</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+62-8977711854</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">AhlinyaDokterAgmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <ul class="icons">
              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fa fa-whatsapp"></span></a></li>
           </ul>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
        </center>
      </div>
    </footer>

   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
   <!-- Initialize Swiper -->
   <script src="../assets/java/script.js"> </script>
 
   

</body>
</html>
