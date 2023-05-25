<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            ['title' => 'The Impact of AI on Society','content' => 'As artificial intelligence continues to evolve, its transforming society in unprecedented ways. From the business world to healthcare, AI is driving innovation and efficiency. This article explores the ways AI is impacting our everyday lives, both the positive and potential negatives.','thumbnail_path' => 'https://techvidvan.com/tutorials/wp-content/uploads/sites/2/2020/05/How-AI-is-impacting-our-lives.jpg'],
            ['title' => 'Sustainable Living: A Guide','content' => 'Sustainability is more than just a buzzword; its a necessary shift in how we live and interact with the environment. In this guide, we will explore simple but effective steps to lead a more sustainable lifestyle, from reducing waste to making smarter choices in our consumption habits.','thumbnail_path' => 'https://theecohub.com/wp-content/uploads/2020/11/Sustainable-Development-Goals-what-is-sustainable-living-930x485.png'],
            ['title' => 'Exploring the Marvels of the Cosmos','content' => 'The universe is a grand tapestry of stars, galaxies, and cosmic phenomena. Join us as we explore the mysteries and marvels of the cosmos, from the birth of stars to the enigma of dark matter.','thumbnail_path' => 'https://thumbs.dreamstime.com/b/cosmos-outer-space-exploration-astronomy-science-equipment-collection-machinery-experiments-astronaut-rocket-184195077.jpg'],
            ['title' => 'The History of Cryptocurrency','content' => 'Cryptocurrency, once a fringe concept, is now a mainstream financial asset. This article delves into the history of cryptocurrency, exploring its origins, the rise of Bitcoin, and how the blockchain revolution has changed the face of finance.','thumbnail_path' => 'https://thumbs.dreamstime.com/b/evolution-money-vector-infographic-history-barter-to-digital-cryptocurrency-decentralized-finance-flat-illustration-242922909.jpg'],
            ['title' => 'Fitness in the Digital Age','content' => 'The digital age has transformed the fitness industry, with apps, online classes, and wearable tech. This article looks at these developments, how they have improved access to fitness resources, and how they can help you maintain a healthy lifestyle.','thumbnail_path' => 'https://www.intelivideo.com/wp-content/uploads/2022/01/Orange-and-Black-Photo-Fitness-Gym-Instagram-Post-2.png'],
            ['title' => 'The Renaissance of Renewable Energy','content' => 'Renewable energy is experiencing a resurgence, with advances in technology and increased awareness of climate change. This article provides an overview of the current state of renewable energy, the technologies involved, and the potential for a sustainable energy future.','thumbnail_path' => 'https://www.visualcapitalist.com/wp-content/uploads/2022/06/typess-of-renewable-energy.jpg'],
        ]);
    }
}
