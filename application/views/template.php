<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Andrey Huntley Website</title>
  <meta name="description" content="Andrey Huntley Website">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="./favicon.ico" >

  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href="<?php echo site_url('asset/css/grid.css')?>" rel="stylesheet" />
  <link href="<?php echo site_url('asset/css/main.css')?>" rel="stylesheet" />
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
      <script src="js/vendor/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="page-wrap">

  <header class="grid-whole  header-top">

     <?php echo $header; ?>

  </header>

  <section id="main" role="main">

     <?php echo $main; ?>

  </section><!-- /#main -->

</div><!-- /.page-wrap -->


<!-- <img id="resize" src="asset/img/resize.png" alt=""> -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<?php $jquery_string = '<script src="'. site_url('asset/js/vendor/jquery-1.8.3.min.js') .'"><\/script>'; ?>
<script>window.jQuery || document.write('<?php echo $jquery_string; ?>')</script>

<script src="<?php echo site_url('asset/js/vendor/equalize.min.js'); ?>" ></script>
<script>
  
  // smart resize - http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/
  (function($,sr){
 
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
        var timeout;
   
        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null; 
            };
   
            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);
   
            timeout = setTimeout(delayed, threshold || 100); 
        };
    }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
   
  })(jQuery,'smartresize');

  $(function() {
    // use equalize to equalize the heights of content elements
    $('.equalize').equalize({children:'.content-box'});

    // re-equalize on resize
    $(window).smartresize(function(){  
      $('.equalize').equalize({reset:true, children:'.content-box'});
    });

  });
</script>


<!-- Add your own Google Analytics UA number or remove this snippet -->
<script>
  // var codes = ['UA-34145020-1'],
  //     _gaq = _gaq || [];

  // for(i in codes) {
  //   _gaq.push(['_setAccount', codes[i]]);
  //   _gaq.push(['_trackPageview']);
  // }

  // (function() {
  //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  // })();
</script>

</body>
</html>
