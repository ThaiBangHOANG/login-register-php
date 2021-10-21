    <?php
    include('head.php');
    $errors = [];
    ?>



    <h2>Register</h2>

    <?php displayErrors($errors); ?>

    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First_name" />
        </div>

        <div class="form-group">
            <label for="lasst_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last_name" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="first_name" id="password" placeholder="Password" />
        </div>

        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" />
        </div>

        <div class="button-wrapper">
            <button class="btn btn-primary">Register</button>
        </div>

        <p>Already have an account? <a href="login.php">Log in</a> </p>

    </form>
    <?php
    include('foot.php'); ?>