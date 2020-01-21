<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
  <style type="text/css">
    button.kv-file-upload.btn.btn-kv.btn-default.btn-outline-secondary {
    display: none;
}
a.btn.btn-default.btn-secondary.fileinput-upload.fileinput-upload-button {
    display: none;
}
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">jQuery, Bootstrap Fileinput Example</h1><br>                
                    <div class="form-group">
                        <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="file-loading">
                            <input id="image-file" type="file" name="image[]"  data-min-file-count="1" multiple>
                            <input type="button" name="" value="save">
                        </div>
                        <input type="submit" name="" value="save">
                        </form>
                    </div>                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $("#image-file").fileinput({
            theme: 'fa',
            uploadUrl: "{{url('aserdtfyui')}}", 
            allowedFileExtensions: ['jpg', 'png', 'gif','jpeg','mp4'],
            overwriteInitial: false,
            // maxFileSize:2048,
            maxFilesNum: 10
        });
    </script>
</body>
</html>