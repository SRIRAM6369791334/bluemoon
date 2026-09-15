@extends('layout.app')
@section('main_content')
    <div class="col-lg-12">
        <div class="card card-h-100">
            <div class="card-body">
                <div class="mb-5 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategoryModal">
                        Add Section
                    </button>
                </div>
                {{-- {{ $dataTable->table() }} --}}
                <div class="container overflow-hidden">
                    <h2 class="mb-4">Section</h2>
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">





                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Name</th>
                                <th>Add Products</th>

                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>

                            <?php $i = 1; ?>
                            @foreach ($section as $cat)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $cat->section_name }}</td>
                                    <td><button type="button" class="btn btn-warning waves-effect waves-light addproduct"
                                            data-bs-toggle="modal" data-bs-target="#checkBackdrop1"
                                            data-id="{{ $cat->id }}">
                                            <i class="bx bx-link-external font-size-16 align-middle me-2"></i></button></td>



                                    <td>
                                      <button type="button" class="btn btn-success waves-effect waves-light editsectionheading"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdropsection"
                                            data-id="{{ $cat->id }}" data-name="{{ $cat->section_name }}">
                                            <i class="bx bx-link-external font-size-16 align-middle me-2"></i></button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light deletesectinheading"
                                            data-id="{{ $cat->id }}">
                                            <i class="fas fa-archive"></i></button>
                                    </td>


                                </tr>
                            @endforeach






                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addcategoryModal" tabindex="-1" aria-labelledby="addcategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addcategoryModalLabel">Add Section</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="sectionhead_add_form">
                        <div class="mb-3">
                            <label for="category_add_input" class="form-label">Section Name</label>
                            <input type="text" class="form-control" id="category_add_input" name="section_name"
                                placeholder="Enter Section Name" required>
                        </div>




                        <div class="text-end gap-4">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="staticBackdropsection" tabindex="-1" aria-labelledby="staticBackdropsectionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropsectionLabel">Edit Section Heading</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" id="section_update_form">
                        <div class="mb-3">
                            <label for="category_add_input" class="form-label">Section Name</label>
                            <input type="text" class="form-control" id="sectionname" name="section_name"
                                placeholder="Enter Section Name">

                            <input type="hidden" class="form-control" id="sectionIds" name="sectionId"
                                placeholder="Enter sectionId">
                        </div>




                        <div class="text-end gap-4">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

  
    <div class="modal fade" id="checkBackdrop1" tabindex="-1" aria-labelledby="checkBackdrop1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="checkBackdrop1Label">Add Products</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="addproduct_update_form">
                        <input type="hidden" name="section_id" id="sectionId">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" id="search_products" class="form-control" placeholder="Search product name...">
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="button" class="btn btn-sm btn-outline-primary" id="selectAllProds">Select All</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" id="deselectAllProds">Deselect All</button>
                                <span class="badge bg-primary text-white ms-2" id="selectedCount">0 Selected</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="checkbox my-2" style="max-height: 380px; overflow-y: auto; padding: 12px; border: 1px solid #ced4da; border-radius: 6px;">
                                @foreach ($product as $pro)
                                    <div class="custom-control custom-checkbox mb-2 product-item-row">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input product-checkbox"
                                            id="customCheck{{ $pro->id }}"
                                            name="product_id[]"
                                            value="{{ $pro->id }}"
                                        >
                                        <label class="custom-control-label"
                                            for="customCheck{{ $pro->id }}">{{ $pro->product_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="text-end gap-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function updateSelectedCount() {
            var count = $('.product-checkbox:checked').length;
            $('#selectedCount').text(count + ' Selected');
        }

        $('.editsectionheading').on('click', function() {
            $('#sectionIds').val($(this).attr('data-id'));
            $('#sectionname').val($(this).attr('data-name'));
        });

        $('.addproduct').on('click', function() {
            var sectionId = $(this).attr('data-id');
            $('#sectionId').val(sectionId);
            $('#search_products').val('');
            $('.product-item-row').show();
            $('.product-checkbox').prop('checked', false);
            updateSelectedCount();

            // Fetch already selected products for this section
            $.ajax({
                url: '/getsectionproducts/' + sectionId,
                type: 'GET',
                success: function(response) {
                    if (response.status == 200 && response.product_ids) {
                        response.product_ids.forEach(function(pid) {
                            $('#customCheck' + pid).prop('checked', true);
                        });
                        updateSelectedCount();
                    }
                }
            });
        });

        // Search filter inside modal
        $('#search_products').on('keyup', function() {
            var filter = $(this).val().toLowerCase();
            $('.product-item-row').each(function() {
                var text = $(this).find('label').text().toLowerCase();
                if (text.indexOf(filter) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

        // Select / Deselect All
        $('#selectAllProds').on('click', function() {
            $('.product-item-row:visible .product-checkbox').prop('checked', true);
            updateSelectedCount();
        });

        $('#deselectAllProds').on('click', function() {
            $('.product-item-row:visible .product-checkbox').prop('checked', false);
            updateSelectedCount();
        });

        $(document).on('change', '.product-checkbox', function() {
            updateSelectedCount();
        });
    </script>
@endsection