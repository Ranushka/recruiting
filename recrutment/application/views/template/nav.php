<body>
	<div class="container-narrow">
		<nav class="masthead">

			<div class="btn-group collapsTabs pull-right">
			  <button class="btn dropdown-toggle" data-toggle="dropdown">
			    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">

			  	<li><a href="index.php">Dashboard</a></li>
				<li><a href="candidateAplication.php">Candidate Application</a></li>
				<li><a href="#">Contact</a></li>
			  	<li class="divider"></li>
			    <li class=""><a href="#lA" data-toggle="tab">Job posting</a></li>
			    <li class=""><a href="#lB" data-toggle="tab">Interviewer</a></li>
			    <li class=""><a href="#lC" data-toggle="tab">scheduling</a></li>
			    <li class=""><a href="#lD" data-toggle="tab">Add Criteria</a></li>
			    <li class=""><a href="#lE" data-toggle="tab">List Applicants</a></li>
			    <li class=""><a href="#lF" data-toggle="tab">Repots</a></li>

			  </ul>
			</div>

			<ul class="nav nav-pills pull-right collapsTabsHids">
				<li><a href="<?php echo base_url(); ?>index.php/rate">Rate Aplicent</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/home">Dashboard</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/candidateAplication">Candidate Application</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		  	
		  	<h3 class="muted">Recruitment</h3>

		</nav>
		<hr>
	</div> <!-- class="container-narrow" -->


<div class="container">

  <div class="tabbable tabs-left" id="tabbableContainer">

    <!-- this will hide on screen sixze 467px -->
    <ul class="nav nav-tabs collapsTabsHids dashbordNavigation">


    	 <!-- class====active -->


      <li id="home">
      	<a href="<?php echo base_url(); ?>index.php/home">Home</a>
      </li>
      <li id="jobPosting">
      	<a href="<?php echo base_url(); ?>index.php/jobPosting">Job posting</a>
      </li>
      <li id="interviewer">
      	<a href="<?php echo base_url(); ?>index.php/interviewer">Interviewer</a>
      </li>
      <li id="scheduling">
      	<a href="<?php echo base_url(); ?>index.php/scheduling">scheduling</a>
      </li>
      <li id="defineCriteria">
      	<a href="<?php echo base_url(); ?>index.php/defineCriteria">Add Criteria</a>
      </li>
      <li id="listApplicants">
      	<a href="<?php echo base_url(); ?>index.php/listApplicants">List Applicants</a>
      </li>
      <li id="repots">
      	<a href="<?php echo base_url(); ?>index.php/repots">Repots</a>
      </li>
    </ul>

    <!-- this script will use to addclass to the navigation for
    indicating the open tab -->
	<script type="text/javascript">$(window).load(function() {$('#<?php echo $containerId; ?>').addClass('active')})</script>


    <div class="tab-content">
