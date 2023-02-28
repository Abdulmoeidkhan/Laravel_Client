<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Badar Expo Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('assets/images/Badar-icon-16x16.png')}}" rel="icon" type="image/png" sizes="16x16" />
    <link href="{{asset('assets/images/Badar-icon-32x32.png')}}" rel="icon" type="image/png" sizes="32x32" />
    <link href="{{asset('assets/css/galleryUpload.css')}}" rel="stylesheet" type=   "text/css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    
    <title>Badar Expo Solution's</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

</head>

<body>
    <div class="container mt-2">
        <h2>Event Upload Form</h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <b>{{ $message }}</b>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('multiplefileupload') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="eventCategory">Event Catoegory</label>
                <select class="form-control form-control-md" name="eventCategory" id="eventCategory" aria-describedby="eventCategory" required>
                    <option value="Corporate-Events-and-Seminar" selected>Corporate Events & Seminar</option>
                    <option value="Exhibitions-and-Conferences">Exhibitions & Conferences</option>
                    <option value="Festivals-and-Sports">Festivals & Sports</option>
                    <option value="Canopy-and-Octanorm-Building">Canopy & Octanorm Building</option>
                    <option value="Marketing-and-PR">Marketing & PR</option>
                    <option value="Sponsorship">Sponsorship</option>
                    <option value="Weddings">Weddings</option>
                    <option value="Social-Media-and-Digital">Social Media & Digital</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <div class="upload__box">
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                            <p>Upload images</p>
                            <input type="file" name="fileuploads[]" data-max_length="20" class="upload__inputfile" multiple>
                        </label>
                    </div>
                    <div class="upload__img-wrap"></div>
                </div>
            </div>
            <div class="form-group mt-4">
                <input type="submit" id="uploadEvent" class="btn btn-primary" value="Submit" name="submit" />
            </div>
        </form>
        @if(sizeof($fileUploads)>0)
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Filename</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fileUploads as $fileUpload)
                <tr>
                    <td>{{ $fileUpload->filename }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/galleryUpload.js')}}"></script>
</body>

</html>