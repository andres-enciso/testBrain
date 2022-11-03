<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title') @show</title>
    <!-- Styles -->
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    @show
    <!-- End Styles -->
</head>

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2" href="#">
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Test</span>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Inicio de sesión
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    @section('container')

    @show

    <div class="footer">
        <div class="float-right">
            Andres Enciso Hernandez <strong> Test</strong>.
        </div>
        <div>
            <strong>Copyright</strong>
        </div>
    </div>

</div>

@section('script')
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>

<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script>
    $(document).ready(function() {


    });
</script>
@show
</body>

</html>
