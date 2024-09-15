<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  position: fixed;
  right: 0;
  bottom: 50px;
  display: flex;
  align-items: center;
  padding: 5px;
  z-index: 1;
}

.page-footer a {
  display: flex;
  margin-left: 4px;
}
    </style>
    <title>Laravel 11</title>
</head>

<body>


<h1 class="text-center">Welcome to create page</h1>

<div class="container my-5">
        <div class="d-flex justify-content-center">
            <a href="/" class="btn btn-primary "> Back to Home </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">Contact Us</h1>

                <form action="{{route('storeName')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="your-name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="your-name" name="name" value="{{old('name')}}" >
                            @error('name')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <label for="your-message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="your-message" name="description" rows="5"> {{old('description')}} </textarea>
                            @error('description')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="your_img" class="form-label">Select Img </label>
                           <input type="file" class="form-control" name="img">
                           @error('img')
                             <p class="text-danger"> {{ $message }} </p>
                           @enderror
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <button  type="submit" class="btn btn-dark w-100 fw-bold">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <span>made by </span>
        <a href="https://georgemartsoukos.com/" target="_blank">
            <img width="24" height="24" src="https://assets.codepen.io/162656/george-martsoukos-small-logo.svg" alt="George Martsoukos logo">
        </a>
    </footer>


















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>