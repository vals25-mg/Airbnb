<?php

$listDetail=array();
if (isset($_GET['id'])) {
    $listDetail=getHabitationByid($_GET['id']);
}
?>

    <div class="container">
       
        <div class="row">
        <img src=<?php echo '../assets/img/'.$listDetail[0]['image']; ?> class="img-fluid shadow-lg p-3 mb-5 bg-body rounded" alt="aDSFGHJKL;.:">
        </div>
        <div class="row ">
            <div class="col-7 shadow-sm">
            <div class="vr">
            <p><em>
                <?php echo $listDetail[0]['description']; ?>
            </em></p>
            </div>
            </div>
            <div class="col-5">
            <a class="btn btn-success"  href="#">Reserver</a>
            </div>
        </div>
        
    </div>
