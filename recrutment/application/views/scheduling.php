<div class="tab-pane container-narrow active">

  <?php 
    echo form_open('email/send',
    $attributes = array('class' => 'form-horizontal container-narrow', 'id' => 'interviewsScheduling'));
  ?>
    <fieldset>
      <legend>Interviews scheduling</legend>

      
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
        <label class="control-label" for="formschedulingDate">scheduling Date</label>
        <div class="controls">
          <?php 
          $formschedulingDate = array(
            'type'        => 'date',
            'name'        => 'formschedulingDate',
            'id'          => 'formschedulingDate',
            'class'       => 'input-xlarge',
            'maxlength'   => '100',
            'required'    => 'required',
            'placeholder' => 'yyyy/mm/dd',
            );
          echo form_input($formschedulingDate);
          ?>
        </div>
      </div>

       <div class="control-group">
          <label class="control-label" for="formStartDate">start date </label>
          <div class="controls">
            <?php 
              $formStartDate = array(
                  'type'        => 'date',
                  'name'        => 'formStartDate',
                  'id'          => 'formStartDate',
                  'class'       => 'input-xlarge',
                  'maxlength'   => '100',
                  'required'    => 'required',
                  'placeholder' => 'yyyy/mm/dd',
                );
                echo form_input($formStartDate);
            ?>
          </div>
        </div>

      <div class="control-group">
        <label class="control-label" for="timeGap">time gap</label>
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
                'placeholder' => '10',
              );
              echo form_input($formCriteriaName);
          ?>
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
        <label class="control-label" for="formAssignInterviewee1">Select Job title</label>
        <div class="controls">
          <?php 
          $formAssignInterviewee1 = array(
                  ''              => '-select interviewee-',
                  'johonxmith'    => 'johon xmith',
                  'alenjoe'       => 'alen joe',
                  'helenkeneeth'  => 'helen keneeth',
                  'hobepentagon'  => 'hobe pentagon',
                  'kanadismith'   => 'kanadi smith',
                );
          echo form_dropdown('formSelectJobTitle', $formAssignInterviewee1);
          ?>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="formAssignInterviewee2">Select Job title</label>
        <div class="controls">
          <?php 
          $formAssignInterviewee2 = array(
                  ''              => '-select interviewee-',
                  'johonxmith'    => 'johon xmith',
                  'alenjoe'       => 'alen joe',
                  'helenkeneeth'  => 'helen keneeth',
                  'hobepentagon'  => 'hobe pentagon',
                  'kanadismith'   => 'kanadi smith',
                );
          echo form_dropdown('formSelectJobTitle', $formAssignInterviewee2);
          ?>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="formAssignInterviewee3">Select Job title</label>
        <div class="controls">
          <?php 
          $formAssignInterviewee3 = array(
                  ''              => '-select interviewee-',
                  'johonxmith'    => 'johon xmith',
                  'alenjoe'       => 'alen joe',
                  'helenkeneeth'  => 'helen keneeth',
                  'hobepentagon'  => 'hobe pentagon',
                  'kanadismith'   => 'kanadi smith',
                );
          echo form_dropdown('formSelectJobTitle', $formAssignInterviewee3);
          ?>
        </div>
      </div>


      <div class="form-actions">
        <button class="btn btn-large btn-block btn-success" type="submit">schedule Interviews</button>
      </div>
    </fieldset>
  </form>

</div>