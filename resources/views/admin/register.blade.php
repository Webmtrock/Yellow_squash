<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>yellow squash</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    
    <script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">


</head>

<body  class="login-img">
    <div id="loader" >
        <img src="{{ asset('admin/assets/images/media/loader.svg') }}" alt="">
    </div>
   

   


<div class="page">
   <div class="page login-page">
       <div>
              
          
       <div class="col col-login mx-auto mt-7">
            <div class="text-center">
                
                <img src="{{ asset('admin/assets/images/brand-logos/logo.png') }}" class="header-brand-img" alt="">
            </div>
        </div>

           <div class="container-login100">
               <div class="card wrap-login100 p-0">
                   <div class="card-body">
                   @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                   <form class="login100-form validate-form" action="{{ route('admin/store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                      
                           <span class="login100-form-title">
                               Registration
                           </span>
                           <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                               <input type="text" class="form-control input100" name="name" id="input1" placeholder="User name">
                               <span class="focus-input100"></span>
                               <span class="symbol-input100">
                                   <i class="ri-user-fill" aria-hidden="true"></i>
                               </span>
                           </div>
                           <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                               <input type="text" class="form-control input100" name="email" id="input2" placeholder="Email">
                               <span class="focus-input100"></span>
                               <span class="symbol-input100">
                                   <i class="ri-mail-fill" aria-hidden="true"></i>
                               </span>
                           </div>
                           <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                               <input type="password" class="form-control input100" name="password" id="input3" placeholder="Password">
                               <span class="focus-input100"></span>
                               <span class="symbol-input100">
                                   <i class="ri-lock-fill" aria-hidden="true"></i>
                               </span>
                           </div>
                           <label class="custom-control custom-checkbox mt-4">
                               <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                               <span class="custom-control-label ms-1">Agree the <a href="terms.html" class="text-primary">terms and policy</a></span>
                           </label>
                           <div class="container-login100-form-btn">
                           <div class="mt-3">
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                               
                           </div>
                           <div class="text-center pt-3">
                               <p class="text-dark mb-0">Already have account?<a href="{{ route('admin/login') }}" class="text-primary ms-1">Sign In</a></p>
                           </div>
                       </form>



                   </div>
                   <div class="card-footer border-top">
                       <div class="d-flex justify-content-center my-3">
                           <a href="javascript:void(0);" class="social-login  text-center">
                               <i class="ri-google-fill"></i>
                           </a>
                           <a href="javascript:void(0);" class="social-login  text-center mx-4">
                               <i class="ri-facebook-fill"></i>
                           </a>
                           <a href="javascript:void(0);" class="social-login  text-center">
                               <i class="ri-twitter-fill"></i>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>




</body>

</html>