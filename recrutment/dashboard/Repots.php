






<p>Slect your Report type.</p>
<div class="tabbable"> <!-- Only required for left/right tabs -->

  <ul class="nav nav-tabs">
    <li class="active"><a href="#candidateReport" data-toggle="tab">Candidate Reports</a></li>
    <li><a href="#shadulingReport" data-toggle="tab">Shaduling Reports</a></li>
    <li><a href="#jobPostingReport" data-toggle="tab">Job Posting Reports</a></li>
  </ul>


  <div class="tab-content">



    <div class="tab-pane active" id="candidateReport">
      <?php include_once 'report/candidateReport.php';?>
    </div>

    <div class="tab-pane" id="shadulingReport">
      <?php include_once 'report/shadulingReport.php';?>
    </div>

    <div class="tab-pane" id="jobPostingReport">
      <?php include_once 'report/jobPostingReport.php';?>
    </div>




  </div>

</div>





