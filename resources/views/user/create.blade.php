@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Rent Details</h3>
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
        <table>
        <tr>
         <td>Game Cover</td>
         <td>:</td>
         <td>{{ $data->Game_pic }}"></td>
        </tr>
        <tr>
         <td>Game Title</td>
         <td>:</td>
         <td>{{ $data->Game_name }}</td>
        </tr>
        <tr>
         <td>Game Platform</td>
         <td>:</td>
         <td>{{ $data->Game_platform }}</td>
        </tr>
        
        <tr>
         <td>Price</td>
         <td>:</td>
         <td>{{$data->Game_price }}</td>
        </tr>
        <tr>
         <td>Start date</td>
         <td>:</td>
         <td><input type="date" name="date" value=""></td>
        </tr>
        <tr>
         <td>End date</td>
         <td>:</td>
         <td><input type="date" name="date" value=""></td>
        </tr>
        <tr>
         <a href="{{ route('index')}}" class="btn btn-primary">Submit</a>&nbsp;&nbsp;  
        </tr>
    </table>
    </div>
</div>
@endsection