<x-panel-layout>
    <x-slot name='title'>
        - ویرایش کاربران
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{route('dashboard')}}" title="پیشخوان">پیشخوان</a></li>
            <li><a href="{{route('users.index')}}" class="">کاربران</a></li>
            <li><a href="{{route('users.edit')}}" class="is-active">ویرایش کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="row no-gutters bg-white margin-bottom-20">
            <div class="col-12">
                <p class="box__title">ایجاد کاربر</p>
                <form action="" class="padding-30" method="post">
                    <input type="text" class="text" placeholder="نام و نام خانوادگی">
                    <input type="text" class="text" placeholder="ایمیل">
                    <input type="text" class="text" placeholder="شماره موبایل">
                    <input type="text" class="text" placeholder="آی پی">
                    <select name="" id="">
                        <option value="0">سطح کاربری</option>
                        <option value="1">کاربر عادی</option>
                        <option value="2">مدرس</option>
                        <option value="3">نویسنده</option>
                        <option value="4">مدیر</option>
                    </select>
                    <button class="btn btn-webamooz_net">ایجاد کاربر</button>
                </form>

            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6 margin-left-10 margin-bottom-20">
                <p class="box__title">درحال یادگیری</p>
               <div class="table__box">
                   <table class="table">
                       <thead role="rowgroup">
                       <tr role="row" class="title-row">
                           <th>شناسه</th>
                           <th>نام دوره</th>
                           <th>نام مدرس</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr role="row" class="">
                           <td><a href="">1</a></td>
                           <td><a href="">دوره لاراول</a></td>
                           <td><a href="">صیاد اعظمی</a></td>
                       </tr>
                       <tr role="row" class="">
                           <td><a href="">1</a></td>
                           <td><a href="">دوره لاراول</a></td>
                           <td><a href="">صیاد اعظمی</a></td>
                       </tr>
                       </tbody>
                   </table>
               </div>
            </div>
            <div class="col-6 margin-bottom-20">
                <p class="box__title">دوره های مدرس</p>
              <div class="table__box">
                  <table class="table">
                      <thead role="rowgroup">
                      <tr role="row" class="title-row">
                          <th>شناسه</th>
                          <th>نام دوره</th>
                          <th>نام مدرس</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr role="row" class="">
                          <td><a href="">1</a></td>
                          <td><a href="">دوره لاراول</a></td>
                          <td><a href="">صیاد اعظمی</a></td>
                      </tr>
                      <tr role="row" class="">
                          <td><a href="">1</a></td>
                          <td><a href="">دوره لاراول</a></td>
                          <td><a href="">صیاد اعظمی</a></td>
                      </tr>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/js.js"></script>
</html>
</x-panel-layout>
