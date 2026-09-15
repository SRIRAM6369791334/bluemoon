@extends('layout.app')
@section('main_content')

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">Customer Details</h4>
        </div>
        <div class="card-body">

            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 align-middle">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($customer as $custo)
                    <tr id="customer-row-{{ $custo->id }}">
                        <td>{{ $i++ }}</td>
                        <td class="cust-name">{{ $custo->name }}</td>
                        <td class="cust-email">{{ $custo->email ?? '-' }}</td>
                        <td class="cust-phone">{{ $custo->phone_number }}</td>
                        <td class="cust-address">{{ $custo->address ?? '-' }}</td>
                        <td class="cust-city">{{ $custo->city ?? '-' }}</td>
                        <td class="cust-state">{{ $custo->state ?? '-' }}</td>
                        <td class="cust-pincode">{{ $custo->pincode ?? '-' }}</td>
                        <td class="text-center">
                            <button type="button" 
                                    class="btn btn-sm btn-primary waves-effect waves-light editcustomer" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editCustomerModal" 
                                    data-id="{{ $custo->id }}" 
                                    data-name="{{ $custo->name }}" 
                                    data-email="{{ $custo->email }}" 
                                    data-phone="{{ $custo->phone_number }}" 
                                    data-address="{{ $custo->address }}" 
                                    data-state="{{ $custo->state }}" 
                                    data-city="{{ $custo->city }}" 
                                    data-pincode="{{ $custo->pincode }}"
                                    title="Edit Customer">
                                <i class="bx bx-edit font-size-15 align-middle me-1"></i> Edit
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Edit Customer Modal -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="editCustomerModalLabel">
                    <i class="bx bx-user-check text-primary font-size-20 me-2 align-middle"></i>Edit Customer Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="customer_update_form">
                <div class="modal-body p-4">
                    <input type="hidden" id="edit_customer_id" name="customer_id" required>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="edit_name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter customer name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="edit_phone_number" class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="edit_phone_number" name="phone_number" placeholder="Enter phone number" required>
                        </div>

                        <div class="col-md-6">
                            <label for="edit_email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" id="edit_email" name="email" placeholder="Enter email address">
                        </div>

                        <div class="col-md-6">
                            <label for="edit_pincode" class="form-label fw-semibold">Pincode</label>
                            <input type="text" class="form-control" id="edit_pincode" name="pincode" placeholder="Enter pincode">
                        </div>

                        <div class="col-md-6">
                            <label for="edit_state" class="form-label fw-semibold">State</label>
                            <input type="text" class="form-control" id="edit_state" name="state" placeholder="Enter state">
                        </div>

                        <div class="col-md-6">
                            <label for="edit_city" class="form-label fw-semibold">City / District</label>
                            <input type="text" class="form-control" id="edit_city" name="city" placeholder="Enter city / district">
                        </div>

                        <div class="col-12">
                            <label for="edit_address" class="form-label fw-semibold">Full Address</label>
                            <textarea class="form-control" id="edit_address" name="address" rows="3" placeholder="Enter complete address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_save_customer">
                        <i class="bx bx-save me-1"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        // Load data into modal on edit button click
        $(document).on('click', '.editcustomer', function () {
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var email = $(this).attr('data-email');
            var phone = $(this).attr('data-phone');
            var address = $(this).attr('data-address');
            var state = $(this).attr('data-state');
            var city = $(this).attr('data-city');
            var pincode = $(this).attr('data-pincode');

            $('#edit_customer_id').val(id);
            $('#edit_name').val(name);
            $('#edit_email').val(email || '');
            $('#edit_phone_number').val(phone);
            $('#edit_address').val(address || '');
            $('#edit_state').val(state || '');
            $('#edit_city').val(city || '');
            $('#edit_pincode').val(pincode || '');
        });

        // Submit customer update form via AJAX
        $('#customer_update_form').on('submit', function (e) {
            e.preventDefault();

            var $submitBtn = $('#btn_save_customer');
            $submitBtn.prop('disabled', true).html('<i class="bx bx-loader-alt bx-spin me-1"></i> Saving...');

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '{{ route("customer.update") }}',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $submitBtn.prop('disabled', false).html('<i class="bx bx-save me-1"></i> Save Changes');

                    if (response.status == '200') {
                        $('#editCustomerModal').modal('hide');

                        Swal.fire({
                            title: 'Updated!',
                            text: response.message || 'Customer details updated successfully.',
                            icon: 'success',
                            confirmButtonColor: '#5156be',
                            timer: 2000,
                            timerProgressBar: true
                        }).then(function () {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: response.message || 'Unable to update customer details.',
                            icon: 'error',
                            confirmButtonColor: '#fd625e'
                        });
                    }
                },
                error: function (xhr) {
                    $submitBtn.prop('disabled', false).html('<i class="bx bx-save me-1"></i> Save Changes');

                    var errMsg = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errMsg = xhr.responseJSON.message;
                    } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errMsg = Object.values(xhr.responseJSON.errors).flat().join('<br>');
                    }

                    Swal.fire({
                        title: 'Validation Error',
                        html: errMsg,
                        icon: 'error',
                        confirmButtonColor: '#fd625e'
                    });
                }
            });
        });
    });
</script>
@endsection
