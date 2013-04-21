<div class="tab-pane container-narrow active">
  
  <?php 
    echo form_open('email/send',
    $attributes = array('class' => 'form-horizontal container-narrow', 'id' => 'defineCriteria'));
  ?>
    <fieldset>
      <legend>Define Criteria</legend>
  
      <div class="control-group">
        <label class="control-label" for="formSelectJobTitle">Select Job title</label>
        <div class="controls">
          <?php 
          $formSelectJobTitleOptions = array(
                  ''                => '-select job title-',
                  'PHPProgrammer'   => 'PHP Programmer',
                  'Graphicdesigner' => 'Graphic designer',
                  'UIengineer'      => 'UI engineer',
                  'UXdeveloper'     => 'UX developer',
                );
          echo form_dropdown('formSelectJobTitle', $formSelectJobTitleOptions);
          ?>
        </div>
      </div>
  
      <div class="control-group">
        <label class="control-label" for="formCriteriaName">Criteria name</label>
        <div class="controls">
          <?php 
            $formCriteriaName = array(
                'type'        => 'text',
                'name'        => 'formCriteriaName',
                'id'          => 'formCriteriaName',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => 'Creativness',
              );
              echo form_input($formCriteriaName);
          ?>
        </div>
      </div>
  
      <div class="control-group">
        <label class="control-label" for="defineWatage">Define wattage</label>
        <div class="controls">
          <?php 
            $formCriteriaName = array(
                'type'        => 'number',
                'name'        => 'formCriteriaName',
                'id'          => 'formCriteriaName',
                'class'       => 'input-xlarge',
                'min'         => '0',
                'max'         => '100',
                'step'        => '5',
                'value'       => '10',
                'placeholder' => '10',
              );
              echo form_input($formCriteriaName);
          ?>
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

</div>