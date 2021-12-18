<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<h2>Employees</h2>

<a id="add" href="/employees/create">Add employee</a><br><br>
@forelse ($employees as $employee)
<h3><a href="/employees/{{$employee->id}}">{{$employee->firstName}} {{$employee->lastName}}</a></h3> 
@empty
No employees yet 
@endforelse

{{$employees->links()}}
