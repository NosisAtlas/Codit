<head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<x-app-layout>
    <x-slot name="header">
        <div class="dash-header">
        <div class="avatar" >
            <img class="avatar" src="imgs/avatar1.jpeg" alt="">
        </div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome, ') }} {{ strtoupper($user->name) }} !
        </h2>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg wlcm-user max-w-40xl">
                <div class="avatar" >
                    <img class="avatar" src="imgs/avatar1.jpeg" alt="">
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ dd(); }} --}}
                    {{ __("Welcome, ") }} {{ strtoupper($user->name) }} !
                </div>
            </div>
        </div>
    </div>



<!-- The sidebar -->
<div class="sidebar bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>

    
    
</x-app-layout>
