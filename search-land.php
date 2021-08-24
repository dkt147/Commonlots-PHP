<form method="post" enctype="multipart/form-data" id="gform_1" action="about-us.php"><input type="hidden" name="gform_return_access" value="true">
    <div class="gform_heading">
        <span class="gform_description">New properties are added weekly. Fill out the short form below to see all properties and get your exclusive weekly land deals.</span>
    </div><br>
    <div class="gform_body">
        <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_1_7" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_7">State You're Interested In<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_select">
                    <select name="area" id="input_1_7" class="medium gfield_select" aria-required="true" aria-invalid="false">
                        <option value="...">...</option>
                        <?php

     $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state");
                        $query = "SELECT * FROM `category`";
                        $res = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <option value="<?php echo $row['Id'] ?>"><?php echo $row['Name'] ?></option>
                        <?php
                        }
                        ?>
                    </select></div>
            </li>
            <li id="field_1_4" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label gfield_label_before_complex">Name<span class="gfield_required">*</span></label>
                <div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name" id="input_1_4">

                    <span id="input_1_4_3_container" class="name_first">
                        <input type="text" name="fname" id="input_1_4_3" value="" aria-label="First name" aria-required="true" aria-invalid="false">
                        <label for="input_1_4_3">First</label>
                    </span>

                    <span id="input_1_4_6_container" class="name_last">
                        <input type="text" name="lname" id="input_1_4_6" value="" aria-label="Last name" aria-required="true" aria-invalid="false">
                        <label for="input_1_4_6">Last</label>
                    </span>

                </div>
            </li>
            <li id="field_1_2" class="gfield gf_left_half field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_2">Phone (opt.)</label>
                <div class="ginput_container ginput_container_text">
                    <input name="phone" id="input_1_2" type="text" value="" class="small" aria-invalid="false"></div>
            </li>
            <li id="field_1_3" class="gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_3">Email<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_email">
                    <input name="email" id="input_1_3" type="email" value="" class="small" aria-required="true" aria-invalid="false">
                </div>
            </li>
            <br>
        </ul>
    </div>
    <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" name="searchland" class="gform_button button btn btn-info" style="margin-left: 40px;" value="Show Me Available Land ››">
        <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
        <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

        <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
        <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjU2MTVjN2VlOTYzMzE4OGM5YWIwOGM4MzBiODdkYmM5Il0=">
        <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
        <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
        <input type="hidden" name="gform_field_values" value="">

    </div>
</form>
<?php

     $con = mysqli_connect("markg18140.domaincommysql.com", "real_state", "2439123Mm!", "real_state");
// Check if image file is a actual image or fake image
if (isset($_POST["searchland"])) {

    $area = $_POST['area'];
    $name = $_POST['fname'] + $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `search-land`(`State`, `Name`, `Phone`, `Email`) VALUES('$area','$name','$phone','$email')";
    $res = mysqli_query($con, $sql);
    if ($res == TRUE) {
        header("Location: http://localhost/jobyfied/dashboard.php");
    } else {

        echo "<script>alert('Search Failed')</script>";
    }
}

?>