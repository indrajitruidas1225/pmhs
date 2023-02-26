<?php
    include "includes/dbconn.php";
    include "includes/navbar.php";
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').click(function(){
            var id=$('#m-id').val()
            $.ajax({
                url:"fetch_material.php",
                data:{"id":id},
                method:'POST',
                success(data){
                    if(data.trim()==='0'){
                        $('#m-area').html("<span style='color:red' class='mt-3 mb-3'>No such material found !</span>")
                    }
                    else{
                        
                        $('#m-area').append(data)
                    }
                }
            })
        })
    })
</script>
<div class="container">
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
