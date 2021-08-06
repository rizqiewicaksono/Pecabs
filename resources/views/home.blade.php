@extends ('layouts.auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        @if(Auth::user()->role == 'Admin')
          <div class="panel-body">
            Halaman Admin!
          </div>
        @else
          <div class="panel-body">
            Halaman Member!
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
