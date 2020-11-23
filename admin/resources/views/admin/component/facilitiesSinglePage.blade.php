<div class="row mt-5">
    <div class="col-md-10 offset-md-1 border border-dark">

        <div id="mainDivFacilities" class="container-fluid d-none">
            <div class="row">
                <div class="col-md-12 p-2">
                    <h1 class="text-center">Facilities Page</h1>
                    <button id="addbtnFacilities" class="btn btn-sm btn-danger my-3">Add New</button>
                    <table id="FacilitiesDataTable" class="table table-striped table-bordered" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Sl.</th>
                                <th class="th-sm">Page Name</th>
                                <th class="th-sm">Page Slogan</th>
                                <th class="th-sm">Title</th>
                                <th class="th-sm">Description</th>
                                <th class="th-sm">Edit</th>
                                <th class="th-sm">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="Facilities_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="loadDivFacilities" class="container">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

                </div>
            </div>
        </div>
        <div id="wrongDivFacilities" class="container d-none">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <h3>Something Went Wrong!</h3>
                </div>
            </div>
        </div>




        <!-- Facilities add -->
        <div class="modal fade" id="addFacilitiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-5">Add New Facilities</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="container">
                            <div class="row">
                                    <input id="FacilitiesPage" type="text" class="form-control mb-3"
                                    placeholder="Facilities Page Name">
                                    <input id="FacilitiesName" type="text" class="form-control mb-3"
                                    placeholder="Facilities Title">
                                    <textarea name="" id="FacilitiesSubTitle" cols="30" rows="5" class="form-control mb-3"
                                    placeholder="Facilities Page Slogan"></textarea>
                                    <textarea name="" id="FacilitiesDes" cols="30" rows="5" class="form-control mb-3"
                                    placeholder="Facilities Description"></textarea>
                             
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="FacilitiesAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Facilities add -->



        <!-- Facilities Delete -->
        <div class="modal fade" id="deleteModalFacilities" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body p-3 text-center">
                        <h5 class="mt-4">Do you want to Delete</h5>
                        <h5 id="FacilitiesDeleteId" class="mt-4 d-none "></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                        <button data-id="" id="confirmDeleteFacilities" type="button"
                            class="btn btn-sm btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities Delete -->



        <!-- Facilities update -->
        <div class="modal fade" id="updateFacilitiesModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div id="FacilitiesEditForm" class="container d-none ">
                            <h5 id="FacilitiesEditId" class="mt-4 d-none"></h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="FacilitiesPageIdUpdate" type="text" id="" class="form-control mb-3"
                                        placeholder="Facilities Page Name">
                                    <input id="FacilitiesNameIdUpdate" type="text" id="" class="form-control mb-3"
                                        placeholder="Facilities Name">
                                    <textarea name="" id="FacilitiesSubTitleIdUpdate" cols="30" rows="5"
                                        class="form-control mb-3" placeholder="Facilities Sub Title"></textarea>
                                    <textarea name="" id="FacilitiesDesIdUpdate" cols="30" rows="5"
                                        class="form-control mb-3" placeholder="Facilities Description"></textarea>
                                </div>
                               
                            </div>
                        </div>
                        <img id="FacilitiesLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}"
                            alt="">
                        <h3 id="FacilitieswrongLoader" class="d-none">Something Went Wrong!</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="FacilitiesConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
