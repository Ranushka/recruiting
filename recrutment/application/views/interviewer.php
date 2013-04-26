<div class="tab-pane container-narrow active">
  
  <?php 

    ////
    //// $variables
    ////-----------
    ////  r_InterviewerName
    ////  r_InterviewerPhone
    ////  r_InterviewerEmail
    //// 
    echo form_open_multipart('email/send',
    $attributes = array('class' => 'form-horizontal', 'id' => 'interviewer'));
  ?>
    <fieldset>
      <legend>Interviewer managing</legend>

      <div class="control-group">
        <label class="control-label" for="r_InterviewerName">Interviewer name</label>
        <div class="controls">
          <?php 
            $r_InterviewerName = array(
                'type'        => 'text',
                'name'        => 'r_InterviewerName',
                'id'          => 'r_InterviewerName',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'autofocus'   => 'autofocus',
                'required'    => 'required',
                'placeholder' => 'Johon Doe',
              );
              echo form_input($r_InterviewerName);
          ?>
        </div>
      </div>


      <div class="control-group">
        <label class="control-label" for="r_InterviewerPhone">Phone number</label>
        <div class="controls">
          <?php 
            $r_InterviewerPhone = array(
                'type'        => 'tel',
                'name'        => 'r_InterviewerPhone',
                'id'          => 'r_InterviewerPhone',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => '071545454',
              );
              echo form_input($r_InterviewerPhone);
          ?>
        </div>
      </div>


      <div class="control-group">
        <label class="control-label" for="r_InterviewerEmail">Interviewer Email</label>
        <div class="controls">
          <?php 
            $r_InterviewerEmail = array(
                'type'        => 'email',
                'name'        => 'r_InterviewerEmail',
                'id'          => 'r_InterviewerEmail',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => 'johon@mail.com',
              );
              echo form_input($r_InterviewerEmail);
          ?>
        </div>
      </div>

      
      <div class="form-actions">
        <button type="submit" class="btn btn-success">Add to Interviewer pool</button>
        <button class="btn">Cancel</button>
      </div>
    </fieldset>
  </form>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Interviewer name</th>
        <th>Interviewer Phone</th>
        <th>Interviewer Email</th>
        <th>Last Interview</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>date</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>date</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Larry </td>
        <td>the Bird</td>
        <td>the Bird</td>
        <td>date</td>
      </tr>
    </tbody>
  </table>


</div>