<!DOCTYPE html>
<html>
<head>
    <title>PHP Laravel 6 - multiple file uploading dropzone js example</title>
    <script src="plugin/jquery.js"></script>
    <link rel="stylesheet" href="plugin/bootstrap-3.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><form action="" class="dropzone" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
</form>
            <div>
                <h3>Simple Upload Multiple Image By Click On Drop Box</h3>
            </div>
            
        </div>
    </div>
</div>


<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>


</body>
</html>