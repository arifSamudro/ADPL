<?php

class MyControllerAdmin_test extends TestCase
{
    public function setUp(){
        $this->resetInstance();
    }
    
    public function test_adminlogin(){
        $output = $this->request('GET','MyControllerAdmin/adminlogin');
        $this->assertContains('<a href="#"><b>Login Administrator</b></a>', $output);
    }
    
    public function test_login_masuk(){
        $this->request('POST','MyControllerAdmin/login',[
                'username' => 'superadmin',
                'password' => 'admin12345',
            ]);
        $this->assertRedirect('/home');
        $this->assertEquals('SuperAdmin', $_SESSION['username']);
        
    }
    
    public function test_login_nopass(){
        $output = $this->request('POST','MyControllerAdmin/login',[
                'username' => 'superadmin',
                'password' => '',
            ]);
        $this->assertContains('<a href="#"><b>Login Administrator</b></a>', $output);
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_login_nouser(){
        $output = $this->request('POST','MyControllerAdmin/login',[
                'username' => '',
                'password' => 'admin12345',
            ]);
        $this->assertContains('<a href="#"><b>Login Administrator</b></a>', $output);
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_login_mismatch(){
        $output = $this->request('POST','MyControllerAdmin/login',[
                'username' => 'superadmin',
                'password' => 'samudro',
            ]);
        $this->assertContains('<a href="#"><b>Login Administrator</b></a>', $output);
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_login_nofill(){
        $output = $this->request('POST','MyControllerAdmin/login',[
                'username' => '',
                'password' => '',
            ]);
        $this->assertContains('<a href="#"><b>Login Administrator</b></a>', $output);
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_encript(){
        $_POST['password'] = 'abc';
        $controller = $this->newController('MyControllerAdmin');
        $actual = $controller->encript();
        //$input = $this->request('POST','MyControllerAdmin/encript',['password'=>'abc']);
        $this->assertEquals($actual,'YWJP5');
    }
            
}