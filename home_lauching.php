<?php  /*
Template Name: lauching_theme
*/
get_header();
 ?>

<section class="mainHome">

<?php
    $id = 10;
    $myPage = get_post($id);
    $dateField = get_post_meta($id, 'Date_release')[0];


 // Var Diff Time
    $timeRelease = strtotime($dateField);
    $timeNow = current_time('timestamp');
    // print($timeRelease);
    $dateNow = date('d-m-Y H:i:s',$timeNow );

    $datetime1 = new DateTime($dateField);
    $datetime2 = new DateTime($dateNow);

    $diffDate = $datetime1->diff($datetime2);

    $timeLeft = $diffDate->format(' %m months %d days %H hours %i minutes');

    // $humanTimeDiff = human_time_diff($timeNow, $timeRelease );
    $humanTimeDiff = human_time_diff(strtotime("now"), strtotime("10/05/2020 00:00:00 ") );
    // print $humanTimeDiff;


    include 'partials/date_since.php';

// calcul difference time with Human time
    print diff_time_stamp($timeNow, $timeRelease);
    // var_dump( $humanTimeDiff);
    // printf( _x( '%s ago ', '%s   '), $humanTimeDiff );



 ?>

<h1> <?php echo $myPage->post_title ?> </h1>

    <h2><?php  echo $timeLeft ; ?></h2>
<h2> DAYS</h2>

<p><?php echo $myPage->post_content ?>
</p>
<?php include 'partials/modalMail.php';?>


<section class="socialLinks text-center">
    <a href="#"><i class="fab fa-facebook"></i>
</a>
<a href="#"><i class="fab fa-twitter-square"></i></a>
<a href="#"><i class="fab fa-twitter-square"></i></a>
<a href="#"><i class="fab fa-twitter-square"></i></a>
<a href="#"><i class="fab fa-twitter-square"></i></a>
</section>



<p> Template Handcrafted by <a href="#">Codi n Camp</a> </p>


</section>

<?php

get_footer();
 ?>
