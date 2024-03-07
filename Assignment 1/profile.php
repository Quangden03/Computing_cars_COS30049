<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Assignment 1">
    <meta name="keywords" content="Decentralized Trading System">
    <meta name="author" content="Vu Minh Quang and Group 1.2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT CARS - Profile</title>

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
        <!----------------------------------------------------- Navigation bar ----------------------------------------------------->
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
                <li id="marketplace"><a href="marketplace.php">Marketplace</a></li>
                <li id="sign_in"><a href="sign_in.php">Sign in</a></li>
                <li id="start"><a href="sign_up.php">Get Started</a></li>
            </ul>
        </nav>

        <!-- Second navigation bar after login -->
        <nav id="afterLoginNav" style="display: none;">
            <ul>
                <li id="marketplace"><a href="marketplace.php">Marketplace</a></li>
                <li id="sign_in"><a href="">$30.000</a></li>
                <li id="start">
                    <a href="">Your Profile</a>
                    <ul class="child_menu" tabindex="0">
                        <li onclick="logout()"><a href="index_1.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <script src="javascript/login-_logout_Navbar.js"></script>
    </header>

    <!------------------------------------------------------------ Main ------------------------------------------------------------>
    <main id="main_profile">

        <div class="Profile">

            <h1 id="Profile_title">Profile</h1>
            <div class="user">
                <img class="imgpro" src="images/profile.jpg">
                <div class="user-info">
                    <h1 id="userName">**Name**</h1>
                    <p id="userNickname">@Nickname</p>
                </div>
            </div>

            <div class="vertical">
                <button class="Wallet" id="Wallet_button">E-Wallet</button>
                <button class="MyCart" id="Cart_button">My Cart</button>
                <button class="pHis" id="History_button">Purchased History</button>
            </div>

        </div>
        <div class="horizontal-line"></div>



        <!--------------------------------------------------------------->
        <!----------------------- Default content ----------------------->
        <div class="profile-content" id="profileContent">
            <h2>Welcome to Your Profile</h2>
            <p>This is the default content. Select a tab to view specific information.</p>
        </div>

        <!---------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------- E-Wallet Content -------------------------------------------->
        <div class="profile-content" id="walletContent" style="display: none;">

            <div class="E-Wallet_container">
                <div class="money_add_container">
                    <div class="money_add">
                        <h4>ADD 100K</h4>
                        <p>(minimum fund level)</p>

                    </div>
                    <button class="butt_monadd">Add funds</button>
                    <div class="money_add">
                        <h4>ADD 200K</h4>


                    </div>
                    <button class="butt_monadd">Add funds</button>
                    <div class="money_add">
                        <h4>ADD 400K</h4>


                    </div>
                    <button class="butt_monadd">Add funds</button>
                    <div class="money_add">
                        <h4>ADD 800K</h4>


                    </div>
                    <button class="butt_monadd">Add funds</button>
                </div>
                <div class="right-container">
                    <div class="money_have">
                        <div class="balance-title">
                            <h4>Available Balance:</h4>
                        </div>
                        <div class="balance-amount">
                            <h3>30.000K</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--------------------------------------------------------------------------------------------------------->
        <!-------------------------------------------- My Cart Content -------------------------------------------->
        <div class="profile-content" id="cartContent" style="display: none;">
            <div class="info_cart">
                <h3>Shopping Cart</h3>
                <p>You have 1 item in your cart</p>
            </div>


            <div class="main-container">
                <div class="table-container mycart">
                    <table class="mycarttable">
                        <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="first"><img src="images/products/2 - Mulsanne WO Edition.jpg"></td>
                                <td>Bentley Mulsanne W.O. Edition</td>
                                <td id="third"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-container receipt">
                    <div class="new-right-container">
                        <div class="new-money-have">
                            <div class="new-balance-title">
                                <h4>Available Balance:</h4>
                            </div>
                            <div class="new-balance-amount">
                                <h3>30.000K</h3>
                            </div>
                        </div>

                        <table class="receipt">
                            <tbody>
                                <tr>
                                    <td><strong>Product</strong></td>
                                    <td></td>
                                    <td id="Price"><strong>Price</strong></td>
                                </tr>
                                <tr>

                                    <td>Bentley Mulsanne W.O. Edition</td>
                                    <td></td>
                                    <td class="K">1.900K</td>
                                </tr>
                                <tr>

                                    <td>Subtotal</td>
                                    <td></td>
                                    <td class="K">1.900K</td>
                                </tr>
                                <tr>

                                    <td>Shipping</td>
                                    <td></td>
                                    <td class="K">50K</td>
                                </tr>
                                <tr>
                                    <td>Total (Tax incl.)</td>
                                    <td></td>
                                    <td class="K">1.950K</td>
                                </tr>
                                <tr>
                                    <td id="last">
                                        <button id="checkout">Checkout</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!------------------------------------------------------------------------------------------------------------------>
        <!-------------------------------------------- History Purchase Content -------------------------------------------->
        <div class="profile-content" id="historyContent" style="display: none;">
            <div class="table-container">

                <table class="history">
                    <thead class="title_his">
                        <tr>
                            <th class="border_topleft">TIME</th>
                            <th>NAME OF THE PRODUCT</th>
                            <th>STATUS</th>
                            <th class="border_topright">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody class="content">
                        <tr>
                            <td>24 Jan 2024<br>(Payment Invoice Template)</td>
                            <td>Bentley Mulsanne W.O. Edition</td>
                            <td>Completed</td>
                            <td>1.900K</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="border_bottomleft"></td>
                            <td></td>
                            <td></td>
                            <td class="border_bottomright"></td>
                        </tr>
                    </tbody>
                </table>
                <h1 id="thank_you">Thank you for choosing NFT Cars!</h1>
            </div>
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
    <script src="javascript/profile_button_pages.js"></script>
</body>

</html>