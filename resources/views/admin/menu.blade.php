<li class="nav-item{{request()->routeIs('Home')?' active':''}}">
    <a class="nav-link" href="{{ route('Home') }}">
        Главная</a>
</li>
<li class="nav-item{{request()->routeIs('admin.create')?' active':''}}">
    <a class="nav-link" href="{{ route('admin.create') }}">
        Добавить новость
    </a>
</li>
<li class="nav-item{{request()->routeIs('admin.downloadImage')?' active':''}}">
    <a class="nav-link" href="{{ route('admin.downloadImage') }}">
        Скачать изображение</a>
</li>
<li class="nav-item{{request()->routeIs('admin.json')?' active':''}}">
    <a class="nav-link" href="{{ route('admin.json') }}">
        Скачать Json</a>
</li>
