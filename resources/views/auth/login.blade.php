<x-app-layout>.
    <x-slot name="title">
        
    </x-slot>
            <header>Login Form</header>
            <form action="{{route('login.store')}}" method="POST">
                @csrf
               <div class="field">
                  <input type="text" name="email" required placeholder="نام کاربری" />
                  <span class="fa fa-user"></span>

               </div>
                 <div class='space'>
                      @error('email')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
                
               <div class="field space">
                  <input type="password" name="password" class="pass-key" required placeholder="گذرواژه" />

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
               <div class="field">
                  <input type="submit" value="ورود" />
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
               <a href="/register">Signup Now</a>
            </div>
 </x-app-layout>    

