<link href="{{ asset('css/show.css') }}" rel="stylesheet">
<h2>Details</h2>

<div id="container">
    <p>Name: {{$company->name}}</p>
    <p>Phone: {{$company->phone}}</p>
    <p>Email: {{$company->email}}</p>
    <p>Adrress: {{$company->address}}</p>
    <p>Website: {{$company->website}}</p>
    <img src="{{asset('storage/logo/'.$company->logo)}}" width="100" height="100"/>
    <br><br><button><a href='/companies/{{$company->id}}/edit'>edit</a></button>
    <form action='/companies/{{$company->id}}' method="POST">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
</div>