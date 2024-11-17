<x-layout>
	<x-slot:title>
		Students List
	</x-slot:title>
	<div class="m-4">
		<h1 class="text-lg font-bold mb-2">Students List</h1>
		<p>Total of Students: {{ $totalStudents }}</p>
	</div>
	<div class="flex flex-col">
		<div class="overflow-x-auto sm:-mx-auto lg:mx-auto">
			<div class="inline-block min-w-full py-2 sm:px-6 lg:px-6">
				<div class="overflow-hidden">
					<table class="min-w-full text-left text-sm font-light text-surface dark:text-slate-500">
						<thead class="border-b border-neutral-200 font-medium dark:border-slate/10">
							<tr>
								<th scope="col" class="px-6 py-4">First Name</th>
								<th scope="col" class="px-6 py-4">Last Name</th>
								<th scope="col" class="px-6 py-4">Phone Number</th>
								<th scope="col" class="px-6 py-4">Address</th>
								<th scope="col" class="px-6 py-4"></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($students as $student)
							<tr class="border-b border-neutral-200 dark:border-white/10">
								<td class="whitespace-nowrap px-6 py-4">{{ $student->first_name }}</td>
								<td class="whitespace-nowrap px-6 py-4">{{ $student->last_name }}</td>
								<td class="whitespace-nowrap px-6 py-4">{{ $student->phone_number }}</td>
								<td class="whitespace-nowrap px-6 py-4">{{ $student->address }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="my-4">
		<div class="flex justify-center">
			<p>Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} students on this page.</p>
		</div>
		{{ $students->links() }}
	</div>
</x-layout>