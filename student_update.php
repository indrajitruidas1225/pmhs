<?php
include "includes/navbar.php";
include "includes/dbconn.php";
if (!isset($_SESSION['id'])) {
    echo 'No Log in Found';
    exit;
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        var url = window.location.href
        var url = new URL(url);
        var k = url.searchParams.get('q')
        if (k == '1') {
            alert('Student added successfully')
        } else if (k == '0') {
            alert('Some error occurred ! Try again')
        }
        else if (k == 'd_success') {
            alert('Student deleted successfully')
        } else if (k == 'd_failed') {
            alert('Some error occurred ! Try again')
        }
        var option = $('#option').val();
        option="select";
        if (option == "select") {
            document.getElementById('add').style.display = "none"
            document.getElementById('remove').style.display = "none"
        }

    })

    function myfunc() {
        var option = $('#option').val();
        if (option == "add") {
            document.getElementById('remove').style.display = "none"
            document.getElementById('add').style.display = "block"
        } else if (option == "remove") {
            document.getElementById('add').style.display = "none"
            document.getElementById('remove').style.display = "block"
        } else if (option == "select") {
            document.getElementById('add').style.display = "none"
            document.getElementById('remove').style.display = "none"
        }
    }
    //document.getElementById("k").addEventListener("click", myfunc);
</script>
<div class="container">
    <h3 class="mt-2 mb-2" style="font-family: serif;">Add/Remove Student</h3>
    <label for="option">What will you like to do ?</label>
    <select name="option" id="option" onchange="myfunc(this)" class="ml-1">
        <option value="select">Select</option>
        <option value="add">Add</option>
        <option value="remove">Remove</option>
    </select>
    <div class="row" style="background-color: white;" id="add">
        <form action="add_student.php" method="POST" enctype="multipart/form-data" style="display:flex;flex-direction:column;" class="mb-4">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="pass">Passout Year</label>
            <input type="text" id="pass" name="pass" class="form-control">
            <label for="current">Current Position and Institution</label>
            <input type="text" id="current" name="current" class="form-control">
            <label for="img">Select image</label>
            <input type="file" name="uploadfile" id="img" class="form-control">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Add</button>
        </form>
    </div>
    <div class="row" style="background-color: white;" id="remove">
        <form action="remove_student.php" method="POST" style="display:flex;flex-direction:column;" class="mb-4">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="pass">Passout Year</label>
            <input type="text" id="pass" class="form-control" name="pass">
            <button type="submit" class="btn btn-md btn-info mt-3 w-50">Find</button>
        </form>
    </div>
</div>