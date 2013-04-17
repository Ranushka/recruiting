<?php include_once 'template/heder.php';?>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Recrutment</h3>
      </div>

      <hr>

<style type="text/css" media="screen">
  #PostingJobs .form-actions{
    padding-left: 20px;
  }
   </style>

      <form id="PostingJobs" class="form-horizontal">
        <fieldset>
          <legend>Posting Jobs on Social Media.</legend>
          <div class="control-group">
            <label class="control-label" for="input01">Job Title :</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="input01">Uploard Priod :</label>
            <div class="controls">
              <span>start date</span>
              <input class="input-mini" type="date" placeholder=".input-mini">
              <span>end date</span>
              <input class="input-mini" type="date" placeholder=".input-mini">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="fileInput">Related grapic</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file">
            </div>
          </div>

          <div class="form-actions">
            <button class="btn">Cancel</button>
            <!-- Button to trigger modal PostingJobsPreview trigure-->
            <a href="#PostingJobsPreview" role="button" class="btn btn-primary" data-toggle="modal">Preview</a>
            

            <hr>
            <button class="btn btn-large btn-block btn-primary" type="button">post on Facebook</button>
            <button class="btn btn-large btn-block btn-info" type="button">Twit on twitter</button>
            <button class="btn btn-large btn-block btn-inverse" type="button">Post on linkedin</button>
          </div>
        </fieldset>
      </form>

 
      <!-- Modal Posting Jobs Preview-->
      <div id="PostingJobsPreview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">preview</h3>
        </div>
        <div class="modal-body">
          <p>preview Image goes hear</p>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
      </div>  

      <div class="footer">
        <p>© Company 2013</p>
      </div>

    </div> <!-- /container -->

<?php include_once 'template/footer.php';?>