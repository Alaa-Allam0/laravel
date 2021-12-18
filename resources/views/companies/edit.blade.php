<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<h2>Edit</h2>
<form action='/companies/{{$company->id}}' method='post'>
    @method('PUT')
    
    <input type='text' name='name' autocomplete="off" value='{{$company->name}}'>
    @error('name')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='email' autocomplete="off" value='{{$company->email}}'>
    @error('email')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='phone' autocomplete="off" value='{{$company->phone}}'>
    @error('phone')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='address' autocomplete="off" value='{{$company->address}}'>
    @error('address')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='website' autocomplete="off" value='{{$company->website}}'>
    @error('website')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='file' name='logo'><br>
 @csrf
<button>Edit</button>
</form>