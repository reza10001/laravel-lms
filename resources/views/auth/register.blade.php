<x-app-layout> 
    <x-slot name="title">
        
    </x-slot>
            <header>فرم عضویت</header>
          
            <form action="{{route('register.store')}}" method="POST">
                @csrf
                   <div class="field ">
                  <input type="text" name="name" required placeholder=" نام کاربری" />
                  <span class="fa fa-user"></span>
               </div>
                 <div class="space">
                      @error('name')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
                
               <div class="field space">
                  <input type="email" name="email" required placeholder=" پست الکترونیکی" />
                  <span class="fa fa-user"></span>            
               </div>
                     <div class="space">
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
                
               <div class="field space">
                  <input type="password" name="password_confirmation" class="pass-key" required placeholder="گذرواژه" />
                  <span class="fa fa-lock"></span>
                  <span class="show">SHOW</span>          
               </div>
                  <div class='space'>
                      @error('password_confirmation')
                      <p style='color: #D8000C; margin-bottom: 1rem'>{{$message}}</p>
                      @enderror
                  </div>
 
 
               <div class="pass">
                  <a href="#">بازیابی رمز عبور؟</a>
               </div>
               <div class="field">
                  <input type="submit" value="ثبت نام">
               </div>
            </form>
      
 </x-app-layout> 