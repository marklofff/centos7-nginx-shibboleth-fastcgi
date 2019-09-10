
@extends('admin.common.app')

@section('content')
      {{-- Content Start --}}
      <div class="content">
        <div class="container-fluid">

        <div class="col-12 ml-12">
   	      <h2>Competency</h2>

              <div class="card" style="margin-top:5px;">
              <div class="card-body">
              <form>
		<div class="row">
                <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="sort">
                        <option>Domain Expertise</option>
                        <option>Domain Expertise</option>
                </select>
                </div>

		</div>
              </form>
              </div>
              </div>

              <div style="width:100%; text-align:left;">
                  <button class="btn btn-info" onclick="location.href=''" style="background-color:#808080; box-shadow:none;">Reset</button>
                  <button class="btn btn-info" onclick="location.href=''">Search</button>
              </div>

              <div style="width:100%; text-align:right;">
                  <button class="btn btn-info" onclick="location.href=''">CSV Export</button>
                  <button class="btn btn-info" onclick="location.href=''">CSV Import</button>
              </div>

              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text">
                        <th>
                           Category
                        </th>
                        <th>
			   Name
                        </th>
                        <th>
                           Status
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>
			<?php 
			for($i=1; $i<5; $i++){
			?>
                        <tr>
                          <td>
				Domain Expertise
                          </td>
                          <td>
                                Listening
                          </td>
                          <td>
                                Display
                          </td>
                          <td>
{{--
				<button type="button" class="btn btn-info"
				onclick="location.href='/faoeiohafhieaoie/competency/detail/1'">Detail</button>
--}}
                                <button type="button" class="btn btn-info"
                                onclick="location.href=''">Detail</button>
                          </td>
			  <?php
			  }
			  ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

	</div>



        </div>
      </div>
      {{-- Content End --}}
@endsection


