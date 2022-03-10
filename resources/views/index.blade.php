@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-metal text-3xl uppercase font-bold text-shadow-md pb-14">
                    There is a hope of Life to someone in your Blood Donation
                </h1>

                <a href="/donate" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold 
                text-xl uppercase rounded-xl">
                    Donate Now
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid grid-cols-2 gap-20 w-4/5 mx-auto py-15">
        <div>
             <img src="https://i.pinimg.com/564x/db/39/a6/db39a698fb893982935ecf918f0e5398.jpg" 
            width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-black">
                Our Mission:
            </h2>

            <p class="py-8 text-#E32E07 text-2xl pb-9">
                QCHBB aims to bridge blood donor’s precious offer to prolong other people’s life  
            </p>

            <p class="font-extrabold text-#E32E07 text-xl pb-12">
                "Your droplets of blood may create an ocean of happiness"
            </p>

            <a href="/donate" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Take Donor's Survey
            </a>
        </div>
    </div>

    <div class="text-center py-10">
        <h2 class="text-4xl font-bold">
            HOW TO REGISTER
        </h2>
    </div>
    <div class="sm:grid grid-cols-3 w-4/5 m-auto pb-10">
        <div class="flex bg-red-900 text-gray-100 pt-10 text-center rounded-3xl">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold py-10 ">
                    Register
                </span>
                <div class="text-base font-bold text-gray-50 py-10">
                    Fill out basic info and health assessment survey.
                </div>
            </div>
        </div>
        <div class="flex bg-red-300 text-black pt-10 text-center rounded-3xl">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold ">
                    Meet
                </span>
                <div class="text-base font-bold text-gray-800 py-10">
                    Go to assigned hospital where blood donation will take place.
                </div>
            </div>
        </div>
        <div class="flex bg-red-900 text-gray-100 pt-10 text-center rounded-3xl">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold ">
                    Relax
                </span>
                <div class="text-base font-bold text-gray-50 py-10">
                    Follow hospital personnal guide while blood transfer occurs.
                </div>
            </div>
        </div>
    </div>


    <div class="text-center p-15 bg-cool-gray-400 text-white">
        <h2 class=" font-extrabold text-4xl pb-5 text-l text-black">
            BENEFITS OF DONATING BLOOD
        </h2>

        <span class="font-bold block text-4xl py-2">
            1. Free health checkup and pathology test
        </span>
        <span class="font-bold block text-4xl py-2">
            2. Reduce the risk of heart and liver diseases
        </span>
        <span class="font-bold block text-4xl py-1 pb-12">
            3. Lower the risk of cancer
        </span>
        <!-- Link to source website -->
        <span class="bg-gray-600 bg-cover text-white text-s font-extrabold py-3 px-8 rounded-3xl">
            Find out more
        </span>
    </div>

    <div class="text-center py-10">
        <h2 class="text-4xl font-bold py-5">
            MILESTONES
        </h2>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto ">
        <div class="flex bg-red-900 text-gray-100 pt-10 text-center rounded-3xl">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold ">
                    total blood bags donated
                </span>
                
                <div class='flex items-center justify-center pt-10'>
                    <img src="https://cdn-icons.flaticon.com/png/512/1856/premium/1856789.png?token=exp=1641178013~hmac=535370595b9341edeeb0b078d46e5b6f" 
                    width="200" alt="">
                </div>
            </div>
        </div>
        <div class="flex bg-red-300 text-black pt-10 text-center rounded-3xl">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xl font-extrabold ">
                    total life saved
                </span>
                
                <div class='flex items-center justify-center pt-10'>
                    <img src="https://cdn-icons-png.flaticon.com/512/3595/3595788.png" 
                    width="200" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-10 ">
        <h2 class="text-3xl font-bold py-5 text-gray-500 ">
            And counting with our generous donors like you
        </h2>
    </div>
@endsection