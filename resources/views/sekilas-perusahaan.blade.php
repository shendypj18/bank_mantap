<style type="text/css" >
 @media (min-width: 480px) and (max-width: 678px) {
   .btn-unduh {
       width:50%;
       background-size: 0%;
       margin-left: 20%;
    }

 }
 @media(min-width: 679px) {
     .btn-unduh {
         margin-left: 15%;
     }
 }

</style>

<div class="mx-auto mt-5"><p><a class="btn btn-unduh"  href="{{url('storage/' .$profil_lengkap->nama_file)}}" target="_blank">{{__('admin.download_sekilas_perusahaan')}}</a></p></div>
