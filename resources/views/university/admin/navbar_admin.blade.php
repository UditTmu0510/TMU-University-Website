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

    <script>
        let innerJson = {};
        const hierarchyElement = document.getElementById('hierarchy');
        let outerJson = {};
        const updateMenuButton = document.getElementById('updateMenuButton');

        //function to return json file name depending on the sub-directory
        function subDirectoryFinder(subDirectory) {

            switch (subDirectory) {
                case 'medical-college-and-research-centre':
                    return 'medical_menubarData';
                case 'dental-college-and-research-centre':
                    return 'dental_menubarData';
                case 'college-of-nursing':
                    return 'nursing_menubarData';
                case 'college-of-paramedical-sciences':
                    return 'paramedical_menubarData';
                case 'department-of-physiotherapy':
                    return 'physiotherapy_menubarData';
                case 'tmimt-college-of-management':
                    return 'tmimt_menubarData';
                case 'college-of-pharmacy':
                    return 'pharmacy_menubarData';
                case 'college-of-law-and-legal-studies':
                    return 'law_menubarData';
                case 'college-of-computing-sciences-and-it':
                    return 'ccsit_menubarData';
                case 'faculty-of-engineering':
                    return 'engineering_menubarData';
                case 'college-of-fine-arts':
                    return 'finearts_menubarData';
                case 'faculty-of-education':
                    return 'education_menubarData';
                case 'tmimt-college-of-physical-education':
                    return 'physical_education_menubarData';
                case 'college-of-agriculture-sciences':
                    return 'agriculture_menubarData';
                case 'home':
                    return 'menubarData';
            }
        }


        async function fetchOuterNavFromServer(id) {

            const collegeName = subDirectoryFinder(param);

            try {
                await fetch('/navbar-items', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json', // Set content type to JSON
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // CSRF token
                        },
                        body: JSON.stringify({
                            collegeName
                        })
                    })
                    .then(response => response.json())
                    .then(response => {
                        outerJson = response;
                    })
                    .catch(e => console.error(e));
            } catch (e) {
                console.error('Unable to fetch the outer nav');
            }

        }
        // fetching the outer navjson from server
        fetchOuterNavFromServer();

        function fetchOuterNav(id) {

            let item = outerJson.find(item => item.id == id);
            return {
                title: item.text,
                img: item.imageURL
            }
        }

        // Fetch university inner menu items from the backend
        async function fetchInnerNavbarItems() {

            const collegeName = subDirectoryFinder(param);

            try {
                // Fetch inner navbar items with CSRF and collegeName
                const response = await fetch('/university-inner-navbar', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        collegeName
                    }) 
                });

                // Check if the response is OK (status 200-299)
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const items = await response.json();
                innerJson = items; // Assign response data to innerJson

                // Optionally refresh the menubar or other UI elements
                resetMenubar();

            } catch (error) {
                console.error('Error fetching navbar items:', error);
            }
        }

        // Call the function to fetch the items
        fetchInnerNavbarItems();

        // Function to update the modification changes in local outerJson to the server
        function updateOuter() {
            const url = '/navbar-items/update'; // URL for the update endpoint
            const method = 'POST'; // HTTP method`
            const collegeName = subDirectoryFinder(param);

            // Make the fetch request
            fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json', // Set content type to JSON
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // CSRF token
                    },
                    body: JSON.stringify({
                        navbarData: outerJson,
                        collegeName: collegeName
                    }) // Send the navbar data (outerJson) in the body
                })
                .then(response => response.json())
                .then(data => {
                    // If update is successful, refresh the navbar items
                    resetMenubar();
                    toastr.success('Navbar item updated successfully!'); // Show success message
                })
                .catch(error => {
                    console.error('Error saving navbar item:', error);
                    toastr.error('Failed to update navbar item.'); // Show error message
                });
        }


        // Function to update the modification changes in local innerJson to the server
        function updateInner() {
            const url = '/university-inner-navbar/update'; // URL for the update endpoint
            const method = 'POST'; // HTTP method
            const collegeName = subDirectoryFinder(param);

            // Make the fetch request
            fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json', // Set content type to JSON
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // CSRF token
                    },
                    body: JSON.stringify({
                        navbarData: innerJson,
                        collegeName: collegeName
                    }) // Send the navbar data (outerJson) in the body
                })
                .then(response => response.json())
                .then(data => {
                    // If update is successful, refresh the navbar items
                    resetMenubar();
                    toastr.success('Navbar item updated successfully!'); // Show success message
                })
                .catch(error => {
                    console.error('Error saving navbar item:', error);
                    toastr.error('Failed to update navbar item.'); // Show error message
                });
        }


        // Event listener to update the json on the server
        updateMenuButton.addEventListener('click', () => {

            updateOuter();
            updateInner();


        })



        // Generate the hierarchy
        function generateHierarchy(data, parentElement, path = [], level = 0) {

            // Iterate over each key in the data object
            for (const category in data) {
                const categoryElement = document.createElement('div');
                categoryElement.classList.add('category');

                // Set the path and level as attributes
                const currentPath = [...path, category]; // Add the current category to the path
                categoryElement.setAttribute('data-path', JSON.stringify(currentPath)); // Path attribute
                categoryElement.setAttribute('data-level', level); // Level attribute

                const title = document.createElement('div');
                title.classList.add('category-title');

                if (path != 0) {

                    // Check if the category has a 'link' property
                    if (data[category].link) {
                        // Create an anchor tag for the title if a link exists
                        const titleLink = document.createElement('a');
                        titleLink.classList.add('link');
                        titleLink.href = data[category].link; // Set the href to the value of the 'link' property
                        titleLink.innerText = category; // Set the inner text of the link to the category name
                        title.appendChild(titleLink); // Append the anchor to the title
                    } else {
                        // Otherwise, keep the title as simple text
                        const titleText = document.createElement('span');
                        titleText.innerText = category;
                        title.appendChild(titleText); // Append the plain text title
                    }

                } else {
                    // Fetch the item for path 0
                    const item = fetchOuterNav(category);
                    let basePath = String(window.location.href);
                    let index = basePath.indexOf('navbar-admin');
                    basePath = basePath.slice(0,index);
                    // Create the image element and set its source
                    const image = document.createElement('img');
                    image.setAttribute('src', `${basePath}assets/img/nav_logo/${item.img}`);
                    image.setAttribute('style', `width:2rem`);

                    // Append the image first
                    title.append(image);

                    // Check if the category has a 'link' property
                    if (data[category].link) {
                        // Create an anchor tag for the title if a link exists
                        const titleLink = document.createElement('a');
                        titleLink.classList.add('link');
                        titleLink.href = data[category].link; // Set the href to the value of the 'link' property
                        titleLink.innerText = item.title; // Set the inner text of the link to the category name
                        title.appendChild(titleLink); // Append the anchor to the title
                    } else {
                        // Otherwise, keep the title as simple text
                        const titleText = document.createElement('span');
                        titleText.innerText = item.title;
                        title.appendChild(titleText); // Append the plain text title
                    }
                }

                // Create a toggle button for expanding/collapsing subcategories
                if (!(data[category].link)) {
                    const toggleButton = document.createElement('button');
                    toggleButton.classList.add('toggle');
                    toggleButton.innerText = '▼'; // Initially shows a down arrow
                    toggleButton.onclick = () => toggleSubcategory(categoryElement, toggleButton);
                    title.appendChild(toggleButton);
                }


                categoryElement.appendChild(title);

                const buttons = document.createElement('div');
                buttons.classList.add('buttons');

                // const editButton = document.createElement('button');
                // editButton.classList.add('edit');
                // editButton.innerText = 'Edit';
                // editButton.onclick = () => editCategory(categoryElement, category, data[category]);
                // buttons.appendChild(editButton);

                // Add Button to add new child
                if (!(data[category].link)) {
                    const addButton = document.createElement('button');
                    addButton.classList.add('add');
                    addButton.innerText = 'Add';
                    addButton.onclick = () => addCategoryModal(categoryElement);
                    buttons.appendChild(addButton);
                }

                // Check if the category has a link property to determine whether to create 'Edit Link' button
                if (data[category].link) {
                    // If the category has a link, replace 'Edit' button with 'Edit Link'
                    const editLinkButton = document.createElement('button');
                    editLinkButton.classList.add('edit-link');
                    editLinkButton.innerText = 'Edit Link';
                    editLinkButton.onclick = () => editLinkCategory(categoryElement, data[category].link);
                    buttons.appendChild(editLinkButton);
                }

                const editButton = document.createElement('button');
                editButton.classList.add('edit');
                editButton.innerText = 'Edit';
                editButton.onclick = () => editCategory(categoryElement, category, data[category]);
                buttons.appendChild(editButton);


                const deleteButton = document.createElement('button');
                deleteButton.classList.add('delete');
                deleteButton.innerText = 'Delete';
                deleteButton.onclick = () => showDeleteModal(categoryElement);
                buttons.appendChild(deleteButton);

                categoryElement.appendChild(buttons);

                const subcategoryElement = document.createElement('div');
                subcategoryElement.classList.add('subcategory');
                subcategoryElement.style.display = 'none'; // Hide by default

                // Only call generateHierarchy recursively if the current value is an object
                if (typeof data[category] === 'object' && !Array.isArray(data[category])) {

                    if (!(data[category].link)) {
                        generateHierarchy(data[category], subcategoryElement, currentPath, level + 1);
                    }
                }

                categoryElement.appendChild(subcategoryElement);

                parentElement.appendChild(categoryElement);
            }
        }


        // Define the handleSaveClick function outside the modal logic
        function handleSaveClick() {

            const modal = document.getElementById('addOptionModal');
            const element = document.getElementById('category47');
            const isLink = document.getElementById('optionOrLinkToggle').checked;
            let path = element.getAttribute('data-path');
            let pathArray = JSON.parse(path);

            if (isLink) {
                let name = document.getElementById('linkName').value;
                let url = document.getElementById('linkURL').value;

                const status = createNewItem(innerJson, pathArray, name, url);

                if (status === 200)
                    toastr.success('Link Added Successfully!');
                else if (status === 301)
                    toastr.warning('Item from this name already Exists.');
                else
                    toastr.error('Unable to Add new link now, try again later!');

            } else {
                let name = document.getElementById('optionName').value;

                const status = createNewItem(innerJson, pathArray, name);

                if (status === 200)
                    toastr.success('Item Added Successfully!');
                else if (status === 301)
                    toastr.warning('Item from this name already Exists.');
                else
                    toastr.error('Unable to Add new link now, try again later!');
            }

            resetMenubar();
            // Close modal after saving
            $('#addOptionModal').modal('hide');
        }

        // The addCategoryModal function
        function addCategoryModal(element) {
            // Reset the modal fields in case we are adding a new category
            document.getElementById('optionName').value = '';
            document.getElementById('linkName').value = '';
            document.getElementById('linkURL').value = '';
            document.getElementById('optionOrLinkToggle').checked = false; // Set to Option by default

            // Check if the 'element' is passed (i.e., editing an existing category)
            if (element) {
                const isLink = element.type === 'link'; // Assuming element has a 'type' field that tells if it's a link or option

                // If it's an existing category with a type of 'link'
                if (isLink) {
                    document.getElementById('linkName').value = ''; // Populate the link name
                    document.getElementById('linkURL').value = ''; // Populate the link URL
                    document.getElementById('optionOrLinkToggle').checked = true; // Set toggle to Link
                } else {
                    document.getElementById('optionName').value = ''; // Populate the option name
                    document.getElementById('optionOrLinkToggle').checked = false; // Set toggle to Option
                }
            }

            // Show the modal
            $('#addOptionModal').modal('show');

            // Assuming 'element' is a native DOM element, convert it to a jQuery object
            const $element = $(element); // This wraps the element in a jQuery object

            // Clone the element (deep copy)
            const elem = $element.clone(true);

            // Modify the cloned element
            elem.css('display', 'none'); // jQuery way to set CSS
            elem.attr('id', 'category47'); // jQuery way to set an ID

            // Fetch the div with the ID 'extrainfoModel'
            const $extrainfoModel = $('#extrainfoModel');

            // Empty the inner HTML of the 'extrainfoModel' div
            $extrainfoModel.empty();

            // Append the cloned element to 'extrainfoModel'
            $extrainfoModel.append(elem);




            // JavaScript to toggle between Option and Link fields
            document.getElementById('optionOrLinkToggle').addEventListener('change', function() {
                const optionFields = document.getElementById('optionFields');
                const linkFields = document.getElementById('linkFields');

                if (this.checked) {
                    // Show link fields, hide option fields
                    optionFields.style.display = 'none';
                    linkFields.style.display = 'block';
                } else {
                    // Show option fields, hide link fields
                    optionFields.style.display = 'block';
                    linkFields.style.display = 'none';
                }
            });
        }


        // Save Button Logic (Example)
        const saveButton = document.getElementById('saveNewOption');

        // Add the event listener again with the correct context
        saveButton.addEventListener('click', handleSaveClick);



        // Function to create a new item 
        function createNewItem(jsonData, pathArray, newName, link = null) {

            newName = String(newName);

            // Base case: If pathArray is empty, return the current data]
            if (pathArray.length === 0) {
                return 404;
            }

            if (pathArray.length == 1) {
                let key = pathArray.shift();

                if (jsonData[key][newName]) {
                    return 301; // status code for duplicacy
                } else {

                    // create new item 
                    jsonData[key][newName] = {};

                    if (link !== null) {
                        jsonData[key][newName].link = link;
                    }

                    return 200;
                }
            }
            let key = pathArray.shift();

            return createNewItem(jsonData[key], pathArray, newName, link);
        }



        // Handle the folding of subcategories
        function toggleSubcategory(categoryElement, toggleButton) {
            const subcategory = categoryElement.querySelector('.subcategory');

            // Toggle the display of the subcategory
            if (subcategory.style.display === 'none') {
                subcategory.style.display = 'block'; // Show subcategory
                toggleButton.innerText = '▲'; // Change button text to up arrow
            } else {
                subcategory.style.display = 'none'; // Hide subcategory
                toggleButton.innerText = '▼'; // Change button text to down arrow
            }
        }

        // Function to fetch value from nested JSON using pathArray
        function getValueFromPath(json, pathArray) {
            return pathArray.reduce((acc, key) => {
                return acc ? acc[key] : undefined; // Traverse deeper in the object
            }, json);
        }


        // Function to show the modal with the current category data
        function showEditModal(item) {
            // Set the current values in the modal inputs
            document.getElementById('categoryName').value = item.text; // Set category name
            document.getElementById('categoryImage').value = item.imageURL || ''; // Set image URL (if available)

            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();

            // Handle save button click
            document.getElementById('saveCategory').onclick = function() {
                const newCategoryName = document.getElementById('categoryName').value;
                const newCategoryImage = document.getElementById('categoryImage').value;

                // Update the category data in outerJson
                item.text = newCategoryName;
                item.imageURL = newCategoryImage;

                outerJson.forEach(option => {
                    if (option.id == item.id) {
                        option = item;
                    }
                })

                resetMenubar();

                // Close the modal
                modal.hide();
            };

            // Handle cancel button (or close modal)
            document.querySelector('[data-bs-dismiss="modal"]').onclick = function() {
                // Close the modal without saving
                modal.hide();
            };
        }




        // Handle edit category
        function editCategory(e, category, categoryData) {

            // extracting the path and the level from element
            let path = e.getAttribute('data-path');
            let level = e.getAttribute('data-level');

            // Convert the string path into an actual array
            let pathArray = JSON.parse(path);

            let id = pathArray.pop(); // Get the last element of pathArray


            // When the item is to be edit is on the outerNav
            if (level === '0') {

                // Loop through outerJson and modify the object directly
                outerJson.forEach(async function(item) {
                    if (item.id == id) {
                        // Trigger the modal to edit the category
                        await showEditModal(item);
                    }
                });
                return;
            }

            // it will display the category name in popup and if needed then will modify it
            showInnerEditModal(pathArray, id);

        }

        // Function to fetch value from nested JSON using pathArray
        function getValueFromPath(json, pathArray) {
            return pathArray.reduce((acc, key) => {
                return acc ? acc[key] : undefined; // Traverse deeper in the object
            }, json);
        }

        // Function to directly do change in the innerJson File
        function changeInInnerJson(pathArray, id, newId) {

            // Traverse the pathArray to get to the desired object
            let targetObject = pathArray.reduce((obj, key) => {
                return obj[key];
            }, innerJson);

            // Check if the 'id' (e.g., 'lead') exists, and change it to 'leads'
            if (targetObject.hasOwnProperty(id)) {
                targetObject[newId] = targetObject[id]; // Add new key
                delete targetObject[id]; // Delete old key
            }



        }

        // Function to show the modal with the current category dat in inner navbar
        function showInnerEditModal(pathArray, id) {
            // Set the current values in the modal inputs
            document.getElementById('innerCategoryName').value = id; // Set category name

            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('editInnerModal'));
            modal.show();

            // Handle save button click
            document.getElementById('innerSaveCategory').onclick = function() {
                const newCategoryName = document.getElementById('innerCategoryName').value;

                let json = getValueFromPath(innerJson, pathArray);

                changeInInnerJson(pathArray, id, newCategoryName);

                resetMenubar();

                // Close the modal
                modal.hide();
            };

            // Handle cancel button (or close modal)
            document.querySelector('[data-bs-dismiss="modal"]').onclick = function() {
                // Close the modal without saving
                modal.hide();
            };
        }

        // Show delete confirmation modal
        function showDeleteModal(category) {
            $('#deleteModal').modal('show');

            const confirmButton = document.getElementById('confirmDelete');
            confirmButton.onclick = () => deleteCategory(category);

            const cancelButton = document.getElementById('cancelDelete');
            cancelButton.onclick = () => modal.style.display = 'none';
        }

        // Handle category deletion
        // Handle category deletion
        function deleteCategory(categoryElement) {
            // Extract path and level from the category element's attributes
            const path = categoryElement.getAttribute('data-path');
            const level = categoryElement.getAttribute('data-level');

            // Convert the path to an array
            const pathArray = JSON.parse(path);

            // Traverse the path array to delete the item at the correct level
            deleteFromJson(pathArray);

            // Re-render the hierarchy after deletion
            resetMenubar();
            toastr.success('Navbar item deleted successfully!');

            //As the item is deleted ,hide the popup
            $('#deleteModal').modal('hide');

        }

        // Function to delete an item from JSON based on the path array
        function deleteFromJson(pathArray) {
            let targetObject = innerJson; // Start from the root of the JSON

            // Traverse the pathArray to get the parent object
            for (let i = 0; i < pathArray.length - 1; i++) {
                targetObject = targetObject[pathArray[i]];
            }

            // The last element in the path array is the key to the item we want to delete
            const keyToDelete = pathArray[pathArray.length - 1];

            // Delete the key from the target object
            if (targetObject.hasOwnProperty(keyToDelete)) {
                delete targetObject[keyToDelete];
            }

        }

        //function to refresh the menubar after update
        function resetMenubar() {
            hierarchyElement.innerHTML = '';
            generateHierarchy(innerJson, hierarchyElement);
        }

        // Function to show the modal with the link input pre-filled
        function editLinkCategory(category, currentLink) {

            const path = category.getAttribute('data-path');
            let pathArray = JSON.parse(path);


            const val = updateOrPrintLink(innerJson, pathArray);

            pathArray = JSON.parse(path);


            document.getElementById('editLinkInput').value = val;

            // Show the modal
            var modal = new bootstrap.Modal(document.getElementById('editLinkModal'));
            modal.show();

            // Handle save button click
            document.getElementById('saveLink').onclick = function() {
                const val = document.getElementById('editLinkInput').value;

                // update the value of new link
                updateOrPrintLink(innerJson, pathArray, val);

                // refresh the navbar 
                resetMenubar();

                // show proper success message
                toastr.success('Link Modified Successfully!!');

                // Close the modal
                modal.hide();
            };

            // Handle cancel button (or close modal)
            document.querySelector('[data-bs-dismiss="modal"]').onclick = function() {
                // Close the modal without saving
                modal.hide();
            };
        }

        // function to recursively call the json using pathArray to go in depth and find the targetted link and when found return it or if the new value is passed with update it
        function updateOrPrintLink(jsonData, pathArray, newLinkValue = null) {
            // Base case: If pathArray is empty, return the current data]
            if (pathArray.length === 0) {
                return;
            }

            const val = pathArray.shift();
            if (jsonData[val].hasOwnProperty('link')) {
                if (newLinkValue) {
                    // delete jsonData[val]['link'];
                    jsonData[val].link = newLinkValue;
                    return;
                } else
                    return jsonData[val].link;
            }

            // recursive call to go in given path 
            return updateOrPrintLink(jsonData[val], pathArray, newLinkValue);

        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js" integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>