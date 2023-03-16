<?php
include "includes/dbconn.php";
include "includes/navbar.php";
?>
<style>
    @media(max-width:480px) {
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
            background-color: black;
        }

    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('#search').click(function() {
            var id = $('#m-id').val()
            $.ajax({
                url: "fetch_material.php",
                data: {
                    "id": id
                },
                method: 'POST',
                success(data) {
                        $('#m-area').html(data)
                }
            })
        })
    })
</script>

<div class="container" style="border-style:inherit">
    <h4 class="mt-4">Get Your Study Material</h4>
    <div class="row" style="background-color: aquamarine;">
        <div class="col-8 col-md-4 mt-3 mb-3">
            <input type="text" class="form-control" placeholder="Enter material ID" id="m-id">
        </div>
        <div class="col-8 col-md-4 mt-3 mb-3">
            <input type="button" class="btn btn-md btn-warning" Value="Search" id="search">
        </div>
        <div class="card" id="m-area" style="background-color: aquamarine;">

        </div>
    </div>
</div>
<div class="container">
    <div style='background-color:#6B5B95;' class='mt-2 mb-2  text-white'>
        <h4 style="font-family:Verdana" class="p-2">Recently posted Materials</h4>
        <div class="row">
            <?php
            $query = "SELECT * FROM study_material";

            $result = mysqli_query($conn, $query); //runs the query
            if(mysqli_num_rows($result)==0){
                echo '<h5 style="color:white" class="ml-3">No Study Material Available !</h5>';
            }
            else{
                while ($row = mysqli_fetch_assoc($result)) {
                    $items[] = $row;
                }
        
                $items = array_reverse($items, true);
            foreach ($items as $row) {
                $id1 = $row['t_id'];
                $query2 = "SELECT * FROM teacher WHERE teacher_id LIKE '$id1'";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);
                echo '
                <div class="col-md-11 ml-3 col-11">
            <div class="card mt-2 mb-2">
            <div class="row ml-1 mt-1 mb-1">
                <div class="col-md-2 ">
                    <span>' . $row['unique_id'] . '(Material ID)</span>
                    <hr></hr>
                </div>
                
                <div class="col-md-2 ">
                    <h5>' . $row['title'] . '</h5>
                </div>
                <div class="col-md-2 ">
                    <p>' . $row['date'] . '</p>
                </div>
                <div class="col-md-2 ">
                    <a href="read_description.php?id=' . $row['unique_id'] . '">Read Description</a>
                </div>
                
                <div class="col-md-2 mt-1">
                <a href="material/' . $row['path'] . '" download>Download</a>
                </div>
                <div class="col-md-2 mt-1">
                    <span>Material By</span>
                    <p><b>
                    ' . $row2['name'] . '
                    <img src="stf_img/' . $row2['img_path'] . '" style="height:60px;width:60px;border-radius:100%;">
                    </b></p>
                    
                </div>
            </div>
        </div>
        </div>
            ';
            }}
            ?>
        </div>

    </div>
</div>