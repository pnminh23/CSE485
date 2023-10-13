<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="public/slick-1.8.1/slick/slick-theme.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                  <img class="logo" src="public/image/1music-for-life-logo.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Đăng nhập</a>
                  </li>
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
        <div class="content ">
          <div class="slider">
            
            <div class="slick-item">
              <img src="public/image/slider_banner_smart_tv___desktop__1_-7ff87213119c-1619607349743-r95LBPNu.png" alt="">
            </div>
            <div class="slick-item">
              <img src="public/image/maxresdefault.jpg" alt="">
            </div>
            <div class="slick-item item-3">
              <img src="public/image/banner-hoa-minzy.jpg" alt="">
            </div>
            <div class="slick-item">
              <img src="public/image/maxresdefault (1).jpg" alt="">
            </div>
            
          </div>
          <div class="song-favorites container-fluid">
              <h3 class="sub text-center my-5">Top bài hát yêu thích</h3>
              <div class="list-item d-flex justify-content-between flex-wrap">
                <div class="card item item1 m-3" style="width: 25rem;">
                  <img src="public/image/item1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Quá bảnh</h5>
                    
                  </div>
                </div>
                <div class="card item item1 m-3" style="width: 25rem;">
                  <img src="public/image/item2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Người miền núi chất</h5>
                    
                  </div>
                </div>
                <div class="card item item1 m-3" style="width: 25rem;">
                  <img src="public/image/item3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Ông bà già tao lo hết</h5>
                    
                  </div>
                </div>
                <div class="card item item1 m-3" style="width: 25rem;">
                  <img src="public/image/item4.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">À lôi</h5>
                    
                  </div>
                </div>
                <div class="card item item1 m-3" style="width: 25rem;">
                  <img src="public/image/item5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">2h</h5>
                    
                  </div>
                </div>                
              </div>
          </div>
        </div>
        <div class="footer"></div>
    <script src="public/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <script src= "public/slick-1.8.1/slick/slick.js"></script>
    
    <script>
        $('.slider').slick({

          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: false,
          
        });
    </script>
</body>
</html>