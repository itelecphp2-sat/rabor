<!-- <h2><?php echo $title; ?></h2> -->

<?php echo validation_errors(); ?>

<?php echo form_open('registration/create'); ?>

    <label for="lastname">Lastname</label>
    <input type="input" name="lastname" /><br />

    <label for="firstname">Firstname</label>
    <input type="input" name="firstname"></textarea><br />

    <label for="mi">MI</label>
    <input type="input" name="mi" /><br />

    <label for="email">Email</label>
    <input type="input" name="email"></textarea><br />

    <label for="username">Username</label>
    <input type="input" name="username" /><br />

    <label for="password">Password</label>
    <input type="input" name="password"></textarea><br />

    <input type="submit" name="submit" value="Insert New Item" />

</form>