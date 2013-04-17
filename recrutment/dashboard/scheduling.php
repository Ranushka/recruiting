






















<form id="interviewer" class="form-horizontal">
  <fieldset>
    <legend>Interviews scheduling</legend>

    
    <div class="control-group">
      <label class="control-label" for="SelectJobTitle">Select Job title</label>
      <div class="controls">
        <select class="input-xlarge" id="SelectJobTitle" autofocus>
          <option>-select job title</option>
          <option>PHP Programmer</option>
          <option>Graphic designer</option>
          <option>UI engineer</option>
          <option>UX developer</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="schedulingDate">scheduling Date</label>
      <div class="controls">
        <input type="date" class="input-xlarge" id="schedulingDate">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="statingTime">stating time</label>
      <div class="controls">
        <input type="time" class="input-xlarge" id="statingTime">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="timeGap">time gap</label>
      <div class="controls">
        <input id="timeGap" class="input-xlarge" type="number" min="0" max="60" step="5" value="15">
      </div>
    </div>

    <p>Select candidates to schedule interviews</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th><input type="checkbox" name="" value=""></th>
          <th>candidate name</th>
          <th>aplication Rating</th>
          <th>Date</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Mark</td>
          <td>10</td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
        <tr>
          <td>2</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Jacob</td>
          <td>8</td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
        <tr>
          <td>3</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Larry </td>
          <td>5</td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
      </tbody>
    </table>
    


    <div class="control-group">
      <label class="control-label" for="AssignInterviewee">Assign interviewee 1</label>
      <div class="controls">
        <select id="AssignInterviewee1" class="input-xlarge">
          <option>select interviewee</option>
          <option>johon xmith</option>
          <option>alen joe</option>
          <option>helen keneeth</option>
          <option>hobe pentagon</option>
          <option>kanadi smith</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="AssignInterviewee1">Assign interviewee 2</label>
      <div class="controls">
        <select id="AssignInterviewee2" class="input-xlarge">
          <option>select interviewee</option>
          <option>johon xmith</option>
          <option>alen joe</option>
          <option>helen keneeth</option>
          <option>hobe pentagon</option>
          <option>kanadi smith</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="AssignInterviewee">Assign interviewee 3</label>
      <div class="controls">
        <select id="AssignInterviewee3" class="input-xlarge">
          <option>select interviewee</option>
          <option>johon xmith</option>
          <option>alen joe</option>
          <option>helen keneeth</option>
          <option>hobe pentagon</option>
          <option>kanadi smith</option>
        </select>
      </div>
    </div>


    <div class="form-actions">
      <button class="btn btn-large btn-block btn-success" type="submit">schedule Interviews</button>
    </div>
  </fieldset>
</form>