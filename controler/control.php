<?php 

// KONEKSI KE-DBMS (Database)
$koneski = mysqli_connect("localhost", "root", "", "db_sekolah");

// fungsi tampilkan data 
function tampilData($tampil){

    global $koneski;

    $sql = mysqli_query($koneski, $tampil);
    $row = [];
    while($data = mysqli_fetch_assoc($sql)){

        $row[] = $data;
    }
    return $row;
}

// fungsi tambah data pegawai
function tambahData($data){

    global $koneski;
//  ambil dat adari form simpan kedalam variabel
    $nip = $data["nip"];
    $nama = $data["nama"];
    $nuptk = $data["nuptk"];
    $pangkat = $data["pangkat"];
    $status = $data["status"];
    $jk = $data["jk"];
    $tgl_lahir = $data["tgl_lahir"];
    $sekolah_induk = $data["sekolah_induk"];

// query kedatabase
$query = "INSERT INTO pegawai VALUES ('', '$nip', '$nama', '$nuptk', '$pangkat', '$status', '$jk', '$tgl_lahir', '$sekolah_induk') ";

mysqli_query($koneski,$query);
return mysqli_affected_rows($koneski);

}


// fungsi tambah data
function ubahData($data){
    
    global $koneski;
    //  ambil dat adari form simpan kedalam variabel
        $nip = $data["nip"];
        $nama = $data["nama"];
        $nuptk = $data["nuptk"];
        $pangkat = $data["pangkat"];
        $status = $data["status"];
        $jk = $data["jk"];
        $tgl_lahir = $data["tgl_lahir"];
        $sekolah_induk = $data["sekolah_induk"];
        $id = $data["id"];
    
    // query kedatabase
    $query = "UPDATE pegawai SET nip  = '$nip', 
                                 nama_pegawai = '$nama',
                                 nuptk = '$nuptk',
                                 pangkat = '$pangkat',
                                 status = '$status',
                                 jenis_kelamin = '$jk',
                                 tgl_lahir = '$tgl_lahir',
                                 sekolah_induk = '$sekolah_induk'

                                 WHERE id = $id ";
    
    mysqli_query($koneski,$query); 
    return mysqli_affected_rows($koneski);
    
    
}
function hapus($id){

    global $koneski;

    mysqli_query($koneski, "DELETE FROM pegawai WHERE id = $id");
    return mysqli_affected_rows($koneski);

}


// fungsi tambah data pangkat pegawai

function pangkatPegawai($data){

    global $koneski;

    // query data kepsek
    $nip_kepsek = $data["nip_kepsek"];
    $nama_keksep = $data["nama_kepsek"];
    // data ketua komite
    $nama_komite = $data["ketua_komite"];
    //  data kepala tata usaha
    $nip_ktu = $data["nip_ktu"];
    $nama_ktu = $data["nama_ktu"];
    //  data kesiswaan
    $nip_kesiswaan = $data["nip_kesiswaan"];
    $nama_kesiswaan = $data["nama_kesiswaan"];
    //  kurikulum
    $nip_kurikulum = $data["nip_kurikulum"];
    $nama_kurikulum = $data["nama_kurikulum"];
    //  kord_bp
    $nip_kord = $data["nip_kord_bp"];
    $nama_kord = $data["nama_kord_bp"];
    //  lab_ipa
    $nip_lab = $data["nip_lab_ipa"];
    $nama_lab = $data["nama_lab_ipa"];
    //  perpustakaan
    $nip_kelola_perpus = $data["nip_perpus"];
    $nama_kelola_perpus = $data["nama_perpus"];

    
   

    // 
   $kepsek =   mysqli_query($koneski, "INSERT INTO tb_kepsek VALUES ('', '$nip_kepsek', '$nama_keksep')");
   $komite =  mysqli_query($koneski, "INSERT INTO tb_komite VALUES ('', '$nama_komite')");
   $ktu =  mysqli_query($koneski, "INSERT INTO tb_tu VALUES ('', '$nip_ktu', '$nama_ktu')");
   $kesiswaan =  mysqli_query($koneski, "INSERT INTO tb_kesiswaan VALUES ('', '$nip_kesiswaan', '$nama_kesiswaan')");
   $kurikulum =  mysqli_query($koneski, "INSERT INTO tb_kurikulum VALUES ('', '$nip_kurikulum', '$nama_kurikulum')");
   $kord_bp =  mysqli_query($koneski, "INSERT INTO tb_bp VALUES ('', '$nip_kord', '$nama_kord')");
   $penegelola_lab_ipa =  mysqli_query($koneski, "INSERT INTO tb_kelola_lab VALUES ('', '$nip_lab', '$nama_lab')");
   $pengelola_perpustakaan =  mysqli_query($koneski, "INSERT INTO tb_kelola_perpus VALUES ('', '$nip_kelola_perpus', '$nama_kelola_perpus')");

    return mysqli_affected_rows($koneski);
    
}



?>