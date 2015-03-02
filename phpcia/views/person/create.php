<h2>Enter Student Information</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('person/create')?>
<label for="first_name">First Name</label>
<input type="input" name="first_name" />
<br />

<label for="last_name">Last Name</label>
<input type="input" name="last_name" />
<br />
<input type="submit" name="submit" value="Add Person" />
</form>
