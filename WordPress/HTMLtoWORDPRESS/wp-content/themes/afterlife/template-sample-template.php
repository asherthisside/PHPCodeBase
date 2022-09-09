<?php
// Template Name: Portfolio Design
get_header();
?>
<style>
    .container {
        height: 100vh;
        /* background-color: violet; */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .table-container {
        height: 70%;
        width: 70%;
        /* border: solid; */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .table-row {
        height: 16%;
        /* border: solid red; */
        margin: 15px auto;
        background-color: white;
        box-shadow: 0px 0px 10px rgb(94, 94, 94);
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 20px;
    }

    #row1 {
        margin-top: 0;
        background-color: rgb(192, 178, 178);
        font-weight: bold;
    }

    #row5 {
        margin-bottom: 0;
    }

    span {
        /* border: solid; */
        display: inline-block;
    }

    span#jobid {
        width: 20%;
    }
    
    span#cust_name {
        width: 40%;
    }

    span#due {
        width: 20%;
    }
    
    span#payment_status {
        width: 20%;

    }
</style>

<article class="content px-3 py-5 p-md-5">

<h3>This page displays some other design</h3>
<hr>
<div class="table-container">
    <div class="table-row" id="row1">
        <span id="jobid">JOB ID</span>
        <span id="cust_name">CUSTOMER NAME</span>
        <span id="due">AMOUNT DUE</span>
        <span id="payment_status">PAYMENT STATUS</span>
    </div>
    <div class="table-row" id="row2">
        <span id="jobid">42235</span>
        <span id="cust_name">John Doe</span>
        <span id="due">$350</span>
        <span id="payment_status">Pending</span>
    </div>
    <div class="table-row" id="row3">
        <span id="jobid">42236</span>
        <span id="cust_name">John Wick</span>
        <span id="due">$350</span>
        <span id="payment_status">Pending</span>
    </div>
    <div class="table-row" id="row4">
        <span id="jobid">42245</span>
        <span id="cust_name">Jane Doe</span>
        <span id="due">$350</span>
        <span id="payment_status">Pending</span>
    </div>
    <div class="table-row" id="row5">
        <span id="jobid">42224</span>
        <span id="cust_name">Jana Doe</span>
        <span id="due">$350</span>
        <span id="payment_status">Pending</span>
    </div>
</div>
</article>
<?php
get_footer();
?>