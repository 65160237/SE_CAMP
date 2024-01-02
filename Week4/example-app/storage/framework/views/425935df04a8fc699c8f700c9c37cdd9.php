<center>
    <h1>My Floder and My Page </h1>
<h1>
    <?php echo $val_a. ' ' . $val_b; ?>
</h1>
<h1><?php echo e($val_a); ?> <?php echo e($val_b); ?></h1>
<form method="post" action="/my-route">
    <?php echo csrf_field(); ?>
    <input type="text" name ="myinput">
    <button type="submit">Submit</button>
</form>
</center>
<style>
    body {
 background-image: url("paper.gif");
 background-color: #cccccc;
}
</style>
<?php /**PATH C:\Users\informatics\example-app\resources\views/myfolder/mypage.blade.php ENDPATH**/ ?>