<?php

class Home extends Controller
{
    private string $judul = "Home";
    public function index()
    {
        $data["judul"] = $this->judul;
        $data["nama"] = $this->model("User_model")->getUser();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}
