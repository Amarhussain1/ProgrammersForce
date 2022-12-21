<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
   // protected $signature = 'Add:user{name},{email}';
   protected $signature = 'Add:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Please add a new user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->info("This is a successfull command!");
        // $this->warn("This is a warning message!");
        // $this->error("This is a error message!");
        // $this->line("This is a line!");
        // $user = User::factory()->create();
        // $this->info("$user->name Created successfull");
    //     try{
    //         $user = new user();
    //         $user->name = $this->argument("name");
    //         $user->email = $this->argument("email");
    //         $user->password = bcrypt("12345");
    //         $user->email_verified_at=now();
    //         $user->remember_token=Str::random(10);
    //         $user->save();
    //         $this->info("$user->name Created successfull");

    //     } catch (\Exception $e)
    //    {
       // $this->error($e->getMessage());

    //    }


            $name = $this->ask("please enter your name");
            $email = $this->ask("please enter your email");
            $password = $this->secret("please enter your password");
           if ($this->confirm("Do you want to comtinue?".true))
            {
                $user = new user();
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->email_verified_at=now();
            $user->remember_token=Str::random(10);
            $user->save();
            $this->info("$user->name Created successfull");
            }
            else
            {

           $this->warn("you canceled to create new user") ;

            }




        //     $n1 = $this->ask("please enter your firstvalue");
        //     $n2 = $this->ask("please enter your 2nd value");
        // $sum = $n1 + $n2;
        // echo "sum is :{{$sum}}";


    }
}
