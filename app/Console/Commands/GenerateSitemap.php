<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Gera o arquivo sitemap.xml para o site';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create(url('https://www.starttofinish.com.br/')))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap gerado com sucesso!');
    }
}
