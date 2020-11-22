<div class="row mt-5">
    <div class="col-md-10 offset-md-1 border border-dark">

        <div id="mainDivResturantMenu" class="container-fluid d-none">
            <div class="row">
                <div class="col-md-12 p-2">
                    <h1 class="text-center">Exclusive Special Feature Section</h1>
                    <button id="addbtnResturantMenu" class="btn btn-sm btn-danger my-3 mt-5">Add New</button>
                    <table id="ResturantMenuDataTable" class="table table-striped table-bordered mt-5" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Sl.</th>
                                <th class="th-sm">Title</th>
                                <th class="th-sm">Description</th>
                                <th class="th-sm">Categories</th>
                                <th class="th-sm text-center">Edit</th>
                                <th class="th-sm">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="ResturantMenu_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="loadDivResturantMenu" class="container">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

                </div>
            </div>
        </div>
        <div id="wrongDivResturantMenu" class="container d-none">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <h3>Something Went Wrong!</h3>
                </div>
            </div>
        </div>




        <!-- ResturantMenu add -->
        <div class="modal fade" id="addResturantMenuModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-5">Add New Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="container">
                            

                                <input id="ResturantMenuTitle" type="text" id="" class="form-control mb-3"
                                    placeholder="Title">

                                <textarea id="ResturantMenuDescription" type="text" id="" class="form-control mb-3"
                                    placeholder=" Description..." cols="30" rows="5"></textarea>
                                
                                <select name="" id="ResturantMenuCategories" style="z-index: 2099; " class="mdb-select m-5 px-2">
                                    <option value="1">Basic Menu</option>
                                    <option value="2">Set menu</option>
                                    <option value="3">Party Menu</option>
                                </select>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="ResturantMenuAddConfirmBtn" type="button"
                            class="btn  btn-sm  btn-danger">Save</button>
                    </div>
                </div>
            </div>
        </div>






        <!-- Modal FeaturedSpecials Delete -->
        <div class="modal fade" id="deleteModalResturantMenu" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body p-3 text-center">
                        <h5 class="mt-4">Do you want to Delete.....</h5>
                        <h5 id="ResturantMenuDeleteId" class="mt-4 d-none "></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                        <button data-id="" id="confirmDeleteResturantMenu" type="button"
                            class="btn btn-sm btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal FeaturedSpecials Delete -->








        <div class="modal fade" id="updateResturantMenuModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Exclusive Featured Extra Services</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div id="ResturantMenuEditForm" class="container d-none ">
                            <h5 id="ResturantMenuESEditId" class="mt-4 d-none"></h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="ResturantmenudTitleIdUpdate" type="text" id=""
                                        class="form-control mb-3" placeholder="Title">
                                    <textarea id="ResturantmenudDesIdUpdate" type="text" id=""
                                        class="form-control mb-3" placeholder="Description" cols="30"
                                        rows="5"></textarea>
                                        <select name="" id="ResturantmenudCatIdUpdate" class="mdb-select2">
                                            <option value="1" class="text-center">Basic Menu</option>
                                            <option value="2" class="text-center">Set menu</option>
                                            <option value="3" class="text-center">Party Menu</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <img id="projectLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}" alt="">
                        <h3 id="projectwrongLoader" class="d-none">Something Went Wrong!</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="ResturantMenuUpdateConfirmBtn" type="button"
                            class="btn  btn-sm  btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
