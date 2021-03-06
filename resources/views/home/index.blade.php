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
    .footer{
        margin-top: 50px;
        background: rgb(53, 52, 52);
        color: #fff;
    }
    .footer h1{
        font-size: 20px;
        margin: 25px 0;
    }
    .footer p{
        font-size: 12px;
    }
    .copy-right{
        margin-bottom: -80px;
        text-align: center;
        font-size: 15px;
        padding-bottom: 20px;
    }
    .footer hr{
        margin-top: 10px;
        background-color: #ccc;
    }   
        </style>
    </head>  
    <body>
         <div class="top-nav-bar">
            <form method="post">
                <div class="search-box">
                    <img src="" alt="" class="logo">
                    <input type="text" name="search" placeholder="Search..." class="form-control">
                    <span class="input-group-text"><input type="submit" value=" " class="fa fa-search"></span>
                </div>
                <div class="menu-bar">
                    @if (session('email') == null )
                    <ul>
                        <li><a href="/requestbook">Request Book</a></li>
                        <li><a href="{{ route('login.index') }}">Login</a></li>
                    </ul>
                    @else
                    <ul>
                        <li><a href="/requestbook">Request Book</a></li>
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
                        Price:  <h7 class="text-danger">{{ $books->price }}</h7></br>
                        <a href="{{ route('home.buy', $books->id) }}">Buy</a>
        			</div>
        		</div>
			     @endforeach
        
        </div>
    </div>
    <section class="footer">
                <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">
                        <h1>Useful Links</h1>
                        <p><a href="/donatedbook">Donated Books</a></p>
                        <p>Privacy Policy<p>
                        <p>Return policy</p>
                        <p>Discount coupons</p>
                    </div>
                    <div class="col-md-3">
                        <h1>Company</h1>
                        <p>About us<p>
                        <p>Contact us</p>
                        <p>Career</p>
                        <p>Affiliate</p>
                    </div>
                    <div class="col-md-3">
                        <h1>Support</h1>
                        <p>Oreder track</p>
                        <p>Find my product</p>
                        <p>Guide<p>
                        <p>Help desk</p>
                    </div>
                    <div class="col-md-3">
                        <h1>Follow us on</h1>
                        <p><i class="fa fa-facebook-official"></i> Facebook<p>
                        <p><i class="fa fa-youtube-play"></i> youtube</p>
                        <p><i class="fa fa-linkedin"></i> Linked in</p>
                        <p><i class="fa fa-twitter"></i> Twitter</p>
                    </div>
                </div>
                <hr>
                <p class="copy-right">  &copy ATP 3 Midterm Project</p>
                </div>
            </section>
    </body>
</html>