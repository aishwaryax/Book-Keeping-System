<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bhavishya Foundation: Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('nav-item-active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('nav-item-active');
    });
</script> 
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="admin_images/sb.png">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                      BHAVISHYA FOUNDATION
                    </a>
                </div>
                <ul class="nav">
                    @if(Request::url()=='http://bfa.test/staff')
                        <li class="nav-item-active" href="/staff">
                    @else
                    <li>
                    @endif
                        <a class="nav-link" href="/staff">
                            <img width=20 height=20 src="admin_images/staff.png">
                            <p>Staff</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/books">
                            <img width=20 height=20 src="admin_images/library.png"></img>
                            <p>Library</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="/books-approve">
                            <img width=20 height=20 src="admin_images/book_rent.png"></img>
                            <p>Approve book rental</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/books-approve">
                            <img width=20 height=20 src="admin_images/book_issue.png"></img>
                            <p>Approve book issue</p>
                        </a>
                    </li>

                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="/add-staff">
                            <img width=20 height=20 src="admin_images/staff.png"></img>
                            <p>Add Staff</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/admin">Admin Section</a>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                           
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
                    @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/about-us">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="/gallery">
                                    Gallery
                                </a>
                            </li>
                        </ul>
                       
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    
</body>

</html>
