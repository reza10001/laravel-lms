<x-app-layout>
    <x-slot name="title">
    - صفحه ورود
    </x-slot>
         <header>Login Form</header>
            <form action="#">
               <div class="field">
                  <input type="text" required placeholder="نام کاربری">
                  <span class="fa fa-user"></span>
               </div>

               <div class="field space">
                  <input type="password" class="pass-key" required placeholder="گذرواژه">
                  <span class="fa fa-lock"></span>
                  <span class="show">SHOW</span>

               </div>
               <div class="field space">
                  <input type="password" class="pass-key" required placeholder="گذرواژه">
                  <span class="fa fa-lock"></span>
                  <span class="show">SHOW</span>

               </div>
 
 
               <div class="pass">
                  <a href="#">بازیابی رمز عبور؟</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN">
               </div>
            </form>
            <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div>
            <div class="signup">
               Don't have account?
               <a href="#">Signup Now</a>
            </div>
</x-app-layout>
