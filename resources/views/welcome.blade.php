@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Employee Management System</h1>
        <p>Welcome to the Employee Management System (EMS)!</p>
        
        <h2>Overview</h2>
        <p>The Employee Management System is a web application designed to streamline the management of employees and their information within your organization.</p>
        
        <h2>Functionalities</h2>
        <ul>
            <li>Show a list of employees</li>
            <li>Add/Create, View, Edit, and Delete employees and their information</li>
            <li>Toggle between "available" and "unavailable" status for employees</li>
        </ul>
        
        <h2>How to Use</h2>
        <p>To use the Employee Management System, navigate through the following pages:</p>
        <ul>
            <li><strong>Employees:</strong> View the list of employees and perform CRUD operations</li>
            <li><strong>Add Employee:</strong> Add a new employee to the system</li>
            <li><strong>Edit Employee:</strong> Edit the details of an existing employee</li>
        </ul>
        
        <h2>Getting Started</h2>
        <p>To get started, click on the "Employees" link in the navigation bar to view and manage your employees.</p>
    </div>
@endsection
