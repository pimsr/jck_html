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
            <section class="page rent-page">
               <div class="row">
                   <div class="col-lg-5">
                       <img class="img-fluid w-100" src="images/rent.png" alt="">
                   </div>
                   <div class="col-lg-7 align-self-center">
                       <div class="px-4 rent-right">
                            <h3 class="mb-3 color1 text-center ">ลงทะเบียนติดต่อเช่าห้องในโครงการ</h3>
                            <div class="row">
                                
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control form-contact" type="text" placeholder="งบสำหรับเช่า*">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control form-contact" type="text" placeholder="ระยะเวลาสำหรับเช่า*">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control form-contact" name="" id="">
                                            <option value="">รูปแบบห้องที่สนใจ*</option>
                                            <option value="">รูปแบบห้องที่สนใจ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group ">
                                        <input type="text" class="form-control form-contact" placeholder="โครงการที่สนใจ" aria-label="โครงการที่สนใจ" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <botton data-toggle="modal" data-target="#alertsuccess" class="input-group-text btn-vio" id="basic-addon2">ส่ง <img class="ml-4" src="images/icon/icon-arrow-right.png" alt=""></botton>
                                        </div>
                                    </div>
                                </div>
                                

                                
                            </div>
                        </div>
                   </div>
               </div>

               
            </section>

            <!--END CONTENT -->
            

            <!-- FOOTER -->
                <?php include '_footer.php'; ?>
            <!--END FOOTER -->

            <div class="alert-success1">
                <!-- Modal -->
                <div class="modal fade" id="alertsuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    
                    <div class="modal-body text-center">
                        <h4 class="modal-title color1 mb-3" id="exampleModalLabel">ลงทะเบียนติดต่อเช่าห้อง<br>ในโครงการสำเร็จ</h4>
                        เราจะติดต่อกลับโดยเร็วที่สุด หรือหากต้องการ <br>รายละเอียดเพิ่มเติม โทร. 02-676-4031-6 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-vio" data-dismiss="modal">เสร็จสิ้น <img class="ml-3" src="images/icon/icon-arrow-right-wh-sm.png" alt=""></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        <div class="sidebar-nav ">
             <?php include '_sidebar.php'; ?>
        </div>



    </body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/custom.js"></script>
           
</html>      