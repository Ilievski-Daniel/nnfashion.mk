<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="NNFashion - Online butik, Maska, Zenska, Detska i Bebeska garderoba" />
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce, butik" />
    <meta name="author" content="codecarnival" />

    <title>NNFashion - Modern boutique</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap"
        rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="main-header-wrapper position-relative">
            <div class="header-top">
                <div class="container pt--0 pb--0">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-top-align">
                                <div class="header-top-align-start">
                                    <div class="desc">
                                        <p><b>Бесплатна достава низ цела Македонија 🇲🇰<b></p>
                                    </div>
                                </div>
                                <div class="header-top-align-end">
                                    <div class="header-info-items">
                                        <div class="info-items">
                                            <ul>
                                                <li class="number"><i class="fa fa-phone"></i><a
                                                        href="tel:078209101">078/209-101</a></li>
                                                <li class="email"><i class="fa fa-envelope"></i><a
                                                        href="mailto:info@nnfashion.mk">info@nnfashion.mk</a></li>
                                                <li class="account"><i class="fa fa-user"></i><a
                                                        href="/login">Account</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <ul>
                        <li><a href="{{ route('categories') }}">-Categories</a></li>
                        <li><a href="{{ route('products') }}">-Products</a></li>
                        <li><a href="{{ route('sizes') }}">-Sizes</a></li>
                        <li><a href="{{ route('colors') }}">-Colors</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <button type="submit">
                        <a href="{{ route('category.create') }}">Create categories</a>
                    </button>
                    <br>
                    <p>Categories:</p> <br>
                    @forelse ($categories as $category)
                        {{ $category->name }} <br>
                        <button class="submit">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-green-500">Edit category</a>
                        </button>
                        <br>
                        <form action="{{ route('categories.delete', $category->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="submit" value="Delete category">
                        </form>
                    @empty
                        <p>There are no categories</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</body>