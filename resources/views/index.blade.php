@extends('layouts.default')
@section('content')
@include('partials.navbar')
<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <h1 class="my-4 text-5xl font-bold leading-tight">
            Vous rêvez de faire de la plongée sous-marine ?
        </h1>
        <h6 class="leading-normal text-2xl mb-8">
            C'est possible avec divingAffluence ! Réservez en 2 clics !
        </h6>
        <a href="/reservation">
           <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-5 px-12 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Réservation
        </button>
        </a>
     
    </div>
    <!--Right Col-->
    <div class="w-full md:w-3/5 py-6 text-center">
        <img class="w-full md:w-4/5 z-50" src="{{ asset('time.png') }}" />
    </div>
    </div>
</div>
<div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
        <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
        ></path>
        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
        ></path>
        </g>
    </g>
    </svg>
</div>
<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Title
    </h1>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6">
        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Lorem ipsum dolor sit amet
        </h3>
        <p class="text-gray-600 mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            <br />
            <br />

            Images from:

            <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a>
        </p>
        </div>
        <div class="w-full sm:w-1/2 p-6">
        <img src="{{ asset('nike.jpg') }}" alt="">
        </div>
    </div>
    <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 p-6 mt-6">
        <img src="{{ asset('fish.jpg') }}" alt="">
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6">
        <div class="align-middle">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
            Lorem ipsum dolor sit amet
            </h3>
            <p class="text-gray-600 mb-8">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
            <br />
            <br />
            Images from:

            <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</section>
<section class="bg-white border-b ">
    <div style="width: 100%">
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Marina%20de%20Saint-Gilles,%20Avant-Port,%20Local%20n%C2%B05,%20Saint-Gilles%20les%20Bains%2097434,%20La%20R%C3%A9union+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div> 
</section>
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Avis client
    </h1>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
        <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('person.jpg') }}" alt="">
                </div>
                <p class="w-full text-center text-sm ">
                Une belle structure, de beaux bateaux, une bonne ambiance et une équipe de professionnels au top !
                Tout est réuni pour que la magie opère 👌<br>
                Un seul mot d ordre : PLAISIR !</p>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                £0
                <span class="text-base">for one user</span>
                </div>            
            </div>
        </div>
       
        <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('person.png') }}" alt="">
                </div>
                <p class="w-full text-center text-sm">Équipe dynamique et conviviale. Temps d'attente : 0 !!! Nous avons aimé le site de plongée proposé par l’établissement ce jour-là : tortues, raies, poissons par milliers, coraux... et en bonus, le petit café de bienvenue ! Merci à eux !
                </p>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-4xl font-bold text-center">
                £x.99
                    <span class="text-base">/ per user</span>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                <div class="flex items-center justify-center">
                <img src="{{ asset('person1.jpg') }}" alt="">

            </div>
            <p class="w-full text-center text-sm">Club de plongée très sympathique et sérieux ! Réservation sur le site au top ! Le patron très chaleureux et professionnel, les moniteurs super sympa et très pro également, très beaux sites d'exploration, je recommande vivement.</p>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                    £x.99
                    <span class="text-base">/ per user</span>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
        <g class="wave" fill="#f8fafc">
        <path
            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
        ></path>
        </g>
        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
        <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
        </g>
        </g>
    </g>
    </g>
</svg>

<section id="horaire" class="container mx-auto text-center py-6 mb-12">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Horaires
    </h1>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <table class="w-full my-2  leading-tight text-center text-black">
        <thead>
            <tr>
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
                <th scope="col">Samedi</th>
                <th scope="col">Dimanche</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">9h - 18h</th>
                <td scope="row">9h - 18h</th>
                <td scope="row">9h - 18h</th>
                <td scope="row">9h - 18h</th>
                <td scope="row">9h - 18h</th>
                <td scope="row">Fermé</td>
                <td scope="row">Fermé</td>
            </tr>
        </tbody>
    </table>
</section>

<style>
p{
    padding : 20px;
}
    tbody{
    border-color: black !important;
    border-top : 1px solid black;
}
</style>
@endsection
