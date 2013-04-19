






















<form id="defineCriteria" class="form-horizontal">
  <fieldset>
    <legend>Define Criteria</legend>

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
      <label class="control-label" for="criteriaName">Criteria name</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="criteriaName" required>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="defineWatage">Define wattage</label>
      <div class="controls">
        <input id="defineWatage" class="input-xlarge" type="number" min="0" max="100" step="5" value="10">
      </div>
    </div>
    
    <div class="form-actions">
      <button type="submit" class="btn btn-success">Add Criteria</button>
      <button class="btn">Cancel</button>
    </div>
  </fieldset>
</form>


<p class="text-right">Criteria's list for evaluating<strong>UI engineer</strong></p>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Criteria name</th>
      <th>wattage</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>20</td>

    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>50</td>

    </tr>
    <tr>
      <td>3</td>
      <td>Larry </td>
      <td>35</td>

    </tr>
  </tbody>
</table>