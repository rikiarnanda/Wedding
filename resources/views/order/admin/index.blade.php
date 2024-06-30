@extends('layouts.app')

@section('title', 'Dekorasi List')

@section('content')
<div class="w-full bg-gray-50 min-h-screen md:pl-52 md:pr-12 py-32 px-4">
    <h1 class="text-xl font-bold mb-4 text-gray-600">Daftar Orderan</h1>
    <div class="overflow-x-auto">
        <table id="my-datatable" class="display bg-gray-100 text-sm w-full p-10 rounded-lg mt-10 shadow-md">
            <thead class="bg-gray-300">
                <tr>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">No</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Nama User</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Nama Paket</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Bulan Perkiraan</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Status</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">{{ $loop->index + 1 }}</td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">{{ $order->user->name }}</td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">{{ $order->paket->nama }}</td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">{{ $order->bulan_perkiraan }}</td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">{{ $order->status }}</td>
                    <td class="whitespace-nowrap px-3 py-3 gap-3">
                        <a href="{{ route('admin.orders.edit', ['id' => $order->id]) }}" class="inline-block rounded bg-amber-4000 px-4 py-2 text-xs font-medium text-white hover:bg-amber-300 transition-all">Edit Status</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js" defer></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js" defer></script>
<script>
    $(document).ready(function() {
        $('#my-datatable').DataTable({
            "language": {
                "search": "Cari:",
                "paginate": {
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "lengthMenu": "Tampilkan _MENU_ entri"
            }
        });
    });
</script>
@endpush