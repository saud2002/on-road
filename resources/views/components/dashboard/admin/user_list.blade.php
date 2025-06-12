<div class="col-md-12 table-responsive mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>NIC Number</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->full_name}}</td>
        <td>{{$user->nic}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->date_of_birth}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->location}}</td>
        <td>
          <a href="{{route('Admin.UserEdit',$user->id)}}" class="btn btn-dark btn-sm">Edit</a>
          <form action="{{route('Admin.UserDelete',$user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>