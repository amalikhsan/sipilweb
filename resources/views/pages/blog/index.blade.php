@extends('layouts.app')

@section('title', 'Blog')
@section('desc', 'Di halaman ini anda bisa mengelola Blog. ')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Daftar Blog</h4>
            <div class="card-header-action">
                <a href="{{ route('blog.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th>Kategori</th>
                            <th>Konten</th>
                            <th>Views</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            var datatable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: "{!! url()->current() !!}"
                },
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, 'ALL']
                ],
                responsive: true,
                order: [
                    [0, 'desc'],
                ],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'foto',
                        name: 'foto'
                    },
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'kategori',
                        name: 'kategori'
                    },
                    {
                        data: 'konten',
                        name: 'konten'
                    },
                    {
                        data: 'views',
                        name: 'views'
                    }
                ],
                columnDefs: [{
                        "targets": 1,
                        "render": function(data, type, row, meta) {
                            let img = ``;
                            if (data) {
                                img = `storage/${data}`;
                            }

                            return `<a href="{{ asset('/') }}${img}" target="_blank"><img alt="image" src="{{ asset('/') }}${img}"  width="100"></a>`;
                        }
                    },
                    {
                        "targets": 2,
                        "render": function(data, type, row, meta) {
                            return `
                        ${data}
                        <form action="{{ url('/blog') }}/${row.crypt_id}" method="POST" class="table-links">
                            @method('DELETE')
                            @csrf
                            <a
                                href="{{ url('/blog') }}/${row.crypt_id}/edit"
                                class="btn btn-sm"
                            >
                                Edit
                            </a>
                            <button
                                type="submit"
                                class="text-danger btn-delete btn btn-sm"
                            >
                                Delete
                            </button>
                        </form>
                    `;
                        }
                    }
                ],
                rowId: function(a) {
                    return a;
                },
                rowCallback: function(row, data, iDisplayIndex) {
                    var info = this.fnPagingInfo();
                    var page = info.iPage;
                    var length = info.iLength;
                    var index = page * length + (iDisplayIndex + 1);
                    $('td:eq(0)', row).html(index);
                },
            });
        });
    </script>
@endpush()
