<?php

class mymodel_test extends TestCase{
    
    public function setUp(){
        $this->resetInstance();
        $this->CI =& get_instance();
	$this->CI->load->model('mymodel');
	$this->model = $this->CI->mymodel;
    }
    
    public function test_addnews(){
        $expected[0] = [
            'news_id' => '1000',
            'judul' =>'Gedung Dharmawanita',
            'deskripsi' => 'gedung dekat blok F',
            'image' => 'Dharma001'
            ];
        $this->model->addnews($expected[0]);
        $actual = $this->model->getDataGedung("where news_id = '1000'");
        $this->assertEquals($expected,$actual);
        
        $this->model->deleteGedung(1000);
        
    }
    
    public function test_getDataNews(){
        $expected[0] = [
            'news_id' => '1000',
            'judul' =>'Gedung Dharmawanita',
            'deskripsi' => 'gedung dekat blok F',
            'image' => 'Dharma001.jpg'
            ];
        $this->model->addnews($expected[0]);
        $actual = $this->model->getDataNews();
        $this->assertContains($expected[0], $actual);
        
        $this->model->deleteGedung(1000);
    }
    
    public function test_addUser(){
        $expected[0] = [
            'username' => 'admintest',
            'password' => 'admintest',
            'authentication' => '0',
            'passdek' => 'admintest'
            ];
        $this->model->addUser($expected[0]);
        $actual = $this->model->getUser("where username = 'admintest'");
        $this->assertEquals($expected,$actual);
        
        $this->model->deleteUser('admintest');
    }
    
}



