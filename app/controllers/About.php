<?php

class About extends Controller
{
    private string $judul = "About";
    public function index($nama = "Abil", $pekerjaan = "Web Developer", $umur = 20)
    {
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $data["judul"] = $this->judul;
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
    public function page()
    {
        $this->judul = "Page";
        $data["judul"] = $this->judul;
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}
