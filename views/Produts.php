<!doctype html>
<html lang="en">
<head>
    <title>Prouducts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local Sources -->
    <link rel="stylesheet" href="/An/assets/css/styles.css">
    <script src="/An/assets/scripts/scripts.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid debug">
    <!--Page Title Bar-->
    <div id="page-title-bar" class="page-title-bar">
        <div class="container">
            <nav class="crumb-bread">
                <ol>
                    <li class="crumb-bread"><a href="">Fashion</a> </li>
                    <li class="crumb-bread"><a href="">Products</a> </li>
                    <li class="crumb-bread">For women</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="debug row">
    <!--Left side menu-->
        <div class="col-sm-3 debug side-menu">
            <!--Categories-->
            <div id="MenuCategory" class="debug">
                <div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span>PRODUCT CATEGORIES</span>
                </div>
                <div class="side-menu-item list-item">
                    <ol>
                        <li class="list-item">
                            <a href="">
                                ACCESSORIES
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="">
                                FOR CHILDREN
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="">
                                FOR MEN
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="">
                                FOR WOMEN
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--Prices-->
            <div id="MenuPrice" class="debug">
                <div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span>FILTER BY PRICE</span>
                </div>
                <div class="rangeslider side-menu-item list-item debug">
                    <input type="range" min="" max="" value="10"
                           class="myslider" id="sliderRange">
                </div>
            </div>
            <!--Brands-->
            <div id="MenuBrand" class="debug">
                <div class="side-menu-item side-menu-header debug">
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <span>PRODUCT BRANDS</span>
                </div>
                <div id="list-brands" class="side-menu-item list-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="brand-item" value="checkedValue">
                            <?php

                            ?>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!--Product page-->
        <div class="col-sm-9 debug">
            <div id="filter"></div>

        </div>
    </div>
</div>
<script>
    function Search_product_brand();
</script>
</body>
</html>