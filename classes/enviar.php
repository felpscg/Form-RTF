<?php
/*
 * @author FELIPECORREAGOMES
 */
class enviar {
    
    private $arquivo;
    private $type = ".part";
    private $tam_max = 2000000;
    private $width = 1000;
    private $height = 171;
    private $novoName ;
    private $tipos = array("image/jpeg","image/jpg","image/png","image/png");
    private $destino = '';
    private $filename = 'img/';
    public $nomeImg;
    private $codificado;
    
    public function getCodificado() {
        return $this->codificado;
    }

    public function setCodificado($codificado) {
        $this->codificado = $codificado;
    }

    
    public function getNovoName() {
        return $this->novoName;
    }
    public function getNomeImg() {
        return $this->nomeImg;
    }

        
    public function getWidth() {
        return $this->width;
    }

    
    public function getHeight() {
        return $this->height;
    }

        
     public function getFilename() {
        return $this->filename;
    }
    
    public function getArquivo() {
        return $this->arquivo;
    }

    public function getType() {
        return $this->type;
    }

    public function getTam_max() {
        return $this->tam_max;
    }

    public function getTipos() {
        return $this->tipos;
    }

    
    public function getDestino() {
        return $this->destino;
    }
    ///////////////
    private function setTam_max($tam_max) {
        $this->tam_max = $tam_max;
    }
    ////////////////
    public function setTipos($tipos) {
        $this->tipos = $tipos;
    }

    public function setDestino($destino) {
        $this->destino = $this->destino.$destino;
    }

    /* ----- --- ---- - - - -  -- - - - - -*/
    
    
    


    
    //////////////////
   
    //novonome = "1000x171".novonome
    function localImg( $nomeImg) {
        $this->setNomeImg($nomeImg);
        ////////////////////////////////////////////////////
    }

    
    ////////////////////
    
    public function setNovoName($type) {
        
        $this->novoName = "-timbre-".rand(1, 20000)."teste".$type;
    }

        
    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }
    public function setFilename($filename) {
        $this->filename = $this->filename.$filename;
    }

    public function setNomeImg($nomeImg) {
        $this->nomeImg = $nomeImg;
    }
   
    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setType($type) {
       
    if($type== "image/png"){
        
         $this->type = ".png";
         
    }

    if($type == "image/jpg" || "image/jpeg"){
        
         $this->type = ".jpg";
         
    }
        
        
    }       
    
    
    
    
    
    
    
    
    
    
    
    function validaErro() {
    $arquivo=$_FILES['imgtimbre'];  
    $this->setArquivo($arquivo);
    $this->setType($arquivo);
     
    $tp = array("image/jpeg","image/jpg","image/png","image/png");
    $this->setTipos($tp);
    $this->setNovoName($this->getType());
    $this->setDestino($this->getNovoName());
    
        if($arquivo['error']!=0){
            switch($arquivo['error']){
                case UPLOAD_ERR_INI_SIZE:
                    echo "</br> <h2>O arquivo ultrapassa o limite</h2>";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "</br> <h2>O arquivo é muito grande";
                    break;
                case UPLOAD_ERR_PARTITIAL:
                    echo "</br> <h2>O upload não foi concluido";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "</br> <h2>Nenhum arquivo encontrado";
                    break;
                default:
                    echo "</br> <h2>Há algum tipo de problema ";
                break;
            }

            exit;
        }
    }
    

    function verificaArq() {
    $arquivo=$_FILES['imgtimbre'];
    $this->validaErro();
    if($arquivo['size']==0 or $arquivo['tmp_name']==NULL){
        echo"nenhum arquivo enviado";
    }
    elseif($arquivo['size']>$this->getTam_max()){
        echo "o arquivo muito grande";
    }
    elseif(array_search($arquivo['type'],  $this->getTipos())===FALSE){
        echo "tipo incorreto";
    }
    elseif(move_uploaded_file($arquivo['tmp_name'], "img/".$this->getDestino())){
        list($width_orig, $height_orig) = getimagesize("img/".$this->getNovoName());
        $image_p = imagecreatetruecolor($this->getWidth(), $this->getHeight());
        $image = imagecreatefromjpeg("img/".$this->getNovoName());
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $this->getWidth(), $this->getHeight(), $width_orig, $height_orig);
        //Salva a imagem em arquivo:
        imagejpeg($image_p, "img/"."1000X171".$this->getNovoName(), 70);

        $this->setNomeImg("img/"."1000X171".$this->getNovoName());


        $this->converter();



       }
   
   }
   
   function converter(){  
    $arq    = $this->getNomeImg();
    $data   = fopen($arq, 'r');
    $size   = filesize($arq);
    $contents= fread($data, $size);
    $this->setCodificado(bin2hex($contents));
    fclose ($data);
    return;
       
   }
}


