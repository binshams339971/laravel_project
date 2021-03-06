<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
    .top-nav-bar{
        height: 58px;
        top: 0;
        position: sticky;
        background: #fff;
        margin-bottom: 20px;
        border-bottom: 3px  solid rgb(43, 199, 90);
        z-index: 2;
    }

    .logo{
        height: 45px;
        float: left;
        padding-left: 80px;
        
    }

    .form-control{
        margin-top: 9px;
        margin-left: 140px;
        border: 1px solid rgb(43, 199, 90) !important;
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        box-shadow: none !important;
    }
    .input-group-text{
        background: rgb(43, 199, 90) !important;
        border:  1px solid rgb(43, 199, 90);
        margin: 8.5px 8px 0px 0;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        border-top-right-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        cursor: pointer;
    }

    .search-box{
        display: inline-flex;
        width: 68%;
        float: left;
        padding-left: 450px;
    }

    .fa-search{
        color: white;
    }
    .menu-bar{
        width: 30%;
        height: 20px;
        float: right;
    }
    .menu-bar ul{
        display: inline-flex;
        float: right;
    }
    .menu-bar ul li{
        border-left: 1px solid #fff;
        list-style-type: none;
        padding: 15px 25px;
        text-align: center;
        background-color: rgb(43, 199, 90);
        cursor: pointer;
    }
    .menu-bar ul li a{
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
    }     
        </style>
    </head>  
    <body>
         <div class="top-nav-bar">
            <form method="post">
                <div class="search-box">
                    <h1><strong>All Donated Books</strong> </h1>
                </div>
                <div class="menu-bar">
                    @if (session('email') == null )
                    <ul>
                        <li><a href="{{route('home.home')}}">Home</a></li>
                        <li><a href="{{ route('login.index') }}">Login</a></li>
                    </ul>
                    @else
                    <ul>
                        <li><a href="{{route('home.home')}}">Home</a></li>
                        <li><a href="{{ route('home.index') }}">{{ session('email') }}</a></li>
                    </ul>
                    @endif
                </div>
            </form>
        </div>
    
    	<div class="container">
    		<div class="row">
    			@foreach($book as $books)
                <div class="col-md-3">
                    <div style="border:3px solid #478b47; background-color:whitesmoke; margin:10px; border-radius:5px; padding:10px;" align="center">
                       <img src="{{asset('upload/'.$books->filename)}}" class='img-responsive' width='100%' height=300%></br>
                        Name: <h7 class="text-danger"> {{ $books->bname }}</h7></br>
                        Author Name: <h7 class="text-danger">{{ $books->aname }}</h7></br>
                        <a href="{{ route('home.order', $books->id) }}">Buy</a>
                    </div>
                </div>
                 @endforeach
        
        </div>
    </div>

    </body>
</html>