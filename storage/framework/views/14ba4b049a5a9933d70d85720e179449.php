<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="<?php echo e(asset('Style/style.css')); ?>"/>

</head>
<body>
<style>
    .pagination {
        margin-left: 250px;
    }

    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #f2f2f285;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: gray;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="" href="/welcome">Home </a>
    <a class="" href="/Admin/AddProduct">Add product </a>
    <a class="" href="/Admin/AddServices">Add Services </a>
    <a class="" href="/Admin/AddAdmin"> Add Admin </a>
    <a class="" href="/Admin/showContactus"> show contact</a>
    <a class="" href="/Admin/showUsers"> show users </a>
    <a class="" href="/Admin/showProducts"> show products</a>
    <a class="" href="/Admin/service">Show Services </a>
    <a class="" href="/Admin/profile">Profile </a>


</div>

<div id="main">

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
<?php echo $__env->yieldContent('content'); ?>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";

    }
</script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\e-commerce\resources\views/LayoutAdmin.blade.php ENDPATH**/ ?>