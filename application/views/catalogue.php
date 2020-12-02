<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Catalogue Optieyes</title>
    <script type="text/javascript" src="static/assets/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="static/assets/wow_book/wow_book.min.js"></script>
    <link rel="stylesheet" href="static/assets/wow_book/wow_book.css" type="text/css" />
    <script type="text/javascript" src="static/assets/wow_book/pdf.combined.min.js"></script>
    <script type="text/javascript" src="static/assets/wow_book/wow_book.min.js"></script>
    <style>
        .wowbook-container-full {
            background: #222;
        }
    </style>
</head>
<body>

<div id="book"></div>

<script>


    $(function(){
        var bookOptions = {
            height   : 1000
            ,width    : 800
            // ,maxWidth : 800
            ,maxHeight : 1000
            ,centeredWhenClosed : true
            ,hardcovers : true
            ,pageNumbers: false
            ,toolbar : "lastLeft, left, right, lastRight, toc, zoomin, zoomout, slideshow, flipsound, fullscreen, thumbnails, download"
            ,thumbnailsPosition : 'left'
            ,responsiveHandleWidth : 50
            ,thumbnails : true
            ,container: window
            ,containerPadding: "20px"
            ,pdf: "static/optieyes-2017.pdf"
        };

        $('#book').wowBook( bookOptions );

    })

</script>

</body>
</html>