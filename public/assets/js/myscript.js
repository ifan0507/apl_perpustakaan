$(document).ready(function () {
    // flash category
    const flashData = $(".flash-data").data("flashdata");
    if (flashData) {
        Swal.fire({
            title: "Data Category",
            text: "Berhasil " + flashData,
            icon: "success",
        });
    }

    // Flash Buku
    const flashBuku = $(".flash-buku").data("flashdata");
    if (flashBuku) {
        Swal.fire({
            title: "Data Buku",
            text: "Berhasil " + flashBuku,
            icon: "success",
        });
    }

    $(".btn-hapus").on("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Apakah anda yaqin?",
            text: "data dihapus",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus Data!",
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest(".form-delete").submit();
            }
        });
    });
});
