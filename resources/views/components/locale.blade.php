<form action="{{route('setLocale', $lang)}}" class="d-inline" method="post">
    @csrf
    <button class="btn" type="submit">
        <img src="{{asset('vendor/blade-flags/language-'.$lang.'.svg')}}" width="32" height="32" alt="Img bandiera">
    </button>
    </form>