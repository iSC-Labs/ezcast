<link rel="shortcut icon" type="image/ico" href="images/Generale/favicon.ico" />
<link rel="apple-touch-icon" href="images/ipadIcon.png" /> 
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/dashboard.css" />
<link rel="stylesheet" type="text/css" href="commons/css/common_style.css" />
<link href="css/uploadify.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="jQuery-DateTimePicker/jquery.simple-dtpicker.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/styleHelp.css" />
<link rel="stylesheet" type="text/css" href="css/style_podman.css" />

<?php
    global $apache_documentroot;
    $custom_folder = "$apache_documentroot/ezmanager/css/custom/";
    $dir = new DirectoryIterator($custom_folder);
    foreach ($dir as $fileinfo) {
        if ($fileinfo->isFile()) {
            echo '<link rel="stylesheet" type="text/css" href="css/custom/'.$fileinfo->getFilename().'"/>';
        }
    }
?>
        <script type="text/javascript" src="js/AppearDissapear.js"></script>
        <script type="text/javascript" src="js/hover.js"></script>
        <script type="text/javascript" src="js/httpRequest.js"></script>
        <script type="text/javascript" src="js/jQuery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery.colorbox.js"></script>
        <script type="text/javascript" src="js/upload.js"></script>
        <script type="text/javascript" src="js/clipboard.js"></script>
        <script src="./js/highstock.js" async></script>        
        <script type="text/javascript" src="js/AppearDissapear.js"></script>
        <script type="text/javascript" src="js/hover.js"></script>
        <script type="text/javascript" src="js/combo_boxes.js"></script>        
        <script type="text/javascript" src="jQuery-DateTimePicker/jquery.simple-dtpicker.js"></script>
        
        <!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.ezcast.uclouvain.be"]);
  _paq.push(["setDomains", ["*.ezcast.uclouvain.be"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//stats.uclouvain.be/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '73']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//stats.uclouvain.be/piwik.php?idsite=73&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->