@extends('layouts.app')

@section('content')
@include('landing.header')
<div>
<div class="relative z-20" >
    <img 
        src="https://www.cablefax.com/wp-content/uploads/2014/06/shutterstock_176995772.jpg" 
        alt="" 
        class="absolute inset-0 object-cover object-bottom w-full h-full brightness-50"> 
    />
    <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-sky-900/100" ></div>
    <div class="grid grid-cols-12 gap-6 h-[35rem] ">
        <div class="flex flex-col items-center justify-center h-full col-span-12 px-5 sm:col-span-12 md:col-span-12 lg:col-span-12 xxl:col-span-12 md:px-20" 
            >
            <div class="relative text-center">
                <h1 class="text-4xl text-white uppercase myfont md:text-6xl">
                    About Us
                </h1>
            </div>
        </div>
    </div>
</div>
<x-general.grid mobile="1" gap="0" sm="1" md="2" lg="2" xl="2" class="container py-20 mx-auto">

    <div class="px-4 py-6">
        <p class="mb-4 text-2xl font-bold">
            CSC YOUR IT SOLUTION PROVIDER
        </p>
        <p class="text-xl font-normal">
            CSC was incorporated on May 1999 as a software, software development, research center, systems integration and IT consultancy company.<br><br>

            CSC was founded and managed by individuals experienced in finance/banking and information technology, IT consultancy, client server system development and corporate management.<br><br>

            A fully Malaysian / Bumiputra-owned company; the company was started with a handful of IT/technical staff knowledgeable in system management with financial and banking businesses.<br><br>

            CSC helps organizations maximizing value from investments in information technology by supplying consultancy, software and systems integration to the highest professional standard.<br><br>
        </p>
    </div>
    <div class="hidden md:block">
        <div  class="flex items-center justify-center h-full py-6">
            <img src="{{asset('csc/csc.png')}}" alt="" class="w-auto h-64">
        </div>
    </div>
</x-general.grid>
@include('landing.footer-section') 
@endsection