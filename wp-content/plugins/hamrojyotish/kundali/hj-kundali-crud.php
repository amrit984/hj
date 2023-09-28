<?php
function hj_return_kundali_save_btn(){
    if( is_user_logged_in() ){
        $btn = '
            <form method="POST">
                <button type="submit" class="save-btn" name="kundali-save-btn" id="kundali-save-btn">Save</button>
            </form>
        ';
    } else{
        $btn = '
            <p>कुण्डली बचत गर्न <a href=" ' . get_home_url() . '/sign-in' . ' " class="hj-link"><strong>Log In</strong></a> गर्नुहोस।</p>
        ';
    }

    return $btn;
}

function hj_return_kundali_delete_btn(){
    $btn = '
        <form method="POST">
            <button type="submit" class="delete-btn" name="kundali-delete-btn">Delete</button>
        </form>
   ';
   return $btn;
}


?>