$(document).ready(function() {
  // AJAX request when the login form is submitted
  $('#loginForm').on('submit', function(event) {
    event.preventDefault();
    const formData = $(this).serialize();

    $.ajax({
      url: 'php/login_process.php', // Replace with your PHP script for handling login
      type: 'POST',
      data: formData,
      dataType: 'json', // Specify that the expected response is JSON
      success: function(response) {
        console.log(response);
        if (response.success) {
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
          window.location.href = 'admin/dashboard.php'; // Replace 'dashboard.php' with your desired destination
        } else {
          // Show an error message using SweetAlert2 or any other method
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Login failed. Please check your credentials!'
          });
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText); // Log the server response for more details
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
