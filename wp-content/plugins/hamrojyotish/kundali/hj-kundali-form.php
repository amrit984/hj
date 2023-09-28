<?php
    function hj_return_kundali_form(){
        $form = 
        '<div class="kundali-form">
            <form method="POST" action="/generate-kundali">
                
                <!--Full Name-->
                <label for="fullname" class="form-label">नाम:*</label>
                <input type="text" title="fullname" class="form-input-field" name="fullname" required="required" />
                

                
                <!--Place of Birth-->
                <label for="pob" class="form-label">जन्मस्थान:*</label>
                <input type="text" title="pob" class="form-input-field" name="pob" required="required" />
                

                
                <!--Date of Birth-->
                <label for="dob" class="form-label">जन्ममिति:*</label>
                <input type="date" title="dob" class="form-input-field" name="dob" required="required" />

                <!--Date of Birth-->
                <label for="tob" class="form-label">जन्मसमय:*</label>
                <input type="time" title="tob" class="form-input-field" name="tob" required="required" />
    

                <input type="submit" class="form-btn" id="form-submit-btn" name="hj-kundali-submit" value="कुण्डली बनाउनुहोस्" />
            </form>
        </div>
        ';
        return $form;
    }
?>