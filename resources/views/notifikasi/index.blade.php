<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/notifikasi/main.css') }}">
</head>

<body>
    <div class='container'>
        <button type="button" class="btn btn-primary mx-auto mt-10" data-toggle="modal" data-target="#exampleModal">
            demo
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content p-4" style="align-items: center;border-radius: 30px;">
                    <div class='top'>
                        <img class="img-thumbnail"
                            src="https://upload.wikimedia.org/wikipedia/commons/1/13/Android_P_logo.svg" />
                        <div class="headr">Policy Update</div>
                    </div>
                    <div class="modal-header border-0 mb-2">
                        <div class="modal-title" id="exampleModalLabel" style="text-align: center;">
                            <div>
                                We've updated our <u>Terms of Service</u> and <u>Privacy Policy</u>.Please take 5
                                minutes to read them to be sure that we are on the same page regarding your personal and
                                business data use. It's really important<br /> for us.
                            </div>
                            <div>
                                Once you have read the updated Terms of Service and Privacy Policy and agree with
                                them,please,click <strong>"Accept"</strong>. If you have questions,<br />
                                <u>contact us.</u>
                            </div>
                        </div>

                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>



</html>
