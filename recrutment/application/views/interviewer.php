<div class="tab-pane container-narrow active">
  
  <?php 
    echo form_open_multipart('email/send',
    $attributes = array('class' => 'form-horizontal', 'id' => 'interviewer'));
  ?>
    <fieldset>
      <legend>Interviewer managing</legend>

      <div class="control-group">
        <label class="control-label" for="formInterviewerName">Interviewer name</label>
        <div class="controls">
          <?php 
            $formInterviewerName = array(
                'type'        => 'text',
                'name'        => 'formInterviewerName',
                'id'          => 'formInterviewerName',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'autofocus'   => 'autofocus',
                'required'    => 'required',
                'placeholder' => 'Johon Doe',
              );
              echo form_input($formInterviewerName);
          ?>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="formInterviewerPhone">Phone number</label>
        <div class="controls">
          <?php 
            $formInterviewerPhone = array(
                'type'        => 'tel',
                'name'        => 'formInterviewerPhone',
                'id'          => 'formInterviewerPhone',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => '071545454',
              );
              echo form_input($formInterviewerPhone);
          ?>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="formInterviewerEmail">Interviewer Email</label>
        <div class="controls">
          <?php 
            $formInterviewerEmail = array(
                'type'        => 'email',
                'name'        => 'formInterviewerEmail',
                'id'          => 'formInterviewerEmail',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => 'johon@mail.com',
              );
              echo form_input($formInterviewerEmail);
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