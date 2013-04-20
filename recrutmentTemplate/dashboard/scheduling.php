






















<form id="interviewer" class="form-horizontal">
  <fieldset>
    <legend>Interviews scheduling</legend>

    
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
      <label class="control-label" for="statingTime">stating time</label>
      <div class="controls">
        <input id="statingTime" class="input-xlarge" type="number" min="0" max="60" step="5" value="15">
      </div>
    </div>

    <p>Select candidates to schedule interviews</p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th><input type="checkbox" name="" value=""></th>
          <th>candidate name</th>
          <th>Date</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Mark</td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
        <tr>
          <td>2</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Jacob</td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
        <tr>
          <td>3</td>
          <th><input type="checkbox" name="" value=""></th>
          <td>Larry </td>
          <td>yyyy/mm/dd</td>
          <td>hh:mm:AM</td>
        </tr>
      </tbody>
    </table>
    
    <div class="form-actions">
      <button class="btn btn-large btn-block btn-success" type="submit">schedule Interviews</button>
    </div>
  </fieldset>
</form>