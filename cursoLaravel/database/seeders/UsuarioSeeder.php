<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'gesse',
            'email' => 'gesse-fm@homail.com',
            'password' => bcrypt('123456'),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $user = User::where('email', '=', $dados['email'])
                ->first();
            $user->update($dados);
            echo "Usuario atualizado";
        } else {
            User::create($dados);
            echo "Usuario Cadastrado";
        }
    }
}
