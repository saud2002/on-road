<style>
    body {
      background: #f0f4f8;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 700px;
      margin: 40px auto;
      padding: 30px;
      background-color: #ffffff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h1, h2 {
      text-align: center;
      color: #333;
    }

    form label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
      color: #444;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: 0.3s ease;
    }

    form input:focus, form textarea:focus {
      border-color: #007bff;
      outline: none;
      background-color: #f7fbff;
    }

    textarea {
      resize: vertical;
    }

    button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Register Your Vehicle Breakdown</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="/register/store" method="post" class="registration-form">
      @csrf
      <h2>User Information</h2>
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Enter Full Name">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address">

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" value="{{old('phone')}}" placeholder="Enter Phone Number">

      <h2>Vehicle Information</h2>
      <label for="make">Vehicle Make</label>
      <input type="text" id="make" name="make" value="{{old('make')}}" placeholder="Enter Vehicle Make">

      <label for="model">Vehicle Model</label>
      <input type="text" id="model" name="model" value="{{old('model')}}">

      <label for="year">Year of Manufacture</label>
      <input type="number" id="year" name="year" value="{{old('year')}}" placeholder="Enter Manufacture Year">

      <label for="license">License Plate Number</label>
      <input type="text" id="license" name="license" value="{{old('license')}}" placeholder="Enter License Plate Number">

      <h2>Breakdown Details</h2>
      <label for="location">Current Location</label>
      <input type="text" id="location" name="location" value="{{old('location')}}" placeholder="Enter Location">

      <label for="description">Description of the Issue</label>
      <textarea id="description" name="description" rows="4" placeholder="Enter The Message"></textarea>

      <button type="submit">Register Breakdown</button>
    </form>
  </div>
