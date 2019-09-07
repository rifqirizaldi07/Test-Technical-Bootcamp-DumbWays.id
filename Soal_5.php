<?php
    $jumlahManusia = 6;
        function jabatTangan($jumlahManusia){
            $count_Handshake = 0;
            for($i = 0; $i < $jumlahManusia; $i++){
                for($j = 1; $j < $jumlahManusia; $j++){
                    $count_Handshake += 1;
                }
            }
            return $count_Handshake/2;
        }
        echo jabatTangan($jumlahManusia);
?>