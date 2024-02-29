@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Sub Cateory Create</h4>
                        <div class="flex-wrap breadcrumb-action justify-content-center">
                            <a href="{{ route('sub-categories.index') }}" class="btn btn-sm btn-primary me-0 radius-md">
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
                        <form action="{{ route('sub-categories.update', $subCategory->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="mb-1" for="category">Select Category</label>
                                                <select name="category_id" id="category" class="form-control">
                                                    {{-- @dd($subCategory) --}}
                                                    @if ($categories)
                                                        @forelse ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">Not available category</option>
                                                        @endforelse
                                                    @else
                                                        <option value="">No Data</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex ">
                                            <div class="col-md-6">
                                                <div class="me-1 mb-3">
                                                    <label class="mb-1" for="subcategory">Sub Category</label>
                                                    <input type="text" name="name" value="{{ $subCategory->name }}"
                                                        id="subcategory" class="form-control" placeholder="Sub Category">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ms-1 mb-3">
                                                    <label class="mb-1" for="image">Image</label>
                                                    <input type="file" name="image" id="image"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="ms-1">
                                                <label class="mb-1" for="status">Status</label>
                                                <div class="mb-2">
                                                    <select name="status" id="status" class="form-control">
                                                        <option {{ $subCategory->status == '1' ? 'selected' : '' }}
                                                            value="1">Active</option>
                                                        <option {{ $subCategory->status == '0' ? 'selected' : '' }}
                                                            value="0">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5 pt-3 d-flex">
                                <button class="btn btn-primary m-1 btn-sm">Update</button>
                                <a href="subcategory.html" class="btn btn-outline-dark ml-3 btn-sm m-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </section>
            </div><!-- End: .col -->
        </div>


        <!--Add Sub Category-->
        <div class="modal fade new-member " id="category-form-modal" role="dialog" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content radius-xl">
                    <div class="modal-header">
                        <h6 class="modal-title fw-500" id="staticBackdropLabel">{{ trans('add-sub-category') }}</h6>
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
                            @include('admin.components.sub-category-form-modal')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->


    </div>
@endsection
