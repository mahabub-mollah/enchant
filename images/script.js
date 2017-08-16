jQuery(function($){

    $('.media_pop').click(function() {

        var postid = $(this).attr('data-postid');

        $.post(ajax_object.ajaxurl, {
            action: 'my_load_ajax_content',            
            postid: post_id
        }, function(data) {
            var $response   =   $(data);
            var postdata    =   $response.filter('#mediaPop').html();
            $('.mediaPopT').html(postdata);
        });

    })

});