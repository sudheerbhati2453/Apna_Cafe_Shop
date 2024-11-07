$(document).ready(function(){

    var rating_data = 0;

    // Show pop-up modal on clicking "add_review"
    $('#add_review').click(function(){      
        $('#review_modal').modal('show');
    });

    // Highlight stars on hover
    $(document).on('mouseenter', '.submit_star', function(){
        var rating = $(this).data('rating');  
        reset_background();

        for(var count = 1; count <= rating; count++){
            $('#submit_star_'+count).addClass('text-warning');
        }
    });

    function reset_background(){       
        for(var count = 1; count <= 5; count++){
            $('#submit_star_'+count).removeClass('text-warning');
            $('#submit_star_'+count).addClass('star-light');   
        }
    }

    // Set rating on click
    $(document).on('click', '.submit_star', function(){
        rating_data = $(this).data('rating');
    });

    // Reset stars on mouse leave
    $(document).on('mouseleave', '.submit_star', function(){
        reset_background();

        for(var count = 1; count <= rating_data; count++){
            $('#submit_star_'+count).removeClass('star-light');
            $('#submit_star_'+count).addClass('text-warning');
        }
    });

    // Submit the review
    $('#save_review').click(function(){
        var user_name = $('#user_name').val();
        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '') {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: "Please Fill Both Fields",
                showConfirmButton: false,
                timer: 2000
            });
            return false;
        } else if(rating_data == 0){
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: "Please Rate",
                showConfirmButton: false,
                timer: 2000
            });
            return false;
        } else {
            $.ajax({
                url:"./requests/submit_rating.php",
                method:"POST",
                data:{
                    rating_data: rating_data, 
                    user_name: user_name, 
                    user_review: user_review,
                    action: "submit_rating"
                },
                success:function(data){
                    $('#review_modal').modal('hide');

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: data,
                        showConfirmButton: false,
                        timer: 2000
                    });

                    $('#user_name').val('');
                    $('#user_review').val('');
                    reset_background();

                    load_rating_data();    
                }
            });
        }
    });

    // Cancel the review modal
    $('#cancel_review').click(function(){
        $('#review_modal').modal('hide');
    });

    // Load rating data
    load_rating_data();
  
    function load_rating_data() {
        $.ajax({
            url:"./requests/fetch_rating.php",
            method:"POST",
            dataType:"JSON",
            success:function(data){
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star){
                        $(this).addClass('text-warning');
                        $(this).removeClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);
                $('#total_four_star_review').text(data.four_star_review);
                $('#total_three_star_review').text(data.three_star_review);
                $('#total_two_star_review').text(data.two_star_review);
                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0){
                    var html = '';
                    for(var count = 0; count < data.review_data.length; count++) {
                        html += '<div class="swiper-slide slide" >';
                        html += '<i class="fas fa-quote-right"></i>';
                        html += '<div class="user">';
                        html += '<div class="col-sm-2"><div class="rounded-circle pt-2 pb-2"><h2 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h2></div></div>';
                        html += '<div class="user-info">';
                        html += '<h3>'+data.review_data[count].user_name+'</h3>';
                        html += '<div class="stars">';

                        for(var star = 1; star <= 5; star++) {
                            var class_name = (data.review_data[count].rating >= star) ? 'text-warning' : 'star-light';
                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '</div>';
                        html += '<h4>'+data.review_data[count].datetime+'</h4>'; 
                        html += '</div></div>';
                        html += '<p>'+data.review_data[count].user_review+'</p>';
                        html += '</div>';
                    }
                    // Update the content only once after looping through all reviews
                    $('#reviews_swiper').html(html);  
                }
            }
        });
    }
});
