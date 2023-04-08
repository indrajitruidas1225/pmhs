<?php
include "includes/navbar.php";
include "includes/dbconn.php";
if(!isset($_SESSION['id'])){
    echo 'No Log in Found';
    exit;
}
$query = "SELECT * FROM teacher";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['new_t_id'] = $row['teacher_id'];
    $_SESSION['new_t_p'] = $row['password'];
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        var s = window.location.href
        var url = new URL(s)
        var k = url.searchParams.get('v')
        var id = $('#staff_id').val()
        var pass = id + '@pmhs'
        if (k == '1') {
            $('.result').html(`<div class='card border-success p-2 mb-2'>
            <span class='' style="color:green">New Staff has been added successfully !</span>
        </div>`)
        } else if (k == '-1') {
            $('.result').html(`<div class='card border-danger p-2 mb-2'>
            <span class='' style="color:red">This staff already Exists !</span>
        </div>`)
        } else if (k == '2') {
            $('.result').html(`<div class='card border-success p-2 mb-2'>
            <span class='' style="color:green">New Staff has been added successfully !</span>
            <h5 style="font-family:Times">Please note the teacher logIn ID and Password <i class="far fa-hand-point-right" style="font-size:24px"></i></h5>
            <p>LogIN ID = <?php echo $_SESSION['new_t_id']; ?></p>
            <p>Password= <?php echo $_SESSION['new_t_p']; ?></p>
        </div>`)
        } else if (k == '0') {
            $('.result').html(`<div class='card border-danger p-2'>
            <span class='p-2' style="color:red">An error occurred !</span>
        </div>`)
        }

    })
</script>
<div class="container" style="background-color: white;">
    <h3 class="mt-2 mb-2" style="font-family: serif;">Add New Staff</h3>
    <div class="result">

    </div>
    <form action="add_to_db.php" enctype="multipart/form-data" method="post">
        <div style="display:flex;flex-direction:column">
            <label for="teacher_name">Enter Name</label>
            <input type="text" id="teacher_name" class="form-control" name="teacher_name">
            <label for="designation">Designation</label>
            <select name="designation" id="designation" class="form-control">
                <option value="HM">Headmaster</option>
                <option value="Asst. HM">Assistant HM</option>
                <option value="Assistant Teacher">Assistant Teacher</option>
                <option value="Contractual Assistant Teacher">Contractual Assistant Teacher</option>
                <option value="Para Teacher">Para Teacher</option>
                <option value="Librarian">Librarian</option>
                <option value="Clerk">Clerk</option>
                <option value="Group D">Group D</option>
            </select>
            <label for="staff_id">Enter Staff ID</label>
            <input type="text" name="staff_id" id="staff_id" class="form-control">
            <label for="teacher_quali">Qualifications</label>
            <input type="text" name="teacher_quali" id="teacher_quali" class="form-control">
            <label for="specialization">Specialization</label>
            <select name="specialization" id="specialization" class="form-control">
                <option value="Science">Science</option>
                <option value="Arts">Arts</option>
                <option value="None">None</option>
            </select>
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
            <label for="doj">Date of Joining</label>
            <input type="date" id="doj" name="doj" class="form-control">
            <label for="img_name">Select Image</label>
            <input type="file" name="img_name" id="img_name" class="form-control">
            <button type="submit" class="btn btn-info btn-md mt-3 mb-4" id="add_btn">Add</button>
        </div>

    </form>

</div>

</div>
</div>