@extends('base') 
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <br />
    <h3 class="display-5 text-center">Add New Game Details</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br />
    @endif
    <font face="arial" size="2" color="#000000">
    <form method="post" action="{{ route('staffs.store') }}">
@csrf
<table>
<tr>
    <td>Game Cover</td>
    <td>:</td>
    <td><input type="file" name="img"></td>
</tr>
<tr>
    <td>Game Title</td>
    <td>:</td>
    <td><input type="text" name="gameTitle" size="50"></td>
</tr>
<tr>
    <td>Platform</td>
    <td>:</td>
    <td><input type="radio" id="ps4" name="platform" value="PS4">
        <label for="ps4">PS4</label><br>
        <input type="radio" id="xboxone" name="platform" value="XBOX ONE">
        <label for="xboxone">XBOX ONE</label><br></td>
        <input type="radio" id="pc" name="platform" value="PC">
        <label for="pc">PC</label><br></td>
</tr>
<tr>
    <td>Description</td>
    <td>:</td>
    <td><input type="textbox" name="desc" size="200"></td>
</tr>
<tr>
    <td>Price</td>
    <td>:</td>
    <td><input type="number" name="price"></td>
</tr>
<tr>
    <a href="{{ route('staffs.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;  
    <td><button type="submit" value="Submit">Submit</button></td>
    <td><button type="reset" value="Reset">Clear</button></td>
</tr>
</table>
</form>

</div>
</div>
</div>
@endsection