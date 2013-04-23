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

<lable style="display:none">
  
<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share" data-url="http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html"></script>


</lable>











        <button class="btn btn-large btn-block btn-inverse" type="button">post on LinkdIn</button>

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

      return $result->count;
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

       
        <a 
          style="display: none;visibility: hidden;"
          class="btn btn-large btn-block btn-primary"
          name="fb_share" 
          id="fbshare" 
          type=""
          share_url="http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html" href=""
          type="button">
          <script style="display: none;" src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>

</a>
<a id="fb_share" 
    href="https://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://aaaaaaaaaaaaaaaaaaaaaaa&amp;p[images][0]=http://www.your-site.com/share-image.jpg&amp;p[title]=My+Site+Title&amp;p[summary]=My+custom+description." target="_blank">
  <a class="btn btn-large btn-block btn-info" for="fbshare" type="button">post on Facebook</a>
</a>


        <a class="btn btn-large btn-block btn-danger" 
            href="https://plus.google.com/share?url=http://recrutmenttest.loomhost.com/recrutment/sharePost/staticPage.html"
            onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"
            type="button">Post on Google+</a>
      </div>
    </fieldset>
  </form>
  
  
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









