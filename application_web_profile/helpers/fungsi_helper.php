<?php 

function _cekInArray($search, $array, $searchField)
{
    $result = [];
    foreach ($array as $a) {
        if ($search[$searchField] == $a[$searchField]) {
            $result[] = $a;
        }
    }
    return $result;
}

function getTanggal($tanggal)
{
    $tanggal = explode('-', $tanggal);
    $bulan = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $tanggal[1] = $bulan[intval($tanggal[1])];
    return implode(' ',array_reverse($tanggal));
}

function deleteEXP($target)
{   if(is_dir($target)){               
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK 
        foreach( $files as $file ) { 
            deleteEXP( $file ); 
        } 
        rmdir( $target ); 
    } elseif(is_file($target)){ 
        @unlink( $target ); 
    }
}