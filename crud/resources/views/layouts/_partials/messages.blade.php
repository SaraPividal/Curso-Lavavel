@if($message = Session::get('success'))
    <div style="padding: 15px; background-color:green; color:wheat">
        <p>{{$message}}</p>
    </div>
@endif

@if($message = Session::get('danger'))
    <div style="padding: 15px; background-color:red; color:wheat">
        <p>{{$message}}</p>
    </div>
@endif