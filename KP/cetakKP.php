<?php

    $nosurat = 1;
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    
    // membaca data dari form
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
    while( $nosurat <= 1000){
        // membaca isi dokumen tempate surat.rtf
        // isi dokumen dinyatakan dalam bentuk string
        
        $document = file_get_contents("cth KP.rtf");
        
        $document = str_replace("#NOSURAT", $nosurat, $document);
        $document = str_replace("#NOJRSAN", $nojrsan, $document);
        $document = str_replace("#NAMA", $nama, $document);
        $document = str_replace("#NIM", $nim, $document);
        $document = str_replace("#JURUSAN", $jurusan, $document);
        $document = str_replace("#ALAMAT", $alamat, $document);
        
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=suratkkp.doc");
        header("Content-length: ".strlen($document));
        echo $document;
        $nosurat++;
    }
    
 
?>
