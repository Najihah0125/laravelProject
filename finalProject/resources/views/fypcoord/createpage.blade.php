<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

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
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/FYP-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" >Home</a></li>
                            <li class="scroll-to-section"><a href="createpage" class="active">Create Project</a></li>
                            <li class="scroll-to-section"><a href="listpage" >Project List</a></li>
                            
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                                    <li>
                                        <x-app-layout>
                                        </x-app-layout>
                                    </li>
                                    @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </li>    
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Create Project Form ***** -->
    <section class="section" id="reservation">
        <div class="container">
                
                    <div class="contact-form">
                        <form id="contact" action="/addProject" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Create a FYP Project</h4>
                            </div>
                            <div class="col-lg-12">
                                Project ID<b style="color:red;">*</b> <input name="project_id" type="text" id="name" placeholder="Enter project ID" required>
                                Project Title<b style="color:red;">*</b> <input name="title" type="text" id="name" placeholder="Enter title of project" required>
                                Project Category<b style="color:red;">*</b> 
                                <select value="category" name="category" id="time">
                                    <option value="">Choose category of project</style></option>
                                    <option name="development" id="Breakfast">Development</option>
                                    <option name="research" id="Lunch">Research</option>
                                </select>
                                Student ID<b style="color:red;">*</b> <input name="student_id" type="text" id="phone" placeholder="Assign a student" required="">
                                Supervisor ID<b style="color:red;">*</b> <input name="supervisor_id" type="text" id="phone" placeholder="Assign a supervisor" required="">
                                Examiner 1 ID<b style="color:red;">*</b> <input name="examineer1_id" type="text" id="phone" placeholder="Assign first examineer" required="">
                                Examiner 2 ID<b style="color:red;">*</b> <input name="examineer2_id" type="text" id="phone" placeholder="Assign second examineer" required="">
                                Start Date <input name="start_date" id="date" type="date">
                                End Date<input name="end_date" id="date" type="date">
                                <input name="duration" id="date" type="hidden" value=4>
                                <input name="progress" id="date" type="hidden" value="Milestone 1">
                                <input name="status" id="date" type="hidden" value="On-Track">
                                
                                <br><br>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                            </div>
                          </div>
                        </form>
                    </div>
                
        </div>
    </section>
    <!-- ***** Create Project Form ***** -->

    
    
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
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