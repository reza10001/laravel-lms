<x-app-layout>.
    <x-slot name="title">
        
    </x-slot>
            <header>ورود به حساب کاربری</header>
            <form action="{{route('login.store')}}" method="POST">
                @csrf
               <div class="field">
                  <input type="text" name="email" autocomplete="off" required placeholder="نام کاربری" />
                  <span class="fa fa-user"></span>

               </div>
                 <div class='space'>
                      @error('email')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
                
               <div class="field space">
                  <input type="password" name="password" class="pass-key" autocomplete="off" required placeholder="گذرواژه" />

                  <span class="fa fa-lock"></span>
                  <span class="show">SHOW</span>

               </div>
                 <div class='space'>
                      @error('password')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
                
               <div class="pass">
                   <a href="{{route('password.request')}}">بازیابی رمز عبور؟</a>
               </div>
  

 
    @arcaptchaWidget
<div class='space'>
                      @error('arcaptcha-token')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
   
               <div class="field">
                  <input type="submit" value="ورود" />
               </div>
            </form>
         
            <div class="signup">
               Don't have account?
               <a href="/register">ثبت نام و عضویت در سایت</a>
            </div>
 </x-app-layout>    

