$(".video-thumb").click(function() {
          $('.video-thumb > img').removeClass("active");
          $(this).children('img').addClass("active");
        });

        $('div.video-thumb').click(function() {
          $('.video-iframe iframe').attr('src', ($(this).children('iframe').attr('src').replace('iframe')));
        });