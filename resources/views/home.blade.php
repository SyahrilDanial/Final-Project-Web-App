@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Games available to rent') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class="display-5 text-center">Game List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          
          <th>Game Cover</th>
          <th>Game Title</th>
          <th>Game Platform</th>
          <th>Game Description</th>
          <th>Price</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            
            <td>{{$item->Game_pic}}</td>
            <td>{{$item->Game_name}}</td>
            <td>{{$item->Game_platform}}</td>
            <td>{{$item->Game_desc}}</td>
            <td>{{$item->Game_price}}</td>
            <td class="text-center">
            
            <a href= "{{ route('user.create')}}"class="btn btn-primary btn-block">Rent</a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
  </table>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
