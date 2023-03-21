<style>
     /* Style for the sidebar */
     .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .sidebar ul li a {
            display: block;
            color: #fff;
            padding: 10px 0;
            text-decoration: none;
            border-bottom: 1px solid #fff;
        }

        .sidebar ul li a:hover {
            background-color: #495057;
        }
</style>

 <!-- Sidebar -->
 <div class="sidebar">
    <ul>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('employee.page')}}">Employee</a></li>
        <li><a href="{{route('dashboard.logout')}}">Log Out</a></li>
    </ul>
</div>
  