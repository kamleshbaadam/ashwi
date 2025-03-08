@extends('backend.reception.layout.app')

@push('title')
    <title>Patients</title>
@endpush

@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="element-header">PATIENTS</h6>
                        </div>
                        <div class="col-lg-12">
                            @include('flash-message')
                            <div class="element-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('reception.patient.create') }}" class="btn btn-primary mb-3">
                                            <i class="os-icon os-icon-plus-circle"></i> Add New Patient
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ route('reception.patient.search') }}" method="post" class="form-inline justify-content-end">
                                            @csrf
                                            <div class="form-group mr-2">
                                                <input type="text" class="form-control" name="search" placeholder="Search by name or phone" value="{{ $search ?? '' }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($patients as $patient)
                                                <tr>
                                                    <td>{{ $patient->id }}</td>
                                                    <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                                    <td>{{ $patient->phone_no }}</td>
                                                    <td>{{ ucfirst($patient->gender) }}</td>
                                                    <td>{{ $patient->age }}</td>
                                                    <td>{{ $patient->created_at->format('d-m-Y') }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('reception.patient.view', $patient->id) }}" class="btn btn-info btn-sm" title="View">
                                                                <i class="os-icon os-icon-eye"></i>
                                                            </a>
                                                            <a href="{{ route('reception.patient.edit', $patient->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                                                <i class="os-icon os-icon-edit"></i>
                                                            </a>
                                                            <a href="{{ route('reception.patient.create-appointment', $patient->id) }}" class="btn btn-primary btn-sm" title="Create Appointment">
                                                                <i class="os-icon os-icon-calendar"></i>
                                                            </a>
                                                            <a href="{{ route('reception.patient.create-opd', $patient->id) }}" class="btn btn-success btn-sm" title="Create OPD">
                                                                <i class="os-icon os-icon-medical"></i>
                                                            </a>
                                                            <form action="{{ route('reception.patient.delete', $patient->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this patient?');" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                    <i class="os-icon os-icon-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">No patients found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3">
                                    {{ $patients->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 