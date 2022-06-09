<div>
    <li class="list-group-item" style="color:rgb{{ $item->style }}"
        onclick="$('.item_blog{{ $item->id }}').slideToggle(300);">
        {{ $item->text}}
    </li>
    @if($item->children->count()>0)
    <ul style="padding: 0px 15px;display: none;" class="item_blog{{ $item->id }}">
        @foreach ($item->children as $item1)
        <x-ul-list :item=$item1>
        </x-ul-list>
        @endforeach
    </ul>
    @endif
</div>
