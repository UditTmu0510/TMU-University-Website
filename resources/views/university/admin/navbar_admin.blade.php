<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Interactive Hierarchical View</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container3489 {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header3489 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
        }

        .add-category-btn {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
        }

        .add-category-btn:hover {
            background-color: #4cae4c;
        }

        .hierarchy {
            display: flex;
            flex-direction: column;
        }

        .category {
            margin: 10px 0;
            padding: 10px;
            background-color: #e9f0f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .category .link {
            text-decoration: none;
            margin-left: 10px;
        }

        .category-title {
            display: flex;
            align-items: center;
        }

        .category-title span {
            margin-left: 0.8rem;
            min-width: 10rem;
        }

        .category-title img {
            background-color: #001055;
            padding: 5px;
            border-radius: 2px;
        }

        .subcategory {
            padding-left: 2rem;
            margin-top: 10px;
            flex-basis: 100%;

        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        button {
            background-color: #f0ad4e;
            background-color: #001055;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #00105599;
        }

        button.delete {
            background-color: #d9534f;
        }

        button.delete:hover {
            background-color: #c9302c;
        }

        button.edit {
            background-color: #5bc0de;
        }

        button.edit:hover {
            background-color: #31b0d5;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            max-width: 40vw;
        }

        .modal button {
            background-color: #5cb85c;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
        }

        .modal button.cancel {
            background-color: #d9534f;
        }

        /* Modal Styles */
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            max-width: 40vw;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #333;
        }

        .modal .btn-close {
            background: none;
            border: none;
            color: #333;
            font-size: 1.5rem;
        }

        /* Input Fields */
        .modal-body .form-label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .modal-body .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        /* Option/Link Toggle */
        .form-switch {
            display: flex;
            justify-content: start;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-check-input {
            cursor: pointer;
        }

        .form-check-label {
            font-size: 1rem;
            color: #333;
            margin-left: 10px;
        }

        /* Button Styles */
        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-secondary,
        .btn-primary {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-secondary {
            background-color: #f0ad4e;
            border: none;
        }

        .btn-primary {
            background-color: #5cb85c;
            border: none;
        }

        .btn-secondary:hover,
        .btn-primary:hover {
            background-color: #4cae4c;
        }

        /* Show the link fields when toggled */
        #linkFields {
            display: none;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>


    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- jQuery (required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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