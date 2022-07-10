<?php

class Home extends Controller
{
    private string $judul = "Home";
    public function index()
    {
        $data["judul"] = $this->judul;
        $this->view("templates/header", $data);
        $this->view("home/index");
        $this->view("templates/footer");
    }
}
