

<?php echo $error;?>

<h1>Super Awesome (Simple) CD Exchange Upload Form</h1>
<?php echo form_open_multipart('upload/do_upload');?>
<p>
<h2 for='title'>Title</h2>
<input type="text" name="title" id="title">
</p>
<p>
<h2 for='userfile'>Zip File</h2>
<input type="file" name="userfile" size="20" />
</p>
<br /><br />

<input type="submit" value="upload" />

</form>
