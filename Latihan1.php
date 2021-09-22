<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang .. selamat belajar Web Programming";
        //$this->load->view('view-Latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Latihan2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Latihan2->jumlah($n1, $n2);

        $this->load->view('Latihan3' , $data);
    }
}