<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Assignment 1">
    <meta name="keywords" content="Decentralized Trading System">
    <meta name="author" content="Vu Minh Quang and Group 1.2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://localhost/cos30049/web3.min.js"></script>
    <script src="http://localhost/cos30049/truffle-contract.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <title>Homepage NFT Cars</title>

    <!-- Use font-family form Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">

    <!-- Link to javascript to get the effect of background -->
    <script src="javascript/effect_background.js"></script>

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
                    <a href="profile.php">Your Profile</a>
                    <ul class="child_menu" tabindex="0">
                        <li><a href="profile.php">Cart</a></li>
                        <li><a href="profile.php">E-Wallet</a></li>
                        <li onclick="logout()"><a href="">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <script src="javascript/login-_logout_Navbar.js"></script>
    </header>

    <!---------------------------------------------------------- Main ---------------------------------------------------------->
    <main class="video">
        <div class="main_content">
            <h1 id="title_hp">NFT Cars</h1>
            <h3 id="sub_title_hp">"Get behind the wheel of the future with our NFT platform, where you can own and trade
                exclusive cars."</h3>
        </div>

        <div class="video-container">
            <div class="video-overlay"></div>
            <video autoplay muted id="background_video">
                <source src="styles/images/bg_video.mp4" type="video/mp4">
            </video>

            <img id="background_image" src="styles/images/BatMobile.jpg" alt="Background Image">
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
    <script>
        async function loadWeb3() {
            const web3 = new Web3("http://54.216.158.92:8545");
            const accounts = await web3.eth.getAccounts();
            const balance = await web3.eth.getBalance(accounts[0]);

            console.log("Account: " + accounts[0]);
            console.log("Balance: " + balance);
            var web3Provider = new Web3.providers.HttpProvider("http://54.216.158.92:8545");

            $.getJSON("http://localhost/cos30049/Color.json", function (data) {
                var FriendArtifact = data;
                var FriendContract = TruffleContract(FriendArtifact);
                FriendContract.setProvider(web3Provider);
                var friendinstance;

                FriendContract.deployed().then(function (instance) {
                    friendinstance = instance;
                    // Create NFT
                    var NFT = "5:00PM 13-11/2023, TanDang";
                    friendinstance.mint(NFT, {
                        from: '0x2A12C5A79cD2e154cbEF0188ffC15C739b731e1c'
                    });
                    // Display all NFT 
                    return friendinstance.totalSupply().then(function (result1) {
                        totalSupply = result1;
                        for (var i = 0; i < totalSupply; i++) {
                            friendinstance.colors(i).then(function (result2) {
                                console.log(result2);
                            })
                        }
                    })


                });
            });
        }
    </script>
</body>

</html>