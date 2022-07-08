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
            margin-left: 240px;
            margin-top: 0px;
        }

        p{
            color: black;

        }
    </style>

    <div class="content">
        <bold style="text-align: center; font-size: 45px;">Voor imkers</bold>
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

        <!-- link -->
        <a href="{{ route('cursusen')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">cursusen</i>
        </a>

        <a href="{{ route('imkervereniging')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">Imkervereneging</i>
        </a>
        <a href="{{ route('artikelen')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">Artikelen</i>
        </a>
        <a href="{{ route('niewesachief')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">Niewes achief</i>
        </a>

        <a href="{{ route('voorimkers')}}" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <img src="{{ asset('img/dollbij.gif') }}" class="w-10 fad text-xs mr-2">voor imkers</i>
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



    <x-guest-layout>
        <section class="conbox">
            <article style class="row max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(240, 199, 86, 0.2);">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.7);">

                    </div>
                    <article class="col-6">
                        <h1 style="font-weight:bold; font-size: 3.3rem; margin-top: 0vh; margin-bottom: 0vh">Over imkershop
                        </h1>

                        <p style="color:black" >De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Kaag en Braassem. De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.<br><br>
                        </p>
                    </article>
                    <style>
                        .pic1{float: right;
                            border-radius: 4px;
                            padding: 5px;
                            width: 150px;

                        }
                    </style>
                    <article class="col-6">
                        <div class="pic1" style="width: 25rem;">
                            <img src="img/debij.jpg" alt="Basiscursus 2013" width="450" height="450"
                                 style="border-radius: 1vh;">
                            <div class="card-body">
                                <p class="card-text text-center" style="color: grey">Basiscursus 2021</p>
                            </div>
                        </div>



                    </article>
                    <article>
                        <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                            Voor imkerbenodigdheden</h1>
                        <p >Voor imkerbenodigdheden in de regio Zuid-Holland bestaat Het “Bijenhuis”-depot van de Imkersvereniging Leiden e.o. </p>



                        <p style = "color: darkblue;"><a href="https://www.imkervereniging-oegstgeest.nl/wp-content/uploads/2019/02/Flyer_depot_v3.pdf">bijlage</a></p>



                        <p><br></p>
                    </article><br><br>

                    <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                        bijenzwerm/hommelnest?</h1><br>
                    <p style="color:black;">
                        Ziet u een bijenzwerm of hommelnest in de omgeving, of wilt u graag weten wat de verschillen zijn? Lees dan verder wat u kunt doen.
                    </p>
                    <a style="color:darkblue;" href="https://www.imkervereniging-oegstgeest.nl/bijenzwerm-hommelnest/">Lees dan verder</a>
                    <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                        bijenzwerm/hommelnest?</h1><br>
                    <p>Wat is een bijenzwerm en waarom gaan de bijen zwermen?<br>
                        In de maanden mei en juni en soms ook nog wel in juli vermeerderen bijenvolken zich. Zij doen dit door een zogenaamde zwerm te vormen. Een flink deel van het volk, enkele duizenden bijen, gaat er vandoor met de koningin in hun midden. Ze gaan op zoek naar een nieuw onderkomen.<br>
                        Voordat ze dit hebben gevonden maakt de zwerm een tussenstop. Ze vormen een klont bijen aan een boomtak, een hekje of een dakrand. Daar blijven ze een paar uur tot soms een paar dagen hangen. In de tussentijd gaan verkenners op zoek naar een nieuw ‘huis’.<br>
                        Hoewel een bijenzwerm er dreigend uit kan zien, is ze niet gevaarlijk. Bijen zijn er niet op uit om u te steken. Ze zijn alleen op doorreis en hebben niets te verdedigen tenzij ze aangevallen worden.<br>
                        Neem afstand tot een zwerm en laat het geheel met rust. Ziet u een bijenzwerm in Oegstgeest of de directe omgeving dan kunt u via <a style = "color:darkblue;" href="mailto:zwerm@imkervereniging-oegstgeest.nl">zwerm@imkervereniging-oegstgeest.nl</a> direct contact zoeken of stuur een foto en het adres via WhatsApp naar: <a style = "color:darkblue;" href="https://wa.link/62lwyh">06-52024488</a>. Zij kunnen met u een afspraak maken om de bijenzwerm op te halen.</p>
                    <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                        bijenzwerm/hommelnest?</h1><br>
                    <p>Hommels worden nog wel eens verward met wespen en bijen. Mensen zijn daarom nog weleens bang dat ze aangevallen worden door de hommel, om die reden willen ze dan ook geen hommelnest in de tuin. Ook rondvliegende hommels worden nog weleens gedood, uit angst voor steken. Een hommelnest verwijderen is eigenlijk niet nodig. Een hommel is niet agressief en het nest bestaat uit maximaal 150 exemplaren. Hommels zijn altijd druk bezig met het verzamelen van stuifmeel en steken bijna niet. Alleen als er direct gevaar dreigt voor een hommel kan zij steken. Een hommelnest kan je het beste lekker laten zitten, tenzij het nest in de weg zit zoals bij een voordeur van een huis. Als er veel menselijke activiteit is in de vliegroute van de hommels op en neer naar hun nest dan kan het verstandig zijn het hommelnest te laten verplaatsen door een imker. Zit uw hommelnest in de weg dan kunt u contact opnemen met de Imkers van Imkervereniging Oegstgeest.</p>

                    <h1 class="" style="font-weight:bold; font-size: 2rem; margin-top: 3vh; margin-bottom: 1vh;">
                        Andere vliegende insecten die op bijen lijken</h1><br>

                    <p>Sommige insecten lijken op bijen, om ze te leren onderscheiden kunt u kijken op de pagina van het&nbsp; <a style = "color:darkblue;" href="http://www.bijenlandschap.nl/" target="_blank" rel="noopener">bijenlandschap</a>.</p>
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
