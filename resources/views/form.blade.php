<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Appaly</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon"> <!--Title image-->


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">


    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <section id="appointment" class="appointment section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Persnol Information</h2>
                <!-- <p>Persnol Information</p> -->
            </div>

            <form action="{{route('store1_for_user')}}" method="get" role="form" class="php-email-form" id="myForm">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="text" name="employeeID" class="form-control datepicker" id="EmployeeID"
                            placeholder="Employee ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                            required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <input type="text" name="position" class="form-control datepicker" id="position"
                            placeholder="Enter ypur position" data-rule="minlen:4"
                            data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select" required>
                            <option value="">Select Department</option>
                            <option value="Department 1">Department 1</option>
                            <option value="Department 2">Department 2</option>
                            <option value="Department 3">Department 3</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div><br><br>
                <div class="section-title">
                    <h2>Loan Details</h2>
                    <!-- <p>Loan Details</p> -->
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="loanAmount" class="form-control" id="LoanAmount"
                            placeholder="Loan Amount" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                            required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="text" name="loanPurpose" class="form-control datepicker" id="LoanPurpose"
                            placeholder="Loan Purpose" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                            required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <select name="repayment" id="Repayment_time" class="form-select" required>
                            <option value="">Select Repayment Term</option>
                            <option value="12">12 months</option>
                            <option value="24">24 months</option>
                            <option value="36">36 months</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="date" class="form-control" name="date" id="date" placeholder="" data-rule="date"
                            data-msg="Please enter a valid email" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <input type="text" class="form-control" name="repayment_amount_per_month" id="text" placeholder="5000"
                            data-rule="date" data-msg="Please enter a valid email" readonly>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <input type="number" class="form-control" name="salary" id="salary" placeholder="Salary"
                            data-rule="date" data-msg="Please enter a valid email" required>
                        <div class="validate"></div>
                    </div>
                </div><br>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your loan request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Make a loan request</button></div>
            </form>
            <div id="confirmationMessage"></div>

        </div>
    </section><!-- End Appointment Section -->
    {{-- <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    
    // Reset the form
    this.reset();
    
    // Display confirmation message
    var confirmationMessage = document.getElementById("confirmationMessage");
    confirmationMessage.style.display = "block";
    confirmationMessage.textContent = "Your request has been submitted!";
    
    // Hide the confirmation message after a certain duration (optional)
    setTimeout(function() {
        confirmationMessage.style.display = "none";
    }, 3000); // Display for 3 seconds
});
    
    </script> --}}

</body>

</html>