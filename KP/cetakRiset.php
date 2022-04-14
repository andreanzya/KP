<?php

    $nosurat = 1;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $judul = $_POST['judul'];

    if($jurusan == 'Jurnalistik'){
        $nojrsan = 'JUR';
    }elseif($jurusan == 'Komunikasi Marketing'){
        $nojrsan = 'MK';
    }elseif($jurusan == 'Broadcasting'){
        $nojrsan = 'BC';
    }elseif($jurusan == 'Hubungan Masyarakat'){
        $nojrsan = 'PR';
    }else{
        $nojrsan = 'error';
    }
    // membaca data dari form
    while( $nosurat <= 1000){
        // membaca isi dokumen tempate surat.rtf
        // isi dokumen dinyatakan dalam bentuk string
        
        $document = file_get_contents("cth riset.rtf");
        
        $document = str_replace("#NOSURAT", $nosurat, $document);
        $document = str_replace("#NOJRSAN", $nojrsan, $document);
        $document = str_replace("#NAMA", $nama, $document);
        $document = str_replace("#NIM", $nim, $document);
        $document = str_replace("#JURUSAN", $jurusan, $document);
        $document = str_replace("#ALAMAT", $alamat, $document);
        $document = str_replace("#JUDUL", $judul, $document);
        
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=suratriset.doc");
        header("Content-length: ".strlen($document));
        echo $document;
        $nosurat++;
    }
    
 
?>