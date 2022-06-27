<h2 class="page-header">Add Employee </h2>
<?php echo validation_errors(); ?>
<?php echo form_open('admin/employee/create_emp'); ?>
<form>
    <div class="form-group">
        <label name="firstname">FirstName</label>
        <input type="text" class="form-control" placeholder="firstname" name="firstname">

    </div>
    <div class="form-group">
        <label name="middlename">MiddleName</label>
        <input type="text" class="form-control" placeholder="middlename" name="middlename">

    </div>
    <div class="form-group">
        <label name="lastname">LastName</label>
        <input type="text" class="form-control" placeholder="lastname" name="lastname">

    </div>

    <div class="form-group">
        <label name="DOB"> DOB </label>
        <input type="text" name="birthdate" value="10/24/1980" />
    </div>

    <div class="form-group">
        <label name="age"> AGE </label>

        <input type="text" id="age" name="age" class="form-control" required readonly>
    </div>
    <div class="form-group">
        <label name="emailid">Emailid</label>
        <input type="text" class="form-control" placeholder="emailid" name="emailid">

    </div>
    <div class="form-group">
        <label name="mobileno">Mobile</label>
        <input type="text" class="form-control" placeholder="mobileno" name="mobileno">

    </div>
    <div class="form-group">
        <label>genders</label>
        <select class="form-control" name="genders">
            <option value="" disabled selected>Select option</option>
            <?php foreach ($gender as $gen_value) { ?>

                <option name="genders" value="<?php echo $gen_value['gender_name']; ?>"><?php echo $gen_value['gender_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>




    <?php echo form_close(); ?>
    <!-- Include Required Prerequisites -->



    <?php $this->load->view('common/script'); ?>