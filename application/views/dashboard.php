<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
        <title>Eccomerce</title>
        <style>
                body {
                        /* background-image: url("img_tree.gif"), url("paper.gif"); */
                        background-color: burlywood;
                }
        </style>
</head>

<body>
<?php $this->load->view('layout/top_layout') ?>

    <br>
    <br>
        <h1 align="center"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                Welcome To Victoria Shopping!</h1>
        <div align="center">
        <?=anchor('welcome/dashboard','Belanja Yuk',['class'=>'btn btn-primary',
                        'role'    => 'button']) ?> 
        </div>
</body>
</html>