@extends('layouts.app')

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

@section('content')
    <div class="container mt-3">
        <h1>Edit Employee</h1>
        <div style="display: flex;">
            <strong class="mr-3" style="align-content: center;flex-wrap: wrap;display: flex;">Availability / Status:</strong> 
            <!-- Toggle Availability Toggle -->
            <form action="{{ route('employees.toggleAvailability', $employee->id) }}" method="POST" style="display: inline-block; padding-top: 10px; margin-bottom: 0;">
                @csrf
                <label class="switch">
                    <input type="checkbox" id="availabilityCheckbox" {{ $employee->is_available ? 'checked' : '' }} onclick="toggleAvailability()">
                    <span class="slider round"></span>
                </label>
            </form>
        </div>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $employee->phone_number }}" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department:</label>
                <select name="department_id" id="department" class="form-select" required>
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" @if($employee->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
<script>
    function toggleAvailability() {
        var checkbox = document.getElementById('availabilityCheckbox');
        checkbox.form.submit();
    }
</script>