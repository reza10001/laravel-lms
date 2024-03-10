<x-panel-layout>
    <x-slot name='title'>
        - مدیریت کاربران
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{route('dashboard')}}" >پیشخوان</a></li>
            <li><a href="{{route('users.index')}}" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{route('users.index')}}">همه کاربران</a>
                <a class="tab__item" href="{{route('users.create')}}">ایجاد کاربر جدید</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام کاربری</th>
                    <th>ایمیل</th>
                    <th>سطح کاربری</th>
                    <th>تاریخ عضویت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                <tr role="row" class="">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->getRoleInFarsi()}}</td>
                    <td>{{$user->getCreatedAtInJalali()}}</td>
                    <td class="text-success">تاییده شده</td>
                    <td>
                        <a href="" class="item-delete mlg-15" title="حذف"></a>
                        <a href="" class="item-confirm mlg-15" title="تایید"></a>
                        <a href="" class="item-reject mlg-15" title="رد"></a>
                        <a href="{{route('users.edit',$user->id)}}" class="item-edit " title="ویرایش"></a>
                    </td>
                </tr>      
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/js.js"></script>
</html>
</x-panel-layout>
