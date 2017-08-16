jQuery(function($){

    $('.media_pop').click(function() {

        var postid = $(this).attr('data-postid');
       // console.log('');

        $.post('http://localhost/enchant/wp-admin/admin-ajax.php', {
            action: 'enchant_theme2',            
            postid: postid,
            // dataType: 'json',
        }, function(response) {
            // var $response = $(response);

            // console.log(response.content);
            // var popup = document.getElementById('mediaPop');
            // var title = document.createElement('h2');
            // title.innerHTML = response.title;
            // var content = document.createElement('p');
            // content.innerHTML = response.content;
            // popup.innerHTML = response.attachment;
            // popup.appendChild(title);
            // popup.appendChild(content);
            // popup.appendChild(img);
            $('#mediaPop').html(response);
        });

    })

    

});






jQuery(function($){


    $('.sec6_pop').click(function() {

        var tickpostid = $(this).attr('data-postid');
       // console.log('');

        $.post('http://localhost/enchant/wp-admin/admin-ajax.php', {
            action: 'enchant_ticketpopup',            
            tickpostid: tickpostid,
            // dataType: 'json',
        }, function(response) {
            // var $response = $(response);

            // console.log(response.content);
            // var popup = document.getElementById('mediaPop');
            // var title = document.createElement('h2');
            // title.innerHTML = response.title;
            // var content = document.createElement('p');
            // content.innerHTML = response.content;
            // popup.innerHTML = response.attachment;
            // popup.appendChild(title);
            // popup.appendChild(content);
            // popup.appendChild(img);
            $('#sec6_popUp').html(response);
        });

    })


    $('.bookNow').click(function() {
        var popup = $('#popUp').html('');
        var productID = $(this).attr('role');
       // console.log('');
        $.post('http://localhost/enchant/wp-admin/admin-ajax.php', {
            action: 'enchant_add_to_cart',            
            product_id: productID
        }, function(response) {
            // var $response = $(response);

            // console.log(response.content);
            // var popup = document.getElementById('mediaPop');
            // var title = document.createElement('h2');
            // title.innerHTML = response.title;
            // var content = document.createElement('p');
            // content.innerHTML = response.content;
            // popup.innerHTML = response.attachment;
            // popup.appendChild(title);
            // popup.appendChild(content);
            // popup.appendChild(img);
            if(response !='no'){
                $(popup).html(response);
            }else {
                alert('Sorr! product can\'t add to the cart');
            }
        });

    })
});