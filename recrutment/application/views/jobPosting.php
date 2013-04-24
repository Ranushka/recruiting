<div class="tab-pane active container-narrow">
        



<?php 

////
//// To DO Error hadaling & success msg.
////
if (isset($SuccesMsg)) {
 echo $SuccesMsg;
}
////
//// To DO Error hadaling & success msg.
////
if (isset($error)) {
  echo $error ;
}

?>



  <?php 
    echo form_open_multipart('jobPosting/do_upload',
    $attributes = array('class' => 'form-horizontal', 'id' => 'PostingJobs'));
  ?>
    <fieldset>
      <legend>Posting Jobs on Social Media.</legend>
      <div class="control-group">
        <label class="control-label" for="formJobTitle">Job Title </label>
        <div class="controls">
          <?php 
            $formJobTitle = array(
                'type'        => 'text',
                'name'        => 'formJobTitle',
                'id'          => 'formJobTitle',
                'class'       => 'input-xlarge',
                'maxlength'   => '100',
                'autofocus'   => 'autofocus',
                'required'    => 'required',
                'placeholder' => 'Ux designer',
              );
              echo form_input($formJobTitle);
          ?>
        </div>
      </div>
  
  
      <div class="control-group">
        <label class="control-label">Uploard Priod :</label>
        <div class="controls">
          <div class="control-group">
            <label class="control-label" for="formStartDate">start date </label>
            <div class="controls">
              <?php 
                $formStartDate = array(
                    'type'        => 'date',
                    'name'        => 'formStartDate',
                    'id'          => 'formStartDate',
                    'class'       => 'input-medium',
                    'maxlength'   => '100',
                    'required'    => 'required',
                    'placeholder' => 'yyyy/mm/dd',
                  );
                  echo form_input($formStartDate);
              ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="formEndDate">end date </label>
            <div class="controls">
              <?php 
                $formEndDate = array(
                    'type'        => 'date',
                    'name'        => 'formEndDate',
                    'id'          => 'formEndDate',
                    'class'       => 'input-medium',
                    'maxlength'   => '100',
                    'required'    => 'required',
                    'placeholder' => 'yyyy/mm/dd',
                  );
                  echo form_input($formEndDate);
              ?>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="control-group">
        <label class="control-label" for="fileInput">Related grapic </label>
        <div class="controls">
          <?php 
            $formJobPostingfile = array(
                'type'        => 'file',
                'name'        => 'formJobPostingfile',
                'id'          => 'formJobPostingfile',
                'class'       => 'input-file',
                'maxlength'   => '100',
                'placeholder' => 'select grapic art',
                'pattern'     => '([^\s]+(\.(?i)(jpg|png|gif|bmp))$)',
                'accept'      => 'image/*',
                'onchange'    => 'readURL(this);',
              );
              echo form_input($formJobPostingfile);
          ?>

          <input class="btn btn-success" type="submit" value="A upload" />

        </div>
      </div>
  
      <div class="form-actions">
        <button class="btn">Cancel</button>
        <!-- Button to trigger modal PostingJobsPreview trigure-->
        <a id="jobPostingPreview" href="#PostingJobsPreview" role="button" class="btn btn-success" data-toggle="modal">Preview</a>
        
  
        <hr>
        <div class="row-fluid">
          <!-- ****************************************** -->
          <!-- twitter-share-button
          <!-- ****************************************** -->
         <?php
          function fb_count() {
          global $fbcount;
          $facebook = file_get_contents('https://api.facebook.com/restserver.php?method=links.getStats&urls=http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html');
          $fbbegin = '<share_count>'; $fbend = '</share_count>';
          $fbpage = $facebook;
          $fbparts = explode($fbbegin,$fbpage);
          $fbpage = $fbparts[1];
          $fbparts = explode($fbend,$fbpage);
          $fbcount = $fbparts[0];
          if($fbcount == '') { $fbcount = '0'; }
          }   

          $title=urlencode("zzzzzzzzzzzzzzzzzzzzzzzzzzzzz");
          $url=urlencode("http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html");
          $summary=urlencode("aaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaa");
          $image=urlencode("http://www.daddydesign.com/ClientsTemp/Tutorials/custom-iframe-share-button/images/thumbnail.jpg");
          ?>
          <a class="btn btn-large btn-block span6 btn-primary" 
              type="button"
              onclick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"> 
          post on Facebook
          </a>

        


          <!-- ****************************************** -->
          <!-- twitter-share-button
          <!-- ****************************************** -->
          <?php 
             class ShareButton
            {
              private static function get_tweets($url)
              {
                $api = "http://urls.api.twitter.com/1/urls/count.json?url=";

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                curl_setopt($ch, CURLOPT_URL, $api.$url);
                $result = json_decode(curl_exec($ch));

               // return $result->count;
              }
              public static function tweet($url, $text = '', $placeholder = 'Tweet')
              {
                $text   = urlencode($text);
                $url    = urlencode($url);
                $tweets = self::get_tweets($url);
                $button = sprintf('<a target="_blank" data-count="%d" title="Share on Twitter" href="http://twitter.com/share?text=%s&url=%s" class="btn btn-large btn-block span6 btn-info cusBut" rel="nofollow">%s</a>​​​​​', $tweets, $text, $url, $placeholder);
                return $button;
              }
            }
            echo ShareButton::tweet('http://blog.idered.pl/post/create-custom-twitter-share-button', 'Create custom Twitter share button', 'Twit on twitter');
          ?>

        </div>
        <div class="row-fluid" style="margin-top: -14px;">
          <!-- ****************************************** -->
          <!-- Post-on-linkedin
          <!-- ****************************************** -->

          <a class="btn btn-large btn-block span6 btn-inverse" 
           onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=http%3A//recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html&title=aaaaaaaaaaa&summary=zzzzzzzzzzzzz', 'toolbar=0,status=0,width=620,height=280');" href="javascript: void(0)"
           type="button">Post on linkedin</a>
          
          <!-- ****************************************** -->
          <!-- Google-plus-button
          <!-- ****************************************** -->
          <a class="btn btn-large btn-block span6 btn-danger cusBut"
              type="button"
              href="https://plus.google.com/share?url=http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html"
              onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
              type="button">
              Google plus
          </a>
        </div>
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
  
  
  <!-- Modal Posting Jobs Preview-->
  <div id="PostingJobsPreview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="PostingJobsPreviewModal" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="PostingJobsPreviewModal">preview</h3>
    </div>
    <div id="jobPostingPreviewContainer" class="modal-body">
      
      <script type="text/javascript">

        jQuery('#jobPostingPreview').click(function() 
        {

    ////
    //// To Preview the Text before it is uploaded.
    ////
          var formJobTitle = jQuery('#formJobTitle').val();
          var formStartDate = jQuery('#formStartDate').val();
          var formEndDate = jQuery('#formEndDate').val();
          
          jQuery('#jobPostingPreviewContainer').append('<p>'+formJobTitle+'</p>')
          jQuery('#jobPostingPreviewContainer').append('<p>'+formStartDate+'</p>')
          jQuery('#jobPostingPreviewContainer').append('<p>'+formEndDate+'</p>')

        })

    ////
    //// To Preview an image before it is uploaded.
    ////
         function readURL(input) 
         {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function (e) 
                {
                    $('#jobPostingPreviewImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
          }



      </script>

        <img id="jobPostingPreviewImage" src="#" alt="your image" />


    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </div> 

</div>