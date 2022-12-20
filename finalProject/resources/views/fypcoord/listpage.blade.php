@extends('layout')
@section('content')

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="">Home</a></li>
                            <li class="scroll-to-section"><a href="createpage">Create Project</a></li>
                            <li class="scroll-to-section"><a href="listpage" class="active">Project List</a></li>

                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $x)
                    <tr>
                        <th scope="row">{{$x['project_id']}}</th>
                        <td>{{$x['title']}}</td>
                        <td>{{$x['category']}}</td>
                        <td>{{$x['student_id']}}</td>
                        <td>{{$x['supervisor_id']}}</td>
                        <td>{{$x['examineer1_id']}}</td>
                        <td>{{$x['examineer2_id']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span>
                {{$list->links()}}
            </span>
            <style>
                .w-5
                {
                    display:none
                }
            </style>
        </div>
    </section>
@endsection