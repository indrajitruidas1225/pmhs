<?php
include "includes/navbar.php";
include "includes/dbconn.php";
if(!isset($_SESSION['id'])){
    echo 'No Log in Found';
    exit;
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#find').click(function() {
            var staff_id = $('#staff_id').val()
            $.ajax({
                data: {
                    'staff_id': staff_id
                },
                url: "fetch_staff.php",
                method: 'POST',
                success(data) {
                    if (data.trim() == '0') {
                        alert("No staff found against '"+staff_id+"'")
                        window.location.href = "remove_staff.php"
                    } else {
                        $('#result').prepend(data.trim())
                        $('#remove_btn').css('display', 'block')

                    }

                }
            })
        })
        $('#remove_btn').click(function() {

            var staff_id = $('#staff_id').val()
            $.ajax({
                data: {
                    'staff_id': staff_id
                },
                url: "delete_staff.php",
                method: 'POST',
                success(data) {
                    if (data.trim() != '0') {
                        alert(data.trim() + " has been removed from staff list.")
                        window.location.href = "remove_staff.php"
                    } else {
                        alert("Some error occurred ! Try again")
                    }
                }
            })
        })
    })
</script>
<div class="container" style="background-color: white;">
    <h3 class="mt-2 mb-2" style="font-family: serif;">Remove a staff</h3>
    <div class="row">
        <div class="col-md-4 col-12 mb-3">
            <label for="staff_id">Enter Staff ID</label>
            <input type="text" id="staff_id" class="form-control">
        </div>
        <div class="col-md-8 col-12 mb-3">
            <br>
            <button class="btn btn-info btn-md mt-2" id="find">Find</button>
        </div>
        <li class="dropdown-divider"></li>
        <div class="row mt-2" id="result">
            <!-- <div class="row" id="details">

            </div> -->
            <div class="col-md-1 col-12 mb-4">
                <button class="btn btn-danger btn-md" id="remove_btn" style="display:none">Remove</button>
            </div>
        </div>
    </div>
</div>