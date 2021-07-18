@include('menu')

@php
    //$news = [];
@endphp
@forelse ($news as $item)
    <div>
        <a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a>
    </div>
@empty
    'No news!'
@endforelse



