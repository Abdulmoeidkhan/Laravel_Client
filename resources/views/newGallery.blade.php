<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Badar Expo Solution" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('assets/images/Badar-icon-16x16.png')}}" rel="icon" type="image/png" sizes="16x16" />
    <link href="{{asset('assets/images/Badar-icon-32x32.png')}}" rel="icon" type="image/png" sizes="32x32" />
    <link href="{{asset('assets/css/galleryUpload.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />

    <title>Badar Expo Solution's</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

</head>

<body>
    <div class="container-fluid mt-2">
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
        <aside class="search-wrap">
            <div class="search">
            </div>
            <div class="user-actions">
                <a style="
                text-decoration:none;    
                border: 0;
                background: none;
                width: 32px;
                height: 32px;
                margin: 0;
                padding: 0;
                margin-left: 0.5em; 
                " href="{{ route('newEvent') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z" />
                    </svg>
                </a>
                <a href="{{ route('categoryUpload') }}" 
                style="
                text-decoration:none;    
                border: 0;
                background: none;
                width: 32px;
                height: 32px;
                margin: 0;
                padding: 0;
                margin-left: 0.5em; 
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" style="fill:blue;" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z" />
                        <path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z" />
                    </svg>
                </a>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.094 2.085l-1.013-.082a1.082 1.082 0 0 0-.161 0l-1.063.087C6.948 2.652 4 6.053 4 10v3.838l-.948 2.846A1 1 0 0 0 4 18h4.5c0 1.93 1.57 3.5 3.5 3.5s3.5-1.57 3.5-3.5H20a1 1 0 0 0 .889-1.495L20 13.838V10c0-3.94-2.942-7.34-6.906-7.915zM12 19.5c-.841 0-1.5-.659-1.5-1.5h3c0 .841-.659 1.5-1.5 1.5zM5.388 16l.561-1.684A1.03 1.03 0 0 0 6 14v-4c0-2.959 2.211-5.509 5.08-5.923l.921-.074.868.068C15.794 4.497 18 7.046 18 10v4c0 .107.018.214.052.316l.56 1.684H5.388z" />
                    </svg>
                </button>
                <button onclick="logout()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z" />
                        <path d="M11 2h2v10h-2z" />
                    </svg>
                </button>
            </div>
        </aside>
        <div class="container mt-2">
            <h2>Category Upload Form</h2>
            <form method="POST" action="{{ route('multiplefileupload') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <label for="eventCategory">Event Catoegory</label>
                    <select class="form-control form-control-md" name="eventCategory" id="eventCategory" aria-describedby="eventCategory" required>
                        @foreach ($categories as $key => $category)
                        <option value="{{$category->value}}" <?php echo $key < 1 && "selected"; ?>>{{$category->name}}</option>
                        @endforeach
                        <!-- 
                    <option value="Corporate-Events-and-Seminar" selected>Corporate Events & Seminar</option>
                    <option value="Exhibitions-and-Conferences">Exhibitions & Conferences</option>
                    <option value="Festivals-and-Sports">Festivals & Sports</option>
                    <option value="Canopy-and-Octanorm-Building">Canopy & Octanorm Building</option>
                    <option value="Marketing-and-PR">Marketing & PR</option>
                    <option value="Sponsorship">Sponsorship</option>
                    <option value="Weddings">Weddings</option>
                    <option value="Social-Media-and-Digital">Social Media & Digital</option> -->
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
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/galleryUpload.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/signout.js')}}"></script>
</body>

</html>