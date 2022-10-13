<?php

class About {
    public function index($nama = 'Willi', $pekerjaan = 'Pentester')
    {
        echo 'Halo, nama saya $nama, saya adalah seorang $pekerjaan.';
    }

    public function page()
    {
        echo 'About/page';
    }
}