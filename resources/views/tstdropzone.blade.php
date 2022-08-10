<!DOCTYPE html>
<html>
<head>
    <title>PHP Laravel 6 - multiple file uploading dropzone js example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="plugin/bootstrap-3.min.css">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone">
          
          <input type="file" name="file" />
      </form>
            
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