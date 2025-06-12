 <div class="col-md-12 table-responsive mt-3">
   <table class="table">
     <thead>
       <tr>
         <th>No</th>
         <th>Full Name</th>
         <th>E-Mail</th>
         <th>Phone</th>
         <th>Reason</th>
         <th>Location</th>
         <th>Brand</th>
         <th>Type</th>
         <th>Vechile Number</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>

       @foreach ($books as $book)
       <tr>
         <td>{{$book->id}}</td>
         <td>{{$book->full_name}}</td>
         <td>{{$book->email}}</td>
         <td>{{$book->phone_number}}</td>
         <td>{{$book->reason}}</td>
         <td>{{$book->location}}</td>
         <td>{{$book->brand}}</td>
         <td>{{$book->type}}</td>
         <td>{{$book->vechile_number}}</td>
         <td>
          <form action="{{route('Admin.booklistdelete',$book->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
          </form>
         </td>
       </tr>
       @endforeach


     </tbody>
   </table>
 </div>