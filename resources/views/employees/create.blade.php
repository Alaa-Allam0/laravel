<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<h2>Details</h2>

<form action="/employees" method="post">
    <input type='text' name='firstName' autocomplete="off" placeholder="First Name" value='{{old('firstName')}}'>
    @error('firstName')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='lastName' autocomplete="off" placeholder="Last Name" value='{{old('lastName')}}'>
    @error('lastName')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='email' autocomplete="off" placeholder="Email" value='{{old('email')}}'>
    @error('email')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='phone' autocomplete="off" placeholder="Phone" value='{{old('phone')}}'>
    @error('phone')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='address' autocomplete="off" placeholder="Address" value='{{old('address')}}'>
    @error('address')
    <span>{{ $message }}</span><br>
    @enderror

    <select name='company_id'>
        @foreach ($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>

    @csrf
    <button>Add</button>
</form>