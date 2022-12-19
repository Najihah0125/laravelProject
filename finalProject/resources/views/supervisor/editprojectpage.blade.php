<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>FYP Management System</title>

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
                            <li class="scroll-to-section"><a href="redirect" >Home</a></li>
                    
                            <li class="scroll-to-section"><a href="listpage" class="active" >Project List</a></li>
                            
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


    <!-- ***** Update Project Form ***** -->
    <section class="section" id="reservation">
        <div class="container">
                    <div class="contact-form">
                        <form id="contact" action="/edit" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4><?php echo "Edit Project ".$x->project_id." Details"; ?></h4>
                            </div>
                            <div class="col-lg-12">
                                <input name="project_id" type="hidden" id="name" value="{{$x['project_id']}}" >
                                <input name="title" type="hidden" id="name" value="{{$x['title']}}" >
                                <input name="category" type="hidden" id="name" value="{{$x['category']}}" >
                                <input name="student_id" type="hidden" id="phone" value="{{$x['student_id']}}" >
                                <input name="supervisor_id" type="hidden" id="phone" value="{{$x['supervisor_id']}}" >
                                <input name="examineer1_id" type="hidden" id="phone" value="{{$x['examineer1_id']}}" >
                                <input name="examineer2_id" type="hidden" id="phone" value="{{$x['examineer2_id']}}" >
                                Start Date<b style="color:red;">*</b>  <input name="start_date" id="date" type="date" value="{{$x['start_date']}}" required>
                                End Date<b style="color:red;">*</b> <input name="end_date" id="date" type="date" value="{{$x['end_date']}}" required>
                                Duration<b style="color:red;">*</b> <input name="duration" id="date" type="number" value="{{$x['duration']}}" required>
                                Progress<b style="color:red;">*</b> 
                                <select value="progress" name="progress" id="time" required>
                                    <option value="">Choose progress of project</style></option>
                                    <option name="milestone1" id="Breakfast">Milestone 1</option>
                                    <option name="milestone2" id="Lunch">Milestone 2</option>
                                    <option name="finalreport" id="Lunch">Final Report</option>
                                </select>
                                Status<b style="color:red;">*</b> 
                                <select value="status" name="status" id="time" required>
                                    <option value="">Choose status of project</style></option>
                                    <option name="ontrack" id="Breakfast">On-Track</option>
                                    <option name="delayed" id="Lunch">Delayed</option>
                                    <option name="extended" id="Lunch">Extended</option>
                                    <option name="completed" id="Lunch">Completed</option>
                                </select>
                                
                                <br><br>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit</button>
                            </div>
                          </div>
                        </form>
                    </div>
        </div>
    </section>
    <!-- ***** Update Project Form ***** -->

    
    
    
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