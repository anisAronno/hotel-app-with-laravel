<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <p><h5>Rooms</h5></p><div class="m-auto"></div>
                <button id="addRoomModal" class="btn btn-danger btn-sm">Add Rooms</button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Lenght</th>
                        <th>View</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Beds</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="Room_table">

                </tbody>
            </table>
        </div>
    </div>
</div>


<div id="loadDivRoom" class="container">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <img class="loding-icon m-5" src="{{ asset('loader.svg') }}" alt="">

        </div>
    </div>
</div>
<div id="wrongDivRoom" class="container d-none">
    <div class="row">
        <div class="col-md-12 p-5 text-center">
            <h3>Something Went Wrong!</h3>
        </div>
    </div>
</div>



        <!-- Room add -->
        <div class="modal fade" id="addRoomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-5">Add New Room</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-center">
                        <div class="container">
                            <div class="row">
                                    <input id="RoomTitle" type="text" class="form-control mb-3"
                                    placeholder="Room Title">
                                    <input name="" id="RoomPrice"  class="form-control mb-3"
                                    placeholder="Room Price">
                                    <input id="RoomLenght" type="text" class="form-control mb-3"
                                    placeholder="Room Lenght">
                                    <input id="RoomView" type="text" class="form-control mb-3"
                                    placeholder="Room View">

                                    <input id="RoomAdults" type="text" class="form-control mb-3"
                                    placeholder="Room Adults">
                                    <input id="RoomChildren" type="text" class="form-control mb-3"
                                    placeholder="Room Children">
                                    <input id="RoomBed" type="text" class="form-control mb-3"
                                    placeholder="Room Bed">               
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="RoomAddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Room add -->


          <!-- Room Delete -->
          <div class="modal fade" id="deleteModalRoom" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">

                  <div class="modal-body p-3 text-center">
                      <h5 class="mt-4">Do you want to Delete</h5>
                      <h5 id="RoomDeleteId" class="mt-4 d-none "></h5>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                      <button data-id="" id="confirmDeleteRoom" type="button"
                          class="btn btn-sm btn-danger">Yes</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Room Delete -->


      

        <!-- Room update -->
        <div class="modal fade" id="updateRoomModal" tabindex="-1" role="dialog"
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
                        <div id="RoomEditForm" class="container d-none ">
                            <h5 id="RoomEditId" class="mt-4 d-none"></h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="RoomTitleIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room Title">
                                    <input name="" id="RoomPriceIdUpdate"  class="form-control mb-3"
                                    placeholder="Room Price">
                                    <input id="RoomLenghtIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room Lenght">
                                    <input id="RoomViewIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room View">

                                    <input id="RoomAdultsIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room Adults">
                                    <input id="RoomChildrenIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room Children">
                                    <input id="RoomBedIdUpdate" type="text" class="form-control mb-3"
                                    placeholder="Room Bed">   
                                </div>
                               
                            </div>
                        </div>
                        <img id="RoomLoader" class="loding-icon m-5 d-none" src="{{ asset('loader.svg') }}"
                            alt="">
                        <h3 id="RoomwrongLoader" class="d-none">Something Went Wrong!</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                        <button id="RoomConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
