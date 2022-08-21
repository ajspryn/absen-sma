@if (Auth::user()->key == 'admin86')
    {
    @include('admin.index')
    }
@elseif (Auth::user()->key == 'guru86')
    {
    @include('guru.index')
    }
@endif
