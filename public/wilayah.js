$('#province').change(function(){
    var id = $(this).val();    
    if(id){
        $.ajax({
           type:"GET",
           url:"/getReg_regencies?id="+id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#regencies").empty();
                $("#districts").empty();
                $("#villages").empty();
                $("#regencies").append('<option>---Pilih Kabupaten---</option>');
                $("#districs").append('<option>---Pilih Kecamatan---</option>');
                $("#villages").append('<option>---Pilih Kelurahan---</option>');
                $.each(res,function(name,id){
                    $("#regencies").append('<option value="'+id+'">'+name+'</option>');
                });
            }else{
                $("#regencies").empty(); 
                $("#districts").empty();
                $("#villages").empty();
            }
           }
        });
    }else{
        $("#regencies").empty();
        $("#districts").empty();
        $("#villages").empty();
    }      
   });

   $('#regencies').change(function(){
    var regency_id = $(this).val();    
    if(regency_id){
        $.ajax({
           type:"GET",
           url:"/getReg_district?regency_id="+regency_id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#districts").empty();
                $("#villages").empty();
                $("#districs").append('<option>---Pilih Kecamatan---</option>');
                $("#villages").append('<option>---Pilih Kelurahan---</option>');
                $.each(res,function(name,regency_id){
                    $("#districts").append('<option value="'+regency_id+'">'+name+'</option>');
                });
            }else{
                $("#districts").empty();
                $("#villages").empty();
            }
           }
        });
    }else{
        $("#districts").empty();
        $("#villages").empty();
    }      
   });
 
   $('#districts').change(function(){
    var district_id = $(this).val();    
    if(district_id){
        $.ajax({
           type:"GET",
           url:"getReg_villages?district_id="+district_id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#villages").empty();
                $("#villages").append('<option>---Pilih Kelurahan---</option>');
                $.each(res,function(name,district_id){
                    $("#villages").append('<option value="'+district_id+'">'+name+'</option>');
                });
            }else{
               $("villages").empty();
            }
           }
        });
    }else{
        $("villages").empty();
    }      
   });