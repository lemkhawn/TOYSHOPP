<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/All-Product.css">

    <title>L'KHANH</title>
</head>
<style>
    .adding{
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 20px;
        margin-top: 20px;
    }
    .adding form{
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 20px;
        margin-top: 20px;
    }
    .adding form h2{
        text-align: center;
        font-size: 30px;
        color: #000;
        margin-bottom: 20px;
    }
    .adding form input{
        width: 100%;
        height: 40px;
        border: 1px solid #000;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .adding form textarea{
        width: 100%;
        height: 100px;
        border: 1px solid #000;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .adding form input[type="submit"]{
        width: 100%;
        height: 40px;
        border: 1px solid #000;
        border-radius: 5px;
        margin-bottom: 20px;
        background: #000;
        color: #fff;
    }
</style>
<body>
    <header>
        <div class="head--left">
            <!-- LOGO -->
            <img src="./img/1.png" alt="LOGO">
        </div>
         
        <div class="head--right">
            <div class="head--right up">
                    <div class="socialmedia">
                        <nav >
                            <a href="">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-twitch"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </nav>
                    </div>
                    <div class="login-register">
                        <nav>
                            <a href="./login.php">Login</a>
                            <a href="./register.php">Register</a>
                        </nav>
                    </div>
            </div>

            <div class="head--right down">
                <nav class="navbar">
                    <a href="./index.php">Home</a>
                    <a href="#">Toys</a>
                    <a href="">Accessories</a>
                    <a href="">About us</a>
                    <a href="adding.php">Adding</a>
                </nav>
            </div>
        </div>
    </header>




    <!-- Products 
    <div class="container-fluid">
            <div class="categories">
                <nav class="Gender">
                    <a href="">Unisex</a>
                    <a href="">Man</a>
                    <a href="./Tee.php">Woman</a>
                </nav>
                <hr>
                <h1>Sneaker</h1>
                <ul class="sneaker-menu">
                    <!-- <li>Vans</li>
                    <li>Converse</li>
                    <li>Nike</li>
                    <li>Adidas</li> 
                        <li><a href="./Vans.php">Vans</a></li>
                        <li><a href="./Nike.php">Nike</a></li>
                        <li>   <a href="./Adidas.php">Adidas</a></li>
                        <li> <a href="./Converse.php">Converse</a></li>
                     
                       
                </ul>
                <hr>
                <h1>Clothing</h1>
                <ul class="sneaker-menu">
                    <li>T-Shirt</li>
                    <li>SweatShirt</li>
                    <li>Jacket</li>
                    <li>Pant</li>
                </ul>
                <hr>
                <h1>Accessories</h1>
                <ul class="sneaker-menu">
                    <li>Hat</li>
                    <li>Bag</li>
                    <li>Back-Pack</li>
                    <li>Shoeslaces</li>
                </ul>
            </div>

       <!-- PRODCUCT -->
       <div class="product">
            <h1>ALL PRODUCTS</h1>
                <div class="product allpro">
                    <?PHP 
                        include("connect.php");
                        $sql = "SELECT * FROM toy";
                        $result = mysqli_query($connect, $sql);

                        //t??m v?? tr??? v??? k???t qu??? d?????i d???ng 1 m???ng
                        // d??ng mysql_fetch_array or mysql_fetch_assoc

                        while($row =mysqli_fetch_array($result)){
                            // l???y d??? li???u t??? c??c d??ng truy v???n ???????c trong CSDL ra
                            $toy_id = $row['toy_id'];
                            $toy_name = $row['toy_name'];
                            $toy_price =$row['toy_price'];
                            $toy_image =$row['toy_image'];
                            $toy_description = $row['toy_description'];

                            echo" <div class='single_toy'>
                            <a href='detail_product.php?id=$toy_id'>
                            <img src='img/$toy_image' />
                            <h4> $toy_name </h4>
                            <p> Price : $toy_price $ </p>
                            </a>
                            </div>
                            ";
                            }     
                            // remove clothing_des and button cart
                    ?>
                </div>
        </div>
    </div>





    <!-- FOOTER -->
    <footer class="footer-distributed">
    
        <div class="footer-left">

            <img src="./img/1.png" alt="LOGO">

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                
                <a href="#">Blog</a>
            
                <a href="#">Pricing</a>
            
                <a href="#">About</a>
                
                <a href="#">Faq</a>
                
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">L'KHANH ?? 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="bi bi-map"></i>
                <p><span>No 0308 Ba Vi</span> BA VI, HA NOI</p>
            </div>

            <div>
                <i class="bi bi-telephone"></i>
                <p>+84.962.62.1911</p>
            </div>

            <div>
                <i class="bi bi-envelope"></i>
                <p><a href="">khanhnlbhbf200025@fpt.edu.vn</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About L'KHANH</span>
                We alwas care your oufit, care mix-ways that you put on your body. DYNAMIC | FASHION | TRENDY.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-twitch"></i></a>

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
