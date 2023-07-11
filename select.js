function selectSector(){
    var sector = document.getElementById("sector").value;
    var year = document.getElementById("year").value;

    $.ajax({
        url:"show.php",
        method:"POST",
        data:{
            sector: sector,
            year: year
        },
        success:function(data){
            $("#ans").html(data);
        }
    })
}
