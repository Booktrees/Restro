<!DOCTYPE html>
<html>
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" type = "text/css">
    <script>
     $("#login-button").click(function(event){
         event.preventDefault();
     
     $('form').fadeOut(500);
     $('.wrapper').addClass('form-success');
});
</script>
</head>
<body>

<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>
        
        <form class="form" method="POST" action="{{ route('register') }}" >
            @csrf
            <input type="text" placeholder="Full Name" name="name">
            <input type="email" placeholder="Email" name = "email">
            <div class ="wrap {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" placeholder="Password" name = "password">
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
            <div class ="wap {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" placeholder="Confirm Password" name="password_confirmation">
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

             <button type="submit"  id="login-button" class="btn btn-primary">Register</button>
        </form>
    </div>
    
   <!-- <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

</body>
</html>