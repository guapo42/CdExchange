<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
<head>
<title>Upload Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>


<script src="<?=base_url()?>js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script> 
</head>
<body>

<?php if (isset($error)) echo $error;?>
<?php echo form_open_multipart('upload/do_upload');?>
<input type="file" name="userfile[]" size="20" class="multi" />
<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>

