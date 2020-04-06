<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="img/icon/darkmovies.png"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Hridhayakavadam</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="page">
                <div class="player-wrap" data-url="#" data-title="AL-Qur'an dan terjemahan mp3 By Tunadi">
                    <div class="button">DARK</div>
                    <div class="info">
                        <h1>Dark Box Music</h1>
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
                <div id="myDIV" style="background: linear-gradient(90deg, #ADA996, #F2F2F2, #DBDBDB, #EAEAEA); width: 100%; margin-bottom: 2.5em; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                    <button type="button"  style="border-color: #fe6506;float: left;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "activer";} ?> ">
                        <a href="index.php"><b class="<?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "wc";} ?>">Home</b></a>
                    </button>

                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="malayalam.php"){echo "activer";} ?> ">
                       <a href="malayalam.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="malayalam.php"){echo "wc";} ?>">Malayalam</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="tamil.php"){echo "activer";} ?>">

                        <a href="tamil.php"><b class="<?php if(basename($_SERVER['PHP_SELF'])=="tamil.php"){echo "wc";} ?>">Tamil</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="english.php"){echo "activer";} ?> ">
                       <a href="english.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="english.php"){echo "wc";} ?>">English</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="hindi.php"){echo "activer";} ?> ">
                       <a href="hindi.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="hindi.php"){echo "wc";} ?>">Hindi</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="remix.php"){echo "activer";} ?> ">
                       <a href="remix.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="remix.php"){echo "wc";} ?>">Remix</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="requested.php"){echo "activer";} ?> ">
                       <a href="requested.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="requested.php"){echo "wc";} ?>">Requested</b></a>
                    </button>
                    <button type="button " style="border-color: #fe6506;float: left;margin:0;" class="btn btn-light btn-sm btn-block <?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "activer";} ?> ">
                       <a href="contact.php"> <b class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "wc";} ?>">Contact</b></a>
                    </button>
                </div>
             