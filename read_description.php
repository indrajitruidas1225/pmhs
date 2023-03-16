<?php
include "includes/navbar.php";
include "includes/dbconn.php";
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
        }

    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        var url = window.location.href;
        url = new URL(url);
        var k = url.searchParams.get('id')
        //alert(k)
        $.ajax({
            url: 'fetch_description.php',
            method: 'POST',
            data: {
                'm_id': k
            },
            success(data) {
                $('#descript').html(data.trim());
            }
        })
    })
</script>
<div class="container mb-5" id="descript">

</div>