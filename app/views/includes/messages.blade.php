@if(Session::has('messages'))
    @foreach(Session::get('messages') as $message)
        <div class="alert alert-{{ $message['code'] }} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $message['text'] }}
        </div>
    @endforeach
@endif
