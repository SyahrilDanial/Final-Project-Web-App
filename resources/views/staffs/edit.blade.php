@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Game Details</h3>
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
        <form method="post" action="{{ route('staffs.update', $staffs->Game_id) }}">
            @method('PATCH') 
            @csrf
            <table>
        <tr>
         <td>Game Cover</td>
         <td>:</td>
         <td><input type="file" name="img" value="{{ $staffs->Game_pic }}"></td>
        </tr>
        <tr>
         <td>Game Title</td>
         <td>:</td>
         <td><input type="text" name="gameTitle" size="50" value="{{ $staffs->Game_name }}"></td><br>
        </tr>
        <tr>
         <td>Game Platform</td>
         <td>:</td>
         <td><input type="text" name="platform" value="{{ $staffs->Game_platform }}" readonly>
             <input type="radio" id="ps4" name="platform" value="PS4">
             <label for="ps4">PS4</label><br>
             <input type="radio" id="xboxone" name="platform" value="XBOX ONE">
             <label for="xboxone">XBOX ONE</label><br></td>
             <input type="radio" id="pc" name="platform" value="PC">
             <label for="pc">PC</label><br></td>
        </tr>
        <tr>
         <td>Game Description</td>
         <td>:</td>
         <td><input type="text" name="desc" size="200" value="{{ $staffs->Game_desc }}"></td>
        </tr>
        <tr>
         <td>Game Price</td>
         <td>:</td>
         <td><input type="number" name="price" value="{{ $staffs->Game_price }}"></td>
        </tr>
        <tr>
         <a href="{{ route('staffs.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;  
         <td><button type="submit" value="Submit">Update</button></td>
        </tr>
    </table>
        </form>
    </div>
</div>
@endsection