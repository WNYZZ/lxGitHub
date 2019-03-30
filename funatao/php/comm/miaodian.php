<script src="js/jquery.anchor.js" type="text/javascript"></script>
<script src="js/jquery.fullslide.js" type="text/javascript"></script>
 
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
  m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-44212938-1', 'cbd88.cn');
    ga('send', 'pageview');



    (function () {
        var re = function () {
            var w = $('.pager').width();
            var h = $(window).height() - 120;
            var list = $('.pager').children();
            list.css({ width: Math.floor((w / list.length) - 1) });
            $('.banner').css({ height: h });
            
            var slides = $('.fullslide').children();
            slides.each(function(){
                var img = $(this).find('img');
                img[0].onload = function(){
                    var h = this.height;
                   
                    var oh = $(this).closest('li').height();
                    
                    if(h < oh){
                       
                        $(this).css({marginTop:(oh-h)/2-50});   
                    }   
                }   
            });
        }
        $('.fullslide').fullSlide({
            pager: '.pager',
            initCallback: function () {
                re();
                $(window).resize(function () {
                    re();
                });
            },
            response: true,
            attr: 'rel'
        });

        $('a').anchor(800,'easeInOutExpo');
    })();

</script>

