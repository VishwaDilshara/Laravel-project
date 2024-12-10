<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>NoLimits.lk</title>
    <style>
        .custom-navbar {
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand img {
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.05);
        }
        .nav-link {
            font-weight: 500;
            color: #333 !important;
            padding: 0.5rem 1rem !important;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .search-form {
            position: relative;
        }
        .search-form .form-control {
            border-radius: 20px;
            padding-right: 40px;
        }
        .search-form .btn {
            border-radius: 20px;
            margin-left: 5px;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 40px;
        }
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .category-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .category-card img {
            transition: transform 0.3s ease;
        }
        .category-card:hover img {
            transform: scale(1.05);
        }
        .category-card img.fashion-img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }
        .category-card img.electronics-img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }
        .category-card img.home-living-img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }
        .category-card img.sports-img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        } 
        .product-card .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
            object-position: center;
        }
        .special-offer-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            object-position: center;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 40px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="NoLimits.lk Logo" height="70" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gift Ideas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Today Deals</a>
                    </li>
                </ul>
                <form class="d-flex me-3 search-form">
                    <input class="form-control" type="search" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-outline-primary">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Hero Section -->
        <div class="hero-section text-center rounded">
            <div class="container">
                <h1 class="display-4">Welcome to NoLimits.lk</h1>
                <p class="lead">Discover Amazing Deals on Your Favorite Products</p>
                <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
            </div>
        </div>

        <!-- Featured Categories -->
        <div class="mb-5">
            <h2 class="mb-4">Shop by Category</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="category-card">
                        <img src="https://www.webibazaar.com/image/cache/catalog/product/52009002-quixly-woo/00-350x350.jpg" class="img-fluid rounded electronics-img" alt="Electronics">
                        <div class="p-3">
                            <h5 class="mb-0">Electronics</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/HK_%E4%B8%AD%E7%92%B0_Central_%E7%9A%87%E5%90%8E%E5%A4%A7%E9%81%93%E4%B8%AD_Queen%27s_Road_Central_Crawford_House_mall_ZARA_clothing_shop_July_2022_Px3_02.jpg/800px-HK_%E4%B8%AD%E7%92%B0_Central_%E7%9A%87%E5%90%8E%E5%A4%A7%E9%81%93%E4%B8%AD_Queen%27s_Road_Central_Crawford_House_mall_ZARA_clothing_shop_July_2022_Px3_02.jpg" class="img-fluid rounded fashion-img" alt="Fashion">
                        <div class="p-3">
                            <h5 class="mb-0">Fashion</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <img src="https://www.sofabedsltd.co.uk/AdobeStock_246454872_Preview.jpeg" class="img-fluid rounded home-living-img" alt="Home & Living">
                        <div class="p-3">
                            <h5 class="mb-0">Home & Living</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <img src="https://media.istockphoto.com/id/1341947720/photo/outdoor-shop.jpg?s=612x612&w=0&k=20&c=93ivqfBYzv6wIaIo7tElLBAe4BXdFw2NVwXjPhGf5PQ=" class="img-fluid rounded sports-img" alt="Sports">
                        <div class="p-3">
                            <h5 class="mb-0">Sports</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="mb-5">
            <h2 class="mb-4">Featured Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://quickee.com/wp-content/uploads/2023/06/16.jpg" class="card-img-top" alt="Nike Sports Shoes">
                        <div class="card-body">
                            <h5 class="card-title">Nike Sports Shoes</h5>
                            <p class="card-text text-muted">$129.99</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Add to Cart</button>
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://banana.lk/wp-content/uploads/2023/06/samsung-galaxy-s23-ultra.jpg" class="card-img-top" alt="Samsung Galaxy S23">
                        <div class="card-body">
                            <h5 class="card-title">Samsung Galaxy S23</h5>
                            <p class="card-text text-muted">$899.99</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Add to Cart</button>
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://www.ikea.com/us/en/images/products/malm-desk-white__0735967_pe740301_s5.jpg" class="card-img-top" alt="MALM Desk">
                        <div class="card-body">
                            <h5 class="card-title">MALM Desk</h5>
                            <p class="card-text text-muted">$199.99</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Add to Cart</button>
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://shop.thevaultluxuryresale.com/cdn/shop/collections/shutterstock_526769962.jpg?v=1718214237" class="card-img-top" alt="Designer Handbag">
                        <div class="card-body">
                            <h5 class="card-title">Designer Handbag</h5>
                            <p class="card-text text-muted">$299.99</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary">Add to Cart</button>
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Special Offers -->
        <div class="mb-5">
            <h2 class="mb-4">Special Offers</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/004/299/835/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-free-vector.jpg" class="img-fluid rounded-start special-offer-img" alt="Special Offer">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Special Offer 1</h5>
                                    <p class="card-text">Get up to 50% off on selected items!</p>
                                    <a href="#" class="btn btn-outline-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://cdn.shopify.com/s/files/1/0666/0784/1598/files/Free_Shipping_icon_1659293995_480x480_9c42c0e5-abdf-492e-8d16-50dd0334fac9_480x480.webp?v=1679697285" class="img-fluid rounded-start special-offer-img" alt="Special Offer">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Special Offer 2</h5>
                                    <p class="card-text">Free shipping on orders over $100!</p>
                                    <a href="#" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p>Your trusted online shopping destination for quality products at great prices.</p>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Connect With Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#"><i class="bi bi-twitter fs-4"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 NoLimits.lk. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>