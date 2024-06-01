<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding App</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        .dt-container .dt-length .dt-input {
            padding-right: 2rem;
        }

        .dt-container .dt-search .dt-input {
            border-radius: 8px;
            background-color: #EBE9EE;
            border: none;
            padding: 6px 10px;
            min-width: 300px;
            margin-top: 10px;
        }

        .dt-container .custom-line-table {
            width: 100%;
            height: 1px;
            background-color: #666;
            margin-top: 6px;
            margin-bottom: 40px;
        }

        /* .dt-paging.paging_full_numbers .dt-paging-button.current{
            background-color: red;
        } */
    </style>
</head>

<body>
    <div class="min-h-screen bg-white">
        @include('layouts.sidebar')
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    new DataTable('#my-datatable', {
        layout: {
            topEnd: {
                search: {
                    placeholder: "Search"
                }
            }
        }
    });

    let labelSearch = document.querySelector('label[for="dt-search-0"]');
    labelSearch.remove();

    let labelEntries = document.querySelector('label[for="dt-length-0"]');
    labelEntries.remove();

    let layoutRowDt = document.querySelector('.dt-layout-row');
    let customLineTable = document.createElement('div');

    customLineTable.className = 'custom-line-table';

    layoutRowDt.parentNode.insertBefore(customLineTable, layoutRowDt.nextSibling);

    // let paginateCurrButton = document.querySelector('.dt-paging-button.current')
</script>

</html>