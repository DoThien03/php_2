<?php

class ConNguoi
{
    public $chan;
    public $tay;
    public $mat;
    public $mui;

    public function __construct($chan, $tay, $mat, $mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }
    public function setChan($chan)
    {
        $this->chan = $chan;
    }
    public function setTay($tay)
    {
        $this->tay = $tay;
    }
    public function setMat($mat)
    {
        $this->mat = $mat;
    }
    public function setMui($mui)
    {
        $this->mui = $mui;
    }
    public function an()
    {
        echo "ăn bằng mõm";
    }
}

class NguoiLon extends ConNguoi
{

    public $longNach;

    //goi hàm khỏi tạo của thăng fcha xuống
    public function __construct($chan, $tay, $longNach, $mat, $mui)
    {
        parent::__construct($chan, $tay, $longNach, $mat, $mui);
        $this->longNach = $longNach;
    }


    public function di()
    {
        echo "Người lớn đi bằng " . $this->chan . " Chân và có  " . $this->tay . " tay" . ". Và có " . $this->longNach . " Lông nách "  . "<br>";
    }

    public function noi()
    {
    }
}

class TreCon extends ConNguoi
{

    public function bo()
    {
        echo "Trẻ con bò bằng " . $this->chan . " Chân và có  " . $this->tay . " tay";
    }
}

$nn = new NguoiLon(2, 3, 99999, 1, 1); //khởi tạo đối tượng người lớn

$nn->di();

$nn = new TreCon(3, 4, 1, 1); //khởi tạo đối tượng trẻ con

$nn->bo();
