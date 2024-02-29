@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Category Create</h4>

                        <div class="flex-wrap breadcrumb-action justify-content-center">
                            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary me-0 radius-md">
                                <i class="la la-plus"></i> Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <section class="content">
                    <!-- Default box -->
                    <div class="container-fluid">

                        <form action="{{ route('categories.update', $category->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-2">
                                                <label class="mb-1" for="name">Name</label>
                                                <input type="text" name="name" id="name"
                                                    value="{{ $category->name ?? '' }}" class="form-control"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-2">
                                                <label class="mb-1" for="name">Image</label>
                                                <input type="file" name="image" id="image"
                                                    value="{{ $category->image ?? '' }}" class="form-control"
                                                    placeholder="image">
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="col-md-6">
                                                <div class="me-1 ">
                                                    <label class="mb-1" for="name">Featured</label>
                                                    <div class="mb-2">
                                                        <select name="is_featured" id="is_featured" class="form-control">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="ms-1">
                                                    <label class="mb-1" for="name">Status</label>
                                                    <div class="mb-2">
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="1">Active</option>
                                                            <option value="0">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5 pt-3 d-flex">
                                <button class="btn btn-primary m-2 btn-sm">Create</button>
                                <a href="brands.html" class="btn btn-outline-dark ml-3 m-2 btn-sm">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </section>

                <!-- End: .userDatatable -->
            </div><!-- End: .col -->
        </div>


        <!-- Add Course Category -->
        <div class="modal fade new-member" id="category-form-modal" role="dialog" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content radius-xl">
                    <div class="modal-header">
                        <h6 class="modal-title fw-500" id="staticBackdropLabel">{{ trans('course.add-category') }}</h6>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="svg replaced-svg">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="new-member-modal" id="form-modal">
                            @include('admin.components.category-form-modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->


    </div>
@endsection
