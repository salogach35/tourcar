<?php require_once("classes/page.php");?>
<?php require_once("functions.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo get_css();?>
    <title>TOURCAR</title>
</head>
<body>
    <?php 
  
    if(isset($_REQUEST["pg"])){
        $pg=$_REQUEST["pg"];
    }
    else{
        $pg=1;
    }
    if($pg != 1){
        require_once("front/menu.php");
        require_once("front/footer.php");
    }
    $page=new Page($pg);
    $page->get_page();
    ?>

<?php echo get_js();?>

</body>
</html>