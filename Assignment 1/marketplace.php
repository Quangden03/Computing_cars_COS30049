<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Assignment 1">
    <meta name="keywords" content="Decentralized Trading System">
    <meta name="author" content="Vu Minh Quang and Group 1.2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Place NFT Cars</title>

    <!-- Use font-family form Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">



    <!-- CSS -->
    <link href="styles/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/9bb044a55b.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <div class="logo_home">
            <a href="index_1.php"><img src="images/BlackLogo.png" alt="black_logo" class="black_logo"></a>
        </div>
        <!--------------------------------------- Navigation bar --------------------------------------->
        <div id="search">
            <form class="search_form">
                <label for="search">
                    <input class="input" type="text" required="" placeholder="Search for car" id="search">
                    <div class="fancy-bg"></div>
                    <div class="search">
                        <svg viewBox="0 0 24 24" aria-hidden="true"
                            class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <button class="close-btn" type="reset">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </label>
            </form>
        </div>
        <nav id="beforeLoginNav">
            <ul>
                <li id="marketplace"><a href="">Marketplace</a></li>
                <li id="sign_in"><a href="sign_in.php">Sign in</a></li>
                <li id="start"><a href="sign_up.php">Get Started</a></li>
            </ul>
        </nav>


        <!-- Second navigation bar after login -->
        <nav id="afterLoginNav" style="display: none;">
            <ul>
                <li id="marketplace"><a href="">Marketplace</a></li>
                <li id="sign_in"><a href="">$30.000</a></li>
                <li id="start">
                    <a href="profile.php">Your Profile</a>
                    <ul class="child_menu" tabindex="0">
                        <li><a href="profile.php">Cart</a></li>
                        <li><a href="profile.php">E-Wallet</a></li>
                        <li onclick="logout()"><a href="index_1.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>

    <!---------------------------------------------- Main ---------------------------------------------->
    <main id="Marketplace_page">

        <div id="title_mp">
            <h1>Browse Marketplace</h1>
        </div>
        <div id="top_popup">
            You need to Sign In before Add to Cart
        </div>


        <!------------------------ Filter and Cars Menu ------------------------>


        <!-- Filter to find cars -->
        <div id="main_marketplace">

            <div id="filter_mp">
                <h3>Filter</h3>

                <form id="filter_form">
                    <h4>Car types</h4>
                    <label>
                        <input type="radio" name="filter" value="All" checked>All
                    </label>
                    <label>
                        <input type="radio" name="filter" value="A">Sedan
                    </label>
                    <label>
                        <input type="radio" name="filter" value="B">Supercars
                    </label>
                    <label>
                        <input type="radio" name="filter" value="C">SUV
                    </label>

                    <h4>Price (K)</h4>
                    $0 <input type="range" id="priceRange" name="price" min="0" max="2000" step="10" value="1000"> $2000
                    <p id="price_display">Selected Price: $1000</p>

                    <button type="button" id="apply_filter">Search for Cars</button>
                    <button id="scrollToTopBtn">Back to top</button>
                </form>
            </div><!-- Filter to find cars -->


            <!------------------------------------------ List of cars ------------------------------------------>
            <div id="product_mp">
                <h2>50+ Cars</h2>

                <div class="car_box" id="car_list">

                    <div class="cars" data-group="A">
                        <img src="images/products/1 - Rolls-Royce Phantom Tranquillity.jpg" alt="">
                        <div class="cars_description">
                            <h3>Rolls-Royce Phantom Tranquillity NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: V12 6.75L <br>
                                Date: 2019 <br>
                                Maximum power output: 563 HP and 900 Nm
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="A">
                        <img src="images/products/2 - Mulsanne WO Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>Bentley Mulsanne W.O. Edition NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: V12 6.75L <br>
                                Date: 2019<br>
                                Maximum power output: 505 HP and 1020 Nm
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.900K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="A">
                        <img src="images/products/3 - Rolls - Royce Sweptail.jpg" alt="">
                        <div class="cars_description">
                            <h3>Rolls - Royce Sweptail NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: V12 6.75L <br>
                                Maximum power output: 460 HP and 720 Nm <br>
                                Date: 2017
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="A">
                        <img src="images/products/4 - Rolls - Royce Boat Tail.jpg" alt="">
                        <div class="cars_description">
                            <h3>Rolls-Royce Boat Tail NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: V12 6.75L <br>
                                Maximum power output: 563 HP and 900 Nm <br>
                                Date: 2021
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="A">
                        <img src="images/products/5 - Bugatti Royale Kellner Coupe.jpg" alt="">
                        <div class="cars_description">
                            <h3>Bugatti Royale Kellner Coupe NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: I8 12.8L <br>
                                Maximum power output: 300 HP and 1186 Nm <br>
                                Date: 1927
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="A">
                        <img src="images/products/6 - Rolls-Royce 15 hp.jpg" alt="">
                        <div class="cars_description">
                            <h3>Rolls-Royce 15 hp NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: I3 3.0L <br>
                                Maximum power output: 15 HP and 11 Nm <br>
                                Date: 1905
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/8 - Koenigsegg CCXR Trevita.jpg" alt="">
                        <div class="cars_description">
                            <h3>Koenigsegg CCXR Trevita NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 4.8L <br>
                                Maximum power output: 1004 HP and 797 Nm <br>
                                Date: 2006
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.800K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/9 - Aston Martin Valkyrie AMR Pro.jpg" alt="">
                        <div class="cars_description">
                            <h3>Aston Martin Valkyrie AMR Pro NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.5L <br>
                                Maximum power output: 1160 HP and 900 Nm <br>
                                Date: 2017
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">2.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/10 - Ferrari Pininfarina Sergio.jpg" alt="">
                        <div class="cars_description">
                            <h3>Ferrari Pininfarina Sergio NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 4.5L <br>
                                Maximum power output: 605 HP and 540 Nm <br>
                                Date: 2013
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.760K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/11 - Ford Mustang Shelby GT350 Paxton Supercharged.jpg" alt="">
                        <div class="cars_description">
                            <h3>Ford Mustang Shelby GT350 Paxton Supercharged NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 4.7L <br>
                                Maximum power output: 378 HP and 478 Nm <br>
                                Date: 1966
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.400K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/12 - Toyota GR Corolla Morizo Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>Toyota GR Corolla Morizo Edition NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: I3 1.6L <br>
                                Maximum power output: 300 HP and 400 Nm <br>
                                Date: 2023
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">950K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/13 - BMW 3.0 CSL.jpg" alt="">
                        <div class="cars_description">
                            <h3>BMW 3.0 CSL NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: I6 3.0L <br>
                                Maximum power output: 560 HP and 550 Nm <br>
                                Date: 2023
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/14 - Aston Martin V12 Vantage.jpg" alt="">
                        <div class="cars_description">
                            <h3>Aston Martin V12 Vantage NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 5.2L <br>
                                Maximum power output: 700 HP and 753 Nm <br>
                                Date: 2022
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.500K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/15 - Lamborghini Countach LPI 800-4.jpg" alt="">
                        <div class="cars_description">
                            <h3>Lamborghini Countach LPI 800-4 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.5L <br>
                                Maximum power output: 804 HP and 720 Nm <br>
                                Date: 2022
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.660K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/16 - W Motors Lykan HyperSport.jpg" alt="">
                        <div class="cars_description">
                            <h3>W Motors Lykan HyperSport NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: Boxer 6 cy-linder 3.7L <br>
                                Maximum power output: 780 HP and 960 Nm <br>
                                Date: 2013
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.800K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/17 - Lamborghini Veneno coupe.jpg" alt="">
                        <div class="cars_description">
                            <h3>Lamborghini Veneno coupe NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.5L <br>
                                Maximum power output: 750 HP and 690 Nm <br>
                                Date: 2013
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.890K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/18 - Bugatti Centodieci.jpg" alt="">
                        <div class="cars_description">
                            <h3>Bugatti Centodieci NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: W16 8.0L <br>
                                Maximum power output: 1577 HP and 1600 Nm <br>
                                Date: 2022
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.990K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/19 - Zenvo ST1.jpg" alt="">
                        <div class="cars_description">
                            <h3>Zenvo ST1 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 6.8L <br>
                                Maximum power output: 1104 HP and 1430 Nm <br>
                                Date: 2009
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.750K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/20 - Pagani Zonda R.jpg" alt="">
                        <div class="cars_description">
                            <h3>Pagani Zonda R NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.0L <br>
                                Maximum power output: 800 HP and 730 Nm <br>
                                Date: 2009
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.550K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/21 - Icona Vulcano Titanium.jpg" alt="">
                        <div class="cars_description">
                            <h3>Icona Vulcano Titanium NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 6.2L <br>
                                Maximum power output: 670 HP and 620 Nm <br>
                                Date: 2013
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.340K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/22 - Ferrari P45 by Pininfarina.jpg" alt="">
                        <div class="cars_description">
                            <h3>Ferrari P4/5 by Pininfarina NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.0L <br>
                                Maximum power output: 660 HP and 657 Nm <br>
                                Date: 2006
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.250K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/23 - McLaren F1 LM.jpg" alt="">
                        <div class="cars_description">
                            <h3>McLaren F1 LM NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V6 3.2L <br>
                                Maximum power output: 618 HP and 650 Nm <br>
                                Date: 1992
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.360K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/24 - Jaguar XKSS.jpg" alt="">
                        <div class="cars_description">
                            <h3>Jaguar XKSS NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: I6 3.4L <br>
                                Maximum power output: 250 HP and 325 Nm <br>
                                Date: 1957
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.750K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/25 - Pagani Huayra BC.jpg" alt="">
                        <div class="cars_description">
                            <h3>Pagani Huayra BC NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 6.0L <br>
                                Maximum power output: 802 HP and 1050 Nm <br>
                                Date: 2017
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.850K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/26 - Aston Martin DBR1.jpg" alt="">
                        <div class="cars_description">
                            <h3>Aston Martin DBR1 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: I6 2.5L <br>
                                Maximum power output: 254 HP and 240 Nm <br>
                                Date: 1957
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.760K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/27 - Vector M12.jpg" alt="">
                        <div class="cars_description">
                            <h3>Vector M12 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 5.7L <br>
                                Maximum power output: 492 HP and 576 Nm <br>
                                Date: 1995
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.250K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/28 - Bugatti Divo.jpg" alt="">
                        <div class="cars_description">
                            <h3>Bugatti Divo NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: W16 8.0L <br>
                                Maximum power output: 1500 HP and 1600 Nm <br>
                                Date: 2019
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.760K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/29 - Bugatti Chiron.jpg" alt="">
                        <div class="cars_description">
                            <h3>Bugatti Chiron NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: W16 8.0L <br>
                                Maximum power output: 1850 HP and 1849 Nm <br>
                                Date: 2016
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.860K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/30 - Aston Martin DBS Superleggera Concorde Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>Aston Martin DBS Superleggera Concorde Edition NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V12 5.2L <br>
                                Maximum power output: 715 HP and 900 Nm <br>
                                Date: 2021
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.670K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/31 - Audi R8 Green Hell.jpg" alt="">
                        <div class="cars_description">
                            <h3>Audi R8 Green Hell NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V10 5.2L <br>
                                Maximum power output: 610 HP and 428 Nm <br>
                                Date: 2020
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.650K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/32 - Lexus LFA.jpg" alt="">
                        <div class="cars_description">
                            <h3>Lexus LFA NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V10 4.8L <br>
                                Maximum power output: 533 HP and 480 Nm <br>
                                Date: 2010
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.340K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/33 - Chevrolet Corvette L88.jpg" alt="">
                        <div class="cars_description">
                            <h3>Chevrolet Corvette L88 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: 427-cubic-inch V-8 <br>
                                Maximum power output: 500 HP and 450 Nm <br>
                                Date: 1967
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">500K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/34 - Ford Mustang GT500 Super Snake.jpg" alt="">
                        <div class="cars_description">
                            <h3>Ford Mustang GT500 Super Snake NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 4.7L <br>
                                Maximum power output: 355 HP and 420 Nm <br>
                                Date: 1967
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">560K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/35 - Chevrolet Camaro ZL1.jpg" alt="">
                        <div class="cars_description">
                            <h3>Chevrolet Camaro ZL1 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 3.8L <br>
                                Maximum power output: 430 HP and 610 Nm <br>
                                Date: 1969
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">600K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/36 - Buick GSX Stage 1.jpg" alt="">
                        <div class="cars_description">
                            <h3>Buick GSX Stage 1 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 7.4L <br>
                                Maximum power output: 350 HP and 690 Nm <br>
                                Date: 1970
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">650K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/37 - Plymouth Barracuda Hemi Convertible.jpg" alt="">
                        <div class="cars_description">
                            <h3>Plymouth Barracuda Hemi Convertible NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V7 7.0L <br>
                                Maximum power output: 425 HP and 490 Nm <br>
                                Date: 1970
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">640K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/38 - Pontiac GTO The Judge Convertible.jpg" alt="">
                        <div class="cars_description">
                            <h3>Pontiac GTO "The Judge" Convertible NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: 455 HO V8 <br>
                                Maximum power output: 366 HP and 445 Nm <br>
                                Date: 1971
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">660K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/39 - Dodge Challenger 50th Anniversary.jpg" alt="">
                        <div class="cars_description">
                            <h3>Dodge Challenger 50th Anniversary NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: V8 6.4L <br>
                                Maximum power output: 485 HP and 475 Nm <br>
                                Date: 2020
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">680K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="B">
                        <img src="images/products/40 - BMW M1.jpg" alt="">
                        <div class="cars_description">
                            <h3>BMW M1 NFT</h3>
                            <p>
                                Car type: Supercars <br>
                                Engine: I6 3.5L <br>
                                Maximum power output: 273 HP and 330 Nm <br>
                                Date: 1978
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">700K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/41 - Range Rover Sport SV Edition One Miami.jpg" alt="">
                        <div class="cars_description">
                            <h3>Range Rover Sport SV Edition One Miami NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V8 4.4L <br>
                                Maximum power output: 626 HP and 553 Nm <br>
                                Date: 2023
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">720K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/42 - Toyota Land Cruiser Heritage Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>Toyota Land Cruiser Heritage Edition NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V8 5.7L <br>
                                Maximum power output: 381 HP and 401 Nm <br>
                                Date: 2020
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">730K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/43 - VinFast President.jpg" alt="">
                        <div class="cars_description">
                            <h3>VinFast President NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V8 6.2L <br>
                                Maximum power output: 420 HP and 624 Nm <br>
                                Date: 2020
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">800K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/44 - Jeep Gladiator Rubicon FarOut.jpg" alt="">
                        <div class="cars_description">
                            <h3>Jeep Gladiator Rubicon FarOut NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V6 3.0L <br>
                                Maximum power output: 260 HP and 442 Nm <br>
                                Date: 2023
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">850K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/45 - Toyota Tundra Terminator 3 Special Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>Toyota Tundra Terminator 3 Special Edition NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V8 4.7L <br>
                                Maximum power output: 255 HP and 325 Nm <br>
                                Date: 2003
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">900K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/46 - BMW X7 M50d Dark Shadow Edition.jpg" alt="">
                        <div class="cars_description">
                            <h3>BMW X7 M50d Dark Shadow Edition NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V6 3.0L <br>
                                Maximum power output: 400 HP and 760 Nm <br>
                                Date: 2021
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.000K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/47 - Range Rover SV Coupé.jpg" alt="">
                        <div class="cars_description">
                            <h3>Range Rover SV Coupé NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: V8 5.0L <br>
                                Maximum power output: 566 HP and 700 Nm <br>
                                Date: 2019
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.120K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/48 - Toyota Fortuner Commander.jpg" alt="">
                        <div class="cars_description">
                            <h3>Toyota Fortuner Commander NFT</h3>
                            <p>
                                Car type: SUV <br>
                                Engine: I4 2.8L <br>
                                Maximum power output: 204 HP and 500 Nm <br>
                                Date: 2022
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.450K - Add to Cart</button>
                        </div>
                    </div>

                    <div class="cars" data-group="C">
                        <img src="images/products/7 - Mercedes-Benz S-Type 26120180 Sports Tourer.jpg" alt="">
                        <div class="cars_description">
                            <h3>Mercedes-Benz S-Type 26/120/180 Sports Tourer NFT</h3>
                            <p>
                                Car type: Sedan <br>
                                Engine: I6 6.74L <br>
                                Maximum power output: 180 HP and 180 Nm <br>
                                Date: 1928
                            </p>
                            <button type="button" id="add_to_cart" class="sign_in_to_add">1.700K - Add to Cart</button>
                        </div>
                    </div>

                </div>

            </div><!-- List of cars -->

        </div>


    </main>


    <!----------------------------------------------------------- Footer ----------------------------------------------------------->
    <footer>

        <div class="ftr">

            <div class="box">
                <img id="image_footer" src="images/BlackLogo.png" alt="">
            </div>

            <div class="box">
                <h3 id="contact">Contact Information</h3>
                <i class="fa-solid fa-phone"></i> <span> +234(9013 - 4173 - 48)</span><br><br>
                <i class="fa-solid fa-envelope"></i><span> NftCarsXeDep@gmail.com</span><br><br>
                <i class="fa-solid fa-location-dot"></i><span> 80 Duy Tan</span><br>
            </div>

            <div class="box">
                <h3 id="social_media">Social Media</h3>
                <span><i class="fa-brands fa-facebook"></i></span>
                <span><i class="fa-brands fa-instagram"></i></span>
                <span><i class="fa-brands fa-tiktok"></i></span>
            </div>

        </div>

        <div class="endpage">
            <hr>
            <p>©2024 All Rights Reserved</p>
        </div>

    </footer>

    <!-- Link to javascript to update the Price in Price range -->
    <script src="javascript/price_range_filter.js"></script>
    <script src="javascript/login-_logout_Navbar.js"></script>
    <script src="javascript/cars_group.js"></script>

</body>


</html>