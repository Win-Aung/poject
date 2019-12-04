<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Admindata::class);
        $this->call(Admin_role::class);
        $this->call(Categories::class);
        // $this->call(Category_post::class);
        $this->call(Classes::class);
        $this->call(Croles::class);
        
        $this->call(Permessions::class);
        $this->call(Permession_role::class);
        $this->call(Roles::class);
        $this->call(Teacher::class);
        $this->call(User::class);
        // $this->call(Post::class);
    }
}
