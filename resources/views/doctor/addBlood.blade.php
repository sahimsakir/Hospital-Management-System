@extends('doctor.layout.main')


@section('Name')
   Bloodlist/AddBlood
@endsection

@section('Iteams')
               


<!-- Add Department -->
                  <div class="col-lg-6" style="margin-left: 260px;">
                      <h1 class="text-center">Add New Blood in Bank</h1>
                      <hr>
                      <form method="post" enctype="multipart/form-data">
                @csrf
                <label>Doner Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter You Name">
                  <br>
                  <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter You Email Address">
                   <br>
                  <label>Phone Number</label>
                    <input type="text" class="form-control" name="number" placeholder="Enter You Phone Number">
                  <br>
                           <label>Address</label>
                               <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                           <br>
                  <label>Blood Group</label>
                  <br>
                           
                      <select name="bloodgroup" class="form-control"  style="width: 100%;">
                      <option disabled="disabled" selected="selected">Choose option</option>
                                 <option>A+</option>
                                 <option>A-</option>
                                 <option>B+</option>
                                 <option>B+</option>
                                 <option>O+</option>
                                 <option>O-</option>
                                 <option>AB+</option>
                                 <option>AB-</option>
                                   
                    </select>
                          
                  <br>
                  
                  <label>Quantity</label>
                  
                    <br>

                    <select name="donate" class="form-control"  style="width: 100%;">
                      <option disabled="disabled" selected="selected">Choose option</option>
                                 <option>1 Beg</option>
                                 <option>2 Begs</option>
                                   
                    </select>
                  <br>
                      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    <input style="background-color: red;" type="reset" class="btn btn-primary" name="reset" value="Reset">
                        
                </form>
                      <br>
								<br>
                         <div style="color: green;">
                           {{session('msg')}}
                         </div>
                        
                          <div style="color: red;">
                           {{session('msg2')}}
                         </div>
                  
								<div style="color: red;">

                  @foreach($errors->all() as $err)
									{{$err}} <br>
								   @endforeach
                                </div>

                  </div>  
@endsection