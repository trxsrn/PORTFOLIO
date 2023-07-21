$(document).ready(function() {
    // AJAX request when the login form is submitted
    $('#loginForm').on('submit', function(event) {
      event.preventDefault();
      const formData = $(this).serialize();
      
      $.ajax({
        url: 'login_process.php', // Replace with your PHP script for handling login
        type: 'POST',
        data: formData,
        success: function(response) {
          // Assuming the server responds with a JSON object { success: true } on successful login
          const result = JSON.parse(response);
          if (result.success) {
            // Show the success toast
            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
              }
            });
  
            Toast.fire({
              icon: 'success',
              title: 'Signed in successfully'
            });
  
            // Redirect to another page or perform any other action upon successful login
            window.location.href = 'dashboard.php'; // Replace 'dashboard.php' with your desired destination
          } else {
            // Show an error message using SweetAlert2 or any other method
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Login failed. Please check your credentials!'
            });
          }
        },
        error: function() {
          // Show an error message using SweetAlert2 or any other method
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong! Please try again later.'
          });
        }
      });
    });
  });
  