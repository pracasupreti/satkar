<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SriYog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <!-- slick slider -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/select2.min.css">


</head>

<body>



    <!-- =======================================
     ========== Global header for Sriyog.com goes here 
    =========================== -->


    <?php include("header.php"); ?>

    <!-- ==================================
    ==============about main container starts
  ================= -->

    <!-- press page heading  -->
    <section class="container-fluid border-bottom bg-danger">
        <section class="container about-bar pt-5 pb-5">
            <h1>Calculator</h1>
        </section>
    </section>
    <!-- about page sublinks end -->

    <!-- press page body -->
    <section class="container faq-container pt-5">

    <!-- Content Goes here -->
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>

        
    </section>










    <!-- press page body ends -->

    <?php include("footer.php"); ?>

    <script>
        function openTab() {
            var params = getUrlVars();
            $('#wf-tab a[href="#' + params["tab"] + '"]').tab("show");
            $("#" + params["tab"] + " #" + params["q"]).collapse();
            if ($("#" + params["q"]).length > 0) $("html, body").animate({
                scrollTop: $("#" + params["q"]).offset().top - 150
            }, 2e3)
        }

        function setNavigation() {
            var path = window.location.pathname;
            $(".secondary-nav-menu li a").each(function() {
                var href = $(this).attr("href");
                if (path === href) {
                    $(this).closest("li").addClass("active")
                }
            })
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>