<h2> <?= $title ?> </h2>
<?php echo validation_errors(); ?>
<?php echo form_open('admin/employee/edit_submit_post'); ?>
<form>
    <div class="form-group">
        <input type="hidden" name="emp_id" value="<?php echo $emp_data['emp_id']; ?>">
        <label name="firstname">FirstName</label>
        <input type="text" class="form-control" placeholder="firstname" name="firstname" value="<?php echo $emp_data['emp_firstname']; ?>">

    </div>
    <div class="form-group">
        <label name="middlename">MiddleName</label>
        <input type="text" class="form-control" placeholder="middlename" name="middlename" value="<?php echo $emp_data['emp_middlename']; ?>" ?>
    </div>
    <div class="form-group">
        <label name="lastname">LastName</label>
        <input type="text" class="form-control" placeholder="lastname" name="lastname" value="<?php echo $emp_data['emp_lastname']; ?>">

    </div>

    <div class="form-group">
        <label name="DOB"> DOB </label>
        <input type="text" name="birthdate" value=" <?php echo $emp_data['emp_DOB']; ?>">
    </div>

    <div class="form-group">
        <label name="age"> AGE </label>

        <input type="text" id="age" name="age" class="form-control" value="<?php echo $emp_data['emp_age']; ?>" required readonly>
    </div>
    <div class="form-group">
        <label name="emailid">Emailid</label>
        <input type="text" class="form-control" placeholder="emailid" name="emailid" value=" <?php echo $emp_data['emp_emailid']; ?>">

    </div>
    <div class="form-group">
        <label name="mobileno">Mobile</label>
        <input type="text" class="form-control" placeholder="mobileno" name="mobileno" value="<?php echo $emp_data['emp_mobilenum']; ?>">

    </div>
    <div class="form-group">
        <label>genders</label>
        <select class="form-control" name="genders">

            <?php foreach ($gender as $gen_value) {
                if ($emp_data['emp_gender'] == $gen_value['gender_name']) { ?>
                    <option name="genders" value="<?php echo $gen_value['gender_name']; ?>" selected="selected"><?php echo $gen_value['gender_name']; ?></option><?php } else { ?>
                    <option name="genders" value="<?php echo $gen_value['gender_name']; ?>"><?php echo $gen_value['gender_name']; ?></option><?php }
                                                                                                                                                            } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>




    <?php echo form_close(); ?>
    <?php $this->load->view('common/script'); ?>