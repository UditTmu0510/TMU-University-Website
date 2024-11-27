<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Interactive Hierarchical View</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>


    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Custom css for this page -->
    <link href="{{asset('assets/css/navbar-admin.css')}}" rel="stylesheet" />
</head>

<body>

    <!-- Getting the value of parameter -->
    <!-- You can also use it in conditions -->

    <script>
        let param = "{{ $college }}";
    </script>

    <div class="container3489">
        <div class="header3489">
            <h1>University Hierarchy</h1>
            <button id="addNewCategory" class="add-category-btn">+ Add New Category</button>
        </div>
        <div id="hierarchy" class="hierarchy">
            <!-- Dynamic content will be injected here by JavaScript -->
        </div>
        <div class="mt-3 d-flex justify-content-center align-item-center">
            <button id="updateMenuButton" class="btn btn-primary mb-3" title="It will reflect the options on the live to this navbar" style="background-color: #FF7900 !important;">Update Changes</button>

        </div>
    </div>

    <!-- Edit Modal for outer json -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter category name">
                    </div>
                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Image URL</label>
                        <input type="url" class="form-control" id="categoryImage" placeholder="Enter image URL">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveCategory">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal for inner json-->
    <div class="modal fade" id="editInnerModal" tabindex="-1" aria-labelledby="editInnerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editInnerModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="innerCategoryName" placeholder="Enter category name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="innerSaveCategory">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal for editing links -->
    <div class="modal fade" id="editLinkModal" tabindex="-1" aria-labelledby="editLinkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLinkModalLabel">Edit Link Url</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">URL</label>
                        <input type="text" class="form-control" id="editLinkInput" placeholder="Enter category name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveLink">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Option or Link Modal -->
    <div class="modal fade" id="addOptionModal" tabindex="-1" aria-labelledby="addOptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addOptionModalLabel">Add New Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <!-- <label for="optionOrLinkToggle" class="form-label">Select Option Type</label> -->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="optionOrLinkToggle">
                            <label class="form-check-label" for="optionOrLinkToggle">New option or Link</label>

                        </div>
                    </div>

                    <!-- Option or Link Fields -->
                    <div id="optionFields">
                        <div class="mb-3">
                            <label for="optionName" class="form-label">Option Name</label>
                            <input type="text" class="form-control" id="optionName" placeholder="Enter option name">
                        </div>
                    </div>

                    <div id="linkFields" style="display: none;">
                        <div class="mb-3">
                            <label for="linkName" class="form-label">Link Name</label>
                            <input type="text" class="form-control" id="linkName" placeholder="Enter link name">
                        </div>
                        <div class="mb-3">
                            <label for="linkURL" class="form-label">Link URL</label>
                            <input type="url" class="form-control" id="linkURL" placeholder="Enter link URL">
                        </div>
                    </div>

                    <div id="imageFields" style="display: none;">
                        <div class="mb-3">
                            <label for="imageUrl" class="form-label">Image URL</label>
                            <input type="url" class="form-control" id="imageUrl" placeholder="default: (university.svg)">
                        </div>
                    </div>
                    
                    <div id="extrainfoModel"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveNewOption">Save</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this category? <br> <span style="font-size: 14px; font-weight:bold;">*This action cannot be undone.</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sortablejs/1.15.0/Sortable.min.js"></script>
    <script>
        // Set toastr options to customize toast position
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right", // Change position here
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <script src="{{asset('assets/js/admin_navbar.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js" integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>