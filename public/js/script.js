$(function () {
	$(".tampilModalTambah").on("click", function () {
		$("#judulModal").html("Tambah Data");
		$(".modal-footer button[type=submit]").html("Tambah");

		// untuk clear form field
		$("#nama").val("");
		$("#npm").val("");
		$("#email").val("");
		$("#jurusan").val("");
		$("#id").val("");

		let hrefAction = $(".modal-body form").attr("action");
		hrefAction = hrefAction.replace("ubah", "tambah");
		$(".modal-body form").attr("action", hrefAction);
	});
	$(".tampilModalUbah").on("click", function () {
		$("#judulModal").html("Ubah Data");
		$(".modal-footer button[type=submit]").html("Simpan");

		let hrefAction = $(".modal-body form").attr("action");
		hrefAction = hrefAction.replace("tambah", "ubah");
		$(".modal-body form").attr("action", hrefAction);

		const id = $(this).data("id");

		$.ajax({
			url: hrefAction.replace("ubah", "getubah"),
			data: { id: id },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#nama").val(data.nama);
				$("#npm").val(data.npm);
				$("#email").val(data.email);
				$("#jurusan").val(data.jurusan);
				$("#id").val(data.id);
			},
		});
	});
});
