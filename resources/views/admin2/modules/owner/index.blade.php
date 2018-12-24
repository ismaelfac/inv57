@extends('admin2.admin')

@section('content')
<div class="card">  
    <div class="card-body text-secondary">
    @foreach($owner_property as $owner)
           <div> 1 {{ $owner->client  }} </div>
    @endforeach
        </div>
    </div>
</div>

@endsection
