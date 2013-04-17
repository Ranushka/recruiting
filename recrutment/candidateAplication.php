<?php include_once 'template/heder.php';?>

<body>

  <div class="container-narrow">

    <div class="masthead">
      <ul class="nav nav-pills pull-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <h3 class="muted">Recrutment</h3>
    </div>

    <hr>

    <style type="text/css" media="screen">
    #PostingJobs .form-actions{
      padding-left: 20px;
    }
    </style>



<div class="accordion" id="accordion2">

  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>

  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche...
      </div>
    </div>
  </div>
  
</div>


    <form class="form-horizontal">
      <fieldset>
        <legend>Aplicent Personal Data</legend>

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
        
      </fieldset>

      <fieldset>
        <legend>Employe histry</legend>


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
          <label class="control-label" for="Superviser">Superviser</label>
          <div class="controls">
            <input type="text" class="input-xlarge" id="Superviser">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="SuperviserPhone">Superviser Phone</label>
          <div class="controls">
            <input type="tel" class="input-xlarge" id="SuperviserPhone">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="SuperviserEmail">Superviser Email</label>
          <div class="controls">
            <input type="Email" class="input-xlarge" id="SuperviserEmail">
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
            <span>from date</span>
            <input class="input-mini" type="date" id="fromDuration" placeholder=".input-mini">
            <span>to date</span>
            <input class="input-mini" type="date" id="toDuration" placeholder=".input-mini">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="Responsibilites">Responsibilites</label>
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
          <label class="control-label" for="fileInput">Atacha a CV</label>
          <div class="controls">
            <input class="input-file" id="fileInput" type="file">
          </div>
        </div>
        <div class="form-actions">

          <button class="btn btn-large btn-block btn-primary" type="submit">Submit my Aplication</button>

        </div>
      </fieldset>
    </form>




    <div class="footer">
      <p>© Company 2013</p>
    </div>

  </div> <!-- /container -->

  <?php include_once 'template/footer.php';?>