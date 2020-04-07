<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dark Box</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/player.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="./img/icon/darkmovies.png">
    </head>
    <body>
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Sidebar -->
            <nav class="sidebar">
                <!-- close sidebar menu -->
                <div class="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="logo">
                    
                </div>
                <ul class="list-unstyled menu-elements">
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";} ?> ">
                        <a  href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=="malayalam.php"){echo "active";} ?> ">
                        <a  href="malayalam.php"><i class="fas fa-play"></i> Malayalam</a>
                    </li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=="tamil.php"){echo "active";} ?> ">
                        <a  href="tamil.php"><i class="fas fa-play"></i> Tamil</a>
                    </li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=="english.php"){echo "active";} ?> ">
                        <a  href="english.php"><i class="fas fa-play"></i> English</a>
                    </li>
                      <li class="<?php if(basename($_SERVER['PHP_SELF'])=="hindi.php"){echo "active";} ?> ">
                        <a  href="hindi.php"><i class="fas fa-play"></i> Hindi</a>
                    </li>
                         <li class="<?php if(basename($_SERVER['PHP_SELF'])=="remix.php"){echo "active";} ?> ">
                        <a  href="remix.php"><i class="fas fa-play"></i> Remix</a>
                    </li>
                      <li class="<?php if(basename($_SERVER['PHP_SELF'])=="requested.php"){echo "active";} ?> ">
                        <a  href="requested.php"><i class="fas fa-play"></i> Requested</a>
                    </li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";} ?> ">
                        <a  href="contact.php"><i class="fas fa-envelope"></i> Contact us</a>
                    </li>

                </ul>
              
            </nav>
            <!-- End sidebar -->
            <!-- Dark overlay -->

            <!-- Content -->
            <div class="content">
            
                <!-- open sidebar menu -->
                <a class="btn btn-primary btn-customized open-menu" href="#" role="button"> <i class="fa-bars fa-lg fas"></i> </a>
                 <span class="headh">DARK MUSIC</span>
                <!-- Top content -->
              
            </div>
                    
            <div class="page">

                             <div class="player-wrap" data-url="#" data-title="AL-Qur'an dan terjemahan mp3 By Tunadi">
                    <div class="button">DARK</div>
                    <div class="info">
                        <h1></h1>
                        <p class="action">&nbsp;</p>
                        <p class="title ellipsis"></p>
                    </div>
                    <div class="player">
                        <audio preload></audio>
                        <div class="playpause">
                            <div class="play">
                                <svg viewbox="0 0 14 14">
                                    <path d="M0,0 L0,14 L11,7 L0,0 Z"/>
                                </svg>
                            </div>
                            <div class="pause">
                                <svg viewbox="0 0 14 14">
                                    <path d="M0,14 L4,14 L4,0 L0,0 L0,14 L0,14 Z M8,0 L8,14 L12,14 L12,0 L8,0 L8,0 Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="timer">
                            <div class="current">0:00:00</div>
                            <div>/</div>
                            <div class="duration">0:00:00</div>
                        </div>
                        <div>
                            <input type="range" min="0" max="100" step=".1" value="0" class="seek">
                        </div>
                        <div class="prev">
                            <svg viewbox="0 0 12 12">
                                <path d="M3.5,6 L12,12 L12,0 L3.5,6 Z M0,0 L0,12 L2,12 L2,0 L0,0 L0,0 Z"/>
                            </svg>
                        </div>
                        <div class="next">
                            <svg viewbox="0 0 12 12">
                                <path d="M0,12 L8.5,6 L0,0 L0,12 L0,12 Z M10,0 L10,12 L12,12 L12,0 L10,0 L10,0 Z"/>
                            </svg>
                        </div>
                    </div>
                </div>