<form action="<?= $domain ?>/posts/store.php" method="GET">
    <div>
        <label for="name">Name*</label>
        <input type="text" name="" id="name" placeholder="Enter Name" required>
    </div>
    <div>
        <label for="email_address">Enter Email Address</label>
        <input type="email" name="" id="email_address">
    </div>
    <div>
        <label for="mobile">Enter Mobile Number</label>
        <input type="number" name="" id="mobile">
    </div>
    <div>
        <label for="dob">Date of Birth</label>
        <input type="date" name="" id="dob">
    </div>
    <div>
        <label for="start_time">Start Time</label>
        <input type="time" name="" id="start_time">
    </div>
    <div>
        <p>Please Select Gender</p>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male">

        <label for="Female">Female</label>
        <input type="radio" name="gender" id="Female">
    </div>
    <div>
        <p>Select your favourite food</p>

        <label for="pizza">Pizza</label>
        <input type="checkbox" name="food" id="pizza">

        <label for="Apple">Apple</label>
        <input type="checkbox" name="food" id="Apple">

        <label for="banana">banana</label>
        <input type="checkbox" name="food" id="banana">
    </div>
    <div><label for="id_card">Please Upload your Id</label>
            <input type="file" name="" id="id_card">
    </div>
    <div><label for="country">Please Select Coutnry</label></div>
    <select name="" id="country">
        <option value="MV">maldives</option>
        <option value="IN">India</option>
        <option value="BR">Brazil</option>
    </select>
    <div><textarea name="" id="" cols="30" rows="10">Enter Your text</textarea></div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>