
    <h4>Fill out the form to know your insurance cost</h4>
    <form action="" method="post">
        
        <!-- CAMPO NAME -->
        <label for="name">Name:</label>
        <div class="input-group">
            <input type="text" name="form-name" id="name" class="form-control" placeholder="Full name:" required>
        </div>

        <!-- CAMPO EMAIL -->
        <label for="email">Email:</label>
        <div class="input-group">
            <input type="email" name="form-email" id="email" class="form-control"placeholder="Email:" required>
        </div>

        <!-- CAMPO PHONE -->
        <div class="form-group">
            <label for="phone">Phone number:</label>
            <div>
                <input type="text" name="form-phone" id="phone" placeholder="Input your phone number" class="form-control">
            </div>
        </div>

        <!-- CAMPO ADDRESS -->
        <div class="form-group">
            <label for="address">Address:</label>
            <div>
            <input type="text" name="form-address" id="address" placeholder="Input your address" class="form-control" required>
            </div>
        </div>

            <!-- CAMPO STATE -->
        <div class="form-group">
            <label for="state">State:</label>
            <div>
            <input type="text" name="form-state" id="state" placeholder="Input your state" class="form-control">
            </div>
        </div>

            <!-- CAMPO CITY -->
        <div class="form-group">
            <label for="city">City:</label>
            <div>
            <input type="text" name="form-city" id="city" placeholder="Input your city" class="form-control">
            </div>
        </div>

            <!-- CAMPO ZIP CODE -->
        <div class="form-group">
            <label for="zc">Zip Code:</label>
            <div>
            <input type="number" name="form-zc" id="zc" placeholder="Input your Zip Code" class="form-control">
            </div>
        </div>

        <!-- CAMPO AGE -->
        <div class="form-group">
            <label for="age">Age:</label>
            <div>
                <input type="number" name="form-age" id="age" placeholder="Input your age" class="form-control" required>
            </div>
        </div>

        <!-- CAMPO GENDER -->
        <div class="form-group">
            <label for="gender">Gender:</label>
            <div class="input-group">
                <select name="form-gender" id="gender" class="form-control" required>
                    <option selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>

        <!-- CAMPO OCUPATION -->
        <div class="form-group">
            <label for="ocupation">Ocupation:</label>
            <div class="input-group">
                <input type="text" name="form-ocupation" id="ocupation" class="form-control" placeholder="Input you ocupation:">
            </div>
        </div>

        <!-- CAMPO STATUS -->
        <div class="form-group">
            <label class="h5">Current status</label>
            <div class="form-check">
                <input type="checkbox" name="conditions[]" id="smoker" value="Smoker" class="form-check-input" value="smoker">
                <label for="smoker" class="form-check-label">Smoker</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="conditions[]" id="drunkard" value="Drunkard" class="form-check-input" value="drunkard">
                <label for="drunkard" class="form-check-label">Drunkard</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="conditions[]" id="driver"  value ="Driver" class="form-check-input" value="Driver">
                <label for="driver" class="form-check-label">Driver</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="conditions[]" id="disease" value="Chronic Disease" class="form-check-input" value="disease">
                <label for="disease" class="form-check-label">Chronic Disease</label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="send" value="Send">
        </div>
    </form>
