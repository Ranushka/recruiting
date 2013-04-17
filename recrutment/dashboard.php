<?php include_once 'template/heder.php';?>
<body>
<div class="container-narrow">
  <?php include_once 'template/nav.php';?>
  










<div class="tabbable tabs-left">


  <ul class="nav nav-tabs">
    <li class="active"><a href="#lA" data-toggle="tab">Job posting</a></li>
    <li class=""><a href="#lB" data-toggle="tab">Interviewer</a></li>
    <li class=""><a href="#lC" data-toggle="tab">scheduling</a></li>
    <li class=""><a href="#lD" data-toggle="tab">Add Criteria</a></li>
  </ul>



  <div class="tab-content">

    <div class="tab-pane active" id="lA">
      <?php include_once 'dashboard/jobPosting.php';?>

    </div>

    <div class="tab-pane" id="lB">
      <?php include_once 'dashboard/interviewer.php';?>
      
    </div>

    <div class="tab-pane" id="lC">
      <?php include_once 'dashboard/scheduling.php';?>

    </div>

    <div class="tab-pane" id="lD">
      <?php include_once 'dashboard/defineCriteria.php';?>

    </div>

  </div>


</div>



















  <div class="footer">
    <p>© Company 2013</p>
  </div>

</div> <!-- /container -->

<?php include_once 'template/footer.php';?>