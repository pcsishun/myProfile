<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>  
    
    @include('navbar')
    <div class ="container-fluid" > 
    <br>
    <h1>Introduction</h1>
    <br>
        <hr>
        <div class="container box-borders">
            <div class="container">
                <br>
                <h4>Name:</h4>
                <div class="container">
                    <h5>{{ $record["bio_array"][0] }}</h5>   
                </div>   
            </div>
            <br>
            <div class="container">
                <h4>Age:</h4>
                <div class="container">
                    <h5>{{ $record["bio_array"][1] }}</h5>   
                </div>   
            </div>
            <br>    
            <div class="container">
                <h4>ฺBiography:</h4>
                <div class="container">
                    <h5>{{ $record["bio_array"][2] }}</h5>   
                </div>   
            </div>
        </div>
    </div>
</body>
</html> 