<?php include_once 'template/heder.php';?>

<body>

  <div class="container-narrow">

    <?php include_once 'template/nav.php';?>


    <hr>

<form class="form-horizontal applyingPosition">
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
    <label class="control-label" for="FirstName">I'm a human</label>
    <div class="controls">
      <input type="text" class="input-xlarge" id="FirstName" required>
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
                <label class="control-label" for="FirstName">First Name</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" id="FirstName" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="LastName">Last Name</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" id="LastName" required>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="optionsSex">Gender</label>
                <div class="controls">
                 <label class="radio">
                   <input type="radio" id="optionsSex" name="sex" value="male">Male<br>
                   <input type="radio" id="optionsSex" name="sex" value="female">Female
                 </label>
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="Street1">Street 1</label>
               <div class="controls">
                 <input type="text" class="input-xlarge" id="Street1">
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="Street2">Street 2</label>
               <div class="controls">
                 <input type="text" class="input-xlarge" id="Street2">
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="city">city</label>
               <div class="controls">
                 <input type="text" class="input-xlarge" id="city">
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="Zipcord">Zip cord</label>
               <div class="controls">
                 <input type="text" class="input-xlarge" id="Zipcord">
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="Phone">Phone</label>
               <div class="controls">
                 <input type="tel" class="input-xlarge" id="Phone">
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="Mobile">Mobile</label>
               <div class="controls">
                 <input type="tel" class="input-xlarge" id="Mobile" required>
               </div>
             </div>

             <div class="control-group">
               <label class="control-label" for="email">email</label>
               <div class="controls">
                 <input type="email" class="input-xlarge" id="email" required>
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
              <label class="control-label" for="Employer">Employer</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="Employer">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Address">Address</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="Address">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="supervisor">Supervisor</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="supervisor">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="supervisorPhone">supervisor Phone</label>
              <div class="controls">
                <input type="tel" class="input-xlarge" id="supervisorPhone">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="supervisorEmail">supervisor Email</label>
              <div class="controls">
                <input type="Email" class="input-xlarge" id="supervisorEmail">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Position">Position</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="Position">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Duration">Duration :</label>
              <div class="controls">
                <div class="control-group">
                  <label class="control-label" for="fromDuration">from date :</label>
                  <div class="controls">
                    <input class="input-medium" type="date" id="fromDuration" placeholder=".input-mini">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="toDuration">from date :</label>
                  <div class="controls">
                    <input class="input-medium" type="date" id="toDuration" placeholder=".input-mini">
                  </div>
                </div>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Responsibilites">Responsibilities</label>
              <div class="controls">
                <textarea class="input-xlarge" id="Responsibilites" rows="3"></textarea>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="Salary">Salary</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="Salary">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="fileInput">Attach a CV</label>
              <div class="controls">
                <input class="input-file" id="fileInput" type="file">
              </div>
            </div>
          </div><!-- <div class="accordion-inner"> -->
        </div><!-- <div id="collapseTwo" class="accordion-body collapse"> -->

      </article>

      <div class="form-actions">
        <button class="btn btn-large btn-block btn-success" type="submit">Submit my application</button>
      </div>
    </form>
  </div>



  <div class="footer">
    <p>© Company 2013</p>
  </div>

</div> <!-- /container -->

<?php include_once 'template/footer.php';?>