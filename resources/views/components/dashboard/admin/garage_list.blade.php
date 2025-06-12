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
      @foreach ($garages as $garage)
      <tr>
        <td>{{$garage->id}}</td>
        <td>{{$garage->full_name}}</td>
        <td>{{$garage->nic}}</td>
        <td>{{$garage->gender}}</td>
        <td>{{$garage->date_of_birth}}</td>
        <td>{{$garage->email}}</td>
        <td>{{$garage->phone_number}}</td>
        <td>{{$garage->location}}</td>
        <td>
          <a href="{{ route('Admin.GarageEdit', $garage->id) }}" class="btn btn-dark btn-sm">Edit</a>
          <form action="{{ route('Admin.GarageDelete', $garage->id) }}" method="post">
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