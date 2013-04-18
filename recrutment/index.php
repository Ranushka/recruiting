<?php include_once 'template/heder.php';?>
<body>
<div class="container-narrow">
  <?php include_once 'template/nav.php';?>
</div> <!-- class="container-narrow" -->
  



<div class="container">

  <div class="tabbable tabs-left">


    <ul class="nav nav-tabs">
      <li class="active"><a href="#lA" data-toggle="tab">Job posting</a></li>
      <li class=""><a href="#lB" data-toggle="tab">Interviewer</a></li>
      <li class=""><a href="#lC" data-toggle="tab">scheduling</a></li>
      <li class=""><a href="#lD" data-toggle="tab">Add Criteria</a></li>
      <li class=""><a href="#lE" data-toggle="tab">List Applicants</a></li>
    </ul>


    <div class="tab-content">

      <div class="tab-pane active container-narrow" id="lA">
        <?php include_once 'dashboard/jobPosting.php';?>
      </div>

      <div class="tab-pane container-narrow" id="lB">
        <?php include_once 'dashboard/interviewer.php';?>
      </div>

      <div class="tab-pane container-narrow" id="lC">
        <?php include_once 'dashboard/scheduling.php';?>
      </div>

      <div class="tab-pane container-narrow" id="lD">
        <?php include_once 'dashboard/defineCriteria.php';?>
      </div>

      <div class="tab-pane" id="lE">
        <?php include_once 'dashboard/listApplicants.php';?>
      </div>

    </div>
  </div>
</div> <!-- class="container-narrow" -->









<div class="container-narrow">

  <div class="footer">
    <p>© Company 2013</p>
  </div>

</div> <!-- class="container-narrow" -->

<?php include_once 'template/footer.php';?>