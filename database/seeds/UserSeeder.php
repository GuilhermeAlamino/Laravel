<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'Guilherme',
            'email'=>'admin@gmail.com',
            'imagem'=>'https://logodix.com/logo/1931235.png',
            'password'=>bcrypt('123456'),
        ];

        if(User::where('email','=',$dados['email'])->count()){
            $user = User::where('email','=',$dados['email']);
            $user->update($dados);
            echo "Retornado user alterado";
        }else{
            User::create($dados);
            echo "Retornado user criado";
        }
    }
}
