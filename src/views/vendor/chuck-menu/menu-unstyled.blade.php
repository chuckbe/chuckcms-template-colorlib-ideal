@if(isset($menus))
<ul class="list-unstyled">
    @foreach($menus as $m)
    @if($m->depth == 0)
    <li><a href="{{ $m->link }}">{{ $m->label }}</a></li>
    @endif
    @endforeach
</ul>
@endif