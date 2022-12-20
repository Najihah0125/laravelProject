@extends('layout')
@section('content')

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="redirect" >Home</a></li>
                    
                            <li class="scroll-to-section"><a href="listpage" class="active" >Project List</a></li>
                            
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


    <!-- ***** Update Project Form ***** -->
    <section class="section" id="reservation">
        <div class="container">
                    <div class="contact-form">
                        <form id="contact" action="/edit" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Edit Project Details</h4>
                            </div>
                            <div class="col-lg-12">
                                <input name="project_id" type="hidden" id="name" value="{{$x['project_id']}}" required>
                                Project Title<input name="title" type="text" id="name" value="{{$x['title']}}" readonly>
                                <input name="category" type="hidden" id="name" value="{{$x['category']}}" required>
                                <input name="student_id" type="hidden" id="phone" value="{{$x['student_id']}}" required>
                                <input name="supervisor_id" type="hidden" id="phone" value="{{$x['supervisor_id']}}" required>
                                <input name="examineer1_id" type="hidden" id="phone" value="{{$x['examineer1_id']}}" required>
                                <input name="examineer2_id" type="hidden" id="phone" value="{{$x['examineer2_id']}}" required>
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
@endsection    