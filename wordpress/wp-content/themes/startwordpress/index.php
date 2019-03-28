<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Installing Wordpress on your local computer:</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Installing Wordpress</h1>
        <p class="lead blog-description"> Easy steps to download and setup wordpress.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">Steps:</h2>
                <p class="blog-post-meta">March 15, 2019 by <a href="#">Soha Kolia</a></p>

                <ol>Create a database go to View, located at the top toolbar, from the dropdown select tool windows select Database from tool windows.

                    On the right database screen will open up click the plus button underneath where it says database

                        select mySQL. Once you database is selected enter the following script into your console
                    </ol>


<ol>Create DATABASE wordpress3; CREATE user 'wordpress3'@'localhost' IDENTIFIED by 'password'; GRANT ALL PRIVILEGES ON wordpress3.* TO 'wordpress3'@'localhost'; FLUSH PRIVILEGES;

        then select run and select the first part of the code then run the second part of the code

        Create new wordpress Copy the contents of the WordPress.zip into the phpstormProjects directory on your computer copy and paste the wp-config-example.php file in wordpress folder in the same folder and rename it wp-config.php

        Edit wp-config.php open the wp-config.php file with your text editor change the code so it contains the same username, password, and database you just created
    </ol>
                <ol><p>Example{

                        /** The name of the database for WordPress */ define('DB_NAME', 'wordpress3');

                        /** MySQL database username */ define('DB_USER', 'wordpress3');

                        /** MySQL database password */ define('DB_PASSWORD', 'password');

                        /** MySQL hostname */ define('DB_HOST', '127.0.0.1');"

                        }</p></ol>
                <ol><p>setup run configuration at the top toolbar go to run select edit configurations select the pluss button and add a PHP Built-in web server where it says document root press the folder button and provide the path to your wordpress directory in your PhpstormProjects directory

                        Example path {C:\Users"Username"\PhpstormProjects"Your wordpress directory name"}

                        set the port to 8080. Press apply and hit okay. change interpreter to the python you are running 7.3 or 7.2

                        Run Website press the run button to start your server open your browser in your address bar and type in the address localhost:8080

                        You should then be directed to the wordpress installation screen</p></ol>

                <h3>Making a git repository and collaborating:</h3>
                <ol><p>Create a new github repository. One member of the group creates a new repository on github. Thus person is the owner of the repository and has the master branch.</p></ol>
            <ol><p>Upload the wordpress project in PHPStorm to github. In PHPStorm go to VCS| Import into Version Control| Share Project on Github</p></ol>
                <ol><p>Add collaborator on Github. Go to Settings| Collaborators enter your github password when asked. In the Collaborator window search for you partners github username and add them. Your partner must have received an email, they will need to accept the invitation and confirm.</p></ol>
<ol> <p>Cloning the repository. The second member of the group needs to copy the https link from the github repository that the first person made. Go to PHPStorm VCS| Checkout from Version Control| Git. In the window that pops up, paste the link and clone the repository.</p></ol>
 <ol><p>Create another branch. The second person needs to create another branch so that they can commit and push the changes that they make to the project. In the bottom right corner of PHPStorm click where it says Git:master and make a new branch.</p></ol>
<ol><p>Merge the branches. After all the changes are commited and pushed to github by both members the owner of the repository can go to github, navigate to branches| all branches| merge.</p></ol>
<h3>Troubleshooting Tips: </h3>
                <ol><p>Increase wait time
                        make sure to set max_execution_time to 120 in your php.ini you can do this by going to your PHP installation folder in your PHP7 folder in your C: (or wherever you installed it) open the php.ini file once the file is open press ctrl+f open word search type in max, search through the keywords until you find change max_execution_time to 120 change max_input_time to 60 if not already set to 60</p></ol>
<ol><p>Allocate more Memory in the same file make sure that your memory_limit is set to 1G instead of 128M</p></ol>
                <ol><p>Uncomment certain dll's make sure you have the following dll's uncommented { extension=php_gd2.dll extension=php_curl.dll extension=php_mbstring.dll extension=php_openssl.dll extension=php_pdo_mysql.dll extension=php_pdo_sqlite.dll extension=php_sockets.dll extension=mysqli.dll } Also for where it reads { ; extension_dir = "ext" } remove the ; so the line reads extension_dir = "ext"</p></ol>
<ol><p>You might get an error asking you to fix the interpreter. To fix this error go to Run| Edit Configuration click where it says fix. Choose PHP version 7 or higher.</p></ol>

                <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->


            <div class="sidebar-module sidebar">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>