@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Employee Details</h1>

        <div class="mb-3">
            <p><strong>Name:</strong> {{ $employee->name }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone Number:</strong> {{ $employee->phone_number }}</p>
            <p><strong>Department:</strong> {{ $employee->department->name }}</p>
            
        </div>

        <!-- Delete Button -->
        <form id="deleteForm" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger mr-2" onclick="showDeleteConfirmation()">Delete</button>
        </form>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection

<script>
    function showDeleteConfirmation() {
        if (confirm('Are you sure you want to delete this employee?')) {
            document.getElementById('deleteForm').submit();
        }
    }
    
    var checkbox = document.getElementById('availabilityCheckbox');

    checkbox.addEventListener('change', function() {
        this.form.submit();
    });

    function toggleAvailability() {
        var checkbox = document.getElementById('availabilityCheckbox');
        checkbox.form.submit();
    }
</script>
