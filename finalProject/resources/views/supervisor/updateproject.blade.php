<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
                            <li class="scroll-to-section"><a href="redirect">Home</a></li>
                            <li class="scroll-to-section"><a href="listpage" class="active">Project List</a></li>

                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li><a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                            <li>
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
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

    <!-- List of Project -->
    <section class="section" id="about">
        <div class="container">
            <div class="col-lg-12" id="about">
                <h4>List of FYP Project</h4>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Project ID</th>
                        <th scope="col">Project Title</th>
                        <th scope="col">Project Category</th>
                        <th scope="col">Student</th>
                        <th scope="col">Supervisor</th>
                        <th scope="col">Examiner 1</th>
                        <th scope="col">Examiner 2</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Duration (month)</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $x)
                    <tr>
                        
                        <th scope="row"><?php echo $x->project_id; ?></th>
                        <td><?php echo $x->title ?></td>
                        <td><?php echo $x->category; ?></td>
                        <td><?php echo $x->student_id; ?></td>
                        <td><?php echo $x->supervisor_id; ?></td>
                        <td><?php echo $x->examineer1_id; ?></td>
                        <td><?php echo $x->examineer2_id; ?></td>
                        <td><?php echo $x->start_date; ?></td>
                        <td><?php echo $x->end_date; ?></td>
                        <td><?php echo $x->duration; ?></td>
                        <td><?php echo $x->progress; ?></td>
                        <td><?php echo $x->status; ?></td>
                        
                        <td><a href = <?php echo "upd/".$x->project_id; ?>><b style="color:blue; text-decoration: underline;">Update</b></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </section>

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

        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
</body>

</html>