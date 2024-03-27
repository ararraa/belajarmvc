<?php

class About
{
    public function index ()
    {
        echo "Anda Masuk Class About dan Methode Index";
    }

    public function page ($name = 'Rara', $pekerjaan = 'Programmer')
    {
        echo "Halo, nama saya $name, saya adalah seorang $pekerjaan";
    }
}