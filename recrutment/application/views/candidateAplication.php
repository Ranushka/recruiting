<div class="container-narrow">

  <?php 
    echo form_open_multipart('email/send',
    $attributes = array('class' => 'form-horizontal', 'id' => 'applyingPosition'));
  ?>
    <fieldset>
      <legend>Please select applying position</legend>



      <div class="control-group">
        <label class="control-label" for="optionsSex">I'm applying for</label>
        <div class="controls">
          <label class="radio">
            <input type="radio" name="applyingFor"  id="PHPProgrammer" value="PHP Programmer" /> <label for="PHPProgrammer">PHP Programmer</label> <small>( one <em>more days to close</em> )</small><br />
            <input type="radio" name="applyingFor" id="Graphicdesigner" value="Graphic designer" /> <label for="Graphicdesigner">Graphic designer</label> <small>( three <em>more days to close</em> )</small><br />
            <input type="radio" name="applyingFor" id="UIengineer" value="UI engineer" /> <label for="UIengineer">UI engineer</label> <small>( six <em>more days to close</em> )</small><br />
            <input type="radio" name="applyingFor" id="UXdeveloper" value="UX developer" /> <label for="UXdeveloper">UX developer</label> <small>( two <em>more days to close</em> )</small><br />
          </label>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="formCandiFirstName">I'm a human</label>
        <div class="controls">
          <?php 
          $vals = array(
            'word'   => 'Random word',
            'img_path'   => './captcha/',
            'img_url'  => 'http://localhost/a/trunk/recrutment/captcha/',
            'font_path'  => 'http://localhost/a/trunk/recrutment/captcha/KREEMDNA.TTF',
            'img_width'  => '150',
            'img_height' => 30,
            'expiration' => 7200
            );

          $cap = create_captcha($vals);
          echo $cap['image'];
          echo ' <input type="text" class="input-mediumname" captcha" value="" />';
          ?>
        </div>
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-success">Apply</button>
      </div>
    </fieldset>
  </form>


  <div class="accordion" id="accordion2">
    <form class="form-horizontal">
      <p class="text-right">You are Applying for <strong>PHP Programmer</strong> position</p>

      <article class="accordion-group">
        <header class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            <h4>Applicant Personal Data</h4>
          </a>
        </header>

        <div id="collapseOne" class="accordion-body collapse in">
          <div class="accordion-inner">
            <div class="control-group">
              <label class="control-label" for="formCandiFirstName">First Name</label>
              <div class="controls">
                <?php 
                $formCandiFirstName = array(
                  'type'        => 'text',
                  'name'        => 'formCandiFirstName',
                  'id'          => 'formCandiFirstName',
                  'class'       => 'input-xlarge',
                  'maxlength'   => '100',
                  'required'    => 'required',
                  'placeholder' => 'johon@mail.com',
                  );
                echo form_input($formCandiFirstName);
                ?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="formCandiLastName">Last Name</label>
              <div class="controls">
                <?php 
                $formCandiLastName = array(
                  'type'        => 'text',
                  'name'        => 'formCandiLastName',
                  'id'          => 'formCandiLastName',
                  'class'       => 'input-xlarge',
                  'maxlength'   => '100',
                  'required'    => 'required',
                  'placeholder' => 'johon@mail.com',
                  );
                echo form_input($formCandiLastName);
                ?>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="optionsSex">Gender</label>
              <div class="controls">
               <label class="radio">


                 <?php 
                 $radiomale = array(
                  'type'        => 'radio',
                  'name'        => 'newsletter',
                  'id'          => 'newsletter',
                  'value'       => 'male',
                  );
                 $radiofemale = array(
                  'type'        => 'radio',
                  'name'        => 'newsletter',
                  'id'          => 'newsletter',
                  'value'       => 'female',
                  );

                 echo form_checkbox($radiomale);
                 echo ('Male<br>');
                 echo form_checkbox($radiofemale);
                 echo ('Female<br>');
                 ?>
               </label>
             </div>
           </div>

           <div class="control-group">
             <label class="control-label" for="formCandiStreet1">Street 1</label>
             <div class="controls">
               <?php 
               $formCandiStreet1 = array(
                'type'        => 'text',
                'name'        => 'formCandiStreet1',
                'id'          => 'formCandiStreet1',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'placeholder' => 'No543,road,',
                );
               echo form_input($formCandiStreet1);
               ?>
             </div>
           </div>

           <div class="control-group">
             <label class="control-label" for="formCandiStreet2">Street 2</label>
             <div class="controls">
               <?php 
               $formCandiStreet2 = array(
                'type'        => 'text',
                'name'        => 'formCandiStreet2',
                'id'          => 'formCandiStreet2',
                'class'       => 'input-xlarge',
                'maxlength'   => '200',
                'placeholder' => 'street Rd,',
                );
               echo form_input($formCandiStreet2);
               ?>
             </div>
           </div>

           <div class="control-group">
             <label class="control-label" for="formCandicity">city</label>
             <div class="controls">
               <?php 
               $formCandicity = array(
                'type'        => 'text',
                'name'        => 'formCandicity',
                'id'          => 'formCandicity',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'placeholder' => 'TheCity.',
                );
               echo form_input($formCandicity);
               ?>
             </div>
           </div>

           <div class="control-group">
            <label class="control-label" for="formCandiZipcord">Zip cord</label>
            <div class="controls">
              <?php 
              $formCandiZipcord = array(
                'type'        => 'number',
                'name'        => 'formCandiZipcord',
                'id'          => 'formCandiZipcord',
                'class'       => 'input-xlarge',
                'maxlength'   => '8',
                'placeholder' => '10300',
                );
              echo form_input($formCandiZipcord);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiPhone">Phone</label>
            <div class="controls">
              <?php 
              $formCandiPhone = array(
                'type'        => 'tel',
                'name'        => 'formCandiPhone',
                'id'          => 'formCandiPhone',
                'class'       => 'input-xlarge',
                'maxlength'   => '10',
                'placeholder' => '011465895',
                );
              echo form_input($formCandiPhone);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiMobile">Mobile</label>
            <div class="controls">
              <?php 
              $formCandiMobile = array(
                'type'        => 'tel',
                'name'        => 'formCandiMobile',
                'id'          => 'formCandiMobile',
                'class'       => 'input-xlarge',
                'maxlength'   => '10',
                'required'    => 'required',
                'placeholder' => '072556689',
                );
              echo form_input($formCandiMobile);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiEmail">email</label>
            <div class="controls">
              <?php 
              $formCandiEmail = array(
                'type'        => 'email',
                'name'        => 'formCandiEmail',
                'id'          => 'formCandiEmail',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'required'    => 'required',
                'placeholder' => 'johon@mail.com',
                );
              echo form_input($formCandiEmail);
              ?>
            </div>
          </div>
        </div><!-- <div class="accordion-inner"> -->
      </div><!-- <div id="collapseOne" class="accordion-body collapse in"> -->

    </article>

    <article class="accordion-group">
      <header class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
          <h4>Employee history</h4>
        </a>
      </header>

      <div id="collapseTwo" class="accordion-body collapse">
        <div class="accordion-inner">
          <div class="control-group">
            <label class="control-label" for="formCandiEmployerEmail">Employer</label>
            <div class="controls">
              <?php 
              $formCandiEmployerEmail = array(
                'type'        => 'text',
                'name'        => 'formCandiEmployerEmail',
                'id'          => 'formCandiEmployerEmail',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'placeholder' => 'johon doe',
                );
              echo form_input($formCandiEmployerEmail);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiEmployerAddress">Address</label>
            <div class="controls">
              <?php 
              $formCandiEmployerAddress = array(
                'type'        => 'text',
                'name'        => 'formCandiEmployerAddress',
                'id'          => 'formCandiEmployerAddress',
                'class'       => 'input-xlarge',
                'maxlength'   => '200',
                'placeholder' => 'no-120,somplase,The City.',
                );
              echo form_textarea($formCandiEmployerAddress);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiEmployerSupervisor">Supervisor name</label>
            <div class="controls">
              <?php 
              $formCandiEmployerSupervisor = array(
                'name'        => 'formCandiEmployerSupervisor',
                'id'          => 'formCandiEmployerSupervisor',
                'class'       => 'input-xlarge',
                'maxlength'   => '200',
                'placeholder' => 'tom Johon',
                );
              echo form_input($formCandiEmployerSupervisor);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="supervisorPhone">supervisor Phone</label>
            <div class="controls">
              <?php 
              $formCandiEmployerSupervisorPhone = array(
                'type'        => 'tel',
                'name'        => 'formCandiEmployerSupervisorPhone',
                'id'          => 'formCandiEmployerSupervisorPhone',
                'class'       => 'input-xlarge',
                'maxlength'   => '10',
                'placeholder' => '072565454',
                );
              echo form_input($formCandiEmployerSupervisorPhone);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiEmployerSupervisorEmail">supervisor Email</label>
            <div class="controls">
              <?php 
              $formCandiEmployerSupervisorEmail = array(
                'type'        => 'email',
                'name'        => 'formCandiEmployerSupervisorEmail',
                'id'          => 'formCandiEmployerSupervisorEmail',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'placeholder' => 'supervisor@Email.com',
                );
              echo form_input($formCandiEmployerSupervisorEmail);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiPosition">your Position</label>
            <div class="controls">
              <?php
              $formCandiPosition = array(
                'type'        => 'email',
                'name'        => 'formCandiPosition',
                'id'          => 'formCandiPosition',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'placeholder' => 'Designer',
                );
              echo form_input($formCandiPosition);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="Duration">Duration :</label>
            <div class="controls">
              <div class="control-group">
                <label class="control-label" for="formCandiFromDate">from date :</label>
                <div class="controls">
                  <?php 
                  $formCandiFromDate = array(
                    'type'        => 'date',
                    'name'        => 'formCandiFromDate',
                    'id'          => 'formCandiFromDate',
                    'class'       => 'input-medium',
                    'maxlength'   => '100',
                    'required'    => 'required',
                    'placeholder' => 'yyyy/mm/dd',
                    );
                  echo form_input($formCandiFromDate);
                  ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="formCandiToDate">from date :</label>
                <div class="controls">
                  <?php 
                  $formCandiToDate = array(
                    'type'        => 'date',
                    'name'        => 'formCandiToDate',
                    'id'          => 'formCandiToDate',
                    'class'       => 'input-medium',
                    'maxlength'   => '100',
                    'required'    => 'required',
                    'placeholder' => 'yyyy/mm/dd',
                    );
                  echo form_input($formCandiToDate);
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="Responsibilites">Responsibilities</label>
            <div class="controls">
              <?php 
              $formCandiResponsibilites = array(
                'name'        => 'formCandiResponsibilites',
                'id'          => 'formCandiResponsibilites',
                'class'       => 'input-xlarge',
                'maxlength'   => '200',
                'placeholder' => 'some Responsibilities you had take care.',
                );
              echo form_textarea($formCandiResponsibilites);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="Salary">Salary</label>
            <div class="controls">
              <?php 
              $formCandiPosition = array(
                'type'        => 'number',
                'name'        => 'formCandiPosition',
                'id'          => 'formCandiPosition',
                'class'       => 'input-xlarge',
                'maxlength'   => '6',
                'placeholder' => '7000',
                );
              echo form_input($formCandiPosition);
              ?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="formCandiCV">Attach a CV</label>
            <div class="controls">
              <?php 
              $formCandiCV = array(
                'type'        => 'file',
                'name'        => 'formCandiCV',
                'id'          => 'formCandiCV',
                'class'       => 'input-xlarge',
                'maxlength'   => '1000',
                'placeholder' => 'cv',
                );
              echo form_input($formCandiCV);
              ?>
            </div>
          </div>
        </div><!-- <div class="accordion-inner"> -->
      </div><!-- <div id="collapseTwo" class="accordion-body collapse"> -->

    </article>

    <div class="form-actions">
      <button class="btn btn-large btn-block btn-success" type="submit">Submit my application</button>
    </div>
  </form>

</div><!-- <div class="container-narrow"> -->

