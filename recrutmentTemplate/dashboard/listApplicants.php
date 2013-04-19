





<form id="defineCriteria" class="form-horizontal container-narrow">
  <fieldset>
    <legend>List Applicants</legend>

    <div class="control-group">
      <label class="control-label" for="SelectJobTitle">Select Job title</label>
      <div class="controls">
        <select id="SelectJobTitle" autofocus>
          <option>-select job title</option>
          <option>PHP Programmer</option>
          <option>Graphic designer</option>
          <option>UI engineer</option>
          <option>UX developer</option>
        </select>
      </div>
    </div>
    
    <div class="form-actions">
      <button type="submit" class="btn btn-success">List Applicants for UX developer</button>
      <button class="btn">All Applicants</button>
    </div>
  </fieldset>
</form>


<p class="text-right">Listing Applicants for <strong> UX developer</strong></p>

<table class="table table-hover tooltip-demo">
  <thead>
    <tr>
      <th>#</th>
      <th>Applicants name</th>
      <th>Applied for</th>
      <th>Application Rating</th>
      <th>Interviewed</th>
      <th>Interview Rating</th>
      <th>view Application</th>
    </tr>
  </thead>
  <tbody>
    <tr id="applicant1">
      <td>1</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
            <div class="bar bar-success" style="width: 35%;"></div>
            <div class="bar bar-warning" style="width: 45%;"></div>
            <div class="bar bar-danger" style="width: 5%;"></div>
            <div class="bar bar-info" style="width: 15%;"></div>
        </div>
      </td>
      <td>no</td>
      <td>5</td>
      <td><a href="#applicant1M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
    </tr>

    <tr id="applicant2">
      <td>2</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-success" style="width: 35%;"></div>
          <div class="bar bar-warning" style="width: 20%;"></div>
          <div class="bar bar-danger" style="width: 10%;"></div>
          <div class="bar bar-info" style="width: 35%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>7</td>
      <td><a href="#applicant2M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
    </tr>

    <tr id="applicant3">
      <td>3</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-success" style="width: 25%;"></div>
          <div class="bar bar-warning" style="width: 25%;"></div>
          <div class="bar bar-danger" style="width: 25%;"></div>
          <div class="bar bar-info" style="width: 25%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>3</td>
      <td><a href="#applicant3M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
    </tr>
  </tbody>
</table>


 


<!-- Modal Posting Jobs Preview-->
<div id="applicant1M" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PostingJobsPreviewModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="PostingJobsPreviewModal">applicant 1 Modle</h3>
  </div>
  <div class="modal-body">
    
    <table class="table table-hover">
  <tbody>
    <tr>
      <td>First Name</td>
      <td>Johon</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>Doe</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>male</td>
    </tr>
    <tr>
      <td>Eddress</td>
      <td>284/27,Gadabuwana Rd, Mriswatha,Piliyandala.10300</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>0776566565</td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td>0776566565</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>male</td>
    </tr>
    <tr>
      <td>email</td>
      <td>ranushka543@gmail.com</td>
    </tr>

    <hr>

    <tr>
      <td>Employer</td>
      <td>Openarc</td>
    </tr>
    <tr>
      <td>Address</td>
      <td>Some Address, Address, Address.</td>
    </tr>
    <tr>
      <td>Supervisor</td>
      <td>Supervisor name</td>
    </tr>
    <tr>
      <td>supervisor Phone</td>
      <td>0776566565</td>
    </tr>
    <tr>
      <td>supervisor Email</td>
      <td>ranushka543@gmail.com</td>
    </tr>
    <tr>
      <td>Duration :</td>
      <td>dd/yy/-dd/yy</td>
    </tr>
    <tr>
      <td>Responsibilities</td>
      <td>Responsibilities Responsibilities Responsibilities Responsibilities Responsibilities</td>
    </tr>
    <tr>
      <td>Salary</td>
      <td>50000</td>
    </tr>
    <tr>
      <td>atachment</td>
      <td><a href="#applicant2M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
    </tr>
  </tbody>
</table>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>  


<!-- Modal Posting Jobs Preview-->
<div id="applicant2M" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PostingJobsPreviewModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="PostingJobsPreviewModal">applicant 1 Modle</h3>
  </div>
  <div class="modal-body">
    
    <table class="table table-hover">
      <tbody>
        <tr>
          <td>First Name</td>
          <td>Johon</td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td>Doe</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>male</td>
        </tr>
        <tr>
          <td>Eddress</td>
          <td>284/27,Gadabuwana Rd, Mriswatha,Piliyandala.10300</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>0776566565</td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td>0776566565</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>male</td>
        </tr>
        <tr>
          <td>email</td>
          <td>ranushka543@gmail.com</td>
        </tr>
      </tbody>
    </table>

    <table class="table table-hover">
      <tbody> 
        <tr>
          <td>Employer</td>
          <td>Openarc</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>Some Address, Address, Address.</td>
        </tr>
        <tr>
          <td>Supervisor</td>
          <td>Supervisor name</td>
        </tr>
        <tr>
          <td>supervisor Phone</td>
          <td>0776566565</td>
        </tr>
        <tr>
          <td>supervisor Email</td>
          <td>ranushka543@gmail.com</td>
        </tr>
        <tr>
          <td>Duration :</td>
          <td>dd/yy/-dd/yy</td>
        </tr>
        <tr>
          <td>Responsibilities</td>
          <td>Responsibilities Responsibilities Responsibilities Responsibilities Responsibilities</td>
        </tr>
        <tr>
          <td>Salary</td>
          <td>50000</td>
        </tr>
        <tr>
          <td>atachment</td>
          <td><a href="#applicant2M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
        </tr>
      </tbody>
    </table>


  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>  


<!-- Modal Posting Jobs Preview-->
<div id="applicant3M" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PostingJobsPreviewModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="PostingJobsPreviewModal">applicant 1 Modle</h3>
  </div>
  <div class="modal-body">
    <p>preview Image goes hear</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>  

