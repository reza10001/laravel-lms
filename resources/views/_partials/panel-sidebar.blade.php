<ul>
    <li class="item-li i-dashboard @if(request()->is('dashboard')) is-active @endif"><a href="{{ route('dashboard') }}">پیشخوان</a></li>
    @if(auth()->user()->role === 'admin')
    <li class="item-li i-users @if(request()->is('panel/users') || request()->is('panel/users/*')) is-active @endif"><a href="{{ route('users.index') }}"> کاربران</a></li>
    <li class="item-li i-categories @if(request()->is('panel/categories') || request()->is('panel/categories/*')) is-active @endif"><a href="{{route('categories.index')}}">دسته بندی ها</a></li>
    @endif
    <li class="item-li i-articles"><a href="#">مقالات</a></li>
    <li class="item-li i-comments"><a href="#"> نظرات</a></li>
    <li class="item-li i-user__inforamtion"><a href="#">اطلاعات کاربری</a></li>
</ul>