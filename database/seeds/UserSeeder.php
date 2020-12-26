<?php

use App\Master;
use App\MasterPoint;
use App\Portfolio;
use App\User;
use App\Admin;
use App\CategoryNails;
use App\NailsJobs;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = new Portfolio();
        $portfolio->login_instagram = 'login_instagram';
        $portfolio->description = 'description';
        $portfolio->save();

        $master = new Master();
        $master->portfolio_id = $portfolio->id;
        $master->image = 'public/images/master/manikyur_ombre.png';
        $master->confirmation = 1;
        $master->save();

        $admin = new Admin();
        $admin->save();

        $user = new User();
        $user->email = "admin@admin";
        $user->password = bcrypt("123");
        $user->name = "Бокарев";
        $user->surname = "Стефан";
        $user->admin_id = $admin->id;
        $user->master_id = $master->id;
        $user->lastname = "Динисович";
        $user->phone_number = "+79264785354";
        $user->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Лучшие ноготки (Стефан попросил)';
        $masterPoint->latitude = 47.61733;
        $masterPoint->longitude = -122.1315288;
        $masterPoint->status = 1;
        $masterPoint->address = "Жуковский, улица Новых";
        $masterPoint->description = 'Выбирай нас';
        $masterPoint->image = 'public/images/master/manikyur_ombre.png';
        $masterPoint->save();

        $category_nail = new CategoryNails();
        $category_nail->name = 'Длинные';
        $category_nail->save();

        $nails_job = new NailsJobs();
        $nails_job->price = 400000;
        $nails_job->image = 'public/images/master/manikyur_ombre.png';
        $nails_job->name = 'Длинные';
        $nails_job->description = 'Чёрные, красивые ногти';
        $nails_job->category_nail_id = $category_nail->id;
        $nails_job->master_point_id = $masterPoint->id;
        $nails_job->save();

        $category_nail = new CategoryNails();
        $category_nail->name = 'Короткие';
        $category_nail->save();



        $portfolio = new Portfolio();
        $portfolio->login_instagram = 'antonNoInstagram';
        $portfolio->description = 'Стаж работы овер 100лет';
        $portfolio->save();

        $master = new Master();
        $master->image = 'public/images/master/manikyur_ombre.png';
        $master->portfolio_id = $portfolio->id;
        $master->confirmation = 1;
        $master->save();

        $user = new User();
        $user->email = "admin1@admin";
        $user->password = bcrypt("123");
        $user->name = "Антон";
        $user->surname = "Игнатьев";
        $user->master_id = $master->id;
        $user->lastname = "Александрович";
        $user->phone_number = "+79256785354";
        $user->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Не самые лучшие, но сойдёт';
        $masterPoint->latitude = 49.61733;
        $masterPoint->longitude = -120.1315288;
        $masterPoint->status = 1;
        $masterPoint->address = "Москва, улица Новых черёмушков";
        $masterPoint->description = 'Выбирай нас';
        $masterPoint->image = 'public/images/master/manikyur_ombre.png';
        $masterPoint->save();

        $nails_job = new NailsJobs();
        $nails_job->price = 2340000;
        $nails_job->name = 'Коротки';
        $nails_job->image = 'public/images/master/manikyur_ombre.png';
        $nails_job->description = 'Для детишек';
        $nails_job->category_nail_id = $category_nail->id;
        $nails_job->master_point_id = $masterPoint->id;
        $nails_job->save();

        $nails_job = new NailsJobs();
        $nails_job->price = 2340000;
        $nails_job->name = 'Коротки';
        $nails_job->image = 'public/images/master/manikyur_ombre.png';
        $nails_job->description = 'Для детишек';
        $nails_job->category_nail_id = $category_nail->id;
        $nails_job->master_point_id = $masterPoint->id;
        $nails_job->save();

        $nails_job = new NailsJobs();
        $nails_job->price = 2340000;
        $nails_job->name = 'Коротки';
        $nails_job->image = 'public/images/master/manikyur_ombre.png';
        $nails_job->description = 'Для детишек';
        $nails_job->category_nail_id = $category_nail->id;
        $nails_job->master_point_id = $masterPoint->id;
        $nails_job->save();

    }
}
