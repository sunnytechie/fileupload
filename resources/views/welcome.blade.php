<!DOCTYPE html>
<html lang="en">
<head>

     <title>Convention Video Upload | SFI | LoveinAction</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="https://sfiloveinaction.org/wp-content/uploads/2022/07/cropped-SFI-Logo.png" />

     <meta property="og:description" content="Convention Video Upload system | Sisters' Fellowship International." />
     <meta property="og:image" content="https://sfiloveinaction.org/wp-content/uploads/2022/07/cropped-SFI-Logo.png" />
     <meta property="og:image:width" content="200" />
     <meta property="og:image:height" content="200" />
     <meta property="og:image:type" content="image/png" />
     <meta property="og:image:alt" content="Video Upload System" />

     <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.min.css">


     {{-- Dropify css --}}
     <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
     {{-- Dropify css --}}
     <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #222222;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            background-color: #EDD0CE;
            border-radius: 10px;

        }

        .img-responsive {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100px;
            height: 100px;
        }
    </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>




     <!-- HOME -->
     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 offset-md-4 my-4">
                            <img class="img-responsive" src="https://sfiloveinaction.org/wp-content/uploads/2022/07/cropped-SFI-Logo.png" class="img-fluid" alt="SFI Logo">
                         <div class="card mt-3 pb-3">
                              <div class="card-header">
                              <h4 class="text-center py-3" style="color: #282828; font-weight: 400">Upload Convention Invite Video</h4>
                              </div>
                              <div class="card-body">
                                <form id="fileUploadForm" method="POST" action="{{ route('post.video') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input name="file" type="file" accept=".mp4, .webm, .mkv, .avi, .flv, .3gp, .mov, .wmv, .ts" class="form-control dropify" data-max-file-size="200M" required>
                                    </div>
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary btn-lg text-white" style="background: #282828; border-radius: 20px">
                                            <span style="margin-right: 8px">Send your video</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </form>

                                <div id="progressWrapper" style="display: none;">
                                    <progress id="progressBar" value="0" max="100"></progress>
                                    <span id="progressLabel">0%</span>
                                </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>
     <section>

     </section>

     {{-- Dropify --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <!-- Include SweetAlert2 JS (including the required dependencies) -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8.2.0/dist/promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.2/dist/sweetalert2.all.min.js"></script>

    <script>
        // Initialize Dropify
        $(document).ready(function(){
            $('.dropify').dropify();
        });
    </script>


    <script>
        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function(xhr) {
                    // Check if the upload was successful
                    if (xhr.status === 200) {
                        // Show a SweetAlert success message
                        Swal.fire({
                            icon: 'success',
                            title: 'File Uploaded!',
                            text: 'Your file has been successfully uploaded.',
                        });

                        // Reset the file input
                        $('.dropify-clear').click();

                    } else {
                        // Show a SweetAlert error message
                        Swal.fire({
                            icon: 'error',
                            title: 'File Upload Failed',
                            text: 'There was an error uploading your file.',
                        });
                    }
                }

                });
            });
        });
    </script>

</body>
</html>
