<html>
    <head>
        <meta charset="utf-8">
        <title>JCK Asset</title>
        <meta name="Description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/generali-logo-big.png">


        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/header-footer.css">
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css">        
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/aos.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

        <link rel="stylesheet" href="css/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css">
        

        <!-- CSS for IE -->
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
        <![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="page-content-wrapper ">
            <!-- TOP MENU -->   
                <?php include '_menu.php'; ?>
            <!-- END TOP MENU --> 
            
            <!--CONTENT -->
            <section class="page contact-page">
                <div class="about-info " id="about-info">
                    <h3 class="color1 text-center py-4 mb-0 title-page">ติดต่อเรา</h3>
                </div>

                <div class="map-top" >
                    <div id="map"></div>
                    <div class="map-info">
                        <h1>JCK Development</h1>
                        <address>
                            ชั้น 16 อาคารมาลีนนท์ ถนนพระราม 4<br>
                            แขวงคลองเตย เขตคลองเตย กรุงเทพฯ 10110
                        </address>
                        <a href="#" class="tel">+662-676-4031-6</a>
                        <a href="#" class="fax">+662-676-4031-6</a>
                        <a href="#" class="email">info@jckasset.com</a>
                        <a href="#" class="direction">Get Direction</a>
                    </div>
                </div>
            
            </section>
            <section class="main-content py-5"  data-aos="fade-down">
                <h3 class="text-center color1">ส่งข้อความถึงเรา</h3>
                <div class="form-service-contact">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control form-contact" name="" id="">
                                        <option value="">ประเภทโครงการ</option>
                                        <option value="">ปรเภทโครงการ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control form-contact" name="" id="">
                                        <option value="">ชื่อโครงการ</option>
                                        <option value="">ชื่อโครงการ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control form-contact" type="text" placeholder="ชื่อ*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control form-contact" type="text" placeholder="สกุล*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control form-contact" type="text" placeholder="อีเมล*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control form-contact" type="text" placeholder="เบอร์โทรศัพท์*">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select class="form-control form-contact" name="" id="">
                                        <option value="">เรื่องติดต่อ*</option>
                                        <option value="">เรื่องติดต่อ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control form-contact"  name="" id="" cols="30" rows="4" placeholder="รายละเอียดที่ต้องการติดต่อ*"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button  data-toggle="modal" data-target="#alertsuccess" class="btn-vio "> ส่ง <img src="images/icon/icon-arrow-right.png" alt=""></button>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="contact-other" >
                <div class="row">
                    <div class="col-sm-6 pr-0"  data-aos="fade-right">
                        <a href="job.php">
                            <img class="w-100" src="images/contact1.png" alt="">
                            <div class="text">ร่วมงานกับเรา</div>
                            <div class="overlay-vilolet"></div>
                        </a>
                    </div>
                    <div class="col-sm-6 pl-0"  data-aos="fade-left">
                        <a href="offer.php">
                            <img class="w-100" src="images/contact2.png" alt="">
                            <div class="text">เสนอขายที่ดิน</div>
                            <div class="overlay-vilolet"></div>
                        </a>
                    </div>
                </div>
            </section>
            <!--END CONTENT -->
            

            <!-- FOOTER -->
                <?php include '_footer.php'; ?>
            <!--END FOOTER -->
        </div>

        <div class="sidebar-nav ">
             <?php include '_sidebar.php'; ?>
        </div>

        <div class="alert-success1">
            <!-- Modal -->
            <div class="modal fade" id="alertsuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                
                <div class="modal-body text-center">
                    <h4 class="modal-title color1 mb-3" id="exampleModalLabel">ข้อความได้ส่งเรียบร้อยแล้ว</h4>
                    เราจะติดต่อกลับโดยเร็วที่สุด หรือหากต้องการ <br>รายละเอียดเพิ่มเติม โทร. 02-676-4031-6 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-vio" data-dismiss="modal">เสร็จสิ้น <img class="ml-3" src="images/icon/icon-arrow-right-wh-sm.png" alt=""></button>
                </div>
                </div>
            </div>
            </div>
        </div>

    </body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script type="text/javascript" src="js/slick.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.revolution.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" ></script>
        <script src="js/custom.js"></script>

        <script>
            var map;
            function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 13.717931, lng: 100.5704233},
            zoom: 10
            });
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9bHZiXOYtn-8xNaShmr0bIB8jQJrab-k&callback=initMap"
        async defer></script>            
</html>      