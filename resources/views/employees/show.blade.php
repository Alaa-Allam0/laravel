<link href="{{ asset('css/show.css') }}" rel="stylesheet">
<h2>Details</h2>

<div id="container">
    <p>Name: {{$employee->firstName}} {{$employee->lastName}}</p>
    <p>Phone: {{$employee->phone}}</p>
    <p>Email: {{$employee->email}}</p>
    <p>Adrress: {{$employee->address}}</p>
    <p>Company: {{$employee->companies->name}}</p>
    <button><a href='/employees/{{$employee->id}}/edit'>edit</a></button>
    <form action='/employees/{{$employee->id}}' method="POST">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>