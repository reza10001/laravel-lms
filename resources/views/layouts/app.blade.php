<!DOCTYPE html>
<html lang="en" dir="rtl">
   <head>
      <meta charset="utf-8">
      <title>{{$title ?? ''}}</title>
      <link rel="stylesheet" href="{{asset('/blog/css/login-from.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      @arcaptchaScript
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
             {{$slot}}
              </div>
      </div>
            <script src="{{asset('/blog/js/register.js')}}"></script>
   </body>
</html>
             
            