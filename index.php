<?php

    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMT Bakery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/54e8589384.js" crossorigin="anonymous"></script>

    <!-- googleapis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Front Page -->

    <!-- Chat -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <!-- <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i> -->
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat -->

    <nav class="home flex justify-between items-center bg-gradient-to-r z-30 from-orange-200 to-orange-100 w-full h-12 sm:h-20 lg:h-28"
        id="home">
        <div class="menu-bar flex justify-between w-screen lg:bg-orange-200 lg:w-screen lg:h-28">
            <ul class=" flex lg:mt-6">
                <!-- Cake Dropdown -->
                <li
                    class="nav-items flex justify-center items-center m-1 p-1 text-xs font-bold text-gray-600 font-serif hover:text-white hover:font hover:cursor-pointer active:text-gray-700 sm:m-4 sm:text-lg lg:text-3xl lg:hidden lg:pr-0 lg:mr-0">
                    <a href="#menu_section_cake">Cakes</a>

                </li>
                <li
                    class="nav-items hidden justify-center items-start h-screen font-bold text-gray-600 font-serif hover:cursor-pointer sm:text-lg lg:text-3xl lg:flex lg:flex-row">
                    <div class=" flex flex-col justify-center items-center">
                        <button class="hover:cursor-pointer hover:text-white transition-colors mx-4 px-6 py-2 rounded"
                            id="menu-btn-cakes">Cakes</button>
                        <div class="bg-orange-300 hidden flex-col rounded mt-1 text-base w-40 z-30 shadow-2xl"
                            id="dropdown-cakes">
                            <a href="#1" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Butter Cake</a>
                            <a href="#2" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Angel Food Cake</a>
                            <a href="#3" class="px-4 py-2 text-base hover:bg-blue-300 rounded">White Chocolate Cake</a>
                            <a href="#4" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Chiffon Cake</a>
                            <a href="#5" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Cheesecake</a>
                            <a href="#6" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Ice-cream Cake</a>
                        </div>
                    </div>
                </li>
                <!-- Chocolate Dropdown -->
                <li
                    class="nav-items flex justify-center items-center m-1 p-1 text-xs font-bold text-gray-600 font-serif hover:text-white hover:font hover:cursor-pointer active:text-gray-700 sm:m-4 sm:text-lg lg:text-3xl lg:hidden lg:pr-0 lg:mr-0">
                    <a href="#menu_section_chocolates">Chocolates</a>

                </li>
                <li
                    class="nav-items hidden justify-center items-start h-screen font-bold text-gray-600 font-serif hover:cursor-pointer sm:text-lg lg:text-3xl lg:flex lg:flex-row">
                    <div class=" flex flex-col justify-center items-center">
                        <button class="hover:cursor-pointer hover:text-white transition-colors mx-4 px-6 py-2 rounded"
                            id="menu-btn-chocolates">Chocolates</button>
                        <div class="bg-orange-300 transition ease-in-out delay-150 hidden flex-col rounded mt-1 text-base w-40 z-30 shadow-2xl"
                            id="dropdown-chocolates">
                            <a href="#7" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Pop Chocolate</a>
                            <a href="#8" class="px-4 py-2 text-base hover:bg-blue-300 rounded">White Chocolate</a>
                            <a href="#9" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Gems</a>
                            <a href="#10" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Dark Chocolate</a>
                            <a href="#11" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Xtra Dark</a>
                            <a href="#12" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Milkybar</a>
                        </div>
                    </div>
                </li>
                <!-- Pastry Dropdown -->
                <li
                    class="nav-items flex justify-center items-center m-1 p-1 text-xs font-bold text-gray-600 font-serif hover:text-white hover:font hover:cursor-pointer active:text-gray-700 sm:m-4 sm:text-lg lg:text-3xl lg:hidden lg:pr-0 lg:mr-0">
                    <a href="#menu_section_pastries">Pastries</a>

                </li>
                <li
                    class="nav-items hidden justify-center items-start h-screen font-bold text-gray-600 font-serif hover:cursor-pointer sm:text-lg lg:text-3xl lg:flex lg:flex-row">
                    <div class=" flex flex-col justify-center items-center">
                        <button class="hover:cursor-pointer hover:text-white transition-colors mx-4 px-6 py-2 rounded"
                            id="menu-btn-pastry">Pastries</button>
                        <div class="bg-orange-300 hidden flex-col rounded mt-1 text-base w-40 z-30 shadow-2xl"
                            id="dropdown-pastry">
                            <a href="#13" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Cherry Pastry</a>
                            <a href="#14" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Black n White Pastry</a>
                            <a href="#15" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Pineapple Pastry</a>
                            <a href="#16" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Cream Pastry</a>
                            <a href="#17" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Brownie</a>
                            <a href="#18" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Chiffon Pastry</a>
                        </div>
                    </div>
                </li>
                <!-- Cookie Dropdown -->
                <li
                    class="nav-items flex justify-center items-center m-1 p-1 text-xs font-bold text-gray-600 font-serif hover:text-white hover:font hover:cursor-pointer active:text-gray-700 sm:m-4 sm:text-lg lg:text-3xl lg:hidden lg:pr-0 lg:mr-0">
                    <a href="#menu_section_cookies">Bakery</a>

                </li>
                <li
                    class="nav-items hidden justify-center items-start h-screen font-bold text-gray-600 font-serif hover:cursor-pointer sm:text-lg lg:text-3xl lg:flex lg:flex-row">
                    <div class=" flex flex-col justify-center items-center">
                        <button class="hover:cursor-pointer hover:text-white transition-colors mx-4 px-6 py-2 rounded"
                            id="menu-btn-cookie">Bakery</button>
                        <div class="bg-orange-300 hidden flex-col rounded mt-1 text-base w-40 z-30 shadow-2xl"
                            id="dropdown-cookie">
                            <a href="#19" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Crossaint</a>
                            <a href="#20" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Wheat Twisters</a>
                            <a href="#21" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Crispy Rolls</a>
                            <a href="#22" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Choco-chip Cookie</a>
                            <a href="#23" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Chocolate Cookie</a>
                            <a href="#24" class="px-4 py-2 text-base hover:bg-blue-300 rounded">Rainbow Pie</a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Logo start-->
            <a href="about.php" target="_blank" rel="noopener noreferrer"
                class="hidden lg:flex justify-center items-center sm:w-20 lg:w-28">
                <img src="./img/mmt_.gif" alt="" srcset="" class="">
            </a>
            <!-- Logo end -->

            <!-- Welcome start -->
            <div class="m-auto hidden md:flex">
                <!-- <a href="./login.php" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center ">
                    <i class="fa-solid fa-right-to-bracket hover:cursor-pointer"></i>
                    <p class="p-2 text-md font-bold text-gray-600 font-serif">
                        Login
                    </p>
                </a> -->
                <div class="flex flex-col text-center font-mono" style="font-family: 'Poppins';">
                    <div>
                        Hello,
                    </div>
                    <div>
                        <?php echo $user_data['user_name']; ?>
                    </div>
                </div>
            </div>
            
            <div class="m-auto hidden md:flex">
                <a href="./logout.php" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center ">
                    <i class="fa-solid fa-right-to-bracket hover:cursor-pointer"></i>
                    <p class="p-2 text-md font-bold text-gray-600 font-serif">
                        Logout
                    </p>
                </a>
            </div>
            <!-- Welcome end -->

            <div class="cart flex justify-end relative w-8 h-8 my-auto mx-auto hover:cursor-pointer lg:z-20 lg:mr-12">
                <button><img src="./img/shopping_cart.png" class=" " alt="" srcset="" onclick="showmenu()"></button>
            </div>
        </div>
    </nav>

    <!-- Cart -->
    <main class="hidden p-5 bg-green-100 h-full" id="cart-toggle">
        <div class=" lg:w-2/3 xl:w-2/3 mx-auto" id="cart-menu">
            <h1 class="text-lg md:text-3xl font-bold mb-6">Your Cart Items</h1>

            <div class="bg-white p-4 rounded-lg shadow">
                <!-- Product Items -->
                <div>
                    <!-- Product Item -->
                    <div class="cart-items">
                        <!-- Cart Items -->
                    </div>
                    <!--/ Product Item -->
                    <hr class="my-5" />


                    <div class="border-t border-gray-300 pt-4">
                        <div class="flex justify-between">
                            <span class="text-lg md:text-xl font-semibold">Subtotal</span>
                            <span class="subtotal text-lg md:text-xl font-bold">Rs.0</span>
                        </div>
                        <p class="text-base text-gray-500 mb-6">
                            Shipping and taxes calculated at checkout.
                        </p>

                        <button type="submit"
                            class=" text-gray-50 bg-blue-500 rounded-md w-full py-3 text-base active:bg-blue-600">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Cart -->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <section class="first flex-col bg-gradient-to-r from-orange-200 to-orange-100 z-10 md:flex md:flex-row " id="first">
        <div class="front-image flex justify-center items-center h-auto md:w-1/2 md:h-screen ">
            <img src="./img/bg_1.png" alt="" srcset="" class="z-20">
        </div>
        <div
            class="carousel-itemsscreen flex-col justify-center items-start pl-12 pr-12 pb-12 md:w-1/2 md:h-screen md:flex md:pb-0">
            <h1 class=" text-[#005099] text-5xl font-poppins font-bold md:mb-2 lg:mb-4"><span
                    class="autotype text-slate-600"></span></h1>
            <h1 class=" text-[#005099] text-4xl font-poppins font-bold">But Not Sugary
            </h1>
            <p class=" text-[#005099] text-lg font-poppins pt-4">
                Our best-selling Soft Baked Pumpkin Spice cookies are joined by our new, limited edition Pumpkin Spice
                Cake Mix — while they last.
            </p>
        </div>
    </section>
    <section class="second ">
        <div class=" md:flex ">
            <div
                class=" flex justify-center items-center transition-colors bg-pink-300 h-52 w-full hover:bg-pink-400 active:scale-105 hover:shadow-2xl lg:hover:scale-105 lg:active:scale-105 ">
                <div class=" ">
                    <h1 class=" text-blue-900 text-5xl font-poppins font-bold">Cakes</h1>
                </div>
            </div>
            <div
                class=" flex justify-center items-center transition-colors bg-blue-300 h-52 w-full hover:bg-blue-400 active:scale-105 hover:shadow-2xl lg:hover:scale-105 lg:active:scale-105">
                <div class=" ">
                    <h1 class=" text-blue-900 text-5xl font-poppins font-bold">Chocolates</h1>
                </div>
            </div>
        </div>
        <div class=" md:flex">
            <div
                class=" flex justify-center items-center transition-colors bg-green-300 h-52 w-full hover:bg-green-400 active:scale-105 hover:shadow-2xl lg:hover:scale-105 lg:active:scale-105 ">
                <div class=" ">
                    <h1 class=" text-blue-900 text-5xl font-poppins font-bold">Pastries</h1>
                </div>
            </div>
            <div
                class=" flex justify-center items-center transition-colors bg-red-300 h-52 w-full hover:bg-red-400 active:scale-105 hover:shadow-2xl lg:hover:scale-105 lg:active:scale-105">
                <div class=" ">
                    <h1 class=" text-blue-900 text-5xl font-poppins font-bold">Cookies</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Cake -->
    <section class="menu_section_cake flex flex-col justify-center items-center bg-green-100 " id="menu_section_cake">
        <div class="cakes flex justify-between w-full bg-gradient-to-r from-blue-700 to-blue-600 ">
            <h1
                class=" text-white font-serif text-base font-bold p-4 pr-0 sm:text-lg md:text-xl md:p-8 md:pr-0 md:pl-4 lg:text-3xl">
                Cakes</h1>
        </div>
        <div class="menu-items-cakes grid grid-cols-1 sm:mx-4 p-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Cakes Menu Items JS -->
        </div>
    </section>

    <!-- Chocolates -->
    <section class="menu_section_chocolates flex flex-col justify-center items-center bg-green-100"
        id="menu_section_chocolates">
        <div class="chocolates flex justify-between w-full bg-gradient-to-r from-blue-700 to-blue-600 ">
            <h1
                class=" text-white font-serif text-base font-bold p-4 pr-0 sm:text-lg md:text-xl md:p-8 md:pr-0 md:pl-4 lg:text-3xl">
                Chocolates</h1>
        </div>
        <div class="menu-items-chocolates grid grid-cols-1 sm:mx-4 p-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Chocolates Menu Items JS -->
        </div>
    </section>

    <!-- Pastries -->
    <section class="menu_section_pastries flex flex-col justify-center items-center bg-green-100"
        id="menu_section_pastries">
        <div class="pastries flex justify-between w-full bg-gradient-to-r from-blue-700 to-blue-600 ">
            <h1
                class=" text-white font-serif text-base font-bold p-4 pr-0 sm:text-lg md:text-xl md:p-8 md:pr-0 md:pl-4 lg:text-3xl">
                Pastries</h1>
        </div>
        <div class="menu-items-pastries grid grid-cols-1 sm:mx-4 p-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Pastries Menu Items JS -->
        </div>
    </section>

    <!-- Cookies -->
    <section class="menu_section_cookies flex flex-col justify-center items-center bg-green-100"
        id="menu_section_cookies">
        <div class="cookies flex justify-between w-full bg-gradient-to-r from-blue-700 to-blue-600 ">
            <h1
                class=" text-white font-serif text-base font-bold p-4 pr-0 sm:text-lg md:text-xl md:p-8 md:pr-0 md:pl-4 lg:text-3xl">
                Bakery</h1>
        </div>
        <div class="menu-items-cookies grid grid-cols-1 sm:mx-4 p-4 md:grid-cols-2 lg:grid-cols-3">
            <!-- Cookies Menu Items JS -->
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer bg-gray-800 py-4">
        <h1 class=" text-white text-xs sm:text-sm md:text-base font-mono text-center">&ltMade by Taher, Mohtaseen and
            Monson&#47;&gt</h1>
        <h1 class=" text-white text-xs sm:text-sm md:text-base font-mono text-center"> &copy; All rights reserved</h1>
    </footer>

    <!-- Javascript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="products.js"></script>
    <script src="app.js"></script>
    <script src="response.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>