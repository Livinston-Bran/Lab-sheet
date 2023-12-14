<?php include_once 'header.php'; ?>

<div class="container">

    <!-- Registration form -->
    <div class="registrationForm">
        <form  action="registration.php" name="registrationform" class="form-registration" method="post">
            <h3 class="cnt">Sign up!</h3>
            <hr class="colorgraph">
            <label for="username">Name:<span class="red">*</span></label>
            <input type="text" name="username" id="username" placeholder="Username" class="input form-control" autocomplete="off" required autofocus>
            <label for="email">E-mail:<span class="red">*</span></label>
            <input type="email" name="email" id="email" placeholder="Email" class="input form-control" autocomplete="off" required><br>
            <label for="designation">Designation:<span class="red">*</span></label>
                <select name="designation" class="input form-control">
                    <option value="Assistant Lecturer">Assistant Lecturer</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Senior Lecturer I">Senior Lecturer I</option>
                    <option value="Senior Lecturer II">Senior Lecturer II</option>
                </select><br>
            <label for="course">Course:<span class="red">*</span></label>
                <select name="course" class="input form-control">
                    <option value="HNDIT">HNDIT</option>
                    <option value="HNDA">HNDA</option>
                    <option value="HNDE">HNDE</option>
                    <option value="etc">etc</option>
                </select><br>
            <label for="password">Password<span class="red">*</span></label>
            <input type="password" name="password" id="password" placeholder="Password" class="input form-control" autocomplete="off" required>
            <label for="password2">Re-enter password<span class="red">*</span></label>
            <input type="password" name="password2" id="password2" placeholder="Re-enter password" class="input form-control" autocomplete="off" required><br>
            
            <!-- If there is an error it will be shown. --> 
            <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['message']) ?></center></strong>
                    <?php unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            <!-- If user account is created. -->
            <?php if(!empty($_SESSION['SuccessMessage'])): ?>
                <div class="alert alert-success alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['SuccessMessage']) ?></center></strong>
                    <?php unset($_SESSION['SuccessMessage']); ?>
                </div>
            <?php endif; ?>
                        
            <input type="submit"  name="registration" value="Sign Up" class="btn btn-lg btn-block submit" />  
        
        </form>
        
    </div>  <!-- End registrationForm-->
 
<!-- URL to login form -->
<div class="cnt"><a href="login.php">Already signed up? Log in here</a></div>

<!-- Back to main page -->  
<div class="cnt gray"><a href="index.php">Back to main page</a></div>  
  
</div>
<!-- End div -->

