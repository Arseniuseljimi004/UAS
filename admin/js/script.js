$(document).ready(function(){
$('#keyword').on('keyup',function(){
	
	$('.table-responsive').load('module/keluar/ajax.php?keyword=' + $('#keyword').val());
	})
$('#jenis_kendaraan').on('change',function(){
	$('.table-responsive').load('module/laporan/ajax.php?jeniskendaraan=' + $('#jenis_kendaraan').val());
	})
})

$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});