<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<h2>Add company</h2>

<form action='/companies' method='post' enctype="multipart/form-data">
    <input type='text' name='name' autocomplete="off" placeholder="name" value='{{old('name')}}'>
    @error('name')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='email' autocomplete="off" placeholder="email" value='{{old('email')}}'>
    @error('email')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='phone' autocomplete="off" placeholder="phone" value='{{old('phone')}}'>
    @error('phone')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='address' autocomplete="off" placeholder="address" value='{{old('address')}}'>
    @error('address')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='text' name='website' autocomplete="off" placeholder="website" value='{{old('website')}}'>
    @error('website')
    <span>{{ $message }}</span><br>
    @enderror
    <input type='file' name='logo'>
    @csrf
    <button>Add</button>
    
</form>