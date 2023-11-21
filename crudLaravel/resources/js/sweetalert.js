document.getElementById('create').addEventListener('click', (e) => {
  // e.preventDefault();
  Swal.fire({
    title: 'Creando Usuario',
    icon: 'success'
  });
});
document.getElementById('delete').addEventListener('click', () => {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      // Submit the form
      document.getElementById('delete').submit();
    }
  });
});