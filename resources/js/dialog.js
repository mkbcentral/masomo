import Swal from 'sweetalert2'
//SHOW DELETE SECTOR DIALOG
window.addEventListener('show-delete-confirmation-sector',event=>{
    Swal.fire({
        title: 'Are-you sure ',
        text: "To delete sector ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteSectorListener');
        }
        })
})
window.addEventListener('data-deleted',event=>{
    Swal.fire(
        'Oprétion !',
        event.detail.message,
        'success'
    );
});
//SHOW DELETE OPTION DIALOG
window.addEventListener('show-delete-confirmation-option',event=>{
    Swal.fire({
        title: 'Are-you sure ',
        text: "To delete option ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteOptionListener');
        }
        })
})
window.addEventListener('data-deleted',event=>{
    Swal.fire(
        'Oprétion !',
        event.detail.message,
        'success'
    );
});
//SHOW DELETE OPTION DIALOG
window.addEventListener('show-delete-confirmation-teacher',event=>{
    Swal.fire({
        title: 'Are-you sure ',
        text: "To delete teacher ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteTeacherListener');
        }
        })
})
window.addEventListener('data-deleted',event=>{
    Swal.fire(
        'Oprétion !',
        event.detail.message,
        'success'
    );
});
