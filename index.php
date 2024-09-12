
<?php

include("connect.php");
 
extract($_POST);

if(isset($is_submit)){

    if(isset($name) && $name == ""){
        $error['name'] = "Required";
    }
    if(isset($full_name) && $full_name == ""){
        $error['full_name'] = "Required";
    }
    if(isset($parent_name) && $parent_name == ""){
        $error['parent_name'] ="Required";
    }
    if(isset($address) && $address == ""){
        $error['address'] = "Required";
    }
    if(isset($phone) && $phone == ""){
        $error['phone'] ="Required";
    }
    if(isset($email) && $email == ""){
        $error['email'] = "Required";
    }
    if(isset($joining_date) && $joining_date == ""){
        $error['joining_date'] = "Required";
    }
    if(isset($cnic) && $cnic == ""){
        $error['cnic'] = "Required";
    }
    if(isset($salary) && $salary == ""){
        $error['salary'] = "Required";
    } 
    if(isset($date) && $date == ""){
        $error['date'] = "Required";
    }
    if(isset($detail) && $detail  == "detail"){
        $error['detail'] = "Required";
    }
}

?>

<link rel="stylesheet" href="style.css">



<form method="post" action="">

<input type="hidden" name= "is_submit" value = "y" />
    <div class="myrow">
        <div class="mycol12 all_col">
            <label for="name"> <b>Position Applied For:<span
            class="color_red">*<?php
            if(isset($error['name']))
            {
                echo $error['name'];
            }
            ?>
            </span> </b> </label><br>
            <input class="inputtext" type="text" id="name" name="name" value="<?php
            if(isset($name)){
                echo $name;
            }
            ?>"/>
        </div>
    </div>

    <div class="myrow">
        <div class="mycol4 all_col">
            <label for="full_name"> <b>Full Name: 
                <span class="color_red">*<?php
            if(isset($error['full_name']))
            {
                echo $error['full_name'];
            }
            ?></span> 
            </b> </label><br>

            <input class="inputtext" type="text" name="full_name" id="full_name"  
            value="<?php
            if(isset($full_name)){
                echo $full_name;
            }
            ?>"/>
        </div>
        <div class="mycol4 all_col">
            <label for="name"> <b>Parent Name: 
                
                <span class="color_red">*<?php
                    if(isset($error['parent_name'])){
                        echo $error['parent_name'];
                    }
                ?></span> </b> </label><br>

            <input class="inputtext" type="text" id="parent_name" name="parent_name" 
            
            value="<?php
            if(isset($parent_name)){
                echo $parent_name;
            }
            ?>"/>

        </div>
    </div>

    <div class="myrow">
        <div class="mycol12 all_col">
            <label for="address"> <b>Address: <span class="color_red">*<?php
            if(isset($error['address'])){
                echo $error['address'];
            }    
            ?></span></b> </label><br>
            <input class="inputtext" type="text" id="address" name="address"  
            value="<?php
            if(isset($address)){
                echo $address;
            }
            ?>"/>
        </div>
    </div>

    <div class="myrow">

        <div class="mycol4 all_col">
            <label for="phone"> <b>Phone: <span class="color_red">*<?php
           if(isset($error['phone'])){
             echo $error ['phone'];
           }
                 
           ?></span></b> </label><br>
            <input class="inputtext" type="text" id="phone" name="phone" 
            value="<?php
            if(isset($phone)){
                echo $phone;
            }
            ?>" />
        </div>

        <div class="mycol4 all_col">
            <label for="email"> <b>Email: <span class="color_red">*<?php
            if(isset($error['email'])){
                echo $error['email'];
            }

            ?></span></b> </label><br>
            <input class="inputtext" type="email" id="email" name="email"  
            value="<?php
            if(isset($email)){
                echo $email;
            }
            ?>"/>
        </div>

        <div class="mycol4 all_col">
            <label for="gender"><b>Gender:</b></label>
            <div class="gender-options">
                <input type="radio" id="male" value="male" name="gender"><b>Male</b> &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="female" value="female" name="gender"><b>Female</b>
            </div>

        </div>
    </div>

    <div class="myrow">

        <div class="mycol4 all_col">
            <label for="joining_date"> <b>Joining Date: <span class="color_red">*<?php
            if(isset($error['joining_date'])){
                echo $error['joining_date'];
            }
            ?></span></b> </label><br>
            
            <input class="inputtext" type="date" id="joining_date" name="joining_date" 
            value="<?php
            if(isset($joining_date)){
                echo $joining_date;
            }
            ?>" />
        </div>

        <div class="mycol4 all_col">
            <label for="cnic"> <b>CNIC NO: <span class="color_red">*<?php
            if(isset($error['cnic'])){
                echo $error['cnic'];
            }

            ?></span></b> </label><br>
            <input class="inputtext" type="text" id="cnic" name="cnic"  
            value="<?php
            if(isset($cnic)){
                echo $cnic;
            }
            ?>" />
        </div>

        <div class="mycol4 all_col">
            <label for="salary"> <b>Desired Salary: <span class="color_red">*<?php
            if(isset($error['salary'])){
                echo $error['salary'];
            }
            ?> </span></b> </label><br>
            
            <input class="inputtext" type="salary" id="salary" name="salary" 
            value="<?php
            if(isset($salary)){
                echo $salary;
            }
            ?>"/>
        </div>

        
    </div>

    <div class="myrow">
        
        <div class="mycol4 all_col">
            
            <label for="status"> <b>Marital Status: </b> </label><br>
           
            <select class="inputtext" type="text"  id="status" name="status" value="">
             <option value="single">Single</option>
             <option value="married">Married</option>
            </select>

        </div>

        <div class="mycol4 all_col">
            <label for="no_of_children"> <b>No of Children:</b> </label><br>
            <input class="inputtext" type="text" value="" name="no_of_children">
        </div>

        <div class="mycol4 all_col">
            <label for="date"> <b>Date of Birth: <span class="color_red">*<?php
            if(isset($error['date'])){
                echo $error['date'];
            }
          
           ?></span></b> </label><br>
            <input class="inputtext" type="date" id="date" name="date" 
            value="<?php
            if(isset($date)){
                echo $date;
            }
            
            ?>"/>
        </div>

        
    </div>

    <div class="myrow">
        <div class="mycol12 all_col">
            <label for="detail"> <b>Detail if you have any medical issue: <span class="color_red">*<?php
            if(isset($error['detail'])){
                echo $error['detail'];
            }

            ?></span></b> </label><br>
            <input class="inputtext" type="text" id="detail" name="detail" 
            value="<?php
            if(isset($detail)){
                echo $detail;
            }
        
            ?>"/>
        </div>
    </div>

    <!-- Education -->

    <h1>Education</h1>
    <div class="myrow">
        <div class="mycol6 all_col">
            <label for="board"> <b>Intermediate Board: </b> </label><br>
            <input class="inputtext" type="text" id="board"  name="board" value="">
        </div>
        <div class="mycol6 all_col">
            <label for="inter_group"> <b>Inter Group: </b> </label><br>
            <input class="inputtext" type="text" id="inter_group" name="inter_group" value="">
        </div>
    </div>

    <div class="myrow">
        <div class="mycol6 all_col">
            <label for="inter_name"> <b>Inter From: </b> </label><br>
            <input class="inputtext" type="text" id="inter_form" name="inter_form" value="">
        </div>
        <div class="mycol6 all_col">
            <label for="inter_to"> <b>Inter To: </b> </label><br>
            <input class="inputtext" type="text" id="inter_to" name="inter_to" value="">
        </div>
    </div>

    <div class="myrow">
        <div class="mycol6 all_col">
            <label for="uni_name"> <b>University: </b> </label><br>
            <input class="inputtext" type="text" id="uni_name" name="uni_name" value="">
        </div>
        <div class="mycol6 all_col">
            <label for="city_name"> <b>City: </b> </label><br>
            <input class="inputtext" type="text" id="city_name" name="city_name" value="">
        </div>
    </div>

    <div class="myrow">
        <div class="mycol4 all_col">
            <label for="from"> <b>From: </b> </label><br>
            <input class="inputtext" type="text" id="from" name="from"  value="">
        </div>
        <div class="mycol4 all_col">
            <label for="to"> <b>To: </b> </label><br>
            <input class="inputtext" type="text" id="to" name="to" value="">
        </div>
        <div class="mycol4 all_col">
            <label for="graduate"> <b>Are you  graduate:</b> </label><br>
            <div class="gender-options">
                <input type="radio" id="yes" value="Yes" name="yes"><b>Yes</b>&nbsp;&nbsp; 
                <input  type="radio" id="no" value="No" name="no"><b>No</b>
            </div>
        </div>   
    </div>

    <div class="button-container">
        <input type="submit"  id="submit" value="submit" class="submit_button"/>
    </div>

</form>
