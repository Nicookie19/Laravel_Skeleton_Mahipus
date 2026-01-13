@extends('layout')

@section('content')
<div class="flex justify-between items-center mb-6" style="border-bottom: 2px solid #ff6600; padding-bottom: 10px;">
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}" class="btn">[➕ Add New Student]</a>
</div>

<div class="box">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Joshua Carl Mendoza</td>
                <td>BSIT</td>
                <td>2nd Year</td>
                <td>
                    <x-action-buttons>
                        <a href="{{ route('students.show', 1) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="{{ route('students.edit', 1) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <x-delete-form :studentId="1" />
                    </x-action-buttons>
                </td>
            </tr>
            
            <tr>
                <td>Danica Reyes</td>
                <td>BSCS</td>
                <td>3rd Year</td>
                <td>
                    <x-action-buttons>
                        <a href="{{ route('students.show', 2) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="{{ route('students.edit', 2) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <x-delete-form :studentId="2" />
                    </x-action-buttons>
                </td>
            </tr>
            
            <tr>
                <td>Ethan Delos Santos</td>
                <td>BSIS</td>
                <td>1st Year</td>
                <td>
                    <x-action-buttons>
                        <a href="{{ route('students.show', 3) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="{{ route('students.edit', 3) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <x-delete-form :studentId="3" />
                    </x-action-buttons>
                </td>
            </tr>
            
            <tr>
                <td>Jaycee Nanual</td>
                <td>BSIT</td>
                <td>4th Year</td>
                <td>
                    <x-action-buttons>
                        <a href="{{ route('students.show', 4) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="{{ route('students.edit', 4) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <x-delete-form :studentId="4" />
                    </x-action-buttons>
                </td>
            </tr>
            
            <tr>
                <td>Nico Mahipus</td>
                <td>BSCS</td>
                <td>2nd Year</td>
                <td>
                    <x-action-buttons>
                        <a href="{{ route('students.show', 5) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[View]</a>
                        <a href="{{ route('students.edit', 5) }}" class="btn btn-outline" style="padding: 4px 8px; font-size: 12px;">[Edit]</a>
                        <x-delete-form :studentId="5" />
                    </x-action-buttons>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex justify-between items-center">
    <span>Page 1 of 1</span>
    <div>
        <a href="#" class="btn btn-outline">[Previous]</a>
        <a href="#" class="btn">[1]</a>
        <a href="#" class="btn btn-outline">[Next]</a>
    </div>
</div>
@endsection

