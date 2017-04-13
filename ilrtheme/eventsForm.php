
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Events Submission</title>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/css/base.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/ilrtheme/css/subscribe.css">
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/noframework.waypoints.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/responsive-nav.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/vendor/swiper.jquery.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/form-submit.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/popup.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/reveal-animation.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/bg-videos.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/background-parallax.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ilrtheme/js/page-script.js"></script>
    <script type="text/javascript" src="css/datetimepicker_css.js"></script>
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/events.js"></script>
    <script type="text/javascript" src="js/imageUpload.js"></script>
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
        <form id="form_4" class="fr-widget fr-form fr-wf fr_form_4 fr-link" method="POST" action="insertevent.php" data-fr-collect-data="insertevent.php" enctype="multipart/form-data" target="_blank">
            <div id="text_79" class="fr-widget fr-text fr-wf fr_text_bright_center fr_text_79">
                <div class="fr-text">
                    <h2>Events Submission</h2>
                </div>
            </div><!--
         --><div id="input_6" class="fr-widget fr-input fr-wf fr_input_6"> <input type="text" required class="fr_input_6" placeholder="Title of event" name="title">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <textarea type="text" required class="fr_input_11" placeholder="Description of event" name="description"></textarea>
            </div><!--
         -->
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11">
                <input required placeholder="Start Date & Time" type="text" id="startDateAndTime" class="fr_input_11" maxlength="25" size="25" name="start_date_time"/>
                    <img src="images/thumbnail//cal.gif" onclick="javascript:NewCssCal ('startDateAndTime','MMddyyyy','arrow',true,'12', false, 'future')" style="cursor:pointer"/>
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11">
                <input required placeholder="End Date & Time" type="text" id="endDateAndTime" class="fr_input_11" maxlength="25" size="25" name="end_date_time"/>
                    <img src="images/thumbnail//cal.gif" onclick="javascript:NewCssCal ('endDateAndTime','MMddyyyy','arrow',true,'12', false, 'future')" style="cursor:pointer"/>
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input required type="text" class="fr_input_11" placeholder="Location of event" name="location">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="phone" class="fr_input_11" placeholder="Phone number (optional)" name="phone">
            </div>
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11"> <input type="email" class="fr_input_11" placeholder="Your email address (optional)" name="email">
            </div><!--
         -->
            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11 input_fields_wrap">
                <button class="add_field_button">Add More Links</button>
                <div><input class="fr_input_11" placeholder="External link (i.e. www.ilovereno.com)" type="text" name="mytext[]" / ></div>
            </div>

            <div id="input_11" class="fr-widget fr-input fr-wf fr_input_11 form-wrap">
                <input name="__files[]" type="file" multiple="multiple" />
            </div>

            <!--
         --><a id="text_80" class="fr-widget fr-text fr-wf fr_button fr_text_80 fr-link fr-linktype-submit" tabindex="0">
                <div class="fr-text">Submit</div>
            </a><!--
         -->
            <button type="submit" style="display:none"></button>
            <div class="fr-form-submit-popup js-fr-success-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 58" height="58" width="73" version="1.1"><g transform="translate(-13.464 -19.579)" stroke="#35b848" stroke-width="10" fill="none"><polyline points="17 51.8 35.7 70.5 82.2 24" stroke="#35b848"/></g></svg>
                <h6>Thank you!</h6>
                Form has been successfully sent!
            </div>
            <div class="fr-form-submit-popup js-fr-error-form-submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 51" height="51" width="52" version="1.1"><g fill="none" transform="translate(-21.294 -21.687)"><g stroke-width="10" stroke="#ed5550"><g transform="translate(28,29)"><path d="m0.4 0.4 36.7 36.3M1 0.4l36.7 36.3"/><path d="m1 0.4 36.7 36.3" transform="matrix(-1 0 0 1 38.616 0)"/></g></g></g></svg>
                <h6>Error!</h6>
                Error, form was not successfully submitted.
            </div>
        </form>
    </div>
    <div id="footer-assets">
    </div>
</body>

</html>