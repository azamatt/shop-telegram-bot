<?php


use App\Services\CategoryService;

class CategoryServiceTest extends TestCase
{
    
    public function setUp()
    {
        parent :: setUp();

        $this->service = new \App\Services\CategoryService(app(Client::class));
    }

    public function test_all()
    {

        $result = $this->service->all();

        dd($result);

    }

}
