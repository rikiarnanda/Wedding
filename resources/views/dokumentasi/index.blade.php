@extends('layouts.app')

@section('title', 'Dokumentasi List')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
@section('content')

<div class="w-full bg-gray-50 min-h-screen md:pl-52 md:pr-12 py-32 px-4">
    <h1 class="text-xl font-bold mb-4 text-gray-600">Daftar Dokumentasi</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('dokumentasi.create') }}" class="inline-block rounded bg-amber-400 px-4 py-2 text-xs font-medium text-white hover:bg-amber-300 transition-all">Tambah</a>
    </div>
    <div class="overflow-x-auto">
        <table id="my-datatable" class="display bg-gray-100 text-sm w-full p-10 rounded-lg mt-10 shadow-md">
            <thead class="bg-gray-300">
                <tr>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900 w-10">No</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Nama</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Deskripsi</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Gambar</th>
                    <th class="whitespace-nowrap px-3 py-2 font-medium text-gray-900">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dokumentasis as $dokumentasi)
                <tr>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900 border-b border-gray-400 w-10">
                    {{ $loop->index + 1 }}
                    </td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900 border-b border-gray-400">
                    {{ $dokumentasi->nama }}
                    </td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900 border-b border-gray-400">
                    {{ $dokumentasi->deskripsi }}
                    </td>
                    <td class="whitespace-nowrap px-3 py-2 font-medium text-gray-900 border-b border-gray-400">
                    <a href="{{ asset('storage/dokumentasi/' . $dokumentasi->gambar) }}" target="_blank">Lihat Gambar</a>
                    </td>
                    <td class="whitespace-nowrap px-3 py-3 gap-3 border-b border-gray-400">
                        <a href="{{ route('dokumentasi.edit', ['id' => $dokumentasi->id]) }}" class="inline-block rounded bg-amber-400 px-4 py-2 text-xs font-medium text-white hover:bg-amber-300 transition-all">Edit</a>
                        <form method="POST" action="{{ route('dokumentasi.delete', ['id' => $dokumentasi->id]) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-500 transition-all">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
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
        new DataTable('#my-datatable', {
            layout: {
                topEnd: {
                    search: {
                        placeholder: "Search"
                    }
                }
            }
        });

        // Remove unnecessary labels
        let labelSearch = document.querySelector('label[for="dt-search-0"]');
        if (labelSearch) {
            labelSearch.remove();
        }

        let labelEntries = document.querySelector('label[for="dt-length-0"]');
        if (labelEntries) {
            labelEntries.remove();
        }

        // Add custom line table
        let layoutRowDt = document.querySelector('.dt-layout-row');
        if (layoutRowDt) {
            let customLineTable = document.createElement('div');
            customLineTable.className = 'custom-line-table';
            layoutRowDt.parentNode.insertBefore(customLineTable, layoutRowDt.nextSibling);
        }
    });
</script>
@endpush