<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Cache;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Set base url for sitemap
        $baseUrl = 'https://hrbee.mkrdev.xyz';

        // Create a new sitemap instance
        $sitemap = Sitemap::create();

        // Add static routes
        $sitemap->add(Url::create($baseUrl . '/')
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8))
                ->add(Url::create($baseUrl . '/#pricing')
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8))
                ->add(Url::create($baseUrl . '/contact-us')
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8));

        // Retrieve subscription plans from cache
        $monthlySubscriptionPlan = Cache::get('monthly_subscription_plan');
        $yearlySubscriptionPlan = Cache::get('yearly_subscription_plan');

        // Add monthly subscription plan to the sitemap
        if ($monthlySubscriptionPlan) {
            $sitemap->add(Url::create($baseUrl . '/company-register?subscription-plan-slug=' . $monthlySubscriptionPlan['slug'] . '&plan-type=' . $monthlySubscriptionPlan['plan_type'])
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8));
        }

        // Add yearly subscription plan to the sitemap
        if ($yearlySubscriptionPlan) {
            $sitemap->add(Url::create($baseUrl . '/company-register?subscription-plan-slug=' . $yearlySubscriptionPlan['slug'] . '&plan-type=' . $yearlySubscriptionPlan['plan_type'])
                    ->setLastModificationDate(now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8));
        } 
        
        else {
            $this->warn('No subscription plans found in cache.');
        }

        // Save the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
