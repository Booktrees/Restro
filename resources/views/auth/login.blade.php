<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        
        <form class="form" method="POST" action="{{ route('login') }}" >
            @csrf
            <input type="email" placeholder="Email" name = "email">
            <input type="password" placeholder="Password" name = "password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>
    
    <!--<ul class="bg-bubbles">
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
    </ul> -->
</div>

</body>
</html>

{{--  --}}