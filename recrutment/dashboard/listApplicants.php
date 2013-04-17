




<style type="text/css" media="screen">

.viewA{

  position: absolute;


}

</style>





<script type="text/javascript">
jQuery(document).ready(function()
{

  // tooltip demo
  $('.tooltip-demo').tooltip({
    selector: "a[data-toggle=tooltip]"
  })





//   jQuery(".ApplicantRating").hover(
//     function()
//     { 
//       var unicApplicantId = $(this).parent().attr("id");
//       $(this).append($("<a href='#applicant1' role='button' class='btn btn-mini viewA' data-toggle='modal'>View Application</a>")); },
//     function()
//     { $(this).find(".viewA").remove(); }
//   );


});



</script>



<form id="defineCriteria" class="form-horizontal">
  <fieldset>
    <legend>List Applicants</legend>

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
    
    <div class="form-actions">
      <button type="submit" class="btn btn-success">List Applicants for UX developer</button>
      <button class="btn">All Applicants</button>
    </div>
  </fieldset>
</form>


<p class="text-right">Listing Applicants for <strong> UX developer</strong></p>

<table class="table table-hover tooltip-demo">
  <thead>
    <tr>
      <th>#</th>
      <th>Applicants name</th>
      <th>Applied for</th>
      <th>Application Rating</th>
      <th>Interviewed</th>
      <th>Interview Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr id="applicant1">
      <td>1</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
            <div class="bar bar-success" style="width: 35%;"></div>
            <div class="bar bar-warning" style="width: 45%;"></div>
            <div class="bar bar-danger" style="width: 5%;"></div>
            <div class="bar bar-info" style="width: 15%;"></div>
        </div>
      </td>
      <td>no</td>
      <td>5</td>
    </tr>

    <tr id="applicant2">
      <td>2</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-success" style="width: 35%;"></div>
          <div class="bar bar-warning" style="width: 20%;"></div>
          <div class="bar bar-danger" style="width: 10%;"></div>
          <div class="bar bar-info" style="width: 35%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>7</td>
    </tr>

    <tr id="applicant3">
      <td>3</td>
      <td>Applicants name</td>
      <td>Applied for</td>
      <td class="ApplicantRating">
        <div class="progress">
          <div class="bar bar-success" style="width: 25%;"></div>
          <div class="bar bar-warning" style="width: 25%;"></div>
          <div class="bar bar-danger" style="width: 25%;"></div>
          <div class="bar bar-info" style="width: 25%;"></div>
        </div>
      </td>
      <td>dd/mm/yyyy</td>
      <td>3</td>
    </tr>
  </tbody>
</table>






<!-- Modal Posting Jobs Preview-->
<div id="applicant1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">preview</h3>
  </div>
  <div class="modal-body">
    <p>preview Image goes hear</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>  

