<section class="authorization">
    <div class="signin-card">
        <h1>Sign In negros</h1>
        <form action="" method="POST">
            <input type="text" name="studENTid" placeholder="student ID">
            <input type="password" name="password" placeholder="password dito tanginamo">
            <button name="signIn">Submit</button>
        </form>
    </div>



    <div class="siginup-card">
        <h1>Sign up niggers</h1>
        <form action="../config/authentication.php" method="POST">
            <input type="text" name="first_name" placeholder="first name">
            <input type="text" name="middle_name" placeholder="middle name">
            <input type="text" name="last_name" placeholder="last name">
            <input type="text" name="email" placeholder="email">

            <input type="text" name="studentID" placeholder="student ID">
            
            <div>
            <label for="sex">Sex</label>
            <select name="gender" id="sex">
                <option hidden>Please Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </div>

            <div>
            <label for="dept">Department</label>
            <select name="department" id="dept">
                <option hidden>Please select</option>
                <option value="1">Elementary</option>
                <option value="2">Junior High</option>
                <option value="3">Senior High</option>
                <option value="4">Collage</option>
            </select>
            </div>

            <input type="text" name="password" placeholder="password">

            <button type="submit" name="signup">Submit</button>
        </form>
    </div>

</section>