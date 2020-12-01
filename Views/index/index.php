<html>
<head>
    <title><?php if (isset($title)):?> <?php echo $title;?> <?php else: ?> <?php echo APP_NAME;?> <?php endif;?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .welcome {
            width: 1000px;
            margin: 100px auto;
            font-size: 30px;
            color: #555555;
            font-family: '微软雅黑';
            text-align: center;
        }

    </style>
</head>
<body>
<?php include_once TPL_PATH . '/common/header.php';?>
</body>
</html>