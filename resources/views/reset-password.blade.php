<x-app-layout>
    <x-slot name="title">
        
    </x-slot>
            <header>Login Form</header>
            <form action="#">
               <div class="field">
                  <input type="text" required placeholder="نام کاربری یا ایمیل ">
                  <span class="fa fa-user"></span>
               </div>
       
                <div class="field" style="margin-top:15px">
                  <input type="submit" value="بازیابی رمز عبور">
               </div>
            </form>
            <div class="login">
              login with
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
               <a href="/register">Signup Now</a>
            </div>
</x-app-layout>     

