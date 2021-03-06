<?php
require('./wp-blog-header.php');

$the_id = get_the_ID();
$the_title = get_the_title($the_id);


error_reporting(-1);


function post_to_url($url, $data) {
 $fields = '';
 foreach($data as $key => $value) { 
  $fields .= $key . '=' . $value . '&'; 
}
rtrim($fields, '&');

$post = curl_init();

curl_setopt($post, CURLOPT_URL, $url);
curl_setopt($post, CURLOPT_POST, count($data));
curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($post);

curl_close($post);
}

session_start(); 



?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>


<style>

.page-id-4238 .feature {
  display: none !important;
}

</style>
<script type="text/javscript">
  function del_cookie(name) {
    document.cookie = name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
  }
</script>

<!-- SYSTEM JAVASCRIPT - DO NOT EDIT -->
<script type="text/javascript">
function fieldValidate(field) {
  /* call Mkto.setError(field, message) and return false to mark a field value invalid */
  /* return 'skip' to bypass the built-in validations */
  return true;
}
function getRequiredFieldMessage(domElement, label) {
  del_cookie("Registered"); //make sure user isn't considered "registered" if form validation failes
  return "This field is required";
}
function getTelephoneInvalidMessage(domElement, label) {
  del_cookie("Registered"); //make sure user isn't considered "registered" if form validation failes
  return "Please enter a valid telephone number";
}
function getEmailInvalidMessage(domElement, label) {
  del_cookie("Registered"); //make sure user isn't considered "registered" if form validation failes
  return "Please enter a valid email address";
}
</script>

<!-- Jquery for fancy things!-->

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js?ver=1.8.2'></script>
<script>
    // to make fancy buttons.  Uses noConflict just in case
     var $jQ = jQuery.noConflict();

     // Use jQuery via $j(...)
     $jQ(document).ready(function(){

       $jQ('input[id=mktFrmSubmit]').wrap("<div class='buttonSubmit'></div>");
       $jQ(".buttonSubmit").prepend("<span></span>");

     });
</script>

<script type="text/javascript">

    function mailchimpSignup(){
    
    var $form = $jQ("#mktForm_1012");
    // let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");
    // serialize the data in the form
    var serializedData = $form.serialize();
    var request = $jQ.ajax({
      url: "http://tech.contentlead.com/marketo/webinar-marketo-form.php",
      type: "post",
        data: serializedData
    });

    // callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // log a message to the console
        console.log("Hooray, it worked!"+serializedData);
        //submit form on page
        document.mktForm_1012.submit();
      });

  }

</script>

<script type="text/javascript" src="//b2c-mlm.marketo.com/jsloader/419dd01d-e934-4949-a94b-60b5f96af7ef/loader.php.js"></script>

<script type="text/javascript" src="http://fuel.brafton.com/js/mktFormSupport.js"></script>
  
<script type="text/javascript">
  var formEdit = false;

  var socialSignOn = {
    isEnabled: false,
    enabledNetworks: [''],
    cfId: '',
    codeSnippet: ''
  };
</script>

<script type="text/javascript">
var profiling = {
  isEnabled: false,
  numberOfProfilingFields: 3,
  alwaysShowFields: [ 'mktDummyEntry']
};
var mktFormLanguage = 'English'
</script>
<script type="text/javascript"> function mktoGetForm() {return document.getElementById('mktForm_1012'); }</script>
<style>
.wpcf7-form-control-wrap {
  width: 68%;
}
</style>

<div class="wpcf7">
  <form class="lpeRegForm formNotEmpty" method="post" enctype="application/x-www-form-urlencoded" action="http://fuel.brafton.com/index.php/leadCapture/save" id="mktForm_1012" name="mktForm_1012">
    <div class="left-col">
      <div class='mktFormReq mktField f-row'>
        <label class="cell-left">First Name:</label>
        <span class='mktInput wpcf7-form-control-wrap'>
          <input class='mktFormText mktFormString mktFReq cell-right req' placeholder="First Name" name="FirstName" id="FirstName" type='text' value="<?php echo $_COOKIE['FirstName']; ?>"  maxlength='255' tabIndex='1' size="40" />
          <span class='mktFormMsg'></span>
        </span>
      </div><!--mike comment-->
      <div class='mktFormReq mktField f-row'>
        <label class="cell-left">Last Name:</label>
        <span class='mktInput wpcf7-form-control-wrap'>
          <input class='mktFormText mktFormString mktFReq cell-right req' placeholder="Last Name" name="LastName" id="LastName" type='text' value="<?php echo $_COOKIE['LastName']; ?>"  maxlength='255' tabIndex='2' size="40" />
          <span class='mktFormMsg'></span>
        </span>
      </div>
      <div class="mktField f-row">
        <label class="cell-left">Email:</label>
        <span class="mktInput wpcf7-form-control-wrap">
          <input class="mktFormText mktFormEmail mktFReq cell-right req" placeholder="Email" name="Email" id="Email" type='text' value="<?php echo $_COOKIE['Email']; ?>"  maxlength='255' tabIndex='3' size="40" />
        </span>
      </div>
      <div class="mktField f-row">
        <label class="cell-left">Phone:</label>
        <span class="mktInput wpcf7-form-control-wrap">
          <input class="mktFormText mktFormPhone cell-right" placeholder="Phone" name="Phone" id="Phone" type='text' value="<?php echo $_COOKIE['Phone']; ?>"  maxlength='255' tabIndex='4' size="40" />
          <span class='mktFormMsg'></span>
        </span>
      </div>
      <div class="mktFormReq mktField f-row">
        <label class="cell-left">Company:</label>
        <span class="mktInput wpcf7-form-control-wrap">
          <input class="mktFormText mktFormString mktFReq cell-right req" placholder= "Company" name="Company" id="Company" type='text' value="<?php echo $_COOKIE['Company']; ?>"  maxlength='255' tabIndex='5' size="40" />
          <span class='mktFormMsg'></span>
        </span>
      </div>
      <div class="mktFormReq mktField f-row">
        <label class="cell-left">Website:</label>
        <span class="mktInput wpcf7-form-control-wrap">
          <input class="mktFormText mktFormUrl mktFReq cell-right req" placeholder="Website" name="Website" id="Website" type='text' value="<?php echo $_COOKIE['Website']; ?>"  maxlength='255' tabIndex='6' size="40" />
          <span class='mktFormMsg'></span>
        </span>
      </div>
      <!--<div class='mktField' style="display: none;">
        <label class="cell-left">Lead Source:</label>
        <span class='mktInput wpcf7-form-control-wrap'>
          <input class='mktFormHidden' name="LeadSource" id="LeadSource" type='hidden' value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
          <span class='mktFormMsg'></span>
        </span>
      </div>-->
      <div class='mktField' style="display: none;">
        <label class="cell-left">MKTO Source:</label>
        <span class='mktInput wpcf7-form-control-wrap'>
          <input class='mktFormHidden' name="MKTO_Source__c" id="MKTO_Source__c" type='hidden' value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
          <span class='mktFormMsg'></span>
        </span>
      </div>
    </div>

    <div class="right-col">
      <div class="f-row">
        <div class="feature">
          <span class="signup">
            <span class="wpcf7-list-item">
              <input type="checkbox" name="Newsletter_Frequency__c" id="Newsletter_Frequency__c" style="width:auto !important;margin-right:10px" value="Yes" checked="">
            </span>
          </span>
          <label>Get Our Marketing News? (Weekly Email)</label>
        </div>
      </div>
      <div class="f-row message">
        <label for="message-contact">Include a Message? (Optional)</label>
        <span class='mktInput wpcf7-form-control-wrap message'>
          <textarea class='mktFormTextarea mktFormTextarea' name="BR_Contact_Us_Message" id="BR_Contact_Us_Message" placeholder="A one-liner about your company and/or industry would be helpful, as well as availability." cols='40' rows='4'  tabIndex='7'></textarea>
          <span class='mktFormMsg'></span>
        </span>
      </div>

      <div class="mktFrmButtons f-row">
        <input id='mktFrmSubmit' type='submit' class="wpcf7-submit button" value='Send to Brafton' name='submitButton' onclick='formSubmit(document.getElementById("mktForm_1012")); return false;' />
        <input style='display: none;' id='mktFrmReset' type='reset' value='Clear' name='resetButton' onclick='formReset(document.getElementById("mktForm_1012")); return false;' />
      </div>
    </div>


    <span style="display:none;"><input type="text" name="_marketo_comments" value="" /></span>
  	<input type="hidden" name="lpId" value="1490" />
  	<input type="hidden" name="subId" value="25" />
  	<input type="hidden" name="munchkinId" value="447-XFF-352" />
  	<input type="hidden" name="kw" value="" />
  	<input type="hidden" name="cr" value="" />
  	<input type="hidden" name="searchstr" value="" />
  	<input type="hidden" name="lpurl" value="http://fuel.brafton.com/ContactUsBridge.html?cr={creative}&kw={keyword}" />
  	<input type="hidden" name="formid" value="1012" />
    <input type="hidden" name="returnURL" value="http://fuel.brafton.com/ThankYou1.html" />
    <input type="hidden" name="retURL" value="http://fuel.brafton.com/ThankYou1.html" />
  	<input type="hidden" name="returnLPId" value="-1" />
  	<input type="hidden" name="_mkt_disp" value="return" />
    <input type="hidden" name="_mkt_trk" value="" />
  </form>
</div>

<script type="text/javascript">

function setCookies() {
  //declare variables to calculate expiration
  var dt, expires, days;
  days = 180; //cookies last 180 days
  dt = new Date();
  dt.setTime(dt.getTime()+(days*24*60*60*1000));
  expires = "; expires="+dt.toGMTString()+"; path=/"; //string to add to each cookie, setting expire time and cookie path to site root

  //set them cookies!
  //add required field cookies
  document.cookie = "FirstName=" + document.getElementById('FirstName').value + expires;
  document.cookie = "LastName=" + document.getElementById('LastName').value + expires;
  document.cookie = "Company=" + document.getElementById('Company').value + expires;
  document.cookie = "Email=" + document.getElementById('Email').value + expires;

  //add non-required field cookies (if they've been filled in)
  var phone, website;
  phone = document.getElementById('Phone').value;
  website = document.getElementById('Website').value;
  if (phone)
    document.cookie = "Phone=" + phone + expires;
  if (website)
    document.cookie = "Website=" + website + expires;

  //check if person filling out form would like to subscribe to newsletter
  if ( document.getElementById('Newsletter_Frequency__c').checked ) {
    document.cookie = "Newsletter=Weekly" + expires;
  }
}

function formSubmit(elt) {
  setCookies();
  var theURL = document.URL;
 
  ga('send', 'event', 'Contact Us', 'Submit', '<?php echo curPageURL(); ?>');
  return Mkto.formSubmit(elt);
}
/*function formSubmit(elt) {
  setCookies();
  //var theURL = document.URL;
  //_gaq.push(['_trackEvent', 'Resource', 'Download', '<?php echo curPageURL(); ?>', '0' ]);
  return Mkto.formSubmit(elt);
}*/
function formReset(elt) {
  return Mkto.formReset(elt);
}
</script>

<script type="text/javascript" src="https://ssl-munchkin.marketo.net/js/munchkin.js"></script>
<script>mktoMunchkin('447-XFF-352', {customName: 'ResourceDownload', wsInfo: 'j1RR'});</script>
<!-- <script>Munchkin.init('447-XFF-352');</script> -->