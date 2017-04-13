<?php session_start(); include "db_v2.php"; ?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <title>Events</title>
    <meta name="DC.title" content="Events">
    <meta property="og:title" content="Events">
    <meta name="twitter:title" content="Events">
    <meta property="og:image" content="images/froont.png">
    <meta name="twitter:image" content="images/froont.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Events">
    <meta name="DC.language" scheme="ISO639-1" content="en">
    <link rel="stylesheet" href="/wp-content/themes/ilrtheme/css/base.css">
    <link rel="stylesheet" href="/wp-content/themes/ilrtheme/css/events.css">
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
<?php
    $result = getEventDateRange( "01-01-2017", "12-31-2017" );
    for( $i = 1; $i <= $result->num_rows; $i++ )
    {
        $row = $result->fetch_assoc();
        if( $row != 0 )
        {
             echo '<div class="b-content hide-footer">
                     <div id="content_25" class="fr-widget fr-container fr_content_25">
                      <div id="cnt03_column_grid_3" class="fr-widget fr-grid fr_cnt03_column_grid_3">
                        <div id="cnt03_image_3" class="fr-widget fr-container fr_cnt03_image_3">
                        </div>
                          <div id="cnt03_paragraph_3" class="fr-widget fr-container fr_cnt03_paragraph_3">
                            <div id="text_163" class="fr-widget fr-text fr-wf fr_text_163">
                                <div class="fr-text">' .
                                       '<h2>' . $row["title"] . '</h2>' .
                                       '<p>' . $row["description"] . '</p>' .
                                '</div>
                            </div>
                              <a id="text_162" class="fr-widget fr-text fr-wf fr_button_border_black fr_text_162 fr-link" method="post" href="../ilrtheme/search.php?id=' . $row["id"] . '">
                                <div class="fr-text">Learn more</div>
                              </a>
                          </div>
                        </div>
                     </div>
                </div>';
        }
    }
?>

</body>

</html>