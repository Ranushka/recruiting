
<form id="defineCriteria" class="form-horizontal">
  <fieldset>
    <legend>Define Report to Genarate</legend>

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

    <div class="control-group">
      <label class="control-label" for="defineWatage">Candidate List</label>
      <div class="controls">

         <input type="radio" name="CandidateReport"><label class="radio" for="CandidateReport">Candidate List</label><br>
         <input type="radio" name="CandidateReport "><label class="radio"  for="InterviewdList">Interviewd List</label><br>
         <input type="radio" name="CandidateReport "><label class="radio"  for="NotInterviewdList">Not Interviewd List</label><br>

      </div>
    </div>
    
    <div class="form-actions">
      <button type="submit" class="btn btn-success">Genarate Report</button>
      <button class="btn">Cancel</button>
    </div>

  </fieldset>
</form>

<p class="text-right">List Report for <strong>UI engineer</strong> Position</p>

<table class="table table-hover tooltip-demo">
  <thead>
    <tr>
      <th>#</th>
      <th>Applicants name</th>
      <th>Applied for</th>
      <th>Application Rating</th>
      <th>Interviewed</th>
      <th>Interview Rating</th>
      <th>Comment</th>
    </tr>
  </thead>
  <tbody>
    <tr id="applicant1">
      <td>1</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
            <div class="bar bar-warning" style="width: 65%;"></div>
        </div>
      </td>
      <td>no</td>
      <td>5</td>
      <td>Genaral comment</td>
    </tr>

    <tr id="applicant2">
      <td>2</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-warning" style="width: 38%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>7</td>
      <td>Genaral comment</td>
    </tr>

    <tr id="applicant3">
      <td>3</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-warning" style="width: 90%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>3</td>
      <td>Genaral comment</td>
    </tr>
  </tbody>
</table>
