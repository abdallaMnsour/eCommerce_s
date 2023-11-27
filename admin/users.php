<?php
include 'includes/headerAndSidebar.php';
?>
<div class="main-content">

  <div class="page-content">
    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
      <div class="p-3">
        <p>By passing a parameter, you can execute something else for "Cancel".</p>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
      </div>
    </div>
    
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Alternative Pagination</h4>
              <p class="card-title-desc">
                The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between)
                is fine for most situations, but there are cases where you may wish to customise the options presented to the end
                user.
              </p>

              <div id="alternative-page-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="alternative-page-datatable_length"><label>Show <select name="alternative-page-datatable_length" aria-controls="alternative-page-datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select> entries</label></div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="alternative-page-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="alternative-page-datatable"></label></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="alternative-page-datatable_info" style="width: 937px;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                          <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 219px;" aria-label="Position: activate to sort column ascending">Position</th>
                          <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">Office</th>
                          <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 45px;" aria-label="Age: activate to sort column ascending">Age</th>
                          <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 95px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                          <th class="sorting" tabindex="0" aria-controls="alternative-page-datatable" rowspan="1" colspan="1" style="width: 84px;" aria-label="Salary: activate to sort column ascending">Salary</th>
                        </tr>
                      </thead>


                      <tbody>

























































                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Jennifer Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                        </tr>
                        <tr class="even">
                          <td class="sorting_1 dtr-control">Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                        </tr>
                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                        </tr>
                        <tr class="even">
                          <td class="sorting_1 dtr-control">Martena Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                        </tr>
                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                        </tr>
                        <tr class="even">
                          <td class="sorting_1 dtr-control">Michael Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                        </tr>
                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Michelle House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                        </tr>
                        <tr class="even">
                          <td class="sorting_1 dtr-control">Olivia Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                        </tr>
                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Paul Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                        </tr>
                        <tr class="even">
                          <td class="sorting_1 dtr-control">Prescott Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="alternative-page-datatable_info" role="status" aria-live="polite">Showing 31 to 40 of 57 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_full_numbers" id="alternative-page-datatable_paginate">
                      <ul class="pagination pagination-rounded">
                        <li class="paginate_button page-item first" id="alternative-page-datatable_first"><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="0" tabindex="0" class="page-link">First</a></li>
                        <li class="paginate_button page-item previous" id="alternative-page-datatable_previous"><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="2" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="3" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="4" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="5" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="6" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="7" tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="alternative-page-datatable_next"><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                        <li class="paginate_button page-item last" id="alternative-page-datatable_last"><a href="#" aria-controls="alternative-page-datatable" data-dt-idx="9" tabindex="0" class="page-link">Last</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- end row-->

    </div> <!-- container-fluid -->
  </div>
</div>
<?php
include 'includes/footer.php';
?>