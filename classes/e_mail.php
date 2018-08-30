<?php

namespace classes;


 require "con_bd.php";


$t = new e_mail();
$t->teste($conexao);

class e_mail {
       
	private $email = "felipefelpgomes42@gmail.com";
	private $mens = null;
	private $assunt = null;

	/**
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getMens() {
		return $this->mens;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getAssunt() {
		return $this->assunt;
	}

	/**
	 *
	 * @param mixed $mens
	 */
	public function setMens($mens) {
		if ($mens != null && $mens != "")
			$this->mens = $mens;

		else
			exit ();
	}

	/**
	 *
	 * @param mixed $assunt
	 */
	public function setAssunt($assunt) {
		if ($assunt != null && $assunt != ""){
			$this->assunt = $assunt;
                }
		else{
			exit ();
                }
	}
	public function teste($con) {
	    
           
		
			foreach ( $_POST as $nome_campo => $valor ) {
				$comando = "\$" . $nome_campo . "='" . $valor . "';";
				// echo $comando;
				eval ( $comando );
			}
			
			$this->setAssunt($assunt);
			$this->setMens($mens);
                        $sql ='INSERT INTO bd_estagio.mens (mens.assunto,mens.corpo) VALUES (\''.$this->getAssunt().','.$this->getMens().'\');';
			//mail($this->getEmail(), $this->getAssunt(), $this->getMens());
			mysqli_query($con,$sql);
			echo "<h2>Mensagem enviada com sucesso</h2>";
			echo $this->getEmail(), $this->getAssunt(), $this->getMens();
                        //echo mysqli_error()."<br><br>".$sql;
                        
                        
			
		
	}
}

