<li class="nav-item{{request()->routeIs('Home')?' active':''}}">
    <a class="nav-link" href="{{ route('Home') }}">
        Главная</a>
</li>
<li class="nav-item{{request()->routeIs('admin.create')?' active':''}}">
    <a class="nav-link" href="{{ route('admin.create') }}">
        Добавить новость
    </a>
</li>
<li class="nav-item{{request()->routeIs('admin.test2')?' active':''}}">
    <a class="nav-link" href="{{ route('admin.test2') }}">
        Test2</a>
</li>
