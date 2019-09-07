<script>
	// fungsi menentukan kembalian
function kembalian($kembalian,$uang){
    for ($x=0; $x < count($uang) ; $x++) { 
        $y = 0;
        while($kembalian >= $uang[$x]){
            $kembalian = $kembalian-$uang[$x];
            $y++;
        }
        if($y>0){
            echo "<li>".ConfAngka($y)." lembar pecahan ".number_format($uang[$x],0,",",".")."</li>";
        }
    }
}
$uang = [50000,20000,10000,5000,2000,1000,500]; // list kembalian
$tunai = 50000; // uang tunai
$belanja = 15500; // total belanja
$kembalian = $tunai-$belanja; // menghitung kembalian

</script>
