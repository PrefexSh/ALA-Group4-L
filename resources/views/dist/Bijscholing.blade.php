<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/fav.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>imkersshop</title>
</head>
<body class="bg-gray-100">




<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    <!-- logo -->
    <div class="flex-none w-56 flex flex-row items-center">

        <a href="{{ route('index')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/debeeexplo.png') }}" class="w-10 fad text-xs mr-2"><strong class="capitalize ml-1 flex-1">imkershop</strong> </i>

        </a>

        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fad fa-list-ul"></i>
        </button>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->
    <style>
        .content {
            color: black;
            float: right;
            margin-left: 450px;
            margin-top: -0px;
        }
    </style>

    <div class="content">
        <bold style="text-align: center; font-size: 45px;">Ververs cursus </bold>
    </div>
    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
        <!-- left -->
        <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">

        </div>
        <!-- end left -->

        <!-- right -->
        <div class="flex flex-row-reverse items-center">

            <!-- user -->
            <div class="dropdown relative md:static">

                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">login</h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>



                <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                    <hr>

                    <!-- item -->
                    <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="{{ route('login') }}">
                        <i class="fad fa-user-times text-xs mr-1"></i>
                        login
                    </a>
                    <!-- end item -->

                </div>
            </div>
            <!-- end user -->

            <!-- notifcation -->
            <div class="dropdown relative mr-5 md:static">



                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                    <!-- top -->
                    <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                        <h1>notifications</h1>
                        <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                            <strong>5</strong>
                        </div>
                    </div>
                    <hr>
                    <!-- end top -->

                    <!-- body -->


                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-birthday-cake text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">poll..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p style="color:black">4 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-user-circle text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">placeholder ..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>place holder</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-images text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">new imag..</h1>
                                <p class="text-xs text-gray-500">text here also</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>65 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                            <i class="fad fa-alarm-exclamation text-sm"></i>
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">place holder</h1>
                                <p class="text-xs text-gray-500">placeholder</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>lorum ipsom</p>
                            </div>
                        </div>

                    </a>
                    <!-- end item -->


                    <!-- end body -->

                    <!-- bottom -->
                    <hr>
                    <div class="px-4 py-2 mt-2">
                        <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                            view all
                        </a>
                    </div>
                    <!-- end bottom -->
                </div>
            </div>
            <!-- end notifcation -->

            <!-- messages -->
            <div class="dropdown relative mr-5 md:static">



                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                    <!-- top -->
                    <div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                        <h1>messages</h1>
                        <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                            <strong>3</strong>
                        </div>
                    </div>
                    <hr>
                    <!-- end top -->

                    <!-- body -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="img/user1.jpg" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">lorum ipsom said</h1>
                                <p class="text-xs text-gray-500">yeah i know</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>4 min ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="img/user2.jpg" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">sull goldmen</h1>
                                <p class="text-xs text-gray-500">for sure</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>1 day ago</p>
                            </div>
                        </div>

                    </a>
                    <hr>
                    <!-- end item -->

                    <!-- item -->
                    <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out" href="#">

                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                            <img class="w-full h-full object-cover" src="img/user3.jpg" alt="">
                        </div>

                        <div class="flex-1 flex flex-rowbg-green-100">
                            <div class="flex-1">
                                <h1 class="text-sm font-semibold">mick</h1>
                                <p class="text-xs text-gray-500">is typing ....</p>
                            </div>
                            <div class="text-right text-xs text-gray-500">
                                <p>31 feb</p>
                            </div>
                        </div>

                    </a>
                    <!-- end item -->


                    <!-- end body -->

                    <!-- bottom -->
                    <hr>
                    <div class="px-4 py-2 mt-2">
                        <a href="#" class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                            view all
                        </a>
                    </div>
                    <!-- end bottom -->
                </div>
            </div>
            <!-- end messages -->


        </div>
        <!-- end right -->
    </div>
    <!-- end navbar content -->

</div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


        <!-- sidebar content -->

        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Paginas</p>

        <!-- link  dit word op niew gedaan met een image in de content die dient als link-->

        <a href="{{ route('cursusen')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">cursusen</i>
        </a>

        <a href="{{ route('cursusen')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">basis cursusen</i>
        </a>

        <a href="{{ route('cursusen')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">cursus blog</i>
        </a>

        <a href="{{ route('bijscholing')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">Ververs cursus</i>
        </a>

        <a href="{{ route('contact')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">Contact</i>
        </a>
        </a>


    </div>
    <!-- end sidebar content -->
    <style>

        .conbox{

            margin-left: 300px;
            margin-top: -470px;




        }
    </style>


    <div class="conbox">
        <x-guest-layout>
            <section class="py-12">
                <article class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(240, 199, 86, 0.2);">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.7);">

                        </div>
                        <article class="col-6">
                            <h1 style="font-weight:bold; font-size: 3.5rem; margin-top: 4vh; margin-bottom: 4vh">Basiscursus
                                bijen houden</h1>

                            <p style="color:black" >Bent U van plan om beginent imker te worden?
                                and bent U bij Imkershop bij het goede aderes wij bieden cursusen aan van een basiscursus die U klaarstoomt
                                om begeginend imker te worden het vind plaats Oegstgeest geeft jaarlijks de basiscursus Imkeren.
                                De cursus bestaat uit 5 theorielessen en 10 praktijklessen.
                                Theorielessen worden in de avond gegeven van 19:30 tot 21:30 en beginnen in februari.
                                Praktijklessen zijn gepland op zaterdagmiddag tussen 13:00 tot 16:30 en beginnen in april. Omdat
                                praktijklessen afhankelijk zijn van het weer, kunnen geplande cursus middagen afwijken.
                                De cursus wordt afgesloten met een schriftelijk examen, waarna u een diploma krijgt.
                                Onderstaand is inbegrepen in het cursusgeld en wordt bij de eerste les uitgerekend:<br><br>


                            <ul style="list-style-type:disc;">
                                <li>Het lesboek</li>
                                <li>Het praktijkboek</li>
                            </ul>
                            <br>
                            basiscursus 2022
                            Tijdens het jaar waarin u de cursus volgt, krijgt u gratis het lidmaatschap van de NBV aangeboden en
                            ontvangt u maandelijks het blad Bijenhouden.
                            De cursuskosten bedragen € 200,- per deelnemer. Het maximum aantal deelnemers is 12 per cursus. Bij meer
                            aanmeldingen dan beschikbare plaatsen, geldt de volgorde van aanmelding, u wordt hier over
                            geïnformeerd.</p>
                        </article>
                        <style>
                            .pic1{float: right;
                                margin-top: 0px;
                                margin-right: 0px;
                                width: 25%;
                                height: 25%;

                            }


                            .pic2{

                                float: right;
                                margin-top: 400px;
                                margin-right: -500px;
                                width: 25%;
                                height: 25%;


                            }

                        </style>
                        <!--plaatjes reageren niet op input moet hersteld worden met netjes maken van coden -->
                        <article class="col-6">
                            <div class="pic1" style="width: 25rem;">
                                <img src="img/curses1.png" alt="Basiscursus 2013" width="500" height="600"
                                     style="border-radius: 1vh;">
                                <div class="card-body">
                                    <p class="card-text text-center" style="color: grey">Basiscursus 2021</p>
                                </div>
                            </div>

                            <div class="pic2" style="width: 25rem;">
                                <img src="img/curses2.png" alt="Basiscursus 2022" width="500" height="600"
                                     style="border-radius: 1vh;">
                                <div class="card-body">
                                    <p class="card-text text-center" style="color: grey">Ververs cursus 2021</p>
                                </div>
                            </div>
                        </article>
                        <article>
                            <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                                Inschrijven</h1>
                            <p style="color: black">N.B.V de cursus 2022 is vol geboekt.<br> Nieuwe aanmeldingen automatis geplaats op de wacht lijst
                                geplaatst.</p><br>
                            <p style="color:black">
                                zodra U zich heeft fingeschreven voor de cursus krijt U automatis <br> een bericht ter bevesteging
                                niet en heeft

                                Als U geen bericht heeft ont vangen neem dan contact op met onze support team
                                <a style="color: orange"
                                   href="https://www.topdesk.com/nl/features/incident-management-software/">support team</a>.<br><br>
                                Inschrijving cursus 2023
                            </p>
                        </article>
                        <form action="/action_page.php">
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control" id="achternaam" placeholder="achternaam"
                                       name="achternaam">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="e-mail" name="email">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control" id="postcode" placeholder="postcode" name="postcode">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control" id="adres" placeholder="adres" name="adres">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="text" class="form-control" id="woonplaats" placeholder="woonplaats"
                                       name="woonplaats">
                            </div>
                            <div class="mb-3 mt-3">
                                <input type="tel" class="form-control" id="tel" placeholder="031+" name="tel"
                                       pattern="[0-9]{2}-[0-9]{8}">
                            </div>
                            <div class="mb-3 mt-3">

                                <style>
                                    .btn {
                                        display: inline-block;
                                        text-align: center;
                                        text-decoration: none;
                                        vertical-align: middle;
                                        user-select: none;
                                        padding: 0.375rem 2rem;

                                        --btn-raise: 1rem;
                                        clip-path: polygon(var(--btn-raise) 0%, calc(100% - var(--btn-raise)) 0%, 100% 50%, calc(100% - var(--btn-raise)) 100%, var(--btn-raise) 100%, 0 50%);
                                        background-color: #fefd64;
                                        text-transform: uppercase;
                                    }
                                </style>

                                <textarea name="opmerkingen" placeholder="Opmerkingen" form="usrform">
                    </textarea>
                            </div>
                            <p style="color:black">Ik ben lid van het NBV</p>
                            <input type="radio" id="lid" name="lid" value="ja">
                            <label for="ja">Ja</label><br>
                            <input type="radio" id="lid" name="lid" value="nee">
                            <label for="nee">Nee</label><br>
                            <br>
                            <button type="submit" class="btn">Verzenden</button>
                        </form>
                        <p style="color:black"><br>
                            LET OP!De inschrijving is definitief a betaling kan het niet meer veranderen <br>
                            en kunt u uw geld niet meer terug vragen.<br><br>

                            mocht U veder nog vragen hebben stel ze gerust aan
                            ons <a style="color: darkblue"href="{{ route('contact')}}" >contact</a>
                            op.</p>
                    </div>
                </article>
            </section>

        </x-guest-layout>
    </div>
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">


        <!-- General Report -->



        <!-- card -->







    </div>
    <!-- end quick Info -->


</div>
<!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/scripts.js"></script>
<!-- end script -->

</body>
</html>
