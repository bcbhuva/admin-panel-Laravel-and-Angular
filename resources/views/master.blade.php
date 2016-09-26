<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="client/bower_components/angular-toastr/dist/angular-toastr.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <!-- <link rel="stylesheet" href="styles/main.css"> -->
    <link rel="stylesheet" href="client/app/styles/home-styles.css">
    <link rel="stylesheet" href="client/app/styles/login-styles.css">
    <link rel="stylesheet" href="client/app/styles/table-styles.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" media="screen" title="no title" charset="utf-8">

    <!-- endbuild -->
  </head>
  <body ng-app="apiClientApp">
    <!--[if lte IE 8]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <div ng-view=""></div>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
       (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
       r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
       }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>
    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="client/bower_components/angular/angular.js"></script>
    <script src="client/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="client/bower_components/angular-animate/angular-animate.js"></script>
    <script src="client/bower_components/angular-aria/angular-aria.js"></script>
    <script src="client/bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="client/bower_components/angular-messages/angular-messages.js"></script>
    <script src="client/bower_components/angular-resource/angular-resource.js"></script>
    <script src="client/bower_components/angular-route/angular-route.js"></script>
    <script src="client/bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="client/bower_components/angular-touch/angular-touch.js"></script>
    <script src="client/bower_components/satellizer/dist/satellizer.js"></script>
    <script src="client/bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" charset="utf-8"></script>

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="client/app/scripts/app.js"></script>
        <script src="client/app/scripts/controllers/main.js"></script>
        <script src="client/app/scripts/controllers/about.js"></script>
        <script src="client/app/scripts/controllers/loginController.js"></script>
        <script src="client/app/scripts/services/authService.js"></script>
        <!-- endbuild -->
</body>
</html>
