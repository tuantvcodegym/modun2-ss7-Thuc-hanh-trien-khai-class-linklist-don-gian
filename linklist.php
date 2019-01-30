<?php
include_once 'note.php';
class linklist{
    //lien ket den node dau tien trong danh sach.
    private $firstNode;
    //lien ket den node cuoi cung trong danh sach.
    private $lastNode;
    //tong so node trong danh sach.
    private $count;
    public function __construct(){
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    // them mot node vao dau dang sach.
    public function insertFirst($data){
        $link = new Note($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == null){
            $this->lastNode = $link;
            $this->count ++;
        }
    }
    public function insertLast($data){
        if($this->firstNode !=null){
            $link = new Note($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        }else{
            $this->insertLast($data);
        }
    }
    // tao phuong thuc lay ra so luong note.
    public function totalNode(){
        return $this->count;
    }
    // tao phuong thuc doc ra danh sach.
    public function readList(){
        $listData = array();
        $current = $this->firstNode;
        while ($current != null){
            array_push($listDat, $current->readNode ());
            $current = $current->next;
        }
        return $listData;
    }
}
?>