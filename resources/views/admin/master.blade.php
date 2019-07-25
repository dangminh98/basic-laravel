<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <link rel="stylesheet" href="http://localhost/fashion/resources/sass/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    @include('admin.share.top-asset')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.share.header')

@include('admin.share.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('titleContent')
                <small> @yield('descTitle') </small>
            </h1>
        </section>

        <!-- Main content -->
    @yield('main-content')
    <!-- /.content -->
    </div>

</div>
<!-- ./wrapper -->
@include('admin.share.bottom-asset')
<script src="{!! asset('/js/my-script.js') !!}"></script>
<script type="text/javascript">

    let img = document.querySelector('#image_choose');
    img.onchange = function () {
        var file = this.files[0];
        if (file == undefined) {
            $('#imgSelector').attr('src', "{!! asset('share/images/default/default.jpg') !!}");
        } else {
            getBase64(file, '#imgSelector');
        }
    };

    $(document).ready(function () {
        $('#addImgDetail').click(function () {
            $('#insert').append(" <div class=\"form-group\">\n" +
                "                                <label for=\"exampleInputFile\">Choose image</label>\n" +
                "                                <input type=\"file\" id=\"image_choose\" name=\"detailImg[]\">\n" +
                "                                <p class=\"help-block\">Choose user image</p>\n" +
                "                            </div>");
        });
    });

    window.onload = function () {
        var fileUpload = document.getElementById("fileUpload");
        fileUpload.onchange = function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = document.getElementById("dvPreview");
                dvPreview.innerHTML = "";
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                for (var i = 0; i < fileUpload.files.length; i++) {
                    var file = fileUpload.files[i];
                    if (regex.test(file.name.toLowerCase())) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = document.createElement("IMG");
                            let remove = document.createElement('a');
                            img.height = "100";
                            img.width = "100";
                            img.src = e.target.result;
                            remove.innerHTML = "Remove";
                            dvPreview.appendChild(img);
                            // dvPreview.appendChild(remove);
                            remove.onclick = function () {
                                dvPreview.remove(dvPreview[i])
                            };
                            console.log(dvPreview);
                        }
                        reader.readAsDataURL(file);
                    } else {
                        alert(file.name + " is not a valid image file.");
                        dvPreview.innerHTML = "";
                        return false;
                    }
                }
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        }
    };
</script>
</body>
</html>
