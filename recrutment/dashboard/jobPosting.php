
<form id="PostingJobs" class="form-horizontal">
  <fieldset>
    <legend>Posting Jobs on Social Media.</legend>
    <div class="control-group">
      <label class="control-label" for="JobTitle">Job Title :</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="JobTitle" autofocus>
      </div>
    </div>


    <div class="control-group">
      <label class="control-label" for="startDate">Uploard Priod :</label>
      <div class="controls">
        <div class="control-group">
          <label class="control-label" for="startDate">start date :</label>
          <div class="controls">
            <input class="input-medium" type="date" id="startDate" placeholder=".input-mini">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="endDate">end date :</label>
          <div class="controls">
            <input class="input-medium" type="date" id="endDate" placeholder=".input-mini">
          </div>
        </div>
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
<div id="PostingJobsPreview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PostingJobsPreviewModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="PostingJobsPreviewModal">preview</h3>
  </div>
  <div class="modal-body">
    <p>preview Image goes hear</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>  
