<div class="row mt-5">
    <div class="col-md-10 offset-md-1 border border-dark">

        <div id="mainDivFacility" class="container-fluid d-none">
            <div class="row">
                <div class="col-md-12 p-2">
                    <h1 class="text-center">Facilities Item</h1>
                    <button id="addRoombtnFacility" class="btn btn-sm btn-danger my-3">Add New</button>
                    <table id="FacilityDataTable" class="table table-striped table-bordered" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">Sl.</th>
                                <th class="th-sm">Room Title</th>
                                <th class="th-sm">Facility item</th>
                                <th class="th-sm">Facility Description</th>
                                <th class="th-sm">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="Facility_table">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="loadDivFacility" class="container">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

                </div>
            </div>
        </div>
        <div id="wrongDivFacility" class="container d-none">
            <div class="row">
                <div class="col-md-12 p-5 text-center">
                    <h3>Something Went Wrong!</h3>
                </div>
            </div>
        </div>




        <!-- Facility add -->
        <div class="modal fade" id="addFacilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-5">Add New Facility</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="container">
                            <div class="row">
                                <select name="" id="RoomPageName" class="form-control mb-5 mdb-select4">

                                </select>
                                <select name="" id="RoomPageName" class="form-control mb-5 mdb-select4">

                                </select>
                                <table class="table table-border">
                                    <thead class="thead-dark">
                                        <th class="">Serial</th>
                                        <th class="">Input</th>
                                        <th class="text-center p-0">
                                            <button onclick="addInput();" class="btn  btn-warning btn-sm p-o"><i
                                                    class="fas fa-plus-circle fa-2x"></i></button>
                                        </th>
                                    </thead>
                                    <tbody id="append_tbody">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="RoomFacilityAddConfirmBtn" type="button"
                            class="btn  btn-sm  btn-danger">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Facility add -->



        <!-- Facility Delete -->

        <div class="modal fade" id="deleteModalFacility" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body p-3 text-center">
                        <h5 class="mt-4">Do you want to Delete</h5>
                        <h5 id="FacilityDeleteId" class="mt-4 d-none "></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                        <button data-id="" id="confirmDeleteFacility" type="button"
                            class="btn btn-sm btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facility Delete -->

    </div>
</div>


