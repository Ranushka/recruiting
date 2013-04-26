<div class="tab-pane container-narrow active">
  
  <?php 

    ////
    //// $variables
    ////-----------
    ////  r_selectJobTitle
    ////  r_CriteriaName
    ////  r_CriteriaWattage
    ////
    echo form_open('email/send',
    $attributes = array('class' => 'form-horizontal container-narrow', 'id' => 'defineCriteria'));
  ?>
    <fieldset>
      <legend>Define Criteria</legend>
  
      <div class="control-group">
        <label class="control-label" for="r_selectJobTitle">Select Job post Title</label>
          <div class="controls">
            <?php 
            $r_selectJobTitle = array(
                    ''                => '-select job title-',
                    'PHPProgrammer'   => 'PHP Programmer',
                    'Graphicdesigner' => 'Graphic designer',
                    'UIengineer'      => 'UI engineer',
                    'UXdeveloper'     => 'UX developer',
                  );
            echo form_dropdown('PHPProgrammer', $r_selectJobTitle);
            ?>
          </div>
      </div>
  
      <div class="control-group">
        <label class="control-label" for="r_CriteriaName">Criteria name</label>
        <div class="controls">
          <?php 
            $r_CriteriaName = array(
                'type'        => 'text',
                'name'        => 'r_CriteriaName',
                'id'          => 'r_CriteriaName',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => 'Creativness',
              );
              echo form_input($r_CriteriaName);
          ?>
        </div>
      </div>
  
      <div class="control-group">
        <label class="control-label" for="r_CriteriaWattage">Define wattage</label>
        <div class="controls">
          <?php 
            $r_CriteriaWattage = array(
                'type'        => 'number',
                'name'        => 'r_CriteriaWattage',
                'id'          => 'r_CriteriaWattage',
                'class'       => 'input-xlarge',
                'min'         => '0',
                'max'         => '100',
                'step'        => '5',
                'value'       => '10',
                'placeholder' => '10',
              );
              echo form_input($r_CriteriaWattage);
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