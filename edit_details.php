<?php
include "includes/navbar.php";
include "includes/dbconn.php";
if(!isset($_SESSION['id']) && !isset($_SESSION['t_id'])){
    echo 'No Log in Found';
    exit;
}
$t_id = $_SESSION['t_id'];
$query = "SELECT * FROM staff WHERE staff_id='$t_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<script type="text/javascript">
    $(document).ready(function() {
        var option = $('#option').val()
        var url = window.location.href
        var url = new URL(url);
        var k = url.searchParams.get('q')
        if (k == '1') {
            alert('Changes Saved !')
        } else if (k == '0') {
            alert('Some error occurred ! Try again')
        }
        else if (k == '-1') {
            alert('Password did not match!')
        }
        if (option == "select") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        }
    })

    function myfunc1() {
        var option = $('#option').val();
        if (option == "name") {
            document.getElementById('name').style.display = "block"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        } else if (option == "mobile") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "block"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        } else if (option == "email") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "block"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        } else if (option == "doj") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "block"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        } else if (option == "desig") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "block"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        } else if (option == "qua") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "block"
            document.getElementById('specia').style.display = "none"
        } else if (option == "specia") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "block"
        } else if (option == "select") {
            document.getElementById('name').style.display = "none"
            document.getElementById('mobile').style.display = "none"
            document.getElementById('email').style.display = "none"
            document.getElementById('doj').style.display = "none"
            document.getElementById('desig').style.display = "none"
            document.getElementById('qua').style.display = "none"
            document.getElementById('specia').style.display = "none"
        }
    }
</script>
<div class="container">
    <h3 class="mt-2 mb-2 ml-2" style="font-family: serif;">Edit Your Profile Details</h3>
    <label for="option">What will you like to change ?</label>
    <select name="option" id="option" onchange="myfunc1(this)" class="ml-1">
        <option value="select">Select</option>
        <option value="name">Name</option>
        <option value="mobile">Mobile</option>
        <option value="email">Email</option>
        <option value="doj">Joining Date</option>
        <option value="desig">Designation</option>
        <option value="qua">Qualifications</option>
        <option value="specia">Specialization</option>
    </select>
    <div class="row p-3" style="background-color: white;" id="name">
        <form action="name_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Name :</p><?php echo $row['name'] ?>
            </span>
            <label for="name">Enter New Name</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>

    <div class="row p-3" style="background-color: white;" id="mobile">

        <form action="mobile_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Mobile :</p><?php echo $row['mobile'] ?>
            </span>
            <label for="name">Enter New Mobile No</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>

    <div class="row p-3" style="background-color: white;" id="email">

        <form action="email_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Email :</p><?php echo $row['email'] ?>
            </span>
            <label for="name">Enter New E-Mail ID</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>

    <div class="row p-3" style="background-color: white;" id="doj">

        <form action="doj_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Date of Joining :</p><?php echo $row['doj'] ?>
            </span>
            <label for="name">Enter Date of Joining</label>
            <input type="date" id="name" class="form-control" name="name">
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>


    <div class="row p-3" style="background-color: white;" id="desig">

        <form action="desig_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Designation :</p><?php echo $row['designation'] ?>
            </span>
            <label for="name">Enter New Designation</label>
            <select name="name" id="designation" class="form-control">
                <option value="HM">Headmaster</option>
                <option value="Asst. HM">Assistant HM</option>
                <option value="Assistant Teacher">Assistant Teacher</option>
                <option value="Contractual Assistant Teacher">Contractual Assistant Teacher</option>
                <option value="Para Teacher">Para Teacher</option>
                <option value="Librarian">Librarian</option>
                <option value="Clerk">Clerk</option>
                <option value="Group D">Group D</option>
            </select>
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>

    <div class="row p-3" style="background-color: white;" id="qua">

        <form action="qua_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Qualifications :</p><?php echo $row['qualifications'] ?>
            </span>
            <label for="name">Enter New Qualifications</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>

    <div class="row p-3" style="background-color: white;" id="specia">

        <form action="specialization_update.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <span class="mt-2 mb-2 ml-2">
                <p style="color:green">Current Specialization :</p><?php echo $row['specialization'] ?>
            </span>
            <label for="name">Enter New Specialization</label>
            <select name="name" id="specialization" class="form-control">
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
                <option value="None">None</option>
            </select>
            <label for="password">Enter Password</label>
            <input type="text" id="password" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Change</button>
        </form>
    </div>
</div>