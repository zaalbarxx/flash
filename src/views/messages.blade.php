@if(Session::has('flashMessages'))
    @foreach(Session::get('flashMessages') as $message)
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-{{$message['level']}}">
                <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{$message['message']}}
            </div>
        </div>
    </div>
    @endforeach
@endif