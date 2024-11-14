<x-layout>
	<x-slot:title>
		Students List
	</x-slot:title>
	<h1>Students List</h1>
	<p>Total of Students: {{ $totalStudents }}</p>
	<table>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $student)
			<tr>
				<td>{{ $student->first_name }}</td>
				<td>{{ $student->last_name }}</td>
				<td>{{ $student->phone_number }}</td>
				<td>{{ $student->address }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} students on this page.</p>
	{{ $students->links() }}
</x-layout>