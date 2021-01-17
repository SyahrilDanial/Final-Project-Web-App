@extends('base') 
@section('main')
<div class="row">

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Game List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>Game Cover</th>
          <th>Game Title</th>
          <th>Game Platform</th>
          <th>Game Description</th>
          <th>Price</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staffs as $count => $staff)
        <tr>
            <td>{{++$count}}</td>
            <td>{{$staff->Game_pic}}</td>
            <td>{{$staff->Game_name}}</td>
            <td>{{$staff->Game_platform}}</td>
            <td>{{$staff->Game_desc}}</td>
            <td>{{$staff->Game_price}}</td>
            <td class="text-center">
                <a href="{{ route('staffs.edit',$staff->Game_id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('staffs.destroy', $staff->Game_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('staffs.create')}}" class="btn btn-primary">New Game Details</a>
  </div>
<div>

</div>
@endsection