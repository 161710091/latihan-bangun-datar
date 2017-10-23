<?php

	class persegi {
		public $s;

		function set_nilai($sisi){
			$this->s = $sisi;
		}

		function get_nilailuas(){
			return $this->s * 2;
		}

		function get_nilaikeliling(){
			return $this->s * 4;
		}
	}

	class persegi_panjang {
		public $p, $l;

		function set_nilai($panjang, $lebar){
			$this->p = $panjang;
			$this->l = $lebar;
		}

		function get_nilailuas(){
			return $this->p * $this->l;
		}

		function get_nilaikeliling(){
			return $this->p + $this->l;
		}
	}

	class segitiga {
		public $a, $t;

		function set_nilai($alas, $tinggi){
			$this->a = $alas;
			$this->t = $tinggi;
		}

		function get_nilai(){
			return $this->a * $this->t / 2;
		}
	}

	$persegi1 = new persegi;
	$persegi1->set_nilai(4);			
	echo "Luas Persegi : ".$persegi1->get_nilailuas().'<br>';
	echo "Keliling Persegi : ".$persegi1->get_nilaikeliling().'<br>'.'<br>';

	$persegi_panjang2 = new persegi_panjang;
	$persegi_panjang2->set_nilai(4,6);
	echo "Luas Persegi Panjang : ".$persegi_panjang2->get_nilailuas().'<br>';
	echo "Keliling Persegi Panjang : ".$persegi_panjang2->get_nilaikeliling().'<br>'.'<br>';

	$luas3 = new segitiga;
	$luas3->set_nilai(4,6);
	echo "Luas Segitiga : ".$luas3->get_nilai();

?>