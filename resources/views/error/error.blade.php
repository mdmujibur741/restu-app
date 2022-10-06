@if ($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session('valid'))
     <h4 class="text-danger"> <b> {{Session('valid')}}</b> </h4> 
@endif

