@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Admin Pannel</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('crude.create') }}">Add User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S/N</th>
<th>First Name</th>
<th>Last Name</th>
<th>Country</th>
<th>Gender</th>
<th>DOB</th>
<th width="280px">Action</th>
</tr>

@foreach ($companies as $company)
<tr>
<td>{{ $company->id }}</td>
<td>{{ $company->fname }}</td>
<td>{{ $company->lname }}</td>
<td>{{ $company->nation}}</td>
<td>{{ $company->gender }}</td>
<td>{{ $company->dob }}</td>
<td>
<form action="{{route('crude.delete',$company->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('crude.edit',$company->id) }}">Edit</a>
    <a class="btn btn-secondary" href="{{ route('crude.edit',$company->id) }}">View</a>
    @csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}
@endsection
