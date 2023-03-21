<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .main-div {
            margin-left: 350px;
        }
    </style>
</head>

<body>
    <x-sidebar />
    <div class="main-div">
        <br>
        <h3>Add your Employee Details</h3>
        <br>
        <div>
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Employee Details </button>
        </div>
        <br>
        <div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="width: max-content;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{route('employee.submit')}}" method="POST" >
                            @csrf
                        <div class="modal-body" style="width:100%">
                            <div class="input-group">
                                <span class="input-group-text">First and last name</span>
                                <input type="text" aria-label="First name" class="form-control">
                                <input type="text" aria-label="Last name" class="form-control">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Your Email Address">
                            </div>
                            <div class="mb-3">
                                <label for="date-input class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control" id="date-input" name="date-input">
                            </div>
                            <div class="mb-3">
                                <label for="mobile-number-input">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile-number-input"
                                    name="mobile-number-input" placeholder="Enter mobile number">
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Residential Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Permanent Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="gender-select">Gender</label>
                                <select class="form-control" id="gender-select" name="gender-select">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marital-status-select">Marital Status</label>
                                <select class="form-control" id="marital-status-select" name="marital-status-select">
                                    <option value="">Select Marital Status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nationality-select">Nationality</label>
                                <select class="form-control" id="nationality-select" name="nationality-select">
                                    <option value="">Select Nationality</option>
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="UK">UK</option>
                                    <option value="Japan">Japan</option>
                                    <option value="China">China</option>
                                    <option value="India">India</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date-input">Joining Date</label>
                                <input type="date" class="form-control" id="date-input" name="joining-date">
                            </div>
                            <div class="mb-3">
                                <label for="text-input">Job Title</label>
                                <input type="text" class="form-control" id="text-input" name="text-input"
                                    placeholder="Enter your job title">
                            </div>
                            <div class="mb-3">
                                <label for="text-input">Department</label>
                                <input type="text" class="form-control" id="text-input" name="text-input"
                                    placeholder="Enter your department name">
                            </div>
                            <div class="mb-3">
                                <label for="text-input">Supervisor Name</label>
                                <input type="text" class="form-control" id="text-input" name="text-input"
                                    placeholder="Enter your supervisor name">
                            </div>
                            <div class="mb-3">
                                <label for="mobile-number-input">Emergency Contact</label>
                                <input type="tel" class="form-control" id="mobile-number-input"
                                    name="mobile-number-input" placeholder="Enter your emergency contact">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add Employee</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Employee Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                <tr>
                    @foreach ($employee_details as $item)
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->mobile_number }}</td>
                        <td>
                            <button type="button" class="btn btn-secondary">
                                <i class="fas fa-eye"></i> View
                            </button>

                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>

                        </td>
                    @endforeach


                </tr>


            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
