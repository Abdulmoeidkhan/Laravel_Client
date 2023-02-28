<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Badar Expo Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('assets/images/Badar-icon-16x16.png')}}" rel="icon" type="image/png" sizes="16x16" />
    <link href="{{asset('assets/images/Badar-icon-32x32.png')}}" rel="icon" type="image/png" sizes="32x32" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

    <title>Badar Expo Solution's</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
    <div class="container mt-2">
        <h2>Event Upload Form</h2>
        <form method="POST" action="{{ route('uploadEvent') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="eventName">Event Name</label>
                <input type="text" name="eventName" class="form-control" id="eventName" aria-describedby="eventName" placeholder="Enter Event Name" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group mt-2">
                <label for="doe">Date Of Event</label>
                <input type="date" class="form-control" id="doe" name="doe" placeholder="Date Of Event" required>
            </div>
            <div class="form-group mt-2">
                <label for="imageText">Image Text</label>
                <input type="text" class="form-control" id="imageText" name="imageText" placeholder="Image Text" required>
            </div>
            <div class="form-group mt-2">
                <label for="aboutEve">About Event</label>
                <input type="text" class="form-control" id="aboutEve" name="aboutEve" placeholder="About Event">
            </div>
            <div class="form-group mt-2">
                <label for="fullEventName">Full Event Name</label>
                <input type="text" class="form-control" id="fullEventName" name="fullEventName" placeholder="Full Event Name" required>
            </div>
            <div class="form-group mt-4">
                <!-- <label for="eventPicture">Example file input</label> -->
                <input type="file" class="form-control-file" id="eventPicture" name="eventPicture" accept="image/*" required>
                <small id="eventPicHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group mt-4">
                <input type="submit" id="uploadEvent" class="btn btn-primary" value="Submit" name="submit" disabled />
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/eventUploadForm.js')}}"></script>
</body>

</html>