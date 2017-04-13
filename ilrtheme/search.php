<?php session_start(); include "db_v2.php" ?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <title>Detailed Events</title>
    <meta name="DC.title" content="Detailed Events">
    <meta property="og:title" content="Detailed Events">
    <meta name="twitter:title" content="Detailed Events">
    <meta property="og:image" content="images/froont.png">
    <meta name="twitter:image" content="images/froont.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Detailed Events">
    <meta name="DC.language" scheme="ISO639-1" content="en">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/search.css">
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/noframework.waypoints.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/responsive-nav.js"></script>
    <script type="text/javascript" src="vendor/swiper.jquery.js"></script>
    <script type="text/javascript" src="js/form-submit.js"></script>
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/reveal-animation.js"></script>
    <script type="text/javascript" src="js/bg-videos.js"></script>
    <script type="text/javascript" src="js/background-parallax.js"></script>
    <script type="text/javascript" src="js/page-script.js"></script>
    <script type="text/javascript">
        var fonts = {
            "Montserrat": {
                "family": "Montserrat",
                "source": "google",
                "subsets": [
                    "latin"
                ],
                "variants": [
                    "700",
                    "regular"
                ]
            },
            "Roboto": {
                "family": "Roboto",
                "source": "google",
                "subsets": [
                    "cyrillic",
                    "cyrillic-ext",
                    "greek",
                    "greek-ext",
                    "latin",
                    "latin-ext",
                    "vietnamese"
                ],
                "variants": [
                    "100",
                    "100italic",
                    "300",
                    "300italic",
                    "500",
                    "500italic",
                    "700",
                    "700italic",
                    "900",
                    "900italic",
                    "italic",
                    "regular"
                ]
            }
        };
    </script>
    <script type="text/javascript" src="vendor/webfontloader.js"></script>
    <script type="text/javascript" src="js/fontloader.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="b-content hide-footer">
        <div id="hero_centered" class="fr-widget fr-container fr_hero_centered">
        </div><!--
     --><div id="content_14" class="fr-widget fr-container fr_content_14">
            <div id="c14_container" class="fr-widget fr-container fr_c14_container">
                <div id="text_62" class="fr-widget fr-text fr-wf fr_text_large_dark_center fr_text_62">
                    <div class="fr-text"></div>
                </div><!--
             --><div id="c14_2_column_grid" class="fr-widget fr-grid fr_c14_2_column_grid">
                    <div id="c14_text" class="fr-widget fr-container fr_c14_text">
                        <div id="c14_line" class="fr-widget fr-container fr_c14_line">
                        </div><!--
                     --><div id="text_63" class="fr-widget fr-text fr-wf fr_text_63">
                            <div class="fr-text">
                                <?php 
                                    $id = $_GET["id"];
                                    $row = findEvent( $id );
                                    echo '<h4>' . $row["title"] . '</h4>';
                                    echo '<p>' . $row["description"] . '</p>';
                                ?>
                            </div>
                        </div>
                    </div><!--
                 --><div id="c14_container_two" class="fr-widget fr-container fr_c14_container_two">
                        <div id="c14_line_two" class="fr-widget fr-container fr_c14_line_two">
                        </div><!--
                     --><div id="text_64" class="fr-widget fr-text fr-wf fr_text_64">
                            <div class="fr-text">
                                <h4>Information</h4>
                                <p>When: April, 13th @ 11:00AM - 12:15PM</p>
                                <p>Where: Knowledge Center @ University of Nevada, Reno</p>
                                <p>For more information: 775-784-1110</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-assets">
    </div>
</body>

</html>