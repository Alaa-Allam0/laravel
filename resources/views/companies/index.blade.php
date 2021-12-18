<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<h2>Companies</h2>
<a href="/companies/create" id="add">Add company</a><br><br>
@forelse($companies as $company)
<h3><a class="item" href= '/companies/{{$company->id}}'>{{$company->name}}</a></h3>
<ul> 
@forelse ($company->employees as $employee)
    <li><a href="/employees/{{$employee->id}}">{{$employee->firstName}} {{$employee->lastName}}</a></li>
@empty
No employees in this company
@endforelse
</ul>
@empty
No companies yet
@endforelse

{{$companies->links()}}


