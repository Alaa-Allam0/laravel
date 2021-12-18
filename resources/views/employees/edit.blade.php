<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<h2>Edit</h2>
<form action='/employees/{{$employee->id}}' method='post'>
    @method('PUT')
    
    <input type='text' name='firstName' autocomplete="off" value='{{$employee->firstName}}'>
    @error('firstName')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='lastName' autocomplete="off" value='{{$employee->lastName}}'>
    @error('lastName')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='email' autocomplete="off" value='{{$employee->email}}'>
    @error('email')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='phone' autocomplete="off" value='{{$employee->phone}}'>
    @error('phone')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='address' autocomplete="off" value='{{$employee->address}}'>
    @error('address')
    <span>{{ $message }}</span><br>
    @enderror

    @csrf
    <button>Edit</button>
</form>