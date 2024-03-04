<x-app-layout>
    <x-slot name="title">
        
    </x-slot>
            <header>بازیابی رمز عبور</header>
            <form action="{{route('password.email')}}" method="POST">
                @csrf
               <div class="field">
                  <input type="text" name="email" required placeholder="ایمیل " />
                  <span class="fa fa-user"></span>
               </div>
       <div class='space'>
                      @error('email')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
               <div class="field" style="margin-top:15px">
                  <input type="submit" value="بازیابی  ">
               </div>
                   @if(Session::has('status'))
                      <p style='color: green; margin-bottom: 1rem'>
                          {{Session::get('status')}}
                      </p>                
                  @endif
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
              کاربر جدید هستید؟
               <a href="/register">صفحه ثبت نام</a>
            </div>
</x-app-layout>     

