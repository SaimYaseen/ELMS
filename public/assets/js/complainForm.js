
        // JavaScript to handle form submission and display messages
        document.getElementById("my_form1").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            // Display the loading message while the form is being submitted
            document.querySelector(".loading").style.display = "block";
    
            // Simulate a delay (you can remove this in production)
            setTimeout(function() {
                // Hide the loading message
                document.querySelector(".loading").style.display = "none";
    
                // Check if the form submission was successful (you can modify this logic)
                var submissionSuccessful = true; // Set to true if the submission was successful
    
                if (submissionSuccessful) {
                    // Display the success message
                    document.querySelector(".sent-message").style.display = "block";
                } else {
                    // Display the error message
                    document.querySelector(".error-message").style.display = "block";
                }
            }, 2000); // Simulated 2-second delay (adjust as needed)
        });
   