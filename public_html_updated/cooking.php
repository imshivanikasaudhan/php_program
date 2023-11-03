<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        #main3 {
            height: 110vh;
            width: 100%;
            background: linear-gradient(to right, #649173, #c4bc80);
            color: #fff;
            position: relative;
        }

        #main3 h1 {
            position: relative;
            padding-top: 40px;
            text-align: center;
            /* font-size: 30px; */
            color: blue;
        }


        #main3 p {
            width: 60%;

            margin-top: 40px;
            text-transform: capitalize;
            text-align: justify;
            /* justify-content: center; */
            padding: 20px;
            line-height: 1.5em;
            font-weight: bold;
            font-size: 20px;
            color: rgb(255, 255, 255);

        }

        #main31 {
          
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        #main31 img {
            margin-top: 60px;
            margin-right: 30px;
            border-radius: 15%;
        }

        span {
            color: black;
            font-weight: bold;
        }

        #main4 {
            height: 95vh;
            width: 100%;
            background-color: #fff;
        }

        #main4 h2 {
            padding: 40px;
        }

        #main4 p {
            padding-left: 40px;
            padding-right: 40px;

            font-size: 18px;
            margin-top: 10px;
            text-align: justify;
            justify-content: center;

        }

        #psticker p {
            padding-left: 40px;
            /* line-height: 2em; */
            font-size: 20px;
        }

     @media (max-width: 576px) {
            #main31 img{
                height: 120px;
                width: 140px;
                
            }
            #main3{
                height: auto;
            }
            #main31 p{
               /* font-weight: 200; */
               font-size: 1px;
               word-spacing: 0;
               line-height: 0;
               padding: 0;
            }
            #main4 h2{
                font-size: 18px;
            }
            #main4{
                height: auto;
            }
            #main31{
                 display: flex;
            flex-direction: column;
            align-items: center;
            }

         }
         @media (max-width: 768px) {
            #main3{
                height: auto;
            }
            #main31 img{
                height: 160px;
                width: 180px;
               

            }
            #main31 p{
                font-size: 8px;
                line-height: 1em;
            }
            #main4 h2{
                font-size: 22px;
            }
            #main4{
                height: auto;
            }
            #main31{
                 display: flex;
            flex-direction: column;
              align-items: center;
            }
          }
          @media (max-width: 992px){
            #main31 img{
                height: 200px;
                width:   250px;
                
                
            }
            #main3{
                height:auto;
            }
            #main31 p{
                font-size: 12px;
                line-height: 1.5em;
            }
            #main4 h2{
                font-size: 28px;
            }
            #main4{
                height: auto;
            }
            #main31{
                 display: flex;
            flex-direction: column;
                align-items: center;
            }
          }
        .navbar-brand img{
            width: 120px;
         height: 65px;
         margin-left: 40px;
        }
    </style>




</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.html"><img src="512.png" alt="" height="60px" width="60px"></a>

            <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNavDropdown">
                <ul class="navbar-nav w-50  d-flex justify-content-around ">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="clean.html">Cleaning Service</a></li>
                            <li> <a class="dropdown-item" href="housekeeping.html">Housekeeping </a> </li>
                            <li> <a class="dropdown-item" href="cooking.html"> Cooking Services </a> </li>
                            <li> <a class="dropdown-item" href="nurse.html"> Nurses </a> </li>
                            <li> <a class="dropdown-item" href="event.html"> Event Planners </a> </li>
                            <li> <a class="dropdown-item" href="nanni.html"> Nanny </a></li>
                            <li> <a class="dropdown-item" href="buddy.html"> 24*7 Buddy </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.helperaddda.app">App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="main3">
        <h1>  Cooking Services</h1>
        <div id="main31">
            <img src="512.png" alt="" height="500px" width="500px">
            <p>A good cook is an essential asset to any household, and for good reason. Not only can they whip up
                delicious and healthy meals, but they can also save time and money in the process. With a skilled cook
                at home, there's no need to rely on expensive takeout or processed convenience foods. Instead, you can
                enjoy a wide variety of homemade dishes that are tailored to your tastes and dietary needs.

                A good cook also knows how to make the most of ingredients, reducing waste and stretching your grocery
                budget. They can create meals that are not only tasty but also nutritious, using fresh ingredients that
                are good for your body and mind. Furthermore, having a skilled cook in the home can foster a sense of
                togetherness and community, as family members can come together to share in the joy of a home-cooked
                meal.<br>
                <span>practical benefits</span>
                <br>
                In addition to the practical benefits, having a good cook at home can also provide a sense of comfort
                and security. A home-cooked meal is a source of warmth and familiarity, bringing people together and
                creating cherished memories. Whether it's a cozy family dinner or a celebration with friends, a good
                cook can make any occasion more special with their culinary skills.
            </p>





            

        </div>

    </div>
    <div id="main4">

        <h2> Our home cleaning services in Delhi includes:</h2>
        <div class="psticker">
            <p>
                <img src="sticker.png" alt="sticker" height="20px" width="20px"> &nbsp;A home-cooked meal is a source
                of warmth and familiarity
            </p>
            <p>
                <img src="sticker.png" alt="sticker" height="20px" width="20px"> &nbsp;A good cook is an essential asset
                to any household
            </p>
            <p>
                <img src="sticker.png" alt="sticker" height="20px" width="20px"> &nbsp;you can enjoy a wide variety of
                homemade dishes
                Upholstery cleaning
                Services.
            </p>
            <p>
                <img src="sticker.png" alt="sticker" height="20px" width="20px"> &nbsp;A good cook can make any occasion
                more special with their culinary skills.

            </p>
            <p>
                <img src="sticker.png" alt="sticker" height="20px" width="20px"> &nbsp;A good cook is a valuable
                addition to any home
                Services
            </p>

            <p>In short, a good cook is a valuable addition to any home, bringing practical, health, and emotional
                benefits. They can save time, money, and reduce waste while also providing delicious and nutritious
                meals that nourish the body and soul. So, if you're looking to elevate your home cooking game
            </p>
        </div>
    </div>
    <footer class="bd-footer  bg-black d-flex justify-content-between">
        <div class="container py-4 pt-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row d-flex justify-content-between">

                <div class="col-6 col-lg-2 offset-lg-1 mb-3 text-info">
                    <h5>Residential Services</h5>
                    <ul class="list-unstyled text-light ">
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Housekeeping</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Cleaning Service</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Cooking Service</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Nurses</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Event-planners</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">Nanny</a></li>
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">24*7 Buddy</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2 mb-3 text-info">
                    <h5>Know About Helper Adda</h5>
                    <ul class="list-unstyled text-light">
                        <li class="mb-2"><a class="text-decoration-none text-light" href="">About us </a></li>
                        <li class="mb-2">How work it is</li>

                        <br> <br>
                        <li>Privacy Policy | Terms and Conditions
                        </li>Customer Policy | Refund Policy

                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3 text-info">
                    <h5>Contact Information</h5>
                    <ul class="list-unstyled text-light">
                        <li class="mb-2">Phone:
                            9818699556</li>

                        <li class="mb-2">Email:
                            merahelperadda@gmail.com</li>

                        <li class="mb-2">Address:
                            Helper Adda Pvt. Ltd.
                            827-829, 8th floor, gaur city center, gaur chowk .
                            Gautam Buddha Nagar. 201301</li>
                    </ul>
                </div>

                <center>
                    <div class="span12 text-light">
                        <strong>All Services Available In</strong><br>
                        <p>Delhi | Gurugram | Noida | Faridabad | Ghaziabad</p><br>
                        <strong>Stay in touch on</strong><br><br>
                        <p class="social_bookmarks">
                            <a href="https://www.facebook.com/profile.php?id=100091289257763" title="FaceBook" target="_blank"><img src="f.jpg" alt="FaceBook"></a>
                            <a href="#" title="https://twitter.com/helper_adda" target="_blank"><img src="t.jpg" alt="twitter"></a>
                            <!--<a href="https://plus.google.com/114739838267289500615/posts" title="Plus.google" target="_blank"><img src="images/g+.jpg" alt="plus.google"></a>-->
                            <a href="#" title="Linkedin" target="_blank"><img src="in.jpg 	" alt="Linkedin"></a>
                            <a href="#" target="_blank" title="Youtube"><img src="y.jpg" alt="Youtube"></a>
                            <!--<a href="https://www.pinterest.com/RadianceSpace/" target="_blank" title="Pinterest"><img src="images/p.jpg" alt="Pinterest"></a>-->
                            <a href="https://www.instagram.com/p/CqNWnmcvnYx/?igshid=YmMyMTA2M2Y=" target="_blank" title="Instagram"><img src="insta.jpg" alt="Instagram"></a>
                        </p>
                        <p class="copyright">
                        <div> <img src="swachh_bharatB.png" alt="Swachh Bharat" /></div><br>
                        &copy;
                        <? echo date("Y"); ?> Helper Adda<span style="font-size: 6px; vertical-align: top;">&reg;</span>
                        All Rights Reserved.|Designed By alcezo media
                        </p><br>
                    </div>
            </div>
        </div>
        </center>
        </div>

        </div>
        </div>

    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>

</html>
<script>
    AOS.init();
</script>
