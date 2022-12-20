@extends('layout')
@section('content')
    
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="redirect" >Home</a></li>
                            <li class="scroll-to-section"><a href="createpage" class="active">Create Project</a></li>
                            <li class="scroll-to-section"><a href="listpage" >Project List</a></li>
                            
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    
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
                                Student ID<b style="color:red;">*</b> <input name="student_id" type="text" id="phone" placeholder="Assign a student" required>
                                Supervisor ID<b style="color:red;">*</b> <input name="supervisor_id" type="text" id="phone" placeholder="Assign a supervisor" required>
                                Examiner 1 ID<b style="color:red;">*</b> <input name="examineer1_id" type="text" id="phone" placeholder="Assign first examineer" required>
                                Examiner 2 ID<b style="color:red;">*</b> <input name="examineer2_id" type="text" id="phone" placeholder="Assign second examineer" required>
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
@endsection