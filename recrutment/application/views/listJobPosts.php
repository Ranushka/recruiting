<div class="tab-pane active listApplicants" id="listJobPosts">

  <?php 

    ////
    //// $variables
    ////-----------
    ////  r_jobPostCategory
    ////  r_selectJobTitle
    ////  


    echo form_open_multipart('email/send',
    $attributes = array('class' => 'form-horizontal', 'id' => 'applyingPosition'));
  ?>
    <fieldset>
      <legend>Please select criteria to list Job Postings</legend>

      <div class="control-group">
        <label class="control-label" for="r_jobPostCategory">Select Job category </label>
        <div class="controls">
          <?php 
          $r_jobPostCategory = array(
                    '1category' => 'php',
                    '2category' => 'designer',
                    '3category' => 'dsad',
                    '4category' => 'dsad',
                    '5category' => 'dsa'
                );
          echo form_dropdown($r_jobPostCategory);
          ?>
        </div>
      </div>


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


      <div class="form-actions">
        <button type="submit" class="btn btn-success">List posts for ux Developer</button>
        <button class="btn">All posts</button>
      </div>
    </fieldset>
  </form>

  <p class="text-right">Listing Job Postings <strong> UX developer</strong></p>
  <table class="table table-hover tooltip-demo">
    <thead>
      <th>#</th>
      <th>Ticket Id </th>
      <th>category</th>
      <th>job Post Title</th>
      <th>Positions count</th>
      <th>Opening Date</th>
      <th>Closing Date</th>
      <th>Description</th>
      <th>job Post Graphic</th>
      <th>number of applicants </th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>GD001</td>
        <td>php</td>
        <td>php developer</td>
        <td>4</td>
        <td>dd/mm/yy</td>
        <td>dd/mm/yy</td>
        <td>sad s da dsd</td>
        <td><a href="#applicant3M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
        <td>10</td>
      </tr>
      <tr>
        <td>2</td>
        <td>PHP001</td>
        <td>grapic</td>
        <td>ui</td>
        <td>1</td>
        <td>dd/mm/yy</td>
        <td>dd/mm/yy</td>
        <td>sad s da dsd</td>
        <td><a href="#applicant3M" role="button" class="btn btn-mini btn-success" data-toggle="modal">Preview</a></td>
        <td>2</td>
      </tr>
    </tbody>
  </table>

</div>

 

